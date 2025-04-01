<?php
if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$page_title = $nv_Lang->getModule('create_customer');

if ($nv_Request->isset_request('submit_customer', 'post')) {
    $name = $nv_Request->get_title('name', 'post', '', 255);
    $phone = $nv_Request->get_title('phone', 'post', '', 20);
    $email = $nv_Request->get_title('email', 'post', '', 255);
    $password = $nv_Request->get_title('password', 'post', '', 255);

    // Kiểm tra dữ liệu đầu vào
    if (empty($name)) {
        die('Lỗi: Tên khách hàng không được để trống.');
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Lỗi: Email không hợp lệ.');
    }

    if (empty($password) || strlen($password) < 6) {
        die('Lỗi: Mật khẩu phải có ít nhất 6 ký tự.');
    }

    // Mã hóa mật khẩu bằng password_hash()
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Chèn dữ liệu vào bảng customers
    $sql = "INSERT INTO " . NV_PREFIXLANG . "_" . $module_data . "_customers (name, phone, email, password) 
            VALUES (:name, :phone, :email, :password)";
    
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            nv_redirect_location(NV_BASE_ADMINURL . 'index.php?module=' . $module_data);
            exit(); // Dừng thực thi script sau khi chuyển hướng
        } else {
            throw new Exception('Lỗi khi thêm khách hàng.');
        }
    } catch (Exception $e) {
        die('Lỗi database: ' . $e->getMessage());
    }
}

// Tạo XTemplate
$xtpl = new XTemplate('create_customer.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
