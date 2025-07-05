<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:55
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\our-properties.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68698297644704_62866565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ca2f29a82a58059584a796e06b4b674feeb2184' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\our-properties.tpl',
      1 => 1751743138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68698297644704_62866565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86261966968698297601fa0_99213024', 'our_properties');
?>

<?php }
/* {block 'our_properties_list_title'} */
class Block_611295413686982976058f4_00013805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="title-container">
				<h1 class="text-center our-properties-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Properties'),$_smarty_tpl ) );?>
</h1>
				<div class="text-center our-properties-desc">
					<p><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['WK_HTL_SHORT_DESC']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
				</div>
			</div>
		<?php
}
}
/* {/block 'our_properties_list_title'} */
/* {block 'displayPropertiesLocationBefore'} */
class Block_854458959686982976092d6_59325728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPropertiesLocationBefore'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'displayPropertiesLocationBefore'} */
/* {block 'our_properties_location'} */
class Block_1390509816869829760ac08_48554266 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ((isset($_smarty_tpl->tpl_vars['hotelLocationArray']->value)) && $_smarty_tpl->tpl_vars['hotelLocationArray']->value && (isset($_smarty_tpl->tpl_vars['displayHotelMap']->value)) && $_smarty_tpl->tpl_vars['displayHotelMap']->value) {?>
				<div class="margin-top-20 margin-btm-20">
					<div class="col-xs-12 col-sm-12" id="googleMapWrapper">
						<div id="map"></div>
					</div>
				</div>
			<?php }?>
			<div style="clear:both;"></div>
		<?php
}
}
/* {/block 'our_properties_location'} */
/* {block 'displayPropertiesLocationAfter'} */
class Block_3910105516869829760e5b8_57797354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPropertiesLocationAfter'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'displayPropertiesLocationAfter'} */
/* {block 'displayPropertiesListBefore'} */
class Block_13704774706869829760fea4_38363649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPropertiesListBefore'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'displayPropertiesListBefore'} */
/* {block 'our_properties_list'} */
class Block_35507396868698297611656_29283428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\loscompaneros\\tools\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

				<div class="row hotels-container">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotelsInfo']->value, 'hotel');
$_smarty_tpl->tpl_vars['hotel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->value) {
$_smarty_tpl->tpl_vars['hotel']->do_else = false;
?>
						<div class="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['hotelsInfo']->value) != 1) {?>col-md-6 col-xs-12<?php } else { ?>col-md-6 col-md-offset-3<?php }?> margin-btm-30">
							<div class="hotel-address-container">
								<div class="col-xs-5">
									<img class="htl-img" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['hotel']->value['image_url'];?>
">
								</div>
								<div class="col-xs-7">
									<p class="hotel-name"><span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['hotel_name'];?>
</span></p>
									<p class="hotel-branch-info-value"><span class="htl-map-icon"></span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['address'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel']->value['city'];?>
, <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel']->value['state_name'];
$_prefixVariable48 = ob_get_clean();
if ($_prefixVariable48) {
echo $_smarty_tpl->tpl_vars['hotel']->value['state_name'];?>
,<?php }?> <?php echo $_smarty_tpl->tpl_vars['hotel']->value['country_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel']->value['postcode'];?>
</p>
									<p class="hotel-branch-info-value">
										<span class="htl-address-icon htl-phone-icon"></span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['phone'];?>

									</p>
									<p class="hotel-branch-info-value">
										<span class="htl-address-icon htl-email-icon"></span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['email'];?>

									</p>
									<div class="hotel-branch-info-actions">
										<a href="<?php echo $_smarty_tpl->tpl_vars['hotel']->value['view_rooms_link'];?>
" target="_blank" class="btn btn-primary view_rooms_btn col-sm-6 col-xs-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Rooms'),$_smarty_tpl ) );?>
</a>
										<?php if (($_smarty_tpl->tpl_vars['hotel']->value['latitude'] != 0 || $_smarty_tpl->tpl_vars['hotel']->value['longitude'] != 0) && $_smarty_tpl->tpl_vars['viewOnMap']->value) {?>
											<a class="btn htl-map-direction-btn col-sm-6 col-xs-12" href="http://maps.google.com/maps?daddr=(<?php echo $_smarty_tpl->tpl_vars['hotel']->value['latitude'];?>
,<?php echo $_smarty_tpl->tpl_vars['hotel']->value['longitude'];?>
)" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View on map'),$_smarty_tpl ) );?>
</a>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php
}
}
/* {/block 'our_properties_list'} */
/* {block 'displayPropertiesListAfter'} */
class Block_23346222568698297629497_79154904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPropertiesListAfter'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'displayPropertiesListAfter'} */
/* {block 'our_properties'} */
class Block_86261966968698297601fa0_99213024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'our_properties' => 
  array (
    0 => 'Block_86261966968698297601fa0_99213024',
  ),
  'our_properties_list_title' => 
  array (
    0 => 'Block_611295413686982976058f4_00013805',
  ),
  'displayPropertiesLocationBefore' => 
  array (
    0 => 'Block_854458959686982976092d6_59325728',
  ),
  'our_properties_location' => 
  array (
    0 => 'Block_1390509816869829760ac08_48554266',
  ),
  'displayPropertiesLocationAfter' => 
  array (
    0 => 'Block_3910105516869829760e5b8_57797354',
  ),
  'displayPropertiesListBefore' => 
  array (
    0 => 'Block_13704774706869829760fea4_38363649',
  ),
  'our_properties_list' => 
  array (
    0 => 'Block_35507396868698297611656_29283428',
  ),
  'displayPropertiesListAfter' => 
  array (
    0 => 'Block_23346222568698297629497_79154904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Properties'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ((isset($_smarty_tpl->tpl_vars['hotelsInfo']->value)) && $_smarty_tpl->tpl_vars['hotelsInfo']->value) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611295413686982976058f4_00013805', 'our_properties_list_title', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_854458959686982976092d6_59325728', 'displayPropertiesLocationBefore', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1390509816869829760ac08_48554266', 'our_properties_location', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3910105516869829760e5b8_57797354', 'displayPropertiesLocationAfter', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13704774706869829760fea4_38363649', 'displayPropertiesListBefore', $this->tplIndex);
?>


		<div class="properties-page">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35507396868698297611656_29283428', 'our_properties_list', $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23346222568698297629497_79154904', 'displayPropertiesListAfter', $this->tplIndex);
?>


			<?php if (((isset($_smarty_tpl->tpl_vars['pageLimit']->value))) && $_smarty_tpl->tpl_vars['pageLimit']->value > 1) {?>
				<form id="our-properties-list" method="post" action="<?php echo $_smarty_tpl->tpl_vars['currentPageUrl']->value;?>
">
					<input type="hidden" value="" name="pagination" id="pagination"/>
				</form>
				<div class="row pagination-container">
					<ul class="pagination">
						<?php if (!(isset($_smarty_tpl->tpl_vars['pagination']->value[1]))) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
" data-pagination="1">1</a></li>
							<?php if (!(isset($_smarty_tpl->tpl_vars['pagination']->value[2]))) {?>
								<li><span disabled>...</span></li>
							<?php }?>
						<?php }?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
" data-pagination="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['currentPage']->value) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php if (!(isset($_smarty_tpl->tpl_vars['pagination']->value[$_smarty_tpl->tpl_vars['pageLimit']->value]))) {?>
							<?php if (!(isset($_smarty_tpl->tpl_vars['pagination']->value[$_smarty_tpl->tpl_vars['pageLimit']->value-1]))) {?>
								<li><span disabled>...</span></li>
							<?php }?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
" data-pagination="<?php echo $_smarty_tpl->tpl_vars['pageLimit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pageLimit']->value;?>
</a></li>
						<?php }?>
					</ul>
				</div>
			<?php }?>
		</div>
	<?php } else { ?>
		<div class="text-center empty-properties-container">
			<div class="row">
				<div class="empty-properties-image-container"></div>
			</div>
			<div class="row">
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Hotel Found!!'),$_smarty_tpl ) );?>
</h2>
			</div>
		</div>
	<?php }
}
}
/* {/block 'our_properties'} */
}
