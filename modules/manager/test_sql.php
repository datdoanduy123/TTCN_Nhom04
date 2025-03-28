<?php
 
/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_MODULES')) {
    exit('Stop!!!');
}
require_once 'includes/mainfile.php'; // Kết nối database trong NukeViet

global $db, $db_config, $lang, $module_data;

$sql = "CREATE TABLE IF NOT EXISTS `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories` (
    `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID danh mục',
    `name` VARCHAR(255) NOT NULL COMMENT 'Tên danh mục',
    `description` TEXT DEFAULT NULL COMMENT 'Mô tả danh mục',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB COMMENT = 'Danh sách danh mục sản phẩm';";

if ($db->query($sql)) {
    echo "Tạo bảng thành công!";
} else {
    echo "Lỗi khi tạo bảng: " . $db->error;
}
?>
