<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

if (!nv_function_exists('nv_block_welcome')) {
    /**
     * nv_block_welcome()
     *
     * @param array $block_config
     * @return string
     */
    function nv_block_welcome($block_config)
    {
        global $global_config, $nv_Lang, $language_array;

        // Multiple languages
        $langs = [];

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.welcome.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.welcome.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }
        
        

        $stpl = new \NukeViet\Template\NVSmarty();
        $stpl->setTemplateDir($block_config['real_path'] . '/smarty');
        $nv_Lang = [
            'welcome' => 'Chào mừng bạn đến với NukeViet!',
        ];
        $langs = [
            'description' => 'Đây là một hệ thống quản lý nội dung mạnh mẽ.',
        ];
        $stpl->assign('LANG', $nv_Lang);
        $stpl->assign('LANGS', $langs);
        return $stpl->fetch('global.welcome.tpl');
        
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_block_welcome($block_config);
}
