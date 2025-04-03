<?php

 if (!defined('NV_IS_FILE_MODULES')) {
     exit('Stop!!!');
 }
 
 $sql_drop_module = [];
 $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . ';';
 $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_products;';
 $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_categories;';
 $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_reports;';
 $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_discounts;';
 $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_order_items;';
 $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_orders;';
 $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_inventory;';
 $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_customers;';
 
 $sql_create_module = $sql_drop_module;
 $sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "` (
     `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
     `title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tiêu đề',
     `description` TEXT NOT NULL DEFAULT '' COMMENT 'Mô tả ngắn',
     `image` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Hình ảnh minh họa',
     `content` MEDIUMTEXT NOT NULL DEFAULT '' COMMENT 'Nội dung chi tiết bài viết',
     `status` TINYINT(1) NOT NULL DEFAULT '1' COMMENT 'Trạng thái. 0: ẩn, 1: hiện',
     `created_at` INT(11) NOT NULL DEFAULT '0' COMMENT 'Tạo lúc',
     `updated_at` INT(11) NOT NULL DEFAULT '0' COMMENT 'Cập nhật gần nhất',
     PRIMARY KEY (`id`)
 ) ENGINE = InnoDB COMMENT = 'Danh sách bải viết'";


 // Lệnh SQL tạo bảng
 $sql_create_module[] = $sql_create_categories = "CREATE TABLE IF NOT EXISTS `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories` (
     `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID danh mục',
     `name` VARCHAR(255) NOT NULL COMMENT 'Tên danh mục',
     `description` TEXT DEFAULT NULL COMMENT 'Mô tả danh mục',
     PRIMARY KEY (`id`)
 ) ENGINE = InnoDB COMMENT = 'Danh sách danh mục sản phẩm';";

 $sql_create_module[] = $sql_create_products = "CREATE TABLE IF NOT EXISTS `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_products` (
    `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID sản phẩm',
    `name` VARCHAR(255) NOT NULL COMMENT 'Tên sản phẩm',
    `price` DECIMAL(10,2) NOT NULL COMMENT 'Giá sản phẩm',
    `quantity` INT NOT NULL COMMENT 'Số lượng tồn kho',
    `image` VARCHAR(255) DEFAULT NULL COMMENT 'Hình ảnh sản phẩm',
    `description` TEXT DEFAULT NULL COMMENT 'Mô tả sản phẩm',
    `category_id` INT DEFAULT NULL COMMENT 'Mã danh mục',
    PRIMARY KEY (`id`),
    FOREIGN KEY (`category_id`) REFERENCES `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories` (`id`) ON DELETE SET NULL
 ) ENGINE = InnoDB COMMENT = 'Danh sách sản phẩm';";
 

 $sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_customers` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `address` VARCHAR(255) NOT NULL COMMENT 'địa chỉ',
    `purchase_history` TEXT
) ENGINE = InnoDB COMMENT = 'Danh sách khách hàng';";

$sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_orders` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `order_code` VARCHAR(50) NOT NULL UNIQUE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `total` DECIMAL(10,2) NOT NULL,
    `status` ENUM('pending', 'shipped', 'delivered', 'canceled') NOT NULL DEFAULT 'pending',
    `customer_id` INT NOT NULL,
    FOREIGN KEY (`customer_id`) REFERENCES `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_customers` (`id`) ON DELETE CASCADE
) ENGINE = InnoDB COMMENT = 'Danh sách đơn hàng';";

$sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_items` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `order_id` INT NOT NULL,
    `product_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `price` DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (`order_id`) REFERENCES `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_orders` (`id`) ON DELETE CASCADE,
    FOREIGN KEY (`product_id`) REFERENCES `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_products` (`id`) ON DELETE CASCADE
) ENGINE = InnoDB COMMENT = 'Chi tiết đơn hàng';";

$sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_inventory` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `quantity_in` INT NOT NULL DEFAULT 0,
    `quantity_out` INT NOT NULL DEFAULT 0,
    `last_updated` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`product_id`) REFERENCES `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_products` (`id`) ON DELETE CASCADE
) ENGINE = InnoDB COMMENT = 'Quản lý kho hàng';";

$sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_discounts` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `promo_name` VARCHAR(255) NOT NULL,
    `promo_code` VARCHAR(50) NOT NULL UNIQUE,
    `discount_percentage` DECIMAL(5,2) NOT NULL CHECK (`discount_percentage` BETWEEN 0 AND 100),
    `applicable_products` TEXT NOT NULL,
    `expiry_date` DATE NOT NULL
) ENGINE = InnoDB COMMENT = 'Chương trình khuyến mãi';";

$sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_reports` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `report_date` DATE NOT NULL,
    `revenue` DECIMAL(10,2) NOT NULL DEFAULT 0,
    `expenses` DECIMAL(10,2) NOT NULL DEFAULT 0,
    `net_income` DECIMAL(10,2) NOT NULL DEFAULT 0
) ENGINE = InnoDB COMMENT = 'Báo cáo tài chính';";
 