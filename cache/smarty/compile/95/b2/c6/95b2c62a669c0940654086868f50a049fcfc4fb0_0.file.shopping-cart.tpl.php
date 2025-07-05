<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:58
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\shopping-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6869829a67b418_84380680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95b2c62a669c0940654086868f50a049fcfc4fb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\shopping-cart.tpl',
      1 => 1751743138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6869829a67b418_84380680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php if ((isset($_smarty_tpl->tpl_vars['account_created']->value))) {?>
	<p class="alert alert-success">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account has been created.'),$_smarty_tpl ) );?>

	</p>
<?php }?>

<?php $_smarty_tpl->_assignInScope('current_step', 'summary');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19202413536869829a65a6f3_88899260', 'errors');
?>


<?php if ((isset($_smarty_tpl->tpl_vars['empty']->value))) {?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This store has not accepted your new order.'),$_smarty_tpl ) );?>
</p>
<?php } else { ?>
	<p id="emptyCartWarning" class="alert alert-warning unvisible"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</p>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21057656866869829a6607a9_03780492', 'displayBeforeShoppingCartBlock');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12131749096869829a662883_34474998', 'shopping_cart_detail');
?>


	<?php if ($_smarty_tpl->tpl_vars['show_option_allow_separate_package']->value) {?>
	<p>
		<label for="allow_seperated_package" class="checkbox inline">
			<input type="checkbox" name="allow_seperated_package" id="allow_seperated_package" <?php if ($_smarty_tpl->tpl_vars['cart']->value->allow_seperated_package) {?>checked="checked"<?php }?> autocomplete="off"/>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send available products first'),$_smarty_tpl ) );?>

		</label>
	</p>
	<?php }?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6780448396869829a66b739_49885741', 'displayShoppingCartFooter');
?>


	<div class="clear"></div>
	<div class="cart_navigation_extra">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14914335926869829a66d350_70374851', 'displayShoppingCart');
?>

	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13718132666869829a66fdb7_76094128', 'shopping_cart_js_vars');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20845649096869829a679c32_67289274', 'shopping_cart_extra_services');
?>

<?php }
/* {block 'errors'} */
class Block_19202413536869829a65a6f3_88899260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'errors' => 
  array (
    0 => 'Block_19202413536869829a65a6f3_88899260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block 'errors'} */
/* {block 'displayBeforeShoppingCartBlock'} */
class Block_21057656866869829a6607a9_03780492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayBeforeShoppingCartBlock' => 
  array (
    0 => 'Block_21057656866869829a6607a9_03780492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBeforeShoppingCartBlock"),$_smarty_tpl ) );?>

	<?php
}
}
/* {/block 'displayBeforeShoppingCartBlock'} */
/* {block 'shopping_cart_detail'} */
class Block_12131749096869829a662883_34474998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'shopping_cart_detail' => 
  array (
    0 => 'Block_12131749096869829a662883_34474998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block 'shopping_cart_detail'} */
/* {block 'displayShoppingCartFooter'} */
class Block_6780448396869829a66b739_49885741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayShoppingCartFooter' => 
  array (
    0 => 'Block_6780448396869829a66b739_49885741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="HOOK_SHOPPING_CART"><?php echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART']->value;?>
</div>
	<?php
}
}
/* {/block 'displayShoppingCartFooter'} */
/* {block 'displayShoppingCart'} */
class Block_14914335926869829a66d350_70374851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayShoppingCart' => 
  array (
    0 => 'Block_14914335926869829a66d350_70374851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="HOOK_SHOPPING_CART_EXTRA"><?php if ((isset($_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value))) {
echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value;
}?></div>
		<?php
}
}
/* {/block 'displayShoppingCart'} */
/* {block 'shopping_cart_js_vars'} */
class Block_13718132666869829a66fdb7_76094128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'shopping_cart_js_vars' => 
  array (
    0 => 'Block_13718132666869829a66fdb7_76094128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('deliveryAddress'=>intval($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)),$_smarty_tpl ) );
$_block_plugin157 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin157, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProduct'));
$_block_repeat=true;
echo $_block_plugin157->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'product','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin157->addJsDefL(array('name'=>'txtProduct'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin158 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin158, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProducts'));
$_block_repeat=true;
echo $_block_plugin158->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'products','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin158->addJsDefL(array('name'=>'txtProducts'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php
}
}
/* {/block 'shopping_cart_js_vars'} */
/* {block 'shopping_cart_extra_services'} */
class Block_20845649096869829a679c32_67289274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'shopping_cart_extra_services' => 
  array (
    0 => 'Block_20845649096869829a679c32_67289274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div style="display:none;" id="rooms_extra_services">
	</div>
<?php
}
}
/* {/block 'shopping_cart_extra_services'} */
}
