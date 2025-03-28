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

$id = $nv_Request->get_int('id', 'get', 0); // Lấy id từ request GET

if ($nv_Request->isset_request('submit1', 'post')) {
    $name = $nv_Request->get_title('name', 'post', '', 250);
    $price = $nv_Request->get_int('price', 'post', 0);
    $quantity = $nv_Request->get_int('quantity', 'post', 0);
    $image = $nv_Request->get_title('image', 'post', '', 250);
    $category_id = $nv_Request->get_int('category_id', 'post', 0);

    // Kiểm tra category_id có tồn tại trong bảng categories không
    $check_sql = 'SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $module_data . '_categories WHERE id = :category_id';
    $check_stmt = $db->prepare($check_sql);
    $check_stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    $check_stmt->execute();
    
    if ($check_stmt->fetchColumn() == 0) {
        die('Lỗi: Danh mục không hợp lệ.');
    }

    $sql = "UPDATE " . NV_PREFIXLANG . "_" . $module_data . "_products 
            SET name = :name, 
                price = :price, 
                quantity = :quantity, 
                image = :image, 
                category_id = :category_id 
            WHERE id = :id";

    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_INT);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            nv_redirect_location(NV_BASE_ADMINURL . 'index.php?module=' . $module_data . '&op=main');
        } else {
            throw new Exception('Lỗi khi cập nhật dữ liệu.');
        }
    } catch (Exception $e) {
        die('Lỗi database: ' . $e->getMessage());
    }
}

// Lấy thông tin sản phẩm
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_products WHERE id = :id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch();

if (!$row) {
    exit('Không tìm thấy dữ liệu!');
}

// Lấy danh sách danh mục
$sql = 'SELECT id, name FROM ' . NV_PREFIXLANG . '_' . $module_data . '_categories';
$categories = $db->query($sql)->fetchAll();

// Tạo XTemplate
$xtpl = new XTemplate('edit.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
$xtpl->assign('ROW', $row);

// Gán danh mục vào template
foreach ($categories as $category) {
    $category['selected'] = ($category['id'] == $row['category_id']) ? 'selected' : '';
    $xtpl->assign('CATEGORY', $category);
    $xtpl->parse('edit.category_loop');
}

$xtpl->parse('edit');
$contents = $xtpl->text('edit');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
