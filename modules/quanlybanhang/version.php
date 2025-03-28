<?php

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$module_version = [
    'name' => 'Quản lý bán',
    'modfuncs' => 'main,detail',
    'is_sysmod' => 0,
    'virtual' => 1,
    'version' => '5.0.00',
    'date' => 'Saturday, July 17, 2021 4:00:00 PM GMT+07:00',
    'author' => 'TTCN-NHOM4',
    'note' => '',
    'uploads_dir' => [
        $module_upload
    ],
    'icon' => 'fa-solid fa-file-pen'
];
