<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:50
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\modules\cheque\views\templates\hook\payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68698292506643_18695632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7699eb2bd95078d304dd9dc04214727be2a2b1ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\modules\\cheque\\views\\templates\\hook\\payment.tpl',
      1 => 1751743138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68698292506643_18695632 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl ) );?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl ) );?>
 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl ) );?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }
}
