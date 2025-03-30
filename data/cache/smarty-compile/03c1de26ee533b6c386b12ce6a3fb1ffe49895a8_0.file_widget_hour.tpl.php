<?php
/* Smarty version 5.4.3, created on 2025-03-30 01:43:24
  from 'file:widget_hour.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e83f4c650374_01274061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03c1de26ee533b6c386b12ce6a3fb1ffe49895a8' => 
    array (
      0 => 'widget_hour.tpl',
      1 => 1743252799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e83f4c650374_01274061 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet2\\src\\themes\\admin_future\\modules\\statistics';
?><div class="card-body d-flex flex-column">
    <h5 class="card-title"><?php echo $_smarty_tpl->getValue('LANG')->getModule('statbyhour1');?>
</h5>
    <div class="flex-grow-1 flex-shrink-1">
        <div id="widget-stat-hour" class="widget-chart-290" data-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('hits');?>
">
            <div class="data d-none"><?php echo $_smarty_tpl->getValue('DATA');?>
</div>
            <div class="row h-100 placeholder-glow text-center widget-chart-wait">
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
                <div class="col-1">
                    <div class="bg-secondary-subtle placeholder h-100 colholder">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>
<link id="apexcharts-css" rel="stylesheet" type="text/css" href="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/apexcharts/apexcharts.css">
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/apexcharts/apexcharts.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('JS_DIR');?>
/js/<?php echo $_smarty_tpl->getValue('MODULE_FILE');?>
.js"><?php echo '</script'; ?>
>
<?php }
}
