<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:00
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\_partials\room_type_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6869829c5c60b9_32288259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a648b95a2fcb658bc01d95e9ef59d8e3e9297e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\_partials\\room_type_list.tpl',
      1 => 1751743137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./occupancy_field.tpl' => 1,
    'file:./quantity_field.tpl' => 1,
  ),
),false)) {
function content_6869829c5c60b9_32288259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\loscompaneros\\tools\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7939200456869829c52d0e5_32097064', 'displayRoomTypeListBefore');
?>

<?php if (!empty($_smarty_tpl->tpl_vars['booking_data']->value['rm_data']) && ((isset($_smarty_tpl->tpl_vars['booking_data']->value['stats'])) && $_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_avail'] || !empty($_smarty_tpl->tpl_vars['display_all_room_types']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booking_data']->value['rm_data'], 'room_v', false, 'room_k');
$_smarty_tpl->tpl_vars['room_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_k']->value => $_smarty_tpl->tpl_vars['room_v']->value) {
$_smarty_tpl->tpl_vars['room_v']->do_else = false;
?>
		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['room_v']->value['data']['available']) || !empty($_smarty_tpl->tpl_vars['display_all_room_types']->value)) {?>
			<div class="col-sm-12 room_cont" data-id-product="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['id_product'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
">
				<div class="row">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16093606516869829c53f410_91534677', 'room_type_list_room_image');
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19910938236869829c5461d1_47291826', 'room_type_list_room_detail');
?>

				</div>
			</div>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<div class="noRoomsAvailAlert">
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No room available for this hotel!'),$_smarty_tpl ) );?>
</span>
	</div>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2264966006869829c5c43c3_52695414', 'displayRoomTypeListAfter');
?>

<?php }
/* {block 'displayRoomTypeListBefore'} */
class Block_7939200456869829c52d0e5_32097064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayRoomTypeListBefore' => 
  array (
    0 => 'Block_7939200456869829c52d0e5_32097064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeListBefore'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'displayRoomTypeListBefore'} */
/* {block 'displayRoomTypeListImageAfter'} */
class Block_17141845756869829c5437e4_81897210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeListImageAfter','product'=>$_smarty_tpl->tpl_vars['room_v']->value),$_smarty_tpl ) );?>

								<?php
}
}
/* {/block 'displayRoomTypeListImageAfter'} */
/* {block 'room_type_list_room_image'} */
class Block_16093606516869829c53f410_91534677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'room_type_list_room_image' => 
  array (
    0 => 'Block_16093606516869829c53f410_91534677',
  ),
  'displayRoomTypeListImageAfter' => 
  array (
    0 => 'Block_17141845756869829c5437e4_81897210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="col-sm-4">
								<a href="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['product_link'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
">
								<img src="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['image'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive room-type-image">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17141845756869829c5437e4_81897210', 'displayRoomTypeListImageAfter', $this->tplIndex);
?>

							</a>
						</div>
					<?php
}
}
/* {/block 'room_type_list_room_image'} */
/* {block 'room_type_list_room_quantity'} */
class Block_5697469506869829c546b96_78828183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="row">
									<p class="rm_heading col-sm-12 col-md-7"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</p>
									<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
										<p class="rm_left col-sm-12 col-md-5" <?php if (!empty($_smarty_tpl->tpl_vars['display_all_room_types']->value) || $_smarty_tpl->tpl_vars['room_v']->value['room_left'] > $_smarty_tpl->tpl_vars['warning_num']->value) {?> style="display:none"<?php }?>>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hurry!'),$_smarty_tpl ) );?>
 <span class="remain_rm_qty"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['room_left'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rooms left'),$_smarty_tpl ) );?>

										</p>
									<?php }?>
								</div>
							<?php
}
}
/* {/block 'room_type_list_room_quantity'} */
/* {block 'room_type_list_room_description'} */
class Block_19185519286869829c551bf2_39351090 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="rm_desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['room_v']->value['description_short'],190,'',true ));?>
&nbsp;<a class="view_more" href="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['product_link'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View More'),$_smarty_tpl ) );?>
....</a></div>
							<?php
}
}
/* {/block 'room_type_list_room_description'} */
/* {block 'room_type_list_room_features'} */
class Block_14344750246869829c557b74_11621365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 col-md-5 col-lg-6">
											<?php if (!empty($_smarty_tpl->tpl_vars['room_v']->value['feature'])) {?>
												<p class="rm_amenities_cont">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room_v']->value['feature'], 'feat_v', false, 'feat_k');
$_smarty_tpl->tpl_vars['feat_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feat_k']->value => $_smarty_tpl->tpl_vars['feat_v']->value) {
$_smarty_tpl->tpl_vars['feat_v']->do_else = false;
?>
														<img title="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['feat_v']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['feat_img_dir']->value).((string)$_smarty_tpl->tpl_vars['feat_v']->value['value'])), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" class="rm_amen">
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</p>
											<?php }?>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_features'} */
