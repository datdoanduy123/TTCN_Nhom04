<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */
global $db, $module_data;

global $db, $module_data;

if (!defined('NV_IS_MOD_MANAGER')) {
    exit('Stop!!!');
}

$search = isset($_GET['search']) ? trim($_GET['search']) : '';

$array = [];
$sql = 'SELECT 
            p.id, 
            p.name, 
            p.price, 
            p.quantity, 
            p.image,
            p.description, 
            c.name AS category_name 
        FROM ' . NV_PREFIXLANG . '_' . $module_data . '_products p 
        LEFT JOIN ' . NV_PREFIXLANG . '_' . $module_data . '_categories c 
        ON p.category_id = c.id';

if (!empty($search)) {
    $sql .= " WHERE p.name LIKE :search";
}

$sql .= ' ORDER BY p.id DESC';

$query = $db->prepare($sql);

if (!empty($search)) {
    $query->bindValue(':search', "%$search%", PDO::PARAM_STR);
}

$query->execute();

while ($row = $query->fetch()) {
    $array[$row['id']] = $row;
}

// Truyền dữ liệu tìm kiếm vào template
$contents = nv_manager_list($array, $search);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
