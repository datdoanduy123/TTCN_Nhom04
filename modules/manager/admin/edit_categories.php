<?php

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$page_title = $nv_Lang->getModule('edit_categories');

$id = $nv_Request->get_int('id', 'get', 0);
if ($id < 1) {
    die('Lỗi: ID không hợp lệ!');
}

// Lấy dữ liệu khách hàng theo ID
$query = $db->prepare('SELECT * FROM ' . NV_PREFIXLANG . '_manager_categories WHERE id = :id');
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();
$customer = $query->fetch();

if (!$customer) {
    die('Lỗi: Khách hàng không tồn tại!');
}

// Xử lý khi người dùng gửi form cập nhật
if ($nv_Request->isset_request('submit_edit', 'post')) {
    $name = $nv_Request->get_title('name', 'post', '', 255);
    $description = $nv_Request->get_title('description', 'post', '', 255);

    if (empty($name)) {
        die('Lỗi: Tên không được để trống.');
    }

    // Cập nhật dữ liệu khách hàng
    $sql = "UPDATE " . NV_PREFIXLANG . "_manager_categories
            SET name = :name, description = :description WHERE id = :id";
    
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=categories');
        } else {
            throw new Exception('Lỗi khi cập nhật thông tin danh muc');
        }
    } catch (Exception $e) {
        die('Lỗi database: ' . $e->getMessage());
    }
}

// Load giao diện
$xtpl = new XTemplate('edit_categories.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('CUSTOMER', $customer);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';