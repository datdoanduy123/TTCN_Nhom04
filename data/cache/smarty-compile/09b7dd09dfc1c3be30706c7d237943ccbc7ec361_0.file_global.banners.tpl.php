<?php
/* Smarty version 5.4.3, created on 2025-03-27 18:05:00
  from 'file:global.banners.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e530dc115961_47177823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09b7dd09dfc1c3be30706c7d237943ccbc7ec361' => 
    array (
      0 => 'global.banners.tpl',
      1 => 1743073458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e530dc115961_47177823 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\TTCN_Nhom04\\themes\\default\\modules\\banners\\smarty';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('BANNERS'), 'data');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('data')->value) {
$foreach15DoElse = false;
?>
<div class="nv-block-banners">
<?php if ($_smarty_tpl->getValue('data')['file_name'] != 'no_image') {
if ((!( !true || empty($_smarty_tpl->getValue('data')['file_click'])))) {?>
    <a rel="nofollow" href="<?php echo $_smarty_tpl->getValue('data')['link'];?>
" data-target="<?php echo $_smarty_tpl->getValue('data')['target'];?>
" title="<?php echo $_smarty_tpl->getValue('data')['file_alt'];?>
"><img alt="<?php echo $_smarty_tpl->getValue('data')['file_alt'];?>
" src="<?php echo $_smarty_tpl->getValue('data')['file_image'];?>
" width="<?php echo $_smarty_tpl->getValue('data')['file_width'];?>
" height="<?php echo $_smarty_tpl->getValue('data')['file_height'];?>
"></a>
<?php } else { ?>
    <img alt="<?php echo $_smarty_tpl->getValue('data')['file_alt'];?>
" src="<?php echo $_smarty_tpl->getValue('data')['file_image'];?>
" width="<?php echo $_smarty_tpl->getValue('data')['file_width'];?>
" height="<?php echo $_smarty_tpl->getValue('data')['file_height'];?>
">
<?php }
}
if (!( !true || empty($_smarty_tpl->getValue('data')['bannerhtml']))) {?>
    <div class="clearfix text-left">
        <?php echo $_smarty_tpl->getValue('data')['bannerhtml'];?>

    </div>
<?php }?>
</div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
