<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

 if (!defined('NV_IS_MOD_MANAGER')) {
    define('NV_IS_MOD_MANAGER', true);
}


/**
 * nv_manager_list
 *
 * @param array $array_data
 * @return string
 */


 function nv_manager_list($array_data, $search = '')
 {
     global $module_name;
 
     [$template, $dir] = get_module_tpl_dir('main.tpl', true);
     $xtpl = new XTemplate('main.tpl', $dir);
 
     $xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
     $xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
 
     $xtpl->assign('SEARCH_VALUE', htmlspecialchars($search));
 
     if (!empty($array_data)) {
         foreach ($array_data as $value) {
             $xtpl->assign('ROW', $value);
             $xtpl->parse('main.loop');
         }
     }
 
     $xtpl->parse('main');
     return $xtpl->text('main');
 }
 

