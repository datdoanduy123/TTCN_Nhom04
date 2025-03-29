<?php
/* Smarty version 5.4.3, created on 2025-03-30 01:28:30
  from 'file:system_info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e83bce576fb5_33581763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1dd40b1f52489b45a5c45c6990763ff68a2c881' => 
    array (
      0 => 'system_info.tpl',
      1 => 1743252799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e83bce576fb5_33581763 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet2\\src\\themes\\admin_future\\modules\\siteinfo';
?><div class="row">
    <div class="col-xl-6">
        <div class="card text-bg-primary mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_configs_info');?>
</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_domain');?>
</div>
                        <div class="col-7"><?php echo (defined('NV_MY_DOMAIN') ? constant('NV_MY_DOMAIN') : null);?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_url');?>
</div>
                        <div class="col-7"><?php echo $_smarty_tpl->getValue('GCONFIG')['site_url'];?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_root');?>
</div>
                        <div class="col-7"><?php echo (defined('NV_ROOTDIR') ? constant('NV_ROOTDIR') : null);?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_script_path');?>
</div>
                        <div class="col-7"><?php echo $_smarty_tpl->getValue('NVRQ')->base_siteurl;?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_cookie_domain');?>
</div>
                        <div class="col-7"><?php echo $_smarty_tpl->getValue('GCONFIG')['cookie_domain'];?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_cookie_path');?>
</div>
                        <div class="col-7"><?php echo $_smarty_tpl->getValue('GCONFIG')['cookie_path'];?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_session_path');?>
</div>
                        <div class="col-7"><?php echo $_smarty_tpl->getValue('SYS')['sessionpath'];?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_timezone');?>
</div>
                        <div class="col-7"><?php echo (defined('NV_SITE_TIMEZONE_NAME') ? constant('NV_SITE_TIMEZONE_NAME') : null);
if ((defined('NV_SITE_TIMEZONE_GMT_NAME') ? constant('NV_SITE_TIMEZONE_GMT_NAME') : null) != (defined('NV_SITE_TIMEZONE_NAME') ? constant('NV_SITE_TIMEZONE_NAME') : null)) {?> (<?php echo (defined('NV_SITE_TIMEZONE_GMT_NAME') ? constant('NV_SITE_TIMEZONE_GMT_NAME') : null);?>
)<?php }?></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card text-bg-primary mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('server_configs_info');?>
</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('version');?>
</div>
                        <div class="col-7">
                            <?php echo $_smarty_tpl->getValue('GCONFIG')['version'];
if (!( !true || empty((defined('NV_IS_GODADMIN') ? constant('NV_IS_GODADMIN') : null)))) {?>
                            <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=webtools&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=checkupdate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('checkversion');?>
</a>
                            <?php }?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('server_phpversion');?>
</div>
                        <div class="col-7"><?php echo $_smarty_tpl->getValue('PHPVERSION');?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('server_api');?>
</div>
                        <div class="col-7"><?php echo $_smarty_tpl->getValue('SERVER_API');?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('server_phpos');?>
</div>
                        <div class="col-7"><?php echo $_smarty_tpl->getValue('SYS')['os'];?>
</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('server_databaseversion');?>
</div>
                        <div class="col-7"><?php echo $_smarty_tpl->getValue('DBVERSION');?>
</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <?php if (!( !true || empty((defined('NV_IS_GODADMIN') ? constant('NV_IS_GODADMIN') : null))) && !$_smarty_tpl->getValue('IS_WIN')) {?>
    <div class="col-12">
        <div class="card text-bg-primary">
            <div class="card-header">
                <h5 class="card-title mb-0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('chmod');?>
</h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('CHMODS'), 'chmod');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('chmod')->value) {
$foreach0DoElse = false;
?>
                <li class="list-group-item">
                    <?php echo $_smarty_tpl->getValue('chmod')['key'];?>
 <?php if ($_smarty_tpl->getValue('chmod')['value']) {?><i class="fa-solid fa-circle-check text-success" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('chmod_noneed');?>
"></i><?php } else { ?><span class="badge text-bg-warning"><?php echo $_smarty_tpl->getValue('LANG')->getModule('chmod_need');?>
</span><?php }?>
                </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
    <?php }?>
</div>
<?php }
}
