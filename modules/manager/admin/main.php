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
$page_title = $nv_Lang->getModule('list');
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
        ON p.category_id = c.id 
        ORDER BY p.id DESC';

 $_rows = $db->query($sql)->fetchAll();
 $num = count($_rows);
 
 
$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
if ($num) {
    // Hiện bảng dữ liệu
    foreach ($_rows as $row) {
        
        $row['edit_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=edit&amp;id=' . $row['id'];
        $row['delete_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=delete&amp;id=' . $row['id'];
        $create_url = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=create';

        $xtpl->assign('CREATE_URL', $create_url);
                
        $xtpl->assign('ROW', $row);
        $xtpl->parse('main.loop');
    }
    $xtpl->parse('main');
    $contents = $xtpl->text('main');
} else {
    // Hiện thông báo chưa có dữ liệu
    $xtpl->parse('main');
    $contents = $xtpl->text('main');
}

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';