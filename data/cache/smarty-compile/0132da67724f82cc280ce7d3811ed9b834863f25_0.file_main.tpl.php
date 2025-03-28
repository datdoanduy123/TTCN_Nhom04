<?php
/* Smarty version 5.4.3, created on 2025-03-27 23:45:55
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e580c30c3046_50069800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0132da67724f82cc280ce7d3811ed9b834863f25' => 
    array (
      0 => 'main.tpl',
      1 => 1743073457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e580c30c3046_50069800 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\news';
?><link type="text/css" href="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/select2/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/select2/i18n/<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/language/jquery.ui.datepicker-<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/clipboard/clipboard.min.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->getValue('DRAFTS')['count'] > 0) {?>
<div class="card border-0 mb-3">
    <div class="card-header text-bg-info rounded-top-2 d-flex gap-2 justify-content-between align-items-center">
        <div class="fw-medium"><i class="fa-brands fa-firstdraft"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('draft_count',$_smarty_tpl->getSmarty()->getModifierCallback('nformat')($_smarty_tpl->getValue('DRAFTS')['count']));?>
</div>
        <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=drafts" class="btn btn-sm btn-secondary"><i class="fa-solid fa-caret-right"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_allshow');?>
</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-lg table-card pb-1">
            <table class="table table-striped align-middle table-sticky mb-0 list" data-del-confirm="<?php echo $_smarty_tpl->getValue('LANG')->getModule('draft_del_confirm');?>
">
                <thead class="text-muted">
                    <tr>
                        <th class="text-nowrap" style="width: 50%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('name');?>
</th>
                        <th class="text-nowrap" style="width: 30%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('post_time');?>
</th>
                        <th class="text-nowrap text-center" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('function');?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DRAFTS')['list'], 'row', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->getValue('row')['title'] ?: $_smarty_tpl->getValue('LANG')->getModule('name_empty');?>

                            <?php if (!$_smarty_tpl->getValue('row')['allowed_edit']) {?>
                            <div class="text-danger small"><?php echo $_smarty_tpl->getValue('LANG')->getModule('draft_not_allowed');?>
</div>
                            <?php }?>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('dformat')($_smarty_tpl->getValue('row')['time_late']);?>

                        </td>
                        <td class="text-center">
                            <div class="hstack gap-1 justify-content-center">
                                <?php if ($_smarty_tpl->getValue('row')['allowed_edit']) {?>
                                <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=content<?php if (!( !true || empty($_smarty_tpl->getValue('row')['new_id']))) {?>&amp;id=<?php echo $_smarty_tpl->getValue('row')['new_id'];
}?>&amp;draft_id=<?php echo $_smarty_tpl->getValue('row')['id'];?>
" class="btn btn-sm btn-secondary text-nowrap"><i class="fa-solid fa-pencil"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('draft_continue');?>
</a>
                                <?php }?>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="draft_cancel" data-id="<?php echo $_smarty_tpl->getValue('row')['id'];?>
"><i class="fa-solid fa-circle-xmark" data-icon="fa-circle-xmark"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('cancel');?>
</button>
                            </div>
                        </td>
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
if ($_smarty_tpl->getValue('ARRAY_OTHERS_COUNT') > 0) {?>
<div class="card mb-3 py-1">
    <ul class="list-group list-group-flush">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ARRAY_OTHERS'), 'other');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('other')->value) {
$foreach1DoElse = false;
?>
        <li class="list-group-item hstack gap-2 justify-content-between">
            <div>
                <?php echo $_smarty_tpl->getValue('other')['title'];?>

            </div>
            <a href="<?php echo $_smarty_tpl->getValue('other')['link'];?>
" class="btn btn-primary btn-sm fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('view');?>
</a>
        </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }?>
<div class="card">
    <?php if ($_smarty_tpl->getValue('DRAFTS')['count'] > 0) {?>
    <div class="card-header text-bg-primary rounded-top-2">
        <div class="fw-medium"><i class="fa-solid fa-newspaper"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('all_articles');?>
</div>
    </div>
    <?php }?>
    <div class="card-body">
        <form method="get" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php" id="form-search-post">
            <input type="hidden" name="<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
" value="<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
">
            <input type="hidden" name="<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
" value="<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
">
            <div class="row g-3 flex-xl-nowrap">
                <div class="col-md-6 flex-lg-fill">
                    <label for="element_q" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('search_key');?>
</label>
                    <input type="text" class="form-control" name="q" id="element_q" value="<?php echo $_smarty_tpl->getValue('SEARCH')['q'];?>
" maxlength="64" placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('search_note');?>
">
                </div>
                <div class="col-md-6 flex-lg-fill">
                    <label for="element_stype" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('search_type');?>
</label>
                    <select class="form-select" name="stype" id="element_stype">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('TYPE_SEARCH'), 'type', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('type')->value) {
$foreach2DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('key');?>
"<?php if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('SEARCH')['stype']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('type');?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="col-sm-auto flex-sm-grow-1 flex-sm-shrink-1 flex-xl-grow-0 flex-xl-shrink-0 col-xl-3">
                    <label for="element_catid" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_cat');?>
</label>
                    <select class="form-select select2" name="catid" id="element_catid">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LIST_CAT'), 'cat');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach3DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('cat')['value'];?>
"<?php if ($_smarty_tpl->getValue('cat')['value'] == $_smarty_tpl->getValue('SEARCH')['catid']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('cat')['title'];?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="flex-grow-0 flex-shrink-1 w-auto">
                    <label for="submit_search" class="form-label d-none d-sm-block">&nbsp;</label>
                    <div class="d-flex align-items-center">
                        <button id="submit_search" type="submit" class="btn btn-primary text-nowrap me-2"><i class="fa-solid fa-magnifying-glass"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('search');?>
</button>
                        <div data-bs-toggle="tooltip" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('search_title_adv');?>
" data-bs-trigger="hover" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('search_title_adv');?>
">
                            <button type="button" class="btn btn-secondary text-nowrap" data-bs-toggle="collapse" data-bs-target="#search-adv" aria-expanded="<?php echo $_smarty_tpl->getValue('SEARCH')['adv'] ? 'true' : 'false';?>
" aria-controls="search-adv"><i class="fa-solid fa-expand"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse<?php if ($_smarty_tpl->getValue('SEARCH')['adv']) {?> show<?php }?>" id="search-adv">
                <div class="row g-3 flex-xxl-nowrap pt-3">
                    <div class="col-6 col-lg-3 flex-xxl-fill">
                        <label for="element_sstatus" class="form-label text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('search_status');?>
</label>
                        <select class="form-select" name="sstatus" id="element_sstatus">
                            <option value="-1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('search_status_all');?>
</option>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SEARCH_STATUS'), 'st');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('st')->value) {
$foreach4DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('st')['key'];?>
"<?php if ($_smarty_tpl->getValue('st')['selected']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('st')['value'];?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-6 col-lg-3 flex-xxl-fill">
                        <label for="element_per_page" class="form-label text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('search_per_page');?>
</label>
                        <select class="form-select" name="per_page" id="element_per_page">
                            <?php
$_smarty_tpl->assign('per_page', null);$_smarty_tpl->tpl_vars['per_page']->step = 5;$_smarty_tpl->tpl_vars['per_page']->total = (int) ceil(($_smarty_tpl->tpl_vars['per_page']->step > 0 ? 500+1 - (5) : 5-(500)+1)/abs($_smarty_tpl->tpl_vars['per_page']->step));
if ($_smarty_tpl->tpl_vars['per_page']->total > 0) {
for ($_smarty_tpl->tpl_vars['per_page']->value = 5, $_smarty_tpl->tpl_vars['per_page']->iteration = 1;$_smarty_tpl->tpl_vars['per_page']->iteration <= $_smarty_tpl->tpl_vars['per_page']->total;$_smarty_tpl->tpl_vars['per_page']->value += $_smarty_tpl->tpl_vars['per_page']->step, $_smarty_tpl->tpl_vars['per_page']->iteration++) {
$_smarty_tpl->tpl_vars['per_page']->first = $_smarty_tpl->tpl_vars['per_page']->iteration === 1;$_smarty_tpl->tpl_vars['per_page']->last = $_smarty_tpl->tpl_vars['per_page']->iteration === $_smarty_tpl->tpl_vars['per_page']->total;?>
                            <option value="<?php echo $_smarty_tpl->getValue('per_page');?>
"<?php if ($_smarty_tpl->getValue('per_page') == $_smarty_tpl->getValue('PER_PAGE')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('per_page');?>
</option>
                            <?php }
}
?>
                        </select>
                    </div>
                    <div class="col-6 col-lg-3 flex-xxl-fill">
                        <label for="element_add_from" class="form-label text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_publ_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('from_date_short');?>
</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="add_from" id="element_add_from" value="<?php echo $_smarty_tpl->getValue('SEARCH')['addtime_from'];?>
" class="form-control datepicker" aria-describedby="element_add_from_btn" autocomplete="off">
                            <button class="btn btn-secondary" data-toggle="focusDate" type="button" id="element_add_from_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_publ_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('from_date_short');?>
"><i class="fa-regular fa-calendar"></i></button>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 flex-xxl-fill">
                        <label for="element_add_to" class="form-label text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_publ_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('to_date_short');?>
</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="add_to" id="element_add_to" value="<?php echo $_smarty_tpl->getValue('SEARCH')['addtime_to'];?>
" class="form-control datepicker" aria-describedby="element_add_to_btn" autocomplete="off">
                            <button class="btn btn-secondary" data-toggle="focusDate" type="button" id="element_add_to_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_publ_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('to_date_short');?>
"><i class="fa-regular fa-calendar"></i></button>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 flex-xxl-fill">
                        <label for="element_pub_from" class="form-label text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('search_public_time');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('from_date_short');?>
</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="pub_from" id="element_pub_from" value="<?php echo $_smarty_tpl->getValue('SEARCH')['publtime_from'];?>
" class="form-control datepicker" aria-describedby="element_pub_from_btn" autocomplete="off">
                            <button class="btn btn-secondary" data-toggle="focusDate" type="button" id="element_pub_from_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_publ_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('from_date_short');?>
"><i class="fa-regular fa-calendar"></i></button>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 flex-xxl-fill">
                        <label for="element_pub_to" class="form-label text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('search_public_time');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('to_date_short');?>
</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="pub_to" id="element_pub_to" value="<?php echo $_smarty_tpl->getValue('SEARCH')['publtime_to'];?>
" class="form-control datepicker" aria-describedby="element_pub_to_btn" autocomplete="off">
                            <button class="btn btn-secondary" data-toggle="focusDate" type="button" id="element_pub_to_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_publ_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('to_date_short');?>
"><i class="fa-regular fa-calendar"></i></button>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 flex-xxl-fill">
                        <label for="element_exp_from" class="form-label text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_exp_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('from_date_short');?>
</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="exp_from" id="element_exp_from" value="<?php echo $_smarty_tpl->getValue('SEARCH')['exptime_from'];?>
" class="form-control datepicker" aria-describedby="element_exp_from_btn" autocomplete="off">
                            <button class="btn btn-secondary" data-toggle="focusDate" type="button" id="element_exp_from_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_publ_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('from_date_short');?>
"><i class="fa-regular fa-calendar"></i></button>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 flex-xxl-fill">
                        <label for="element_exp_to" class="form-label text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_exp_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('to_date_short');?>
</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="exp_to" id="element_exp_to" value="<?php echo $_smarty_tpl->getValue('SEARCH')['exptime_to'];?>
" class="form-control datepicker" aria-describedby="element_exp_to_btn" autocomplete="off">
                            <button class="btn btn-secondary" data-toggle="focusDate" type="button" id="element_exp_to_btn" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_publ_date');?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('to_date_short');?>
"><i class="fa-regular fa-calendar"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="adv" value="<?php echo $_smarty_tpl->getValue('SEARCH')['adv'];?>
">
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive-lg table-card" id="list-news-items">
            <table class="table table-striped align-middle table-sticky mb-0">
                <thead class="text-muted">
                    <tr>
                        <th class="text-nowrap" style="width: 1%;">
                            <input type="checkbox" data-toggle="checkAll" name="checkAll[]" class="form-check-input m-0 align-middle" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_checkall');?>
">
                        </th>
                        <th class="text-nowrap" style="width: 25%;">
                            <a href="<?php echo $_smarty_tpl->getValue('BASE_URL_ORDER');
if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'title' || $_smarty_tpl->getValue('ARRAY_ORDER')['value'] != 'desc') {?>&amp;of=title<?php if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'title' || ( !true || empty($_smarty_tpl->getValue('ARRAY_ORDER')['value']))) {?>&amp;ov=asc<?php } else { ?>&amp;ov=desc<?php }
}?>" class="d-flex align-items-center justify-content-between">
                                <span class="me-1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('name');?>
</span>
                                <?php if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'title' || ( !true || empty($_smarty_tpl->getValue('ARRAY_ORDER')['value']))) {?><i class="fa-solid fa-sort"></i><?php } elseif ($_smarty_tpl->getValue('ARRAY_ORDER')['value'] == 'asc') {?><i class="fa-solid fa-sort-up"></i><?php } else { ?><i class="fa-solid fa-sort-down"></i><?php }?>
                            </a>
                        </th>
                        <th class="text-nowrap" style="width: 10%;">
                            <a href="<?php echo $_smarty_tpl->getValue('BASE_URL_ORDER');
if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'publtime' || $_smarty_tpl->getValue('ARRAY_ORDER')['value'] != 'desc') {?>&amp;of=publtime<?php if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'publtime' || ( !true || empty($_smarty_tpl->getValue('ARRAY_ORDER')['value']))) {?>&amp;ov=asc<?php } else { ?>&amp;ov=desc<?php }
}?>" class="d-flex align-items-center justify-content-between">
                                <span class="me-1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('search_public_time');?>
</span>
                                <?php if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'publtime' || ( !true || empty($_smarty_tpl->getValue('ARRAY_ORDER')['value']))) {?><i class="fa-solid fa-sort"></i><?php } elseif ($_smarty_tpl->getValue('ARRAY_ORDER')['value'] == 'asc') {?><i class="fa-solid fa-sort-up"></i><?php } else { ?><i class="fa-solid fa-sort-down"></i><?php }?>
                            </a>
                        </th>
                        <th class="text-nowrap" style="width: 10%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('author');?>
</th>
                        <th class="text-nowrap" style="width: 10%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('status');?>
</th>
                        <th class="text-nowrap" style="width: 1%;">
                            <a href="<?php echo $_smarty_tpl->getValue('BASE_URL_ORDER');
if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'hitstotal' || $_smarty_tpl->getValue('ARRAY_ORDER')['value'] != 'desc') {?>&amp;of=hitstotal<?php if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'hitstotal' || ( !true || empty($_smarty_tpl->getValue('ARRAY_ORDER')['value']))) {?>&amp;ov=asc<?php } else { ?>&amp;ov=desc<?php }
}?>" class="d-flex align-items-center justify-content-between">
                                <span class="me-1"><i class="fa-solid fa-eye" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('hitstotal');?>
" data-bs-toggle="tooltip" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('hitstotal');?>
" data-bs-trigger="hover"></i></span>
                                <?php if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'hitstotal' || ( !true || empty($_smarty_tpl->getValue('ARRAY_ORDER')['value']))) {?><i class="fa-solid fa-sort"></i><?php } elseif ($_smarty_tpl->getValue('ARRAY_ORDER')['value'] == 'asc') {?><i class="fa-solid fa-sort-up"></i><?php } else { ?><i class="fa-solid fa-sort-down"></i><?php }?>
                            </a>
                        </th>
                        <th class="text-nowrap" style="width: 1%;">
                            <a href="<?php echo $_smarty_tpl->getValue('BASE_URL_ORDER');
if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'hitscm' || $_smarty_tpl->getValue('ARRAY_ORDER')['value'] != 'desc') {?>&amp;of=hitscm<?php if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'hitscm' || ( !true || empty($_smarty_tpl->getValue('ARRAY_ORDER')['value']))) {?>&amp;ov=asc<?php } else { ?>&amp;ov=desc<?php }
}?>" class="d-flex align-items-center justify-content-between">
                                <span class="me-1"><i class="fa-solid fa-comments" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('numcomments');?>
" data-bs-toggle="tooltip" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('numcomments');?>
" data-bs-trigger="hover"></i></span>
                                <?php if ($_smarty_tpl->getValue('ARRAY_ORDER')['field'] != 'hitscm' || ( !true || empty($_smarty_tpl->getValue('ARRAY_ORDER')['value']))) {?><i class="fa-solid fa-sort"></i><?php } elseif ($_smarty_tpl->getValue('ARRAY_ORDER')['value'] == 'asc') {?><i class="fa-solid fa-sort-up"></i><?php } else { ?><i class="fa-solid fa-sort-down"></i><?php }?>
                            </a>
                        </th>
                        <th class="text-nowrap" style="width: 1%;">
                            <i class="fa-solid fa-tags" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('numtags');?>
" data-bs-toggle="tooltip" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('numtags');?>
" data-bs-trigger="hover"></i>
                        </th>
                        <th class="text-nowrap" style="width: 1%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('function');?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA'), 'row', false, 'key');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('row')->value) {
$foreach5DoElse = false;
?>
                    <tr>
                        <td class="indicator-<?php echo $_smarty_tpl->getValue('STATUS_INDICATOR')[$_smarty_tpl->getValue('row')['status_id']] ?? $_smarty_tpl->getValue('STATUS_INDICATOR')['----'];?>
">
                            <input type="checkbox" data-toggle="checkSingle" name="checkSingle[]" value="<?php echo $_smarty_tpl->getValue('row')['id'];?>
" class="form-check-input m-0 align-middle" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_checksingle');?>
"<?php if ($_smarty_tpl->getValue('row')['is_locked']) {?> disabled<?php }?>>
                        </td>
                        <td>
                            <div class="text-truncate-2">
                                <?php if ($_smarty_tpl->getValue('row')['tool_sort']) {?>
                                <a href="#" class="d-inline-block me-1 link-info" data-toggle="sortArticle" data-id="<?php echo $_smarty_tpl->getValue('row')['id'];?>
" data-checksess="<?php echo $_smarty_tpl->getValue('row')['checksess'];?>
" data-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('order_articles');?>
 &quot;<?php echo $_smarty_tpl->getValue('row')['title'];?>
&quot;" data-weight="<?php echo $_smarty_tpl->getValue('row')['weight'];?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('order_articles');?>
"><i class="fa-solid fa-sort" data-bs-toggle="tooltip" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('order_articles_number');?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('nformat')($_smarty_tpl->getValue('row')['weight']);?>
" data-bs-trigger="hover"></i></a>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('row')['is_editing']) {?>
                                <i class="fa-solid <?php if ($_smarty_tpl->getValue('row')['is_locked']) {?>fa-lock<?php } else { ?>fa-unlock<?php }?> me-1 text-warning" aria-label="<?php echo $_smarty_tpl->getValue('row')['user_editing'];?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('post_is_editing');?>
." data-bs-toggle="tooltip" data-bs-title="<?php echo $_smarty_tpl->getValue('row')['user_editing'];?>
 <?php echo $_smarty_tpl->getValue('LANG')->getModule('post_is_editing');?>
." data-bs-trigger="hover"></i>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('row')['status_id'] == 4) {?>
                                <i class="fa-solid fa-compass-drafting" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('status_4');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('status_4');?>
" data-bs-toggle="tooltip" data-bs-trigger="hover"></i>
                                <?php }?>
                                <a target="_blank" href="<?php echo $_smarty_tpl->getValue('row')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('row')['title'];?>
"><?php echo $_smarty_tpl->getValue('row')['title'];?>
</a>
                            </div>
                        </td>
                        <td><?php echo $_smarty_tpl->getValue('row')['publtime'];?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('row')['author'];?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('row')['status'];?>
</td>
                        <td class="text-center text-nowrap fw-medium"><?php echo $_smarty_tpl->getValue('row')['hitstotal'];?>
</td>
                        <td class="text-center text-nowrap fw-medium"><?php echo $_smarty_tpl->getValue('row')['hitscm'];?>
</td>
                        <td class="text-center text-nowrap fw-medium"><?php echo $_smarty_tpl->getValue('row')['numtags'];?>
</td>
                        <td>
                            <div class="input-group flex-nowrap">
                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('row')['feature']['edit'] ?? null)))) {?>
                                <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=content&amp;id=<?php echo $_smarty_tpl->getValue('row')['id'];?>
" class="btn btn-sm btn-secondary text-nowrap"><i class="fa-solid fa-pen"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('edit');?>
</a>
                                <?php }?>
                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden"><?php echo $_smarty_tpl->getValue('LANG')->getModule('function');?>
</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" data-toggle="copyArticleUrl" data-message="<?php echo $_smarty_tpl->getValue('LANG')->getModule('link_copied');?>
" data-clipboard-text="<?php echo $_smarty_tpl->getValue('row')['abs_link'];?>
"><i class="fa-solid fa-clipboard fa-fw text-center"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('copy_link');?>
</a></li>
                                    <?php if (!( !true || empty($_smarty_tpl->getValue('MCONFIG')['copy_news']))) {?>
                                    <li><a class="dropdown-item" href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=content&amp;copy=1&amp;id=<?php echo $_smarty_tpl->getValue('row')['id'];?>
"><i class="fa-solid fa-copy fa-fw text-center"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('title_copy_news');?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('row')['tool_excdata']) {?>
                                    <li><a class="dropdown-item" href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=excdata&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=send&amp;module=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;id=<?php echo $_smarty_tpl->getValue('row')['id'];?>
"><i class="fa-solid fa-paper-plane fa-fw text-center"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('send');?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('row')['show_history']) {?>
                                    <li><a class="dropdown-item" href="#" data-loadurl="<?php echo $_smarty_tpl->getValue('BASE_URL');?>
&amp;loadhistory=<?php echo $_smarty_tpl->getValue('row')['id'];?>
" data-toggle="historyArticle"><i class="fa-solid fa-clock-rotate-left fa-fw text-center"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('history');?>
</a></li>
                                    <?php }?>
                                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('row')['feature']['delete'] ?? null)))) {?>
                                    <li><a class="dropdown-item" href="#" data-toggle="delArticle" data-id="<?php echo $_smarty_tpl->getValue('row')['id'];?>
" data-checksess="<?php echo $_smarty_tpl->getValue('row')['checksess'];?>
"><i class="fa-solid fa-trash fa-fw text-center text-danger" data-icon="fa-trash"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
</a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer border-top">
        <div class="d-flex flex-wrap justify-content-between align-items-center">
            <div class="d-flex flex-wrap flex-sm-nowrap align-items-center">
                <div class="me-2">
                    <input type="checkbox" data-toggle="checkAll" name="checkAll[]" class="form-check-input m-0 align-middle" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_checkall');?>
">
                </div>
                <div class="input-group me-1 my-1">
                    <select id="element_action" class="form-select fw-150" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('select_actions');?>
" aria-describedby="element_action_btn">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ACTIONS'), 'action');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('action')->value) {
$foreach6DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('action')['value'];?>
"><?php echo $_smarty_tpl->getValue('action')['title'];?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <button class="btn btn-primary" type="button" id="element_action_btn" data-toggle="actionArticle" data-ctn="#list-news-items"><?php echo $_smarty_tpl->getValue('LANG')->getModule('action');?>
</button>
                </div>
            </div>
            <div class="pagination-wrap">
                <?php echo $_smarty_tpl->getValue('PAGINATION');?>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdSortArticle" tabindex="-1" aria-labelledby="mdSortArticleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-truncate" id="mdSortArticleLabel"><?php echo $_smarty_tpl->getValue('LANG')->getModule('order_articles');?>
</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label for="sortArticleCurrent" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('order_articles_number');?>
</label>
                        <input type="number" class="form-control" id="sortArticleCurrent" readonly>
                    </div>
                    <div class="col">
                        <label for="sortArticleNew" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('order_articles_new');?>
</label>
                        <input type="number" class="form-control" id="sortArticleNew" min="1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="sortArticleSave" type="button" class="btn btn-primary"><i class="fa-solid fa-check" data-icon="fa-check"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('save');?>
</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('cancel');?>
</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdHistoryArticle" tabindex="-1" aria-labelledby="mdHistoryArticleLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-truncate" id="mdHistoryArticleLabel"><?php echo $_smarty_tpl->getValue('LANG')->getModule('history');?>
</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
<?php }
}
