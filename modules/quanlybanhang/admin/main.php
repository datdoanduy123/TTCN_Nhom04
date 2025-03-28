<?php

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$page_title = $nv_Lang->getModule('list');
$contents = "Nội dung quản trị";

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';