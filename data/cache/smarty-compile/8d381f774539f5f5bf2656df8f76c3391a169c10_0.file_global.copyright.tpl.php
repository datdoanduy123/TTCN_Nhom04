<?php
/* Smarty version 5.4.3, created on 2025-04-01 19:51:06
  from 'file:global.copyright.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ebe13a121ec8_01241672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d381f774539f5f5bf2656df8f76c3391a169c10' => 
    array (
      0 => 'global.copyright.tpl',
      1 => 1743252799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ebe13a121ec8_01241672 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet2\\src\\themes\\default\\blocks\\smarty';
?><div class="copyright">
    <span>&copy;&nbsp;<?php echo $_smarty_tpl->getValue('LANG')->get('copyright_by');?>
 <a href="<?php echo $_smarty_tpl->getValue('DATA')['copyright_url'];?>
"><?php echo $_smarty_tpl->getValue('DATA')['copyright_by'];?>
</a>.&nbsp; </span>
    <span><?php echo $_smarty_tpl->getValue('LANG')->get('powered_by');?>
 <a href="https://nukeviet.vn/" target="_blank" rel="dofollow">NukeViet CMS</a>.&nbsp; </span>
<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['design_by']))) {?>
    <span><?php echo $_smarty_tpl->getValue('LANG')->get('design_by');?>
 <?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['design_url']))) {?><a href="<?php echo $_smarty_tpl->getValue('DATA')['design_url'];?>
" target="_blank" rel="dofollow"><?php }
echo $_smarty_tpl->getValue('DATA')['design_by'];
if (!( !true || empty($_smarty_tpl->getValue('DATA')['design_url']))) {?></a><?php }?>.&nbsp; </span>
<?php }
if (!( !true || empty($_smarty_tpl->getValue('DATA')['siteterms_url']))) {?>
    <span>&nbsp;|&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->getValue('DATA')['siteterms_url'];?>
"><?php echo $_smarty_tpl->getValue('LANG')->get('siteterms');?>
</a></span>
<?php }
if ((defined('NV_IS_SPADMIN') ? constant('NV_IS_SPADMIN') : null)) {?>
    <span>&nbsp;|&nbsp;&nbsp;<?php echo $_smarty_tpl->getValue('LANG')->get('for_admin');?>
: [MEMORY_TIME_USAGE]</span>
<?php }?>
</div>
<?php }
}
