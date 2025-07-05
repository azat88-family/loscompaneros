<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:08
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\orders\_select_payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982a4d52127_67749152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd73232ee6329ee38bbfade430e67d3eb4b2b5fa3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\orders\\_select_payment.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982a4d52127_67749152 (Smarty_Internal_Template $_smarty_tpl) {
?>
<datalist id="payment_module_name_list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'payment_module');
$_smarty_tpl->tpl_vars['payment_module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment_module']->value) {
$_smarty_tpl->tpl_vars['payment_module']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['payment_module']->value->displayName;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['payment_module']->value->name;?>
" data-payment-type="<?php echo $_smarty_tpl->tpl_vars['payment_module']->value->payment_type;?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</datalist>
<?php }
}
