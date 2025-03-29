<?php
/* Smarty version 5.4.3, created on 2025-03-30 01:30:33
  from 'file:configuration_php.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e83c498a6644_02075428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11343d95d8aced155540ced0e100da8c2ec7d800' => 
    array (
      0 => 'configuration_php.tpl',
      1 => 1743252799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e83c498a6644_02075428 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet2\\src\\themes\\admin_future\\modules\\siteinfo';
?><div class="card border-primary border-4 border-bottom-0 border-start-0 border-end-0 pb-1">
    <div class="card-body">
        <div class="table-responsive-sm table-card">
            <table class="table table-sticky mb-0">
                <col style="width: 33.3333%;">
                <col style="width: 33.3333%;">
                <col style="width: 33.3333%;">
                <thead>
                    <tr>
                        <th class="text-bg-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('directive');?>
</th>
                        <th class="text-bg-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('local_value');?>
</th>
                        <th class="text-bg-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('master_value');?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA'), 'row', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                    <tr>
                        <td class="text-break"><?php echo $_smarty_tpl->getValue('key');?>
</td>
                        <?php if (is_array($_smarty_tpl->getValue('row'))) {?>
                        <td class="fw-medium text-break"><?php echo $_smarty_tpl->getValue('row')[0];?>
</td>
                        <td class="fw-medium text-break"><?php echo $_smarty_tpl->getValue('row')[1];?>
</td>
                        <?php } else { ?>
                        <td class="text-break"><?php echo $_smarty_tpl->getValue('row');?>
</td>
                        <td class="text-break"><?php echo $_smarty_tpl->getValue('row');?>
</td>
                        <?php }?>
                    </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php }
}
