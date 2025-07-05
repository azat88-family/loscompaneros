<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:57
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\modules_catalog\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982998c10c4_41999632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40220c0ee4fd6ed04263ff9a4f9955144aeac1cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\modules_catalog\\content.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:recomended-banner.tpl' => 1,
    'file:controllers/modules_catalog/page.tpl' => 1,
  ),
),false)) {
function content_686982998c10c4_41999632 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<?php $_smarty_tpl->_subTemplateRender('file:recomended-banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
	<div class="col-lg-12">
		<?php $_smarty_tpl->_subTemplateRender('file:controllers/modules_catalog/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div><?php }
}
