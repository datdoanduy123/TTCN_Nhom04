<?php
if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

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

    // Chèn dữ liệu mới vào bảng products
    $sql = "INSERT INTO " . NV_PREFIXLANG . "_" . $module_data . "_products (name, price, quantity, image, category_id) 
            VALUES (:name, :price, :quantity, :image, :category_id)";

    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_INT);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_NAME_VARIABLE . '=' . $module_name);
        } else {
            throw new Exception('Lỗi khi thêm dữ liệu.');
        }
    } catch (Exception $e) {
        die('Lỗi database: ' . $e->getMessage());
    }
}

// Lấy danh sách danh mục
$sql = 'SELECT id, name FROM ' . NV_PREFIXLANG . '_' . $module_data . '_categories';
$categories = $db->query($sql)->fetchAll();
if (empty($categories)) {
    die('Lỗi: Không có danh mục nào.');
}

// Tạo XTemplate
$xtpl = new XTemplate('create.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);

// Gán danh mục vào template
foreach ($categories as $category) {
    $xtpl->assign('CATEGORY', $category);
    $xtpl->parse('main.category_loop');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