/* {block 'room_type_list_room_max_guests_mobile'} */
class Block_6060784116869829c576c24_89555923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 hidden-md hidden-lg">
											<p class="capa_txt"><span><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['max_guests'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max guests:'),$_smarty_tpl ) );?>
</span><span class="capa_data"> <?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['max_adults'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['max_children'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['room_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?></span></p>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_max_guests_mobile'} */
/* {block 'room_type_list_room_price'} */
class Block_8509965386869829c581ba1_51696466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 col-md-7 col-lg-6">
											<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value && (!(isset($_smarty_tpl->tpl_vars['display_all_room_types']->value)) || !$_smarty_tpl->tpl_vars['display_all_room_types']->value)) {?>
												<p class="rm_price_cont">
													<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff'] >= 0) {?>
														<span class="rm_price_val <?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal($_smarty_tpl->tpl_vars['room_v']->value['price_without_reduction'])),$_smarty_tpl ) );?>

														</span>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff']) {?>
														<span class="rm_price_val">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal($_smarty_tpl->tpl_vars['room_v']->value['feature_price'])),$_smarty_tpl ) );?>

														</span>
													<?php }?>
													<span class="rm_price_txt">/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Per Night'),$_smarty_tpl ) );?>
</span>
												</p>
											<?php }?>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_price'} */
/* {block 'room_type_list_room_max_guests'} */
class Block_5397629096869829c5918c6_88707296 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 col-md-6 col-lg-4 visible-md visible-lg">
											<div class="capa_txt"><span><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['max_guests'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max guests:'),$_smarty_tpl ) );?>
</span><br><span class="capa_data"> <?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['max_adults'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['room_v']->value['max_children'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['room_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?></span></div>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_max_guests'} */
/* {block 'occupancy_field'} */
class Block_7566891116869829c5a2007_69722386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<?php $_smarty_tpl->_subTemplateRender("file:./occupancy_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('room_type_info'=>$_smarty_tpl->tpl_vars['room_v']->value,'total_available_rooms'=>$_smarty_tpl->tpl_vars['room_v']->value['room_left']), 0, true);
?>
																<?php
}
}
/* {/block 'occupancy_field'} */
/* {block 'quantity_field'} */
class Block_20762473906869829c5a9c97_95326805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<?php $_smarty_tpl->_subTemplateRender("file:./quantity_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_available_rooms'=>$_smarty_tpl->tpl_vars['room_v']->value['room_left']), 0, true);
?>
																<?php
}
}
/* {/block 'quantity_field'} */
/* {block 'room_type_list_room_book_now_button'} */
class Block_14985309766869829c5acef0_68275394 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<div>
																<a cat_rm_check_in="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['booking_date_from']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" cat_rm_check_out="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['booking_date_to']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" href="" rm_product_id="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" cat_rm_book_nm_days="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['num_days']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product-attribute="0" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['room_v']->value['id_product']);?>
" class="btn btn-default button button-medium ajax_add_to_cart_button"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Book Now'),$_smarty_tpl ) );?>
</span></a>
															</div>
														<?php
}
}
/* {/block 'room_type_list_room_book_now_button'} */
/* {block 'room_type_list_room_price'} */
class Block_11428536536869829c5b87e3_59268425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<div class="rm_price_cont">
															<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff'] >= 0) {?>
																<span class="rm_price_val <?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>">
																	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal($_smarty_tpl->tpl_vars['room_v']->value['price_without_reduction'])),$_smarty_tpl ) );?>

																</span>
															<?php }?>
															<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff']) {?>
																<span class="rm_price_val">
																	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal($_smarty_tpl->tpl_vars['room_v']->value['feature_price'])),$_smarty_tpl ) );?>

																</span>
															<?php }?>
															<span class="rm_price_txt">/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Per Night'),$_smarty_tpl ) );?>
</span>
														</div>
													<?php
}
}
/* {/block 'room_type_list_room_price'} */
/* {block 'room_type_list_room_booking_fields'} */
class Block_13181378316869829c59c2f5_11973184 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
												<?php if ((!(isset($_smarty_tpl->tpl_vars['display_all_room_types']->value)) || !$_smarty_tpl->tpl_vars['display_all_room_types']->value)) {?>
													<div class="booking_room_fields">
														<?php if ((isset($_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value)) && $_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value) {?>
															<div class="booking_guest_occupancy_conatiner">
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7566891116869829c5a2007_69722386', 'occupancy_field', $this->tplIndex);
?>

															</div>
														<?php } else { ?>
															<div>
																<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty:'),$_smarty_tpl ) );?>
</label>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20762473906869829c5a9c97_95326805', 'quantity_field', $this->tplIndex);
?>

															</div>
														<?php }?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14985309766869829c5acef0_68275394', 'room_type_list_room_book_now_button', $this->tplIndex);
?>

													</div>
												<?php } else { ?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11428536536869829c5b87e3_59268425', 'room_type_list_room_price', $this->tplIndex);
?>

												<?php }?>
											<?php }?>
										<?php
}
}
/* {/block 'room_type_list_room_booking_fields'} */
/* {block 'room_type_list_room_detail'} */
class Block_19910938236869829c5461d1_47291826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'room_type_list_room_detail' => 
  array (
    0 => 'Block_19910938236869829c5461d1_47291826',
  ),
  'room_type_list_room_quantity' => 
  array (
    0 => 'Block_5697469506869829c546b96_78828183',
  ),
  'room_type_list_room_description' => 
  array (
    0 => 'Block_19185519286869829c551bf2_39351090',
  ),
  'room_type_list_room_features' => 
  array (
    0 => 'Block_14344750246869829c557b74_11621365',
  ),
  'room_type_list_room_max_guests_mobile' => 
  array (
    0 => 'Block_6060784116869829c576c24_89555923',
  ),
  'room_type_list_room_price' => 
  array (
    0 => 'Block_8509965386869829c581ba1_51696466',
    1 => 'Block_11428536536869829c5b87e3_59268425',
  ),
  'room_type_list_room_max_guests' => 
  array (
    0 => 'Block_5397629096869829c5918c6_88707296',
  ),
  'room_type_list_room_booking_fields' => 
  array (
    0 => 'Block_13181378316869829c59c2f5_11973184',
  ),
  'occupancy_field' => 
  array (
    0 => 'Block_7566891116869829c5a2007_69722386',
  ),
  'quantity_field' => 
  array (
    0 => 'Block_20762473906869829c5a9c97_95326805',
  ),
  'room_type_list_room_book_now_button' => 
  array (
    0 => 'Block_14985309766869829c5acef0_68275394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="col-sm-8 room_info_cont">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5697469506869829c546b96_78828183', 'room_type_list_room_quantity', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19185519286869829c551bf2_39351090', 'room_type_list_room_description', $this->tplIndex);
?>

							<div class="room_features_cont">
								<div class="row">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14344750246869829c557b74_11621365', 'room_type_list_room_features', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6060784116869829c576c24_89555923', 'room_type_list_room_max_guests_mobile', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8509965386869829c581ba1_51696466', 'room_type_list_room_price', $this->tplIndex);
?>

								</div>
								<div class="row room_type_list_actions">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5397629096869829c5918c6_88707296', 'room_type_list_room_max_guests', $this->tplIndex);
?>

									<div class="col-sm-12 col-md-6 col-lg-8">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13181378316869829c59c2f5_11973184', 'room_type_list_room_booking_fields', $this->tplIndex);
?>

									</div>
								</div>
							</div>
						</div>
					<?php
}
}
/* {/block 'room_type_list_room_detail'} */
/* {block 'displayRoomTypeListAfter'} */
class Block_2264966006869829c5c43c3_52695414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayRoomTypeListAfter' => 
  array (
    0 => 'Block_2264966006869829c5c43c3_52695414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeListAfter'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'displayRoomTypeListAfter'} */
}
