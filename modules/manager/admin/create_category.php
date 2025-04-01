<?php
if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}
$page_title = $nv_Lang->getModule('create_category');
if ($nv_Request->isset_request('submit_category', 'post')) {
    $name = $nv_Request->get_title('name', 'post', '', 255);
    $description = $nv_Request->get_textarea('description', '', '');
    
    if (empty($name)) {
        die('Lỗi: Tên danh mục không được để trống.');
    }

    // Chèn dữ liệu vào bảng categories
    $sql = "INSERT INTO " . NV_PREFIXLANG . "_" . $module_data . "_categories (name, description) 
            VALUES (:name, :description)";
    
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            nv_redirect_location(NV_BASE_ADMINURL . 'index.php?module=' . $module_data);
            exit(); // Dừng thực thi script sau khi chuyển hướng
        } else {
            throw new Exception('Lỗi khi thêm danh mục.');
        }
    } catch (Exception $e) {
        die('Lỗi database: ' . $e->getMessage());
    }
}

// Tạo XTemplate
$xtpl = new XTemplate('add_category.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';