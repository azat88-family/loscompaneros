<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:49
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\modules\bankwire\views\templates\hook\payment_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982911698e7_29619142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f1a96afbb8b8ba414a357e10b96cdf33ed36d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\modules\\bankwire\\views\\templates\\hook\\payment_return.tpl',
      1 => 1751743138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982911698e7_29619142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\loscompaneros\\tools\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<?php if ($_smarty_tpl->tpl_vars['status']->value == 'ok') {?>
        <p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your','mod'=>'bankwire'),$_smarty_tpl ) );?>
 <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart_room_bookings']->value) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'bookings have','mod'=>'bankwire'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'booking has','mod'=>'bankwire'),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'been created successfully!','mod'=>'bankwire'),$_smarty_tpl ) );?>
</p><br /><br />
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please send us a bank wire with:','mod'=>'bankwire'),$_smarty_tpl ) );?>

		<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount','mod'=>'bankwire'),$_smarty_tpl ) );?>
 <span class="price"><strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span>
		<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name of account owner:','mod'=>'bankwire'),$_smarty_tpl ) );?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireOwner']->value) {
echo $_smarty_tpl->tpl_vars['bankwireOwner']->value;
} else { ?>___________<?php }?></strong>
		<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Include these details:','mod'=>'bankwire'),$_smarty_tpl ) );?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireDetails']->value) {
echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;
} else { ?>___________<?php }?></strong>
		<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bank address:','mod'=>'bankwire'),$_smarty_tpl ) );?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireAddress']->value) {
echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;
} else { ?>___________<?php }?></strong>
		<br />
		<?php if (!(isset($_smarty_tpl->tpl_vars['reference']->value))) {?>
			<br /> <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order number #%d in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'bankwire'),$_smarty_tpl ) );?>
</p>
		<?php } else { ?>
			<br /> <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order reference %s in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'bankwire'),$_smarty_tpl ) );?>
</p>
		<?php }?>
		<br />
	</p>
<?php } else { ?>
	<p class="warning">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'bankwire'),$_smarty_tpl ) );?>

		<a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'expert customer support team','mod'=>'bankwire'),$_smarty_tpl ) );?>
</a>.
	</p>
<?php }
}
}
