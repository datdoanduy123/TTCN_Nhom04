<?php
/* Smarty version 5.4.3, created on 2025-03-30 21:17:26
  from 'file:global.menu_footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e95276c4eda5_53726769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7fdd022603a840b5b33d207086ef431484776cd' => 
    array (
      0 => 'global.menu_footer.tpl',
      1 => 1743252799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e95276c4eda5_53726769 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet2\\src\\themes\\default\\blocks\\smarty';
?><ul class="menu">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MENU'), 'item');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach15DoElse = false;
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
