<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:26
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\slip\_redeem_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982b63f75b3_28315263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37f051d1d26b712649da969212911f6f1f40e297' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\slip\\_redeem_status.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982b63f75b3_28315263 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['redeem_status']->value == OrderSlip::REDEEM_STATUS_REDEEMED) {?>
    <span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redeemed'),$_smarty_tpl ) );?>
</span>
<?php } else { ?>
    <span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active'),$_smarty_tpl ) );?>
</span>
<?php }
}
}
