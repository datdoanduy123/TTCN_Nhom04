<?php
/* Smarty version 5.4.3, created on 2025-03-27 18:06:01
  from 'file:global.social.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e53119117f31_40403778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bd3faeb73db4b6132144b2fbe1c172a7733f6d2' => 
    array (
      0 => 'global.social.tpl',
      1 => 1743073458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e53119117f31_40403778 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\blocks\\smarty';
?><span class="visible-xs-inline-block"><a title="<?php echo $_smarty_tpl->getValue('LANG')->get('joinnow');?>
" class="pointer button" data-toggle="tip" data-target="#socialList" data-click="y"><em class="fa fa-share-alt fa-lg"></em><span class="hidden"><?php echo $_smarty_tpl->getValue('LANG')->get('joinnow');?>
</span></a></span>
<div id="socialList" class="content">
    <strong class="visible-xs-inline-block margin-bottom"><?php echo $_smarty_tpl->getValue('LANG')->get('joinnow');?>
</strong>
    <ul class="socialList">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SOCIALS'), 'social');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('social')->value) {
$foreach13DoElse = false;
?>
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('social')['href'];?>
"<?php if ($_smarty_tpl->getValue('social')['target_blank']) {?> target="_blank" rel="noopener"<?php }?> title="<?php echo $_smarty_tpl->getValue('social')['title'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->getValue('social')['icon'];?>
"></i></a>
        </li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
