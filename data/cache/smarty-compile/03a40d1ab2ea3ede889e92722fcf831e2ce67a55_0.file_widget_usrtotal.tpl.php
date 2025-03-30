<?php
/* Smarty version 5.4.3, created on 2025-03-30 01:43:23
  from 'file:widget_usrtotal.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e83f4ba54e87_30891666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03a40d1ab2ea3ede889e92722fcf831e2ce67a55' => 
    array (
      0 => 'widget_usrtotal.tpl',
      1 => 1743252799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e83f4ba54e87_30891666 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet2\\src\\themes\\admin_future\\modules\\users';
?><div class="card-body flex-grow-1 flex-shrink-1">
    <div class="d-flex justify-content-between">
        <div>
            <h5 class="card-title"><?php echo $_smarty_tpl->getValue('LANG')->getModule('siteinfo_user');?>
</h5>
            <div class="fs-2 fw-semibold">
                <?php echo $_smarty_tpl->getValue('NUM');?>

            </div>
        </div>
        <div>
            <div class="couter-icon">
                <span class="bg-info-subtle rounded-circle fs-2">
                    <i class="fa-regular fa-user text-info"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<?php }
}
