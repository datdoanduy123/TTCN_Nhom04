<?php
/* Smarty version 5.4.3, created on 2025-03-28 19:27:32
  from 'file:block.free_content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e695b4c87d96_59271337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f4ddead945a3647c7490b33d70972736f59869' => 
    array (
      0 => 'block.free_content.tpl',
      1 => 1743073458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e695b4c87d96_59271337 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\modules\\freecontent\\smarty';
?><div class="panel-body">
    <div class="featured-products">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LIST'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
        <div class="row clearfix">
<?php if (( !true || empty($_smarty_tpl->getValue('row')['link']))) {?>
            <div class="bl-title"><?php echo $_smarty_tpl->getValue('row')['title'];?>
</div>
<?php } else { ?>
            <a class="bl-title" href="<?php echo $_smarty_tpl->getValue('row')['link'];?>
"<?php if (!( !true || empty($_smarty_tpl->getValue('row')['target']))) {?> target="<?php echo $_smarty_tpl->getValue('row')['target'];?>
"<?php }?>><?php echo $_smarty_tpl->getValue('row')['title'];?>
</a>
<?php }
if (!( !true || empty($_smarty_tpl->getValue('row')['image']))) {?>
            <div class="col-xs-24 col-sm-5 col-md-8">
                <?php if (!( !true || empty($_smarty_tpl->getValue('row')['link']))) {?><a href="<?php echo $_smarty_tpl->getValue('row')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('row')['title'];?>
"<?php if (!( !true || empty($_smarty_tpl->getValue('row')['target']))) {?> target="<?php echo $_smarty_tpl->getValue('row')['target'];?>
"<?php }?>><?php }?><img title="<?php echo $_smarty_tpl->getValue('row')['title'];?>
" alt="" src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);
echo (defined('NV_UPLOADS_DIR') ? constant('NV_UPLOADS_DIR') : null);?>
/<?php echo $_smarty_tpl->getValue('MODULE_UPLOAD');?>
/<?php echo $_smarty_tpl->getValue('row')['image'];?>
" class="img-thumbnail"><?php if (!( !true || empty($_smarty_tpl->getValue('row')['link']))) {?></a><?php }?>
            </div>
<?php }?>
            <div class="col-xs-24 col-sm-19 col-md-16">
                <?php echo $_smarty_tpl->getValue('row')['description'];?>

            </div>
        </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
