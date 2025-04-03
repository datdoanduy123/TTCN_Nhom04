<?php
/* Smarty version 5.4.3, created on 2025-04-02 23:06:55
  from 'file:block.free_content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67ed609f77f290_45909422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a86a8dd4b26b8f99bf9f6f77c4b4eb50d4462e4' => 
    array (
      0 => 'block.free_content.tpl',
      1 => 1743252800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ed609f77f290_45909422 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet2\\src\\themes\\default\\modules\\freecontent\\smarty';
?><div class="panel-body">
    <div class="featured-products">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LIST'), 'row');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach15DoElse = false;
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
