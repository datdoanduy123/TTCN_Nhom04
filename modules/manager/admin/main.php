<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$page_title = $nv_Lang->getModule('list');

// Xử lý khi người dùng gửi form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    $image = '';

    // Xử lý upload ảnh
    

    // Lưu vào database
    $sql = "INSERT INTO " . NV_PREFIXLANG . "_" . $module_data . "_products (name, price, quantity, category_id, image) 
            VALUES (:name, :price, :quantity, :category_id, :image)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':image', $image);
    $stmt->execute();

    echo "Sản phẩm đã được thêm thành công!";
}

// Lấy danh sách sản phẩm
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
    foreach ($_rows as $row) {
        $row['edit_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=edit&id=' . $row['id'];
        $row['delete_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=delete&id=' . $row['id'];
        $row['image_path'] = !empty($row['image']) ? $row['image'] : NV_BASE_SITEURL . 'uploads/no-image.png'; // Nếu không có ảnh, hiển thị ảnh mặc định

        $xtpl->assign('ROW', $row);
        $xtpl->parse('main.loop');
    }
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
