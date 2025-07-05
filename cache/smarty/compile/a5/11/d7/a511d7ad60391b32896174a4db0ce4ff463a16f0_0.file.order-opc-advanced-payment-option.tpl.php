<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:53
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\order-opc-advanced-payment-option.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982953c89e3_52522463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a511d7ad60391b32896174a4db0ce4ff463a16f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\order-opc-advanced-payment-option.tpl',
      1 => 1751743138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982953c89e3_52522463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['advance_payment_active']->value))) {?>
	<div class="opc_advance_payment_block">
		<p class="block-small-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PAYMENT TYPES'),$_smarty_tpl ) );?>
</p>
		<div class="row adv_payment_type_form">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2146633681686982953bbcd7_87900625', 'order_opc_advanced_payment_option_form');
?>

		</div>
	</div>
<?php }
}
/* {block 'order_opc_advanced_payment_option_submit'} */
class Block_1576691638686982953c6035_88164582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<button class="opc-button-small opc-btn-primary" name="submitAdvPayment" type="submit">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK'),$_smarty_tpl ) );?>
</span>
							</button>
						<?php
}
}
/* {/block 'order_opc_advanced_payment_option_submit'} */
/* {block 'order_opc_advanced_payment_option_form'} */
class Block_2146633681686982953bbcd7_87900625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_opc_advanced_payment_option_form' => 
  array (
    0 => 'Block_2146633681686982953bbcd7_87900625',
  ),
  'order_opc_advanced_payment_option_submit' => 
  array (
    0 => 'Block_1576691638686982953c6035_88164582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<form method="POST" action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc'), ENT_QUOTES, 'UTF-8', true);?>
" id="advanced-payment">
					<div class="col-sm-12 col-xs-12">
						<label>
							<input type="radio" value="1" name="payment_type" class="payment_type" <?php if (!(isset($_smarty_tpl->tpl_vars['is_advance_payment']->value))) {?>checked="checked"<?php }?>>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full Payment'),$_smarty_tpl ) );?>
</span>
						</label>
					</div>
					<div class="col-sm-12 col-xs-12">
						<label>
							<input type="radio" value="2" name="payment_type" class="payment_type" <?php if ((isset($_smarty_tpl->tpl_vars['is_advance_payment']->value))) {?>checked="checked"<?php }?>>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Partial Payment'),$_smarty_tpl ) );?>
</span>
						</label>

						<div class="row" id="partial_data">
							<div class="row margin-lr-0">
								<div class="col-xs-12 partial_subcont">
									<span class="partial_txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advance Payment Amount'),$_smarty_tpl ) );?>
 - </span>
									<span class="partial_min_cost"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['advPaymentAmount']->value),$_smarty_tpl ) );?>
</span>
								</div>
							</div>

							<?php if ((isset($_smarty_tpl->tpl_vars['is_advance_payment']->value))) {?>
								<div class="row margin-lr-0">
									<div class="col-xs-12 partial_subcont">
										<span class="partial_txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
 - </span>
										<span class="partial_min_cost"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['dueAmount']->value),$_smarty_tpl ) );?>
</span>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
					<div class="col-sm-12 col-xs-12 margin-top-10">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1576691638686982953c6035_88164582', 'order_opc_advanced_payment_option_submit', $this->tplIndex);
?>

					</div>
				</form>
			<?php
}
}
/* {/block 'order_opc_advanced_payment_option_form'} */
}
