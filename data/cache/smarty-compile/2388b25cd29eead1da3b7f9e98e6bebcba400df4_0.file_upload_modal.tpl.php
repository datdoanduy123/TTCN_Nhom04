<?php
/* Smarty version 5.4.3, created on 2025-03-27 23:46:19
  from 'file:upload_modal.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e580dbe74625_55884084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2388b25cd29eead1da3b7f9e98e6bebcba400df4' => 
    array (
      0 => 'upload_modal.tpl',
      1 => 1743073458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e580dbe74625_55884084 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\upload';
?><div class="fmm fade" id="fmm" tabindex="-1" aria-labelledby="fmm-label" aria-hidden="true">
    <div class="fmm-dialog">
        <div class="fmm-content">
            <div class="fmm-header">
                <div class="fmm-title text-truncate fs-5 fw-medium" id="fmm-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_manager');?>
</div>
                <button type="button" class="btn-close" data-dismiss="fmm" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <div class="fmm-body">
                <div class="fms-ctn-fmm" data-toggle="fmm-body">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-spinner fa-spin-pulse fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
