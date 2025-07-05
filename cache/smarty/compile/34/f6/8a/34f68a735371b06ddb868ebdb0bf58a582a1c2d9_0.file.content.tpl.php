<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:54
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\localization\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68698296c06a73_62745924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34f68a735371b06ddb868ebdb0bf58a582a1c2d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68698296c06a73_62745924 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['localization_form']->value))) {
echo $_smarty_tpl->tpl_vars['localization_form']->value;
}
if ((isset($_smarty_tpl->tpl_vars['localization_options']->value))) {
echo $_smarty_tpl->tpl_vars['localization_options']->value;
}
echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing default currency, we strongly recommend that you enable maintenance mode from Preferences > Maintenance page because any change in default currency requires manual adjustment of price of each room type.');
		});
	});
<?php echo '</script'; ?>
><?php }
}
