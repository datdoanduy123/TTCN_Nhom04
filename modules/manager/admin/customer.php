<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$page_title = $nv_Lang->getModule('list_customer');

$array = [];
// Xử lý yêu cầu xóa khách hàng
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $delete_id = (int)$_GET['delete'];
    $db->query('DELETE FROM ' . NV_PREFIXLANG . '_manager_customers WHERE id=' . $delete_id);
    header('Location: ' . NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=list_customer');
    exit();
}

// Truy vấn cơ sở dữ liệu để lấy danh sách khách hàng
$query = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_manager_customers');

while ($row = $query->fetch()) {
    $row['url_edit_customer'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=edit_customer&id=' . $row['id'];

    $row['url_delete_customer'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=delete_customer&id=' . $row['id'];

    $array[$row['id']] = $row;
}

$xtpl = new XTemplate('list_customer.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
$xtpl->assign('create_url', NV_BASE_ADMINURL . 'index.php?' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=create_customer');

if (!empty($array)) {
    foreach ($array as $value) {
        $xtpl->assign('ROW', $value);
        $xtpl->parse('main.loop');
    }
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
