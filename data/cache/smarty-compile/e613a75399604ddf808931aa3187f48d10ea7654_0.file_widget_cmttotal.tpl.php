<?php
/* Smarty version 5.4.3, created on 2025-03-27 15:36:06
  from 'file:widget_cmttotal.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e50df6751f27_62795402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e613a75399604ddf808931aa3187f48d10ea7654' => 
    array (
      0 => 'widget_cmttotal.tpl',
      1 => 1742974442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e50df6751f27_62795402 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\comment';
?><div class="card-body flex-grow-1 flex-shrink-1">
    <div class="d-flex justify-content-between">
        <div>
            <h5 class="card-title"><?php echo $_smarty_tpl->getValue('LANG')->getModule('siteinfo_total_comments');?>
</h5>
            <div class="fs-2 fw-semibold">
                <?php echo $_smarty_tpl->getValue('NUM');?>

            </div>
        </div>
        <div>
            <div class="couter-icon">
                <span class="bg-info-subtle rounded-circle fs-2">
                    <i class="fa-regular fa-comments text-info"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<?php }
}
