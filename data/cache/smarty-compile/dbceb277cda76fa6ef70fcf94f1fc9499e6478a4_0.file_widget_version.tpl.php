<?php
/* Smarty version 5.4.3, created on 2025-04-02 21:54:36
  from 'file:widget_version.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ed4fac20f810_90838044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbceb277cda76fa6ef70fcf94f1fc9499e6478a4' => 
    array (
      0 => 'widget_version.tpl',
      1 => 1743252799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ed4fac20f810_90838044 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet2\\src\\themes\\admin_future\\modules\\siteinfo';
?><div class="card-body pb-0">
    <h5 class="card-title"><?php echo $_smarty_tpl->getValue('LANG')->getModule('version');?>
</h5>
    <table class="table">
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('FIELDS'), 'field');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field')->value) {
$foreach4DoElse = false;
?>
            <tr>
                <td class="ps-0"><?php echo $_smarty_tpl->getValue('field')['key'];?>
</td>
                <td class="pe-0"><?php echo $_smarty_tpl->getValue('field')['value'];?>
</td>
            </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <?php if (!( !$_smarty_tpl->hasVariable('INFO') || empty($_smarty_tpl->getValue('INFO')))) {?>
    <p class="pt-2 mb-2 text-danger">
        <?php echo $_smarty_tpl->getValue('INFO');?>

    </p>
    <?php }?>
</div>
<div class="card-footer text-center">
    <a class="btn btn-primary" href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=webtools&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=checkupdate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('checkversion');?>
</a>
</div>
<?php }
}
