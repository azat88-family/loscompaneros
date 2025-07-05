<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:37
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\helpers\list\list_action_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982c1606205_12150430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd297bf229cb55d40ad5d0e1ee62b41d525e559f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1751743119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982c1606205_12150430 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['confirm']->value))) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }
}
