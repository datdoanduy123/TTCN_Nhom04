<?php
/* Smarty version 5.4.3, created on 2025-03-29 18:31:55
  from 'file:clearsystem.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e7da2bcafbd0_29071591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8b53f29e03eff81446902bf88e1e6c930b3e65c' => 
    array (
      0 => 'clearsystem.tpl',
      1 => 1743073458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e7da2bcafbd0_29071591 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\webtools';
?><div class="row g-3">
    <form class="col-lg-5" id="clearsystem-form" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" method="post" novalidate>
        <ul class="list-group">
            <li class="list-group-item list-group-item-primary">
                <div class="d-flex align-items-center">
                    <div class="fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('checkContent');?>
</div>
                    <input type="checkbox" data-toggle="checkAll" class="form-check-input m-0 ps-2 ms-auto" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_checkall');?>
">
                </div>
            </li>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('CLEARS'), 'clear');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('clear')->value) {
$foreach0DoElse = false;
?>
            <li class="list-group-item">
                <div class="d-flex align-items-center">
                    <div><?php echo $_smarty_tpl->getValue('LANG')->getModule($_smarty_tpl->getValue('clear'));?>
</div>
                    <input type="checkbox" data-toggle="checkSingle" name="deltype[]" value="<?php echo $_smarty_tpl->getValue('clear');?>
" class="form-check-input m-0 ps-2 ms-auto" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_checksingle');?>
">
                </div>
            </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <li class="list-group-item text-center">
                <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
            </li>
        </ul>
    </form>
    <div class="col-lg-7">
        <div id="pload" class="alert alert-info text-center d-none">
            <i class="fa-solid fa-spinner fa-spin-pulse" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('wait_page_load');?>
"></i>
        </div>
        <ul id="presult" class="list-group d-none">
            <li class="list-group-item list-group-item-success fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('deletedetail');?>
:</li>
        </ul>
        <div id="pnoresult" class="alert alert-info text-center d-none" role="alert">
            <?php echo $_smarty_tpl->getValue('LANG')->getModule('no_files_to_delete');?>

        </div>
    </div>
</div>
<?php }
}
