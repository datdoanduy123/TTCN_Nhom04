<?php
/* Smarty version 5.4.3, created on 2025-03-27 18:06:01
  from 'file:global.menu_footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e531193b2a03_44171480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b4d45c73fa28adf3137dfd8930daaab722eff4e' => 
    array (
      0 => 'global.menu_footer.tpl',
      1 => 1743073458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e531193b2a03_44171480 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\blocks\\smarty';
?><ul class="menu">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MENU'), 'item');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach14DoElse = false;
?>
    <li>
        <a href="<?php echo $_smarty_tpl->getValue('item')['link'];?>
"><?php echo $_smarty_tpl->getValue('item')['title'];?>
</a>
    </li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
