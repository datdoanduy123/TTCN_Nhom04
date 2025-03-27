<?php
/* Smarty version 5.4.3, created on 2025-03-27 15:37:33
  from 'file:extensions_php.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e50e4d9f61b5_02503717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaa16958b7c8ee2f569e2621b4e6a31b8c70853f' => 
    array (
      0 => 'extensions_php.tpl',
      1 => 1742974442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e50e4d9f61b5_02503717 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\siteinfo';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ARRAY'), 'mod_vals', false, 'module');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('module')->value => $_smarty_tpl->getVariable('mod_vals')->value) {
$foreach0DoElse = false;
?>
<div class="fs-2 fw-medium mb-2"><?php echo $_smarty_tpl->getValue('module');?>
</div>
<div class="card border-primary border-4 border-bottom-0 border-start-0 border-end-0 pb-1 mb-4">
    <div class="card-body">
        <div class="table-responsive-sm table-card">
            <table class="table table-sticky mb-0">
                <col style="width: 40%;">
                <col style="width: 30%;">
                <col style="width: 30%;">
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
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('mod_vals'), 'value', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                    <tr>
                        <td class="text-break"><?php echo $_smarty_tpl->getValue('key');?>
</td>
                        <?php if (!is_array($_smarty_tpl->getValue('value'))) {?>
                        <td class="text-break" colspan="2"><?php echo $_smarty_tpl->getValue('value');?>
</td>
                        <?php } elseif ((true && (true && null !== ($_smarty_tpl->getValue('value')[1] ?? null)))) {?>
                        <td class="text-break"><?php echo $_smarty_tpl->getValue('value')[0];?>
</td>
                        <td class="text-break"><?php echo $_smarty_tpl->getValue('value')[1];?>
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
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
