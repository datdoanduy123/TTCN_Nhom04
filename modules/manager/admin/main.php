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
    if (!empty($_FILES['image']['name'])) {
        $target_dir = NV_ROOTDIR . "/uploads/" . $module_name . "/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true); // Tạo thư mục nếu chưa có
        }
        $imageName = time() . '_' . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $imageName;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

        // Kiểm tra định dạng file
        if (in_array($imageFileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = $imageName; // Chỉ lưu tên file
            } else {
                die("Lỗi: Không thể upload file!");
            }
        } else {
            die("Lỗi: Chỉ chấp nhận file JPG, PNG, JPEG, GIF!");
        }
    }

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
        $create_url = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=create';

        $xtpl->assign('CREATE_URL', $create_url);
        $row['image_path'] = !empty($row['image']) ? NV_BASE_SITEURL . "uploads/" . $module_name . "/" . $row['image'] : NV_BASE_SITEURL . "uploads/default.png";
        $xtpl->assign('ROW', $row);
        $xtpl->parse('main.loop');
    }
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
