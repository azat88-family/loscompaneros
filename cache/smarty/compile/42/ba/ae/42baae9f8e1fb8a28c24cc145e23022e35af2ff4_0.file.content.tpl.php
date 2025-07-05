<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:50
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\cms_content\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68698292191b58_94804316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42baae9f8e1fb8a28c24cc145e23022e35af2ff4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68698292191b58_94804316 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value))) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if ((isset($_smarty_tpl->tpl_vars['url_prev']->value))) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	<?php echo '</script'; ?>
>
<?php }
}
}
