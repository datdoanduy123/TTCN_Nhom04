<?php
if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN')) {
    exit('Stop!!!');
}

$allow_func = [
    'main',
    'create',
    'update',
    'delete',
];

define('NV_IS_FILE_ADMIN', true);
