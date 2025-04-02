<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$id = $nv_Request->get_int('id', 'get', 0);

if ($id > 0) {
    $sql = 'DELETE FROM `' . NV_PREFIXLANG . '_' . $module_data . '_customers` WHERE id=:id';
    $sth = $db->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);

    if ($sth->execute()) {
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_NAME_VARIABLE . '=' . $module_name);
    } else {
        die('Lỗi khi xóa dữ liệu!');
    }
} else {
    die('ID không hợp lệ!');
}