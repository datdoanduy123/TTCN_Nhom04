<?php

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$sql = 'SELECT id, title, alias FROM ' . NV_PREFIXLANG . '_' . $mod_data . ' WHERE status=1 ORDER BY weight ASC';
$result = $db->query($sql);
while ($row = $result->fetch()) {
    $array_item[$row['id']] = [
        'key' => $row['id'],
        'title' => $row['title'],
        'alias' => $row['alias'] . $global_config['rewrite_exturl']
    ];
}
