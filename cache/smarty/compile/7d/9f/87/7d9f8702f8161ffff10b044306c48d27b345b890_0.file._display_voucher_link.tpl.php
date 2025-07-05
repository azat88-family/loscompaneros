<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:26
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\slip\_display_voucher_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982b61a89b9_01653548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d9f8702f8161ffff10b044306c48d27b345b890' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\slip\\_display_voucher_link.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982b61a89b9_01653548 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['id_cart_rule']->value) {?>
    <a class="btn btn-link" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCartRules'), ENT_QUOTES, 'UTF-8', true);?>
&updatecart_rule&id_cart_rule=<?php echo $_smarty_tpl->tpl_vars['id_cart_rule']->value;?>
" target="_blank">
        #<?php echo $_smarty_tpl->tpl_vars['id_cart_rule']->value;?>

    </a>
<?php } else { ?>
    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminSlip'), ENT_QUOTES, 'UTF-8', true);?>
&generateVoucher=1&id_order_slip=<?php echo $_smarty_tpl->tpl_vars['row']->value['id_order_slip'];?>
" class="btn btn-default" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate voucher for credit slip'),$_smarty_tpl ) );?>
">
        <i class="icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate Voucher'),$_smarty_tpl ) );?>

    </a>
<?php }
}
}
