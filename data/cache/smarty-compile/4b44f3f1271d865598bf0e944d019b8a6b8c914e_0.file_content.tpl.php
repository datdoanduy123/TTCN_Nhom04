<?php
/* Smarty version 5.4.3, created on 2025-03-27 23:46:13
  from 'file:content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e580d54f5512_54794587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b44f3f1271d865598bf0e944d019b8a6b8c914e' => 
    array (
      0 => 'content.tpl',
      1 => 1743073457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e580d54f5512_54794587 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\news';
echo '<script'; ?>
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
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/jquery/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/flatpickr/flatpickr.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/language/flatpickr-<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
.js"><?php echo '</script'; ?>
>
<?php if (!$_smarty_tpl->getValue('IS_SUBMIT') && $_smarty_tpl->getValue('TOTAL_NEWS_CURRENT') == (defined('NV_MIN_MEDIUM_SYSTEM_ROWS') ? constant('NV_MIN_MEDIUM_SYSTEM_ROWS') : null) && $_smarty_tpl->getValue('DATA')['mode'] == 'add') {?>
<div class="alert alert-info" role="alert">
    <?php echo $_smarty_tpl->getValue('LANG')->getModule('large_sys_message',$_smarty_tpl->getSmarty()->getModifierCallback('dnumber')($_smarty_tpl->getValue('TOTAL_NEWS_CURRENT')));?>

</div>
<?php }
if (!( !$_smarty_tpl->hasVariable('ERROR') || empty($_smarty_tpl->getValue('ERROR')))) {?>
<div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('join')($_smarty_tpl->getValue('ERROR'),"<br />");?>
</div>
<?php }
if ($_smarty_tpl->getValue('RESTORE_ID') && !$_smarty_tpl->getValue('IS_SUBMIT')) {?>
<div class="alert alert-info d-flex align-items-center gap-1" role="alert">
    <div class="spinner-border spinner-border-sm" role="status">
        <span class="visually-hidden"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('wait_page_load');?>
</span>
    </div>
    <?php echo $_smarty_tpl->getValue('LANG')->getModule('history_recovering');?>

</div>
<?php }?>
<form id="form-news-content" method="post" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
" novalidate
    data-mdata="<?php echo $_smarty_tpl->getValue('MODULE_DATA');?>
" data-editor="<?php if ($_smarty_tpl->getValue('HAS_EDITOR')) {?>1<?php } else { ?>0<?php }?>"
    data-editor-hometext="<?php if ($_smarty_tpl->getValue('HAS_EDITOR') && !( !true || empty($_smarty_tpl->getValue('MCONFIG')['htmlhometext']))) {?>1<?php } else { ?>0<?php }?>"
    data-auto-submit="<?php if ($_smarty_tpl->getValue('RESTORE_ID') && !$_smarty_tpl->getValue('IS_SUBMIT')) {?>1<?php } else { ?>0<?php }?>"
    data-auto-save="<?php if (!( !true || empty($_smarty_tpl->getValue('MCONFIG')['auto_save']))) {?>1<?php } else { ?>0<?php }?>"
    data-is-edit="<?php if ($_smarty_tpl->getValue('DATA')['mode'] == 'edit') {?>1<?php } else { ?>0<?php }?>"
    data-id="<?php echo $_smarty_tpl->getValue('DATA')['id'];?>
"
    data-draft-id="<?php echo $_smarty_tpl->getValue('DATA')['draft_id'] ?? 0;?>
"
    data-last-data-saved="<?php echo (defined('NV_CURRENTTIME') ? constant('NV_CURRENTTIME') : null);?>
"
    data-notice-empty-alias="<?php echo $_smarty_tpl->getValue('LANG')->getModule('alias_empty_notice');?>
"
    data-notice-empty-tags="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_tags_empty');?>
.<?php if (!( !true || empty($_smarty_tpl->getValue('MCONFIG')['auto_tags']))) {?> <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_tags_empty_auto');?>
.<?php }?>"
>
    <div class="row g-3">
        <div class="col-lg-8 col-xxl-9">
            <div class="alert alert-danger d-none" id="show_error"></div>
            <?php if (!( !$_smarty_tpl->hasVariable('REPORTLIST') || empty($_smarty_tpl->getValue('REPORTLIST')))) {?>
            <div class="card border-danger border-1 mb-3">
                <div class="card-header border-0 text-bg-danger fw-medium" role="button" data-bs-toggle="collapse" data-bs-target="#reportlist-body" aria-expanded="<?php echo $_smarty_tpl->getValue('REPORT_ID') ? 'true' : 'false';?>
" aria-controls="reportlist-body">
                    <i class="fa-solid fa-triangle-exclamation"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('report');?>
 (<strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('dnumber')($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('REPORTLIST')));?>
</strong>)
                </div>
                <div class="collapse<?php echo $_smarty_tpl->getValue('REPORT_ID') ? ' show' : '';?>
" id="reportlist-body">
                    <div class="accordion list-report" id="reportlist-items" data-del-confirm="<?php echo $_smarty_tpl->getValue('LANG')->getModule('report_del_confirm');?>
">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('REPORTLIST'), 'report');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('report')->value) {
$foreach0DoElse = false;
?>
                        <div class="accordion-item border-start-0 border-end-0">
                            <div class="accordion-header">
                                <button class="accordion-button fw-medium px-3<?php echo $_smarty_tpl->getValue('REPORT_ID') == $_smarty_tpl->getValue('report')['id'] ? '' : ' collapsed';?>
" type="button" data-bs-toggle="collapse" data-bs-target="#reportlist-item-<?php echo $_smarty_tpl->getValue('report')['id'];?>
" aria-expanded="<?php echo $_smarty_tpl->getValue('REPORT_ID') == $_smarty_tpl->getValue('report')['id'] ? 'true' : 'false';?>
" aria-controls="reportlist-item-<?php echo $_smarty_tpl->getValue('report')['id'];?>
">
                                    <?php $_smarty_tpl->assign('report_title', $_smarty_tpl->getSmarty()->getModifierCallback('text_split')($_smarty_tpl->getValue('report')['orig_content'],50), false, NULL);?>
                                    <?php echo $_smarty_tpl->getValue('report_title')[0];
echo !( !true || empty($_smarty_tpl->getValue('report_title')[1])) ? '...' : '';?>

                                </button>
                            </div>
                            <div id="reportlist-item-<?php echo $_smarty_tpl->getValue('report')['id'];?>
" class="accordion-collapse collapse<?php echo $_smarty_tpl->getValue('REPORT_ID') == $_smarty_tpl->getValue('report')['id'] ? ' show' : '';?>
" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-3">
                                    <span class="bg-body-tertiary border rounded-1 p-1">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ddatetime')($_smarty_tpl->getValue('report')['post_time']);?>
, <?php echo $_smarty_tpl->getValue('LANG')->getModule('post_ip');?>
: <?php echo $_smarty_tpl->getValue('report')['post_ip'];
if (!( !true || empty($_smarty_tpl->getValue('report')['post_email']))) {?>, <?php echo $_smarty_tpl->getValue('LANG')->getModule('post_email');?>
: <?php echo $_smarty_tpl->getValue('report')['post_email'];
}?>
                                    </span>
                                    <div class="mb-3 mt-3">
                                        <div class="mb-1 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('error_text');?>
:</div>
                                        <div class="bg-danger-subtle text-danger-emphasis p-2 rounded-2"><?php echo $_smarty_tpl->getValue('report')['orig_content'];?>
</div>
                                    </div>
                                    <?php if (!( !true || empty($_smarty_tpl->getValue('report')['repl_content']))) {?>
                                    <div class="mb-3">
                                        <div class="mb-1 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('proposal_text');?>
:</div>
                                        <div class="bg-info-subtle text-info-emphasis p-2 rounded-2"><?php echo $_smarty_tpl->getValue('report')['repl_content'];?>
</div>
                                    </div>
                                    <?php }?>
                                    <div class="hstack gap-2 justify-content-end flex-wrap">
                                        <button type="button" class="btn btn-secondary" data-toggle="report_del_action" data-send-mail="no" data-id="<?php echo $_smarty_tpl->getValue('report')['id'];?>
"><i class="fa-solid fa-trash-can text-danger" data-icon="fa-trash-can"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
</button>
                                        <button type="button" class="btn btn-secondary" data-toggle="report_del_action" data-send-mail="yes" data-id="<?php echo $_smarty_tpl->getValue('report')['id'];?>
"><i class="fa-solid fa-trash-can-arrow-up text-danger" data-icon="fa-trash-can-arrow-up"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('report_delete');?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="idtitle" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('name');?>
 <span class="text-danger">(*)</span>:</label>
                        <div class="position-relative">
                            <input type="text" class="form-control required" id="idtitle" name="title" value="<?php echo $_smarty_tpl->getValue('DATA')['title'];?>
" maxlength="250">
                            <div class="invalid-tooltip"><?php echo $_smarty_tpl->getValue('LANG')->getModule('error_title');?>
</div>
                        </div>
                        <div class="form-text"> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('length_characters');?>
: <span id="titlelength" class="fw-bold text-danger">0</span>. <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('title_suggest_max');?>
.</div>
                    </div>
                    <div class="mb-3">
                        <label for="idalias" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('alias');?>
:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="idalias" name="alias" value="<?php echo $_smarty_tpl->getValue('DATA')['alias'];?>
" maxlength="250">
                            <button class="btn btn-secondary" type="button" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('alias_get');?>
" data-toggle="getaliaspost" data-auto-alias="<?php echo ( !true || empty($_smarty_tpl->getValue('DATA')['alias'])) ? '1' : '0';?>
" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('alias_get');?>
"><i class="fa-solid fa-rotate"></i></button>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="homeimg" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_homeimg');?>
:</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" name="homeimg" id="homeimg" value="<?php echo $_smarty_tpl->getValue('DATA')['homeimgfile'];?>
">
                                    <button type="button" class="btn btn-secondary" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_image');?>
" data-toggle="selectfile" data-target="homeimg" data-path="<?php echo $_smarty_tpl->getValue('UPLOADS_DIR_USER');?>
" data-currentpath="<?php echo $_smarty_tpl->getValue('UPLOAD_CURRENT');?>
" data-type="image" data-alt="homeimgalt"><i class="fa-solid fa-file-image"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="imgposition" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('imgposition');?>
:</label>
                                <select class="form-select" name="imgposition" id="imgposition">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ARRAY_IMGPOSITION'), 'value', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getValue('key');?>
" <?php if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('DATA')['imgposition']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('value');?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="homeimgalt" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_homeimgalt');?>
:</label>
                        <input type="text" class="form-control" id="homeimgalt" name="homeimgalt" value="<?php echo $_smarty_tpl->getValue('DATA')['homeimgalt'];?>
" maxlength="255">
                    </div>
                    <div class="mb-3">
                        <label for="<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
_hometext" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_hometext');?>
:</label>
                        <?php if ($_smarty_tpl->getValue('HAS_EDITOR') && !( !true || empty($_smarty_tpl->getValue('MCONFIG')['htmlhometext']))) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('editor')('hometext','100%','100px',$_smarty_tpl->getValue('DATA')['hometext'],'responsive',$_smarty_tpl->getValue('UPLOADS_DIR_USER'),$_smarty_tpl->getValue('UPLOAD_CURRENT'));?>

                        <?php } else { ?>
                        <textarea class="form-control" id="<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
_hometext" name="hometext" rows="5"><?php echo $_smarty_tpl->getValue('DATA')['hometext'];?>
</textarea>
                        <?php }?>
                        <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_notehome');?>
</div>
                    </div>
                    <div class="mb-0">
                        <label for="<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
_bodyhtml" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_bodytext');?>
<span data-toggle="required-bodyhtml"<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['external_link']))) {?> class="d-none"<?php }?>> <span class="text-danger">(*)</span></span>:</label>
                        <div class="position-relative">
                            <div data-toggle="container-bodyhtml">
                                <?php if ($_smarty_tpl->getValue('HAS_EDITOR')) {?>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('editor')('bodyhtml','100%','400px',$_smarty_tpl->getValue('DATA')['bodyhtml'],'',$_smarty_tpl->getValue('UPLOADS_DIR_USER'),$_smarty_tpl->getValue('UPLOAD_CURRENT'));?>

                                <?php } else { ?>
                                <textarea class="form-control required" id="<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
_bodyhtml" name="bodyhtml" rows="15"><?php echo $_smarty_tpl->getValue('DATA')['bodyhtml'];?>
</textarea>
                                <?php }?>
                            </div>
                            <div class="invalid-tooltip"><?php echo $_smarty_tpl->getValue('LANG')->getModule('error_bodytext');?>
</div>
                        </div>
                        <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_bodytext_note');?>
</div>
                    </div>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header fw-medium fs-5">
                            <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_topic');?>

                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="newcontent_topicid" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('admin_topic_sl');?>
:</label>
                                <select class="form-select" id="newcontent_topicid" name="topicid">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA_TOPICS'), 'value', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getValue('key');?>
"<?php if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('DATA')['topicid']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('value');?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="mb-0">
                                <label for="topictext" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('admin_topic_manual');?>
:</label>
                                <input type="text" class="form-control" id="topictext" name="topictext" value="<?php echo $_smarty_tpl->getValue('DATA')['topictext'];?>
" maxlength="255">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header fw-medium fs-5">
                            <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_sourceid');?>

                        </div>
                        <div class="card-body">
                            <div class="mb-3 position-relative">
                                <label for="newcontent_sourceid" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_sourceid_guide');?>
:</label>
                                <input type="text" class="form-control" id="newcontent_sourceid" name="sourcetext" maxlength="255" value="<?php echo $_smarty_tpl->getValue('DATA')['sourcetext'];?>
">
                            </div>
                            <div class="mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="external_link" id="external_link"<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['external_link']))) {?> checked<?php }?>>
                                    <label class="form-check-label" for="external_link">
                                        <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_external_link');?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header fw-medium fs-5">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('fileattach');?>

                </div>
                <div class="card-body">
                    <div id="newcontent-fileattach" class="row g-2">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('FILES'), 'file');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach3DoElse = false;
?>
                        <div class="col-md-6 item">
                            <div class="input-group">
                                <input class="form-control" type="text" name="files[]" id="file_<?php echo $_smarty_tpl->getValue('file')['id'];?>
" value="<?php echo $_smarty_tpl->getValue('file')['value'];?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('fileupload');?>
">
                                <button type="button" data-toggle="selectfile" data-target="file_<?php echo $_smarty_tpl->getValue('file')['id'];?>
" data-path="<?php echo $_smarty_tpl->getValue('UPLOAD_CURRENT');?>
" data-currentpath="<?php echo $_smarty_tpl->getValue('UPLOAD_CURRENT');?>
" data-type="file" class="btn btn-primary" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_file');?>
"><i class="fa-solid fa-folder-open"></i></button>
                                <button type="button" class="btn btn-secondary" data-toggle="del_file" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
"><i class="fa-solid fa-xmark text-danger"></i></button>
                                <button type="button" class="btn btn-secondary" data-toggle="add_file" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('add');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('add');?>
"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header fw-medium fs-5">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('localization');?>

                </div>
                <div class="card-body">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="enable_localization" value="1" id="enable_localization"<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['localversions']))) {?> checked<?php }?>>
                        <label class="form-check-label" for="enable_localization"><?php echo $_smarty_tpl->getValue('LANG')->getModule('enable_localization');?>
</label>
                    </div>
                    <?php $_smarty_tpl->assign('localversions', $_smarty_tpl->getValue('DATA')['localversions'], false, NULL);?>
                    <?php if (( !$_smarty_tpl->hasVariable('localversions') || empty($_smarty_tpl->getValue('localversions')))) {?>
                    <?php $_smarty_tpl->assign('localversions', array(''=>''), false, NULL);?>
                    <?php }?>
                    <div class="collapse<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['localversions']))) {?> show<?php }?>" id="localization_sector">
                        <div class="pt-3">
                            <div class="locallist mb-3 vstack gap-2">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('localversions'), 'url', false, 'code');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('url')->value) {
$foreach4DoElse = false;
?>
                                <div class="localitem d-flex gap-2 align-items-center">
                                    <select class="form-select fw-150" name="locallang[]">
                                        <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('select_lang');?>
</option>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LANGUES'), 'value', false, 'lang');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lang')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach5DoElse = false;
?>
                                        <option value="<?php echo $_smarty_tpl->getValue('lang');?>
"<?php if ($_smarty_tpl->getValue('lang') == $_smarty_tpl->getValue('code')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('value')['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="flex-grow-1 flex-shrink-1">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="locallink[]" value="<?php echo $_smarty_tpl->getValue('url');?>
" placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('local_url');?>
..." aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('local_url');?>
...">
                                            <button class="btn btn-secondary" type="button" data-toggle="del_local" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
"><i class="fa-solid fa-xmark text-danger"></i></button>
                                            <button class="btn btn-secondary" type="button" data-toggle="add_local" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('add');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('add');?>
"><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                            <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('select_lang_note');?>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xxl-3">
            <div class="card mb-3">
                <div class="card-header fw-medium fs-5">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_cat');?>
 <span class="text-danger">(*)</span>
                </div>
                <div class="pb-1 position-relative">
                    <div class="position-relative maxh-300 overflow-hidden catids-items" data-nv-toggle="scroll">
                        <ul class="list-group list-group-flush" data-toggle="catids">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LIST_CATS'), 'value', false, 'key');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach6DoElse = false;
?>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between gap-1">
                                    <div style="padding-left: <?php echo $_smarty_tpl->getValue('value')['space']*16;?>
px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" data-toggle="contentCatids" name="catids[]" value="<?php echo $_smarty_tpl->getValue('value')['catid'];?>
" id="catid_<?php echo $_smarty_tpl->getValue('value')['catid'];?>
" <?php if ($_smarty_tpl->getValue('value')['checked']) {?> checked<?php }
if ($_smarty_tpl->getValue('value')['disabled']) {?> disabled<?php }?>>
                                            <label class="form-check-label" for="catid_<?php echo $_smarty_tpl->getValue('value')['catid'];?>
">
                                                <?php echo $_smarty_tpl->getValue('value')['title'];?>

                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <input class="form-check-input<?php if (( !true || empty($_smarty_tpl->getValue('value')['visible']))) {?> invisible<?php }?>" type="radio" name="catid" value="<?php echo $_smarty_tpl->getValue('value')['catid'];?>
"<?php if ($_smarty_tpl->getValue('value')['catid'] == $_smarty_tpl->getValue('DATA')['catid']) {?> checked<?php }?> aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_checkcat');?>
">
                                    </div>
                                </div>
                            </li>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                    <div class="invalid-tooltip"><?php echo $_smarty_tpl->getValue('LANG')->getModule('error_cat');?>
</div>
                </div>
            </div>
            <?php if (!( !$_smarty_tpl->hasVariable('LIST_BLOCKS') || empty($_smarty_tpl->getValue('LIST_BLOCKS')))) {?>
            <div class="card mb-3">
                <div class="card-header fw-medium fs-5">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_block');?>

                </div>
                <div class="card-body">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LIST_BLOCKS'), 'value', false, 'key');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach7DoElse = false;
?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="<?php echo $_smarty_tpl->getValue('key');?>
" name="bids[]" id="bids_<?php echo $_smarty_tpl->getValue('key');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('key'),$_smarty_tpl->getValue('DATA_BLOCKS'))) {?> checked<?php }?>>
                        <label class="form-check-label" for="bids_<?php echo $_smarty_tpl->getValue('key');?>
">
                            <?php echo $_smarty_tpl->getValue('value');?>

                        </label>
                    </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <?php }?>
            <div class="card mb-3">
                <div class="card-header py-2">
                    <div class="d-flex gap-2 justify-content-between align-items-center">
                        <div class="fw-medium fs-5 text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_keyword');?>
</div>
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('keywords_auto_create');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('keywords_auto_create');?>
" data-toggle="keywords_auto_create"><i class="fa-solid fa-key" data-icon="fa-key"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <select id="newcontent_keywords" class="form-control" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_keyword');?>
" name="keywords[]" multiple data-placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('input_keyword');?>
">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA')['keywords'], 'value');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach8DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('value');?>
" selected><?php echo $_smarty_tpl->getValue('value');?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header py-2">
                    <div class="d-flex gap-2 justify-content-between align-items-center">
                        <div class="fw-medium fs-5 text-truncate"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_tag');?>
</div>
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('tags_auto_create');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('tags_auto_create');?>
" data-toggle="tags_auto_create"><i class="fa-solid fa-tags" data-icon="fa-tags"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <select id="newcontent_tags" class="form-control" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_tag');?>
" name="tags[]" multiple data-placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('input_tag');?>
">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA')['tags'], 'value');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value) {
$foreach9DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('value');?>
" selected><?php echo $_smarty_tpl->getValue('value');?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header fw-medium fs-5">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('author');?>

                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="newcontent_internal_authors" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_internal_author');?>
:</label>
                        <select id="newcontent_internal_authors" class="form-control" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_internal_author');?>
" name="internal_authors[]" multiple data-placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('input_pseudonym');?>
">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA')['internal_authors'], 'author_id');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('author_id')->value) {
$foreach10DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('author_id');?>
" selected><?php ob_start();
echo $_smarty_tpl->getValue('AUTHORS_LIST')[$_smarty_tpl->getValue('author_id')]['pseudonym'];
$_prefixVariable1 = ob_get_clean();
echo (true && (true && null !== ($_smarty_tpl->getValue('AUTHORS_LIST')[$_smarty_tpl->getValue('author_id')] ?? null))) ? $_prefixVariable1 : 'N/A';?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="mb-0">
                        <label for="content_author" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_author');?>
:</label>
                        <input type="text" class="form-control" id="content_author" name="author" value="<?php echo $_smarty_tpl->getValue('DATA')['author'];?>
" maxlength="255">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header fw-medium fs-5">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('related_articles');?>

                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <select id="newcontent_related_ids" data-id="<?php echo $_smarty_tpl->getValue('DATA')['id'];?>
" class="form-control" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('related_articles');?>
" name="related_ids[]" multiple data-placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('related_articles_ph');?>
">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('RELATED_NEWS'), 'news');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('news')->value) {
$foreach11DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('news')['id'];?>
" selected><?php echo $_smarty_tpl->getValue('news')['title'];?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="mb-0">
                        <label for="related_pos" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('showtooltip_position');?>
:</label>
                        <select id="related_pos" name="related_pos" class="form-select">
                            <?php
$_smarty_tpl->assign('pos', null);$_smarty_tpl->tpl_vars['pos']->step = 1;$_smarty_tpl->tpl_vars['pos']->total = (int) ceil(($_smarty_tpl->tpl_vars['pos']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['pos']->step));
if ($_smarty_tpl->tpl_vars['pos']->total > 0) {
for ($_smarty_tpl->tpl_vars['pos']->value = 0, $_smarty_tpl->tpl_vars['pos']->iteration = 1;$_smarty_tpl->tpl_vars['pos']->iteration <= $_smarty_tpl->tpl_vars['pos']->total;$_smarty_tpl->tpl_vars['pos']->value += $_smarty_tpl->tpl_vars['pos']->step, $_smarty_tpl->tpl_vars['pos']->iteration++) {
$_smarty_tpl->tpl_vars['pos']->first = $_smarty_tpl->tpl_vars['pos']->iteration === 1;$_smarty_tpl->tpl_vars['pos']->last = $_smarty_tpl->tpl_vars['pos']->iteration === $_smarty_tpl->tpl_vars['pos']->total;?>
                            <option value="<?php echo $_smarty_tpl->getValue('pos');?>
"<?php if ($_smarty_tpl->getValue('pos') == $_smarty_tpl->getValue('DATA')['related_pos']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('LANG')->getModule("related_articles_p".((string)$_smarty_tpl->getValue('pos')));?>
</option>
                            <?php }
}
?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header fw-medium fs-5">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_extra');?>

                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" role="switch" name="inhome" value="1" id="inhome" <?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['inhome']))) {?> checked<?php }?>>
                            <label class="form-check-label" for="inhome">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_inhome');?>

                            </label>
                        </div>
                        <?php if (!( !true || empty($_smarty_tpl->getValue('MCONFIG')['allowed_rating']))) {?>
                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" role="switch" name="allowed_rating" value="1" id="allowed_rating" <?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['allowed_rating']))) {?> checked<?php }?>>
                            <label class="form-check-label" for="allowed_rating">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_allowed_rating');?>

                            </label>
                        </div>
                        <?php } else { ?>
                        <input type="hidden" name="allowed_rating" value="<?php echo $_smarty_tpl->getValue('DATA')['allowed_rating'];?>
">
                        <?php }?>
                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" role="switch" name="allowed_send" value="1" id="allowed_send" <?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['allowed_send']))) {?> checked<?php }?>>
                            <label class="form-check-label" for="allowed_send">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_allowed_send');?>

                            </label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" role="switch" name="allowed_print" value="1" id="allowed_print" <?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['allowed_print']))) {?> checked<?php }?>>
                            <label class="form-check-label" for="allowed_print">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_allowed_print');?>

                            </label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" role="switch" name="allowed_save" value="1" id="allowed_save" <?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['allowed_save']))) {?> checked<?php }?>>
                            <label class="form-check-label" for="allowed_save">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_allowed_save');?>

                            </label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" role="switch" name="copyright" value="1" id="copyright" <?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['copyright']))) {?> checked<?php }?>>
                            <label class="form-check-label" for="copyright">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_copyright');?>

                            </label>
                        </div>
                    </div>
                    <div class="mb-0">
                        <label for="auto_nav" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('auto_nav');?>
: <i class="fa-solid fa-circle-info text-info" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('auto_nav_note');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('auto_nav_note');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('auto_nav_note');?>
"></i></label>
                        <select class="form-select" name="auto_nav" id="auto_nav">
                            <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (0) : 0-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                            <option value="<?php echo $_smarty_tpl->getValue('i');?>
"<?php if ($_smarty_tpl->getValue('i') == $_smarty_tpl->getValue('DATA')['auto_nav']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('LANG')->getModule("auto_nav".((string)$_smarty_tpl->getValue('i')));?>
</option>
                            <?php }
}
?>
                        </select>
                    </div>
                </div>
            </div>
            <?php if (!( !true || empty($_smarty_tpl->getValue('MCONFIG')['instant_articles_active']))) {?>
            <div class="card mb-3">
                <div class="card-header fw-medium fs-5">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_insart');?>

                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="instant_active" name="instant_active"<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['instant_active']))) {?> checked<?php }?>>
                            <label class="form-check-label" for="instant_active">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_instant_active');?>

                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="instant_template" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_instant_template');?>
:</label>
                        <input type="text" class="form-control" id="instant_template" name="instant_template" value="<?php echo $_smarty_tpl->getValue('DATA')['instant_template'];?>
" maxlength="255" placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('content_instant_templatenote');?>
">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="instant_creatauto" name="instant_creatauto"<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['instant_creatauto']))) {?> checked<?php }?>>
                        <label class="form-check-label" for="instant_creatauto">
                            <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_instant_creatauto');?>

                        </label>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="accordion mb-3" id="newcontent-advanced-options">
        <div class="accordion-item">
            <div class="accordion-header">
                <button class="accordion-button fw-medium fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#newcontent-advanced-body" aria-expanded="false" aria-controls="newcontent-advanced-body">
                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_advfeature');?>

                </button>
            </div>
            <div id="newcontent-advanced-body" class="accordion-collapse collapse" data-bs-parent="#newcontent-advanced-options">
                <div class="accordion-body pb-0">
                    <div class="row g-3">
                        <div class="col-xl-4 col-xxl-3">
                            <div class="mb-3">
                                <label for="idtitlesite" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('titlesite');?>
:</label>
                                <input type="text" class="form-control" id="idtitlesite" name="titlesite" value="<?php echo $_smarty_tpl->getValue('DATA')['titlesite'];?>
" maxlength="250">
                                <div class="form-text"> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('length_characters');?>
: <span id="titlesitelength" class="fw-bold text-danger">0</span>. <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('title_suggest_max');?>
.</div>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_description');?>
:</label>
                                <textarea class="form-control" id="description" name="description"><?php echo $_smarty_tpl->getValue('DATA')['description'];?>
</textarea>
                                <div class="form-text"> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('length_characters');?>
: <span id="descriptionlength" class="fw-bold text-danger">0</span>. <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('description_suggest_max');?>
.</div>
                            </div>
                        </div>
                        <?php if (!( !$_smarty_tpl->hasVariable('ARRAY_VOICES') || empty($_smarty_tpl->getValue('ARRAY_VOICES')))) {?>
                        <div class="col-lg-6 col-xl-4 col-xxl-3">
                            <div class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_voice');?>
:</div>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ARRAY_VOICES'), 'value', false, 'key');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach12DoElse = false;
?>
                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-text fw-125">
                                        <div class="text-truncate" aria-label="<?php echo $_smarty_tpl->getValue('value')['title'];?>
" title="<?php echo $_smarty_tpl->getValue('value')['title'];?>
" id="lbl_voice_<?php echo $_smarty_tpl->getValue('value')['id'];?>
"><?php echo $_smarty_tpl->getValue('value')['title'];?>
</div>
                                    </div>
                                    <input class="form-control" type="text" id="voice_<?php echo $_smarty_tpl->getValue('value')['id'];?>
" name="voice_<?php echo $_smarty_tpl->getValue('value')['id'];?>
" value="<?php echo $_smarty_tpl->getValue('value')['value'];?>
" aria-describedby="lbl_voice_<?php echo $_smarty_tpl->getValue('value')['id'];?>
">
                                    <button type="button" data-toggle="selectfile" data-target="voice_<?php echo $_smarty_tpl->getValue('value')['id'];?>
" data-path="<?php echo $_smarty_tpl->getValue('UPLOADS_DIR_USER');?>
" data-currentpath="<?php echo $_smarty_tpl->getValue('UPLOAD_CURRENT');?>
" data-type="file" class="btn btn-secondary" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_file');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('browse_file');?>
"><i class="fa-regular fa-folder-open"></i></button>
                                </div>
                            </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                        <?php }?>
                        <div class="col-lg-6 col-xl-4 col-xxl-3">
                            <div class="mb-3">
                                <label for="layout_func" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('pick_layout');?>
:</label>
                                <select name="layout_func" id="layout_func" class="form-select">
                                    <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('default_layout');?>
</option>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ARRAY_LAYOUT'), 'layout');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('layout')->value) {
$foreach13DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getValue('layout');?>
"<?php if ($_smarty_tpl->getValue('layout') == $_smarty_tpl->getValue('DATA')['layout_func']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('layout');?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="publ_date" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_publ_date');?>
:</label>
                                <input type="text" name="publ_date" id="publ_date" value="<?php echo $_smarty_tpl->getValue('DATA')['publ_date'];?>
" class="form-control" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="exp_date" class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_exp_date');?>
:</label>
                                <input type="text" name="exp_date" id="exp_date" value="<?php echo $_smarty_tpl->getValue('DATA')['exp_date'];?>
" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="1" name="archive" id="content_archive"<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['archive']))) {?> checked<?php }?>>
                                <label class="form-check-label" for="content_archive">
                                    <?php echo $_smarty_tpl->getValue('LANG')->getModule('content_archive');?>

                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 col-xxl-3">
                            <div class="mb-3">
                                <div class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('group_view');?>
:</div>
                                <div class="position-relative maxh-250 overflow-hidden" data-nv-toggle="scroll">
                                    <div class="glists">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('GROUPS_LIST'), 'value', false, 'key');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach14DoElse = false;
?>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $_smarty_tpl->getValue('key');?>
" name="group_view[]" id="group_view_<?php echo $_smarty_tpl->getValue('key');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('key'),$_smarty_tpl->getValue('DATA')['group_view'])) {?> checked<?php }?>>
                                            <label class="form-check-label" for="group_view_<?php echo $_smarty_tpl->getValue('key');?>
">
                                                <?php echo $_smarty_tpl->getValue('value');?>

                                            </label>
                                        </div>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                                <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('group_view_note');?>
</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 col-xxl-3">
                            <div class="mb-3">
                                <div class="form-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_allowed_comm');?>
:</div>
                                <div class="position-relative maxh-250 overflow-hidden" data-nv-toggle="scroll">
                                    <div class="glists">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('GROUPS_LIST'), 'value', false, 'key');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach15DoElse = false;
?>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $_smarty_tpl->getValue('key');?>
" name="allowed_comm[]" id="allowed_comm_<?php echo $_smarty_tpl->getValue('key');?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('key'),$_smarty_tpl->getValue('DATA')['allowed_comm'])) {?> checked<?php }?>>
                                            <label class="form-check-label" for="allowed_comm_<?php echo $_smarty_tpl->getValue('key');?>
">
                                                <?php echo $_smarty_tpl->getValue('value');?>

                                            </label>
                                        </div>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->getValue('MCONFIG')['allowed_comm'] != -1) {?>
                                <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('content_note_comm');?>
</div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="1" name="save">
    <input type="hidden" value="<?php echo (defined('NV_CHECK_SESSION') ? constant('NV_CHECK_SESSION') : null);?>
" name="checkss">
    <input type="hidden" value="<?php echo $_smarty_tpl->getValue('ISCOPY');?>
" name="copy">
    <input type="hidden" value="<?php echo $_smarty_tpl->getValue('DATA')['id'];?>
" name="id">
    <input type="hidden" value="<?php echo $_smarty_tpl->getValue('DATA')['referer'];?>
" name="referer">
    <input type="hidden" value="<?php echo $_smarty_tpl->getValue('RESTORE_ID');?>
" name="restore">
    <input type="hidden" value="<?php echo $_smarty_tpl->getValue('RESTORE_HASH');?>
" name="restorehash">
    <input type="hidden" value="<?php echo $_smarty_tpl->getValue('DATA')['uuid'];?>
" name="uuid">
    <div class="hstack gap-2 flex-wrap justify-content-center">
        <?php if ($_smarty_tpl->getValue('DATA')['status'] == 1 && $_smarty_tpl->getValue('DATA')['id'] > 0) {?>
        <button class="btn btn-primary submit-post" type="submit" name="statussave" value="1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('save');?>
</button>
        <?php } else { ?>
        <?php if (!( !$_smarty_tpl->hasVariable('CATS_PUBLIC') || empty($_smarty_tpl->getValue('CATS_PUBLIC')))) {?>
        <button class="btn btn-primary submit-post" type="submit" name="status1" value="1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('publtime');?>
</button>
        <?php }?>
        <?php if (!( !$_smarty_tpl->hasVariable('CATS_CENSOR') || empty($_smarty_tpl->getValue('CATS_CENSOR'))) && $_smarty_tpl->getValue('DATA')['status'] != 8) {?>
        <button class="btn btn-primary submit-post" type="submit" name="status8" value="1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('status_8');?>
</button>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('DATA')['status'] != 5) {?>
        <button class="btn btn-primary submit-post" type="submit" name="status5" value="1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('status_5');?>
</button>
        <?php }?>
        <button class="btn btn-warning submit-post" type="submit" name="status4" value="1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('save_temp');?>
</button>
        <?php }?>
    </div>
</form>
<div class="alert alert-warning mt-3 mb-0 d-none" role="alert" id="realtime-notice"></div>
<?php }
}
