<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:26
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\slip\_status_change_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982b6518ce4_25947976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '379230fb0dea55d10a9ee456bbc59d4de5d8772e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\slip\\_status_change_link.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982b6518ce4_25947976 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['status_change_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change Status'),$_smarty_tpl ) );?>
" class="change_status">
    <i class="icon-refresh"></i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change Status'),$_smarty_tpl ) );?>

</a>
<?php }
}
