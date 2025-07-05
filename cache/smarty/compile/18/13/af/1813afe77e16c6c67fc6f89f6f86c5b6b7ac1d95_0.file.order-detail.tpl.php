<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:52
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\order-detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68698294f21bc6_84911305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1813afe77e16c6c67fc6f89f6f86c5b6b7ac1d95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\order-detail.tpl',
      1 => 1751743138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/order-room-detail.tpl' => 1,
    'file:./_partials/order-hotel-service-detail.tpl' => 1,
    'file:./_partials/order-standalone-service-detail.tpl' => 1,
    'file:./_partials/order-message.tpl' => 1,
  ),
),false)) {
function content_68698294f21bc6_84911305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140646892168698294509f19_22362653', 'order_detail');
?>

<?php }
/* {block 'order_detail_heading'} */
class Block_84298171168698294513450_99439940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h1 class="page-heading bottom-indent">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking Details'),$_smarty_tpl ) );?>

        </h1>
    <?php
}
}
/* {/block 'order_detail_heading'} */
/* {block 'errors'} */
class Block_16103644668698294515053_94195288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php
}
}
/* {/block 'errors'} */
/* {block 'order_detail_subheading'} */
class Block_2103751703686982945186d0_68894752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="well well-md well-order-date">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking Reference ','sprintf'=>$_smarty_tpl->tpl_vars['order']->value->getUniqReference()),$_smarty_tpl ) );?>
<strong><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' - placed on'),$_smarty_tpl ) );?>

                        <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>1),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add),$_smarty_tpl ) );?>
</span>
                    </div>
                </div>
            </div>
        <?php
}
}
/* {/block 'order_detail_subheading'} */
/* {block 'displayOrderDetail'} */
class Block_9801438796869829451ec66_95163987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDERDETAILDISPLAYED']->value;?>

        <?php
}
}
/* {/block 'displayOrderDetail'} */
/* {block 'displayOrderDetailTopLeft'} */
class Block_14690025168698294520248_42514943 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailTopLeft','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailTopLeft'} */
/* {block 'displayBookingAction'} */
class Block_5463769466869829452f3d8_34208176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBookingAction','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                            <?php
}
}
/* {/block 'displayBookingAction'} */
/* {block 'displayOrderDetailHotelDetailsAfter'} */
class Block_20850276326869829453ca09_46936031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailHotelDetailsAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                                <?php
}
}
/* {/block 'displayOrderDetailHotelDetailsAfter'} */
/* {block 'order_detail_hotel_details'} */
class Block_364959101686982945258e2_83086699 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value)) && $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value) {?>
                        <div class="card hotel-details">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Details'),$_smarty_tpl ) );?>

                                <div class="booking-actions-wrap">
                                    <div class="row">
                                        <div class="col-xs-12 clearfix">
                                            <?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value)) && $_smarty_tpl->tpl_vars['id_cms_refund_policy']->value) {?>
                                                    <a target="_blank" class="btn btn-default pull-right refund_policy_link" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund Policies'),$_smarty_tpl ) );?>
</a>
                                                <?php }?>
                                                <?php if (!$_smarty_tpl->tpl_vars['completeRefundRequestOrCancel']->value) {?>
                                                    <a class="btn btn-default pull-right order_refund_request" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to refund'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request Cancelation'),$_smarty_tpl ) );?>
</span></a>
                                                <?php }?>
                                            <?php }?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5463769466869829452f3d8_34208176', 'displayBookingAction', $this->tplIndex);
?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php if (Validate::isLoadedObject($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value)) {?>
                                    <div class="description-list">
                                        <dl class="">
                                            <div class="row">
                                                <dt class="col-xs-6 col-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Name'),$_smarty_tpl ) );?>
</dt>
                                                <dd class="col-xs-6 col-sm-3"><?php echo $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->hotel_name;?>
</dd>
                                                <dt class="col-xs-6 col-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone Number'),$_smarty_tpl ) );?>
</dt>
                                                <dd class="col-xs-6 col-sm-3">
                                                    <a href="tel:<?php if ($_smarty_tpl->tpl_vars['hotel_address_info']->value['phone_mobile']) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['phone_mobile'];
} else {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['phone'];
}?>">
                                                        <?php if ($_smarty_tpl->tpl_vars['hotel_address_info']->value['phone_mobile']) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['phone_mobile'];
} else {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['phone'];
}?>
                                                    </a>
                                                </dd>
                                                <dt class="col-xs-6 col-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</dt>
                                                <dd class="col-xs-6 col-sm-3">
                                                    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->email;?>
" class="hotel-email"><?php echo $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->email;?>
</a>
                                                </dd>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20850276326869829453ca09_46936031', 'displayOrderDetailHotelDetailsAfter', $this->tplIndex);
?>

                                            </div>
                                        </dl>
                                    </div>
                                <?php } else { ?>
                                    <div class="card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel details not available.'),$_smarty_tpl ) );?>
</div>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_hotel_details'} */
/* {block 'displayOrderDetailPaymentDetailsRow'} */
class Block_461839296686982946d4b05_24321549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentDetailsRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailPaymentDetailsRow'} */
/* {block 'order_details_payment_details_mobile'} */
class Block_1785151577686982945425e2_50717840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card payment-details visible-xs visible-sm hidden-md hidden-lg">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Details'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="detail-row">
                                <div class=" title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method'),$_smarty_tpl ) );?>
</div>
                                <div class=" value payment-method">
                                    <?php if ($_smarty_tpl->tpl_vars['invoice']->value && $_smarty_tpl->tpl_vars['invoiceAllowed']->value) {?>
                                        <span class="icon-pdf"></span>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);
if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>&amp;secure_key=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value->secure_key, ENT_QUOTES, 'UTF-8', true);
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to download invoice.'),$_smarty_tpl ) );?>
">
                                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                    <?php } else { ?>
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </div>
                            </div>

                            <div class="detail-row">
                                <div class="pull-left title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</div>
                                <div class="pull-right value status">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['order_history']->value[0])) && $_smarty_tpl->tpl_vars['order_history']->value[0]) {?>
                                        <span<?php if ((isset($_smarty_tpl->tpl_vars['order_history']->value[0]['color'])) && $_smarty_tpl->tpl_vars['order_history']->value[0]['color']) {?> style="background-color:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order_history']->value[0]['color'], ENT_QUOTES, 'UTF-8', true);?>
30; border: 1px solid <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order_history']->value[0]['color'], ENT_QUOTES, 'UTF-8', true);?>
;" <?php }?> class="label">
                                            <?php if (in_array($_smarty_tpl->tpl_vars['order_history']->value[0]['id_order_state'],$_smarty_tpl->tpl_vars['overbooking_order_states']->value)) {?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Not Confirmed'),$_smarty_tpl ) );?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order_history']->value[0]['ostate_name'], ENT_QUOTES, 'UTF-8', true);?>

                                            <?php }?>
                                        </span>
                                    <?php } else { ?>
                                        <span class="processing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Processing'),$_smarty_tpl ) );?>
</span>
                                    <?php }?>
                                </div>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_461839296686982946d4b05_24321549', 'displayOrderDetailPaymentDetailsRow', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_details_payment_details_mobile'} */
/* {block 'displayOrderDetailHotelLocationAfter'} */
class Block_1630455676686982946f5537_02552507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailHotelLocationAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                <?php
}
}
/* {/block 'displayOrderDetailHotelLocationAfter'} */
/* {block 'order_detail_hotel_location_mobile'} */
class Block_109343375686982946d8369_78475622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value))) {?>
                        <div class="card hotel-location visible-xs visible-sm hidden-md hidden-lg">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Location'),$_smarty_tpl ) );?>

                            </div>
                            <div class="card-body">
                                <p class="card-subtitle">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>

                                </p>
                                <?php if ((isset($_smarty_tpl->tpl_vars['hotel_address_info']->value)) && $_smarty_tpl->tpl_vars['hotel_address_info']->value) {?>
                                    <p class="hotel-address">
                                        <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address1'];?>
,
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address2'];
$_prefixVariable36 = ob_get_clean();
if ($_prefixVariable36) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address2'];?>
,<?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['city'];?>
,
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['state'];
$_prefixVariable37 = ob_get_clean();
if ($_prefixVariable37) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['state'];?>
,<?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['country'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['postcode'];?>

                                    </p>
                                <?php } else { ?>
                                    <div class="card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel location not available.'),$_smarty_tpl ) );?>
</div>
                                <?php }?>

                                <?php if ((floatval($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->latitude) != 0 && floatval($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->longitude) != 0) && $_smarty_tpl->tpl_vars['view_on_map']->value) {?>
                                    <div class="hotel-location-map">
                                        <div
                                            class="booking-hotel-map-container"
                                            latitude="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->latitude, ENT_QUOTES, 'UTF-8', true);?>
"
                                            longitude="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->longitude, ENT_QUOTES, 'UTF-8', true);?>
"
                                            query="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->map_input_text, ENT_QUOTES, 'UTF-8', true);?>
"
                                            title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->hotel_name, ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                    </div>
                                <?php }?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1630455676686982946f5537_02552507', 'displayOrderDetailHotelLocationAfter', $this->tplIndex);
?>

                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_hotel_location_mobile'} */
/* {block 'order_detail_refund_requests'} */
class Block_577813923686982946f8e22_18812867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if (((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) || ((isset($_smarty_tpl->tpl_vars['refundReqProducts']->value)) && $_smarty_tpl->tpl_vars['refundReqProducts']->value)) {?>
                        <div class="alert alert-info-light cancel_requests_link_wrapper">
                            <i class="icon-info-circle"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cancellation request for'),$_smarty_tpl ) );?>
 <?php if (((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) && ((isset($_smarty_tpl->tpl_vars['refundReqProducts']->value)) && $_smarty_tpl->tpl_vars['refundReqProducts']->value)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d room(s) and %d product(s)','sprintf'=>array(count($_smarty_tpl->tpl_vars['refundReqBookings']->value),count($_smarty_tpl->tpl_vars['refundReqProducts']->value))),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d room(s)','sprintf'=>array(count($_smarty_tpl->tpl_vars['refundReqBookings']->value))),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['refundReqProducts']->value)) && $_smarty_tpl->tpl_vars['refundReqProducts']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d product(s)','sprintf'=>array(count($_smarty_tpl->tpl_vars['refundReqProducts']->value))),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'is being processed. To check request status','sprintf'=>array(count($_smarty_tpl->tpl_vars['refundReqBookings']->value))),$_smarty_tpl ) );?>
 <a target="_blank" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow'), ENT_QUOTES, 'UTF-8', true);?>
?id_order=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'click here.'),$_smarty_tpl ) );?>
</a>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_refund_requests'} */
/* {block 'displayOrderDetailRoomDetailsBefore'} */
class Block_863351302686982947127d2_76832391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailRoomDetailsBefore','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailRoomDetailsBefore'} */
/* {block 'order_room_detail'} */
class Block_4818865186869829471b691_90759321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/order-room-detail.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                <?php
}
}
/* {/block 'order_room_detail'} */
/* {block 'displayOrderDetailRoomDetailsRoomsAfter'} */
class Block_13715145426869829471db78_48220770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailRoomDetailsRoomsAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailRoomDetailsRoomsAfter'} */
/* {block 'order_detail_room_details'} */
class Block_35103920568698294714df5_79942208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) && $_smarty_tpl->tpl_vars['cart_htl_data']->value) {?>
                        <div class="card room-details">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Details'),$_smarty_tpl ) );?>

                            </div>
                            <div class="card-body">
                                <?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) && $_smarty_tpl->tpl_vars['cart_htl_data']->value) {?>
                                    <div class="rooms-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_htl_data']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_v']->value['date_diff'], 'rm_v', false, 'rm_k');
$_smarty_tpl->tpl_vars['rm_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rm_k']->value => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->do_else = false;
?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4818865186869829471b691_90759321', 'order_room_detail', $this->tplIndex);
?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13715145426869829471db78_48220770', 'displayOrderDetailRoomDetailsRoomsAfter', $this->tplIndex);
?>

                                    </div>
                                <?php } else { ?>
                                    <div class="no-rooms card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room details not available.'),$_smarty_tpl ) );?>
</div>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_room_details'} */
/* {block 'hotel_service_products_detail'} */
class Block_151788595668698294725bf3_21424021 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/order-hotel-service-detail.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php
}
}
/* {/block 'hotel_service_products_detail'} */
/* {block 'hotel_service_products_block'} */
class Block_201566874368698294721ec9_79457794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['hotel_service_products']->value)) && $_smarty_tpl->tpl_vars['hotel_service_products']->value) {?>
                        <div class="card service-product-details">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details'),$_smarty_tpl ) );?>

                            </div>
                            <div class="card-body">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_service_products']->value, 'product', false, 'data_k');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151788595668698294725bf3_21424021', 'hotel_service_products_detail', $this->tplIndex);
?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'hotel_service_products_block'} */
/* {block 'displayBookingAction'} */
class Block_202101492668698294734c96_48186549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBookingAction','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                            <?php
}
}
/* {/block 'displayBookingAction'} */
/* {block 'standalone_service_products_detail'} */
class Block_931335626686982947386c5_73096589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/order-standalone-service-detail.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php
}
}
/* {/block 'standalone_service_products_detail'} */
/* {block 'standalone_products_block'} */
class Block_1475084764686982947288c0_51931238 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['standalone_service_products']->value)) && $_smarty_tpl->tpl_vars['standalone_service_products']->value) {?>
                        <div class="card service-product-details">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details'),$_smarty_tpl ) );?>

                                <div class="booking-actions-wrap">
                                    <div class="row">
                                        <div class="col-xs-12 clearfix">
                                            <?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
                                                <?php if (!$_smarty_tpl->tpl_vars['completeRefundRequestOrCancel']->value) {?>
                                                    <a class="btn btn-default pull-right order_refund_request" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to refund'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request Cancelation'),$_smarty_tpl ) );?>
</span></a>
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value)) && $_smarty_tpl->tpl_vars['id_cms_refund_policy']->value) {?>
                                                    <a target="_blank" class="btn btn-default pull-right refund_policy_link" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund Policies'),$_smarty_tpl ) );?>
</a>
                                                <?php }?>
                                            <?php }?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202101492668698294734c96_48186549', 'displayBookingAction', $this->tplIndex);
?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['standalone_service_products']->value, 'product', false, 'data_k');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_931335626686982947386c5_73096589', 'standalone_service_products_detail', $this->tplIndex);
?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'standalone_products_block'} */
/* {block 'displayOrderDetailPaymentSummaryRow'} */
class Block_12842912246869829485ba50_05818654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentSummaryRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailPaymentSummaryRow'} */
/* {block 'displayOrderDetailPaymentSummaryAfter'} */
class Block_718702116869829485dfa1_38854293 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentSummaryAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailPaymentSummaryAfter'} */
/* {block 'order_detail_payment_summary_mobile'} */
class Block_16923801946869829473b746_05847873 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card payment-summary visible-xs visible-sm hidden-md hidden-lg">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Summary'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="prices-breakdown-table">
                                <table class="table table-sm table-responsive table-summary">
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('room_price_tax_excl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,true));?>
                                        <?php $_smarty_tpl->_assignInScope('room_price_tax_incl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,true));?>

                                        <?php $_smarty_tpl->_assignInScope('room_services_price_tax_excl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,false,Product::SELLING_PREFERENCE_WITH_ROOM_TYPE)+$_smarty_tpl->tpl_vars['total_demands_price_te']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('room_services_price_tax_incl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,false,Product::SELLING_PREFERENCE_WITH_ROOM_TYPE)+$_smarty_tpl->tpl_vars['total_demands_price_ti']->value));?>

                                        <?php $_smarty_tpl->_assignInScope('total_tax_without_discount', (($_smarty_tpl->tpl_vars['room_price_tax_incl']->value-$_smarty_tpl->tpl_vars['room_price_tax_excl']->value)+($_smarty_tpl->tpl_vars['room_services_price_tax_incl']->value-$_smarty_tpl->tpl_vars['room_services_price_tax_excl']->value)));?>

                                        <?php $_smarty_tpl->_assignInScope('total_standard_products_tax_incl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,false,Product::SELLING_PREFERENCE_STANDALONE)+$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,false,Product::SELLING_PREFERENCE_HOTEL_STANDALONE)));?>
                                        <?php $_smarty_tpl->_assignInScope('total_standard_products_tax_excl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,false,Product::SELLING_PREFERENCE_STANDALONE)+$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,false,Product::SELLING_PREFERENCE_HOTEL_STANDALONE)));?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) && $_smarty_tpl->tpl_vars['cart_htl_data']->value) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms cost'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> <?php }?></td>
                                                <td class="text-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
                                                        <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_excl']->value+$_smarty_tpl->tpl_vars['room_services_price_tax_excl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php } else { ?>
                                                        <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_incl']->value+$_smarty_tpl->tpl_vars['room_services_price_tax_incl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        <?php if (((isset($_smarty_tpl->tpl_vars['hotel_service_products']->value)) && $_smarty_tpl->tpl_vars['hotel_service_products']->value) || ((isset($_smarty_tpl->tpl_vars['standalone_service_products']->value)) && $_smarty_tpl->tpl_vars['standalone_service_products']->value)) {?>
                                            <tr class="item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products cost'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}
}?></td>
                                                <td class="text-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
                                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_standard_products_tax_excl']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php } else { ?>
                                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_standard_products_tax_incl']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['total_convenience_fee_te']->value || $_smarty_tpl->tpl_vars['total_convenience_fee_te']->value) {?>
                                             <tr class="item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}
}?></td>
                                                <td class="text-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
                                                        <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php } else { ?>
                                                        <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <tr class="totalprice item">
                                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Tax'),$_smarty_tpl ) );?>
</td>
                                            <td class="text-right">
                                                <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['total_tax_without_discount']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                            </td>
                                        </tr>

                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts > 0) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Vouchers'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price price-discount">-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        <tr class="totalprice item">
                                            <td><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final Booking Total'),$_smarty_tpl ) );?>
<strong></td>
                                            <td class="text-right">
                                                <strong><span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span></strong>
                                            </td>
                                        </tr>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
                                            <tr class="totalprice item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'* Refunded Amount'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['refundedAmount']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl > $_smarty_tpl->tpl_vars['order']->value->total_paid_real) {?>
                                            <tr class="totalprice item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_real),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12842912246869829485ba50_05818654', 'displayOrderDetailPaymentSummaryRow', $this->tplIndex);
?>

                                    </tbody>
                                </table>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_718702116869829485dfa1_38854293', 'displayOrderDetailPaymentSummaryAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_payment_summary_mobile'} */
/* {block 'displayOrderDetailGuestDetailsRow'} */
class Block_153404082686982948ea517_83195265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailGuestDetailsRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailGuestDetailsRow'} */
/* {block 'displayOrderDetailGuestDetailsAfter'} */
class Block_1786425336686982948ecb80_41372493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailGuestDetailsAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailGuestDetailsAfter'} */
/* {block 'order_detail_guest_details_mobile'} */
class Block_54904664868698294862329_94463058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card guest-details visible-xs visible-sm hidden-md hidden-lg">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Details'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="guest-details-table">
                                <table class="table table-sm table-responsive table-summary">
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['customerGuestDetail']->value) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['customerGuestDetail']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->email)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->email) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['customerGuestDetail']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                        <?php } else { ?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->firstname)) && $_smarty_tpl->tpl_vars['address_invoice']->value->firstname) {?>
                                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['guestInformations']->value['firstname'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['firstname']) {?>
                                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['guestInformations']->value['firstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['guestInformations']->value['lastname'], ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php }?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['guestInformations']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                            </tr>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['phone']) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['guestInformations']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
 </td>
                                                </tr>
                                            <?php }?>
                                        <?php }?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153404082686982948ea517_83195265', 'displayOrderDetailGuestDetailsRow', $this->tplIndex);
?>

                                    </tbody>
                                </table>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1786425336686982948ecb80_41372493', 'displayOrderDetailGuestDetailsAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_guest_details_mobile'} */
/* {block 'displayOrderDetailPoliciesTab'} */
class Block_209521685686982948fd6f4_61653312 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPoliciesTab','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailPoliciesTab'} */
/* {block 'displayOrderDetailPoliciesTabContent'} */
class Block_10381421056869829490c3e5_35921862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPoliciesTabContent','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailPoliciesTabContent'} */
/* {block 'order_detail_hotel_policies'} */
class Block_522760047686982948f0122_99759684 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value))) {?>
                        <?php $_smarty_tpl->_assignInScope('has_general_hotel_policies', ((isset($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->policies)) && $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->policies));?>
                        <?php $_smarty_tpl->_assignInScope('has_refund_hotel_policies', ($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->isRefundable() && $_smarty_tpl->tpl_vars['hotel_refund_rules']->value));?>
                        <?php if ($_smarty_tpl->tpl_vars['has_general_hotel_policies']->value || $_smarty_tpl->tpl_vars['has_refund_hotel_policies']->value) {?>
                            <div class="card hotel-policies card-tabs">
                                <div class="card-header">
                                    <ul class="nav nav-tabs">
                                        <?php if ($_smarty_tpl->tpl_vars['has_general_hotel_policies']->value) {?>
                                            <li class="active">
                                                <a href="#tab-hotel-policies-general" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Policies'),$_smarty_tpl ) );?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['has_refund_hotel_policies']->value) {?>
                                            <li <?php if (!$_smarty_tpl->tpl_vars['has_general_hotel_policies']->value) {?>class="active"<?php }?>>
                                                <a href="#tab-hotel-policies-refund" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund Policies'),$_smarty_tpl ) );?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209521685686982948fd6f4_61653312', 'displayOrderDetailPoliciesTab', $this->tplIndex);
?>

                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <?php if ($_smarty_tpl->tpl_vars['has_general_hotel_policies']->value) {?>
                                            <div id="tab-hotel-policies-general" class="tab-pane active">
                                                <div class="card-text"><?php echo $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->policies;?>
</div>
                                            </div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['has_refund_hotel_policies']->value) {?>
                                            <div id="tab-hotel-policies-refund" class="tab-pane<?php if (!$_smarty_tpl->tpl_vars['has_general_hotel_policies']->value) {?>active<?php }?>">
                                                <div class="refund-policies-list">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_refund_rules']->value, 'hotel_refund_rule', false, NULL, 'foreach_refund_rules', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['hotel_refund_rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_refund_rule']->value) {
$_smarty_tpl->tpl_vars['hotel_refund_rule']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foreach_refund_rules']->value['iteration']++;
?>
                                                        <div class="refund-policy">
                                                            <p class="refund-rule-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s. ','sprintf'=>array((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foreach_refund_rules']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foreach_refund_rules']->value['iteration'] : null))),$_smarty_tpl ) );
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['hotel_refund_rule']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                                                            <div class="card-text refund-rule-description"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['hotel_refund_rule']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10381421056869829490c3e5_35921862', 'displayOrderDetailPoliciesTabContent', $this->tplIndex);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_hotel_policies'} */
/* {block 'order_message'} */
class Block_74392374968698294916363_74826166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:./_partials/order-message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
}
/* {/block 'order_message'} */
/* {block 'order_detail_order_messages'} */
class Block_132408012268698294910a38_86190713 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>
                        <div class="card order-messages <?php if (!count($_smarty_tpl->tpl_vars['messages']->value)) {?>hide<?php }?>">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages'),$_smarty_tpl ) );?>

                            </div>

                            <div class="card-body">
                                <div class="messages-list card-text">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74392374968698294916363_74826166', 'order_message', $this->tplIndex);
?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_order_messages'} */
/* {block 'displayOrderDetailMessagesBefore'} */
class Block_342049872686982949195c7_41073523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailMessagesBefore','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailMessagesBefore'} */
/* {block 'order_detail_add_order_messages_form'} */
class Block_3051806126869829491e178_54473302 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std" id="sendOrderMessage">
                                        <div class="form-group select-room-type">
                                            <label for="id_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Type'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['service_products_formatted']->value) {?>/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product'),$_smarty_tpl ) );
}?></label>
                                            <p class="card-subheader text-muted">
                                                <?php if ($_smarty_tpl->tpl_vars['service_products_formatted']->value) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To add a comment about a room type/product, please select one first.'),$_smarty_tpl ) );?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To add a comment about a room type, please select one first.'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </p>
                                            <select name="id_product" class="form-control">
                                                <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- Choose --'),$_smarty_tpl ) );?>
</option>
                                                <?php if ($_smarty_tpl->tpl_vars['roomTypes']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomTypes']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['is_booking_product']) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <?php }?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['service_products_formatted']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['service_products_formatted']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </select>
                                        </div>

                                        <p class="form-group textarea">
                                            <textarea class="form-control" rows="3" name="msgText"></textarea>
                                        </p>

                                        <div class="submit">
                                            <input type="hidden" name="id_order" value="<?php echo htmlspecialchars((string)intval($_smarty_tpl->tpl_vars['order']->value->id), ENT_QUOTES, 'UTF-8', true);?>
" />
                                            <input type="submit" class="unvisible" name="submitMessage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
" />
                                            <button type="submit" name="submitMessage" id="submitMessage" class="button btn button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
</span></button>
                                        </div>
                                    </form>
                                <?php
}
}
/* {/block 'order_detail_add_order_messages_form'} */
/* {block 'order_detail_add_order_messages'} */
class Block_1516662886869829491bb57_43113755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>
                        <div class="card add-order-message" id="add-order-message">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a Message'),$_smarty_tpl ) );?>


                                <p class="card-subheader text-muted">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your booking, please write it in the field below.'),$_smarty_tpl ) );?>

                                </p>
                            </div>

                            <div class="card-body">
                                <div class="errors-block" style="display: none;"></div>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3051806126869829491e178_54473302', 'order_detail_add_order_messages_form', $this->tplIndex);
?>

                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_add_order_messages'} */
/* {block 'displayOrderDetailBottomLeft'} */
class Block_1625102757686982949a1f17_34725103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailBottomLeft','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailBottomLeft'} */
/* {block 'displayOrderDetailTopRight'} */
class Block_2108436831686982949a4349_57482664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailTopRight','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailTopRight'} */
/* {block 'displayOrderDetailPaymentDetailsRow'} */
class Block_197856935268698294a374a5_65632344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentDetailsRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailPaymentDetailsRow'} */
/* {block 'order_detail_payment_details'} */
class Block_1389717319686982949a6446_98716310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card payment-details hidden-xs hidden-sm visible-md">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Details'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="detail-row">
                                <div class=" title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method'),$_smarty_tpl ) );?>
</div>
                                <div class=" value payment-method">
                                    <?php if ($_smarty_tpl->tpl_vars['invoice']->value && $_smarty_tpl->tpl_vars['invoiceAllowed']->value) {?>
                                        <span class="icon-pdf"></span>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);
if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>&amp;secure_key=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value->secure_key, ENT_QUOTES, 'UTF-8', true);
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to download invoice.'),$_smarty_tpl ) );?>
">
                                            <span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                    <?php } else { ?>
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </div>
                            </div>

                            <div class="detail-row">
                                <div class="pull-left title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</div>
                                <div class="pull-right value status">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['order_history']->value[0])) && $_smarty_tpl->tpl_vars['order_history']->value[0]) {?>
                                        <span<?php if ((isset($_smarty_tpl->tpl_vars['order_history']->value[0]['color'])) && $_smarty_tpl->tpl_vars['order_history']->value[0]['color']) {?> style="background-color:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order_history']->value[0]['color'], ENT_QUOTES, 'UTF-8', true);?>
30; border: 1px solid <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order_history']->value[0]['color'], ENT_QUOTES, 'UTF-8', true);?>
;" <?php }?> class="label">
                                            <?php if (in_array($_smarty_tpl->tpl_vars['order_history']->value[0]['id_order_state'],$_smarty_tpl->tpl_vars['overbooking_order_states']->value)) {?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Not Confirmed'),$_smarty_tpl ) );?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order_history']->value[0]['ostate_name'], ENT_QUOTES, 'UTF-8', true);?>

                                            <?php }?>
                                        </span>
                                    <?php } else { ?>
                                        <span class="processing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Processing'),$_smarty_tpl ) );?>
</span>
                                    <?php }?>
                                </div>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197856935268698294a374a5_65632344', 'displayOrderDetailPaymentDetailsRow', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_payment_details'} */
/* {block 'displayOrderDetailHotelLocationAfter'} */
class Block_105748934268698294a55dc7_65291722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailHotelLocationAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                <?php
}
}
/* {/block 'displayOrderDetailHotelLocationAfter'} */
/* {block 'order_detail_hotel_location'} */
class Block_9656746568698294a3d9c9_90643833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value))) {?>
                        <div class="card hotel-location hidden-xs hidden-sm visible-md">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Location'),$_smarty_tpl ) );?>

                            </div>
                            <div class="card-body">
                                <p class="card-subtitle">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>

                                </p>

                                <?php if ((isset($_smarty_tpl->tpl_vars['hotel_address_info']->value)) && $_smarty_tpl->tpl_vars['hotel_address_info']->value) {?>
                                    <p class="hotel-address">
                                        <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address1'];?>
,
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address2'];
$_prefixVariable38 = ob_get_clean();
if ($_prefixVariable38) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address2'];?>
,<?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['city'];?>
,
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['state'];
$_prefixVariable39 = ob_get_clean();
if ($_prefixVariable39) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['state'];?>
,<?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['country'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['postcode'];?>

                                    </p>
                                <?php } else { ?>
                                    <div class="card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel location not available.'),$_smarty_tpl ) );?>
</div>
                                <?php }?>

                                <?php if ((floatval($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->latitude) != 0 && floatval($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->longitude) != 0) && $_smarty_tpl->tpl_vars['view_on_map']->value) {?>
                                    <div class="hotel-location-map">
                                        <div
                                            class="booking-hotel-map-container"
                                            latitude="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->latitude, ENT_QUOTES, 'UTF-8', true);?>
"
                                            longitude="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->longitude, ENT_QUOTES, 'UTF-8', true);?>
"
                                            query="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->map_input_text, ENT_QUOTES, 'UTF-8', true);?>
"
                                            title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->hotel_name, ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                    </div>
                                <?php }?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105748934268698294a55dc7_65291722', 'displayOrderDetailHotelLocationAfter', $this->tplIndex);
?>

                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_hotel_location'} */
/* {block 'displayOrderDetailPaymentSummaryRow'} */
class Block_42840900668698294bd0304_12753675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentSummaryRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailPaymentSummaryRow'} */
/* {block 'displayOrderDetailPaymentSummaryAfter'} */
class Block_89780457968698294bd2b21_96965541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentSummaryAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailPaymentSummaryAfter'} */
/* {block 'order_detail_payment_summary'} */
class Block_21236509468698294a59840_23162017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card payment-summary hidden-xs hidden-sm visible-md">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Summary'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="prices-breakdown-table">
                                <table class="table table-sm table-responsive table-summary">
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('room_price_tax_excl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,true));?>
                                        <?php $_smarty_tpl->_assignInScope('room_price_tax_incl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,true));?>

                                        <?php $_smarty_tpl->_assignInScope('room_services_price_tax_excl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,false,Product::SELLING_PREFERENCE_WITH_ROOM_TYPE)+$_smarty_tpl->tpl_vars['total_demands_price_te']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('room_services_price_tax_incl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,false,Product::SELLING_PREFERENCE_WITH_ROOM_TYPE)+$_smarty_tpl->tpl_vars['total_demands_price_ti']->value));?>

                                        <?php $_smarty_tpl->_assignInScope('total_standard_products_tax_incl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,false,Product::SELLING_PREFERENCE_STANDALONE)+$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,false,Product::SELLING_PREFERENCE_HOTEL_STANDALONE)));?>
                                        <?php $_smarty_tpl->_assignInScope('total_standard_products_tax_excl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,false,Product::SELLING_PREFERENCE_STANDALONE)+$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,false,Product::SELLING_PREFERENCE_HOTEL_STANDALONE)));?>

                                        <?php $_smarty_tpl->_assignInScope('total_tax_without_discount', (($_smarty_tpl->tpl_vars['room_price_tax_incl']->value-$_smarty_tpl->tpl_vars['room_price_tax_excl']->value)+($_smarty_tpl->tpl_vars['room_services_price_tax_incl']->value-$_smarty_tpl->tpl_vars['room_services_price_tax_excl']->value)+($_smarty_tpl->tpl_vars['total_standard_products_tax_incl']->value-$_smarty_tpl->tpl_vars['total_standard_products_tax_excl']->value)));?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) && $_smarty_tpl->tpl_vars['cart_htl_data']->value) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms cost'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> <?php }?></td>
                                                <td class="text-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
                                                        <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_excl']->value+$_smarty_tpl->tpl_vars['room_services_price_tax_excl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php } else { ?>
                                                        <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_incl']->value+$_smarty_tpl->tpl_vars['room_services_price_tax_incl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        <?php if (((isset($_smarty_tpl->tpl_vars['hotel_service_products']->value)) && $_smarty_tpl->tpl_vars['hotel_service_products']->value) || ((isset($_smarty_tpl->tpl_vars['standalone_service_products']->value)) && $_smarty_tpl->tpl_vars['standalone_service_products']->value)) {?>
                                            <tr class="item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products cost'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}
}?></td>
                                                <td class="text-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
                                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_standard_products_tax_excl']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php } else { ?>
                                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_standard_products_tax_incl']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['total_convenience_fee_te']->value || $_smarty_tpl->tpl_vars['total_convenience_fee_te']->value) {?>
                                             <tr class="item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}
}?></td>
                                                <td class="text-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
                                                        <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php } else { ?>
                                                        <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <tr class="totalprice item">
                                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Tax'),$_smarty_tpl ) );?>
</td>
                                            <td class="text-right">
                                                <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['total_tax_without_discount']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                            </td>
                                        </tr>
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts > 0) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Vouchers'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price price-discount">-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        <tr class="totalprice item">
                                            <td><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final Booking Total'),$_smarty_tpl ) );?>
<strong></td>
                                            <td class="text-right">
                                                <strong><span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span></strong>
                                            </td>
                                        </tr>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
                                            <tr class="totalprice item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'* Refunded Amount'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['refundedAmount']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl > $_smarty_tpl->tpl_vars['order']->value->total_paid_real) {?>
                                            <tr class="totalprice item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_real),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42840900668698294bd0304_12753675', 'displayOrderDetailPaymentSummaryRow', $this->tplIndex);
?>

                                    </tbody>
                                </table>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89780457968698294bd2b21_96965541', 'displayOrderDetailPaymentSummaryAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_payment_summary'} */
/* {block 'displayOrderDetailGuestDetailsRow'} */
class Block_83770818468698294c84c61_82800947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailGuestDetailsRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailGuestDetailsRow'} */
/* {block 'displayOrderDetailGuestDetailsAfter'} */
class Block_17356491468698294c87ba6_02312768 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailGuestDetailsAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailGuestDetailsAfter'} */
/* {block 'order_detail_guest_details'} */
class Block_42531358768698294bd77c4_17768594 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card guest-details hidden-xs hidden-sm visible-md">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Details'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="guest-details-table">
                                <table class="table table-sm table-responsive table-summary">
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['customerGuestDetail']->value) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['customerGuestDetail']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->email)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->email) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['customerGuestDetail']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                        <?php } else { ?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->firstname)) && $_smarty_tpl->tpl_vars['address_invoice']->value->firstname) {?>
                                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['guestInformations']->value['firstname'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['firstname']) {?>
                                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['guestInformations']->value['firstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['guestInformations']->value['lastname'], ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php }?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['guestInformations']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                            </tr>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['phone']) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['guestInformations']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
 </td>
                                                </tr>
                                            <?php }?>
                                        <?php }?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83770818468698294c84c61_82800947', 'displayOrderDetailGuestDetailsRow', $this->tplIndex);
?>

                                    </tbody>
                                </table>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17356491468698294c87ba6_02312768', 'displayOrderDetailGuestDetailsAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_guest_details'} */
/* {block 'displayOrderDetailBottomRight'} */
class Block_26862491968698294c8b000_42585989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailBottomRight','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailBottomRight'} */
/* {block 'order_detail_refund_popups'} */
class Block_174759233468698294c8e810_02077145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\loscompaneros\\tools\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\loscompaneros\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

            <?php if ((isset($_smarty_tpl->tpl_vars['refund_allowed']->value)) && $_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
                <div style="display: none;">
                    <div id="create-new-refund-popup">
                        <form id="form-cancel-booking">
                            <input type="hidden" name="id_order" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
                            <div class="card cancel-booking">
                                <div class="card-header">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Bookings'),$_smarty_tpl ) );
if (smarty_modifier_count($_smarty_tpl->tpl_vars['service_products_formatted']->value)) {?> | <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products'),$_smarty_tpl ) );
}?>
                                </div>
                                <div class="card-body">
                                    <div class="errors" style="display: none;"></div>

                                    <div class="col-xs-12">
                                        <div class="row no-gutters">
                                            <div class="col-xs-4">
                                                <ul class="nav nav-tabs nav-stacked">
                                                    <?php $_smarty_tpl->_assignInScope('flag_is_first_iteration', true);?>
                                                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart_htl_data']->value)) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_htl_data']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_v']->value['date_diff'], 'rm_v', false, 'rm_k');
$_smarty_tpl->tpl_vars['rm_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rm_k']->value => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->do_else = false;
?>
                                                                <?php $_smarty_tpl->_assignInScope('is_full_date', ($_smarty_tpl->tpl_vars['show_full_date']->value && (smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],'%D') == smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],'%D'))));?>
                                                                <li class="<?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {?>active<?php }?>">
                                                                    <a href="#room-info-tab-<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
-<?php echo $_smarty_tpl->tpl_vars['rm_k']->value;?>
" class="" data-toggle="tab">
                                                                        <div class="refund_element_name"><?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>
</div>
                                                                        <div class="duration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['rm_v']->value['data_form'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['rm_v']->value['data_to'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>
</div>
                                                                    </a>
                                                                </li>
                                                                <?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {
$_smarty_tpl->_assignInScope('flag_is_first_iteration', false);
}?>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['service_products_formatted']->value)) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['service_products_formatted']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
                                                            <li class="<?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {?>active<?php }?>">
                                                                <a href="#product-info-tab-<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
" class="" data-toggle="tab">
                                                                    <div class="refund_element_name"><?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>
</div>
                                                                </a>
                                                            </li>
                                                            <?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {
$_smarty_tpl->_assignInScope('flag_is_first_iteration', false);
}?>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </ul>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="tab-content clearfix">
                                                    <?php $_smarty_tpl->_assignInScope('flag_is_first_iteration', true);?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_htl_data']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_v']->value['date_diff'], 'rm_v', false, 'rm_k');
$_smarty_tpl->tpl_vars['rm_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rm_k']->value => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->do_else = false;
?>
                                                            <div id="room-info-tab-<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
-<?php echo $_smarty_tpl->tpl_vars['rm_k']->value;?>
" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {?>active<?php }?>">
                                                                <div class="refund_element_summary clearfix">
                                                                    <p class="refund_element_name"><?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>
</p>
                                                                    <div class="col-xs-3">
                                                                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms'),$_smarty_tpl ) );?>
</p>
                                                                        <strong><?php echo sprintf('%02d',$_smarty_tpl->tpl_vars['rm_v']->value['num_rm']);?>
</strong>
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancelled Rooms'),$_smarty_tpl ) );?>
</p>
                                                                        <strong><?php echo sprintf('%02d',($_smarty_tpl->tpl_vars['rm_v']->value['count_cancelled']+$_smarty_tpl->tpl_vars['rm_v']->value['count_refunded']));?>
</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="rooms-summary">
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_v']->value['hotel_booking_details'], 'hotel_booking_detail', false, NULL, 'foreachRefundRooms', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['hotel_booking_detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_booking_detail']->value) {
$_smarty_tpl->tpl_vars['hotel_booking_detail']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foreachRefundRooms']->value['iteration']++;
?>
                                                                        <?php $_smarty_tpl->_assignInScope('is_room_cancelled', ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && in_array($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking'],$_smarty_tpl->tpl_vars['refundReqBookings']->value)));?>
                                                                        <div class="refund_element_details <?php if ($_smarty_tpl->tpl_vars['is_room_cancelled']->value || ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_status'] != $_smarty_tpl->tpl_vars['ROOM_STATUS_ALLOTED']->value)) {?>cancelled<?php }?> clearfix">
                                                                            <div class="occupancy-wrap">
                                                                                <div class="checkbox">
                                                                                    <label for="bookings_to_refund_<?php echo $_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking'];?>
">
                                                                                        <input type="checkbox" class="bookings_to_refund" id="bookings_to_refund_<?php echo $_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking'];?>
" name="bookings_to_refund[]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['is_room_cancelled']->value || ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_status'] != $_smarty_tpl->tpl_vars['ROOM_STATUS_ALLOTED']->value)) {?>disabled<?php }?>/>
                                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 - <?php echo sprintf('%02d',(isset($_smarty_tpl->tpl_vars['__smarty_foreach_foreachRefundRooms']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foreachRefundRooms']->value['iteration'] : null));?>

                                                                                    </label>

                                                                                    <span>(<?php echo sprintf('%02d',$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['adults']);?>
 <?php if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['children'] > 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>', '),$_smarty_tpl ) );
echo sprintf('%02d',$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['children']);?>
 <?php if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?>)</span>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['is_cancelled']) {?><span class="badge badge-danger badge-cancelled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancelled'),$_smarty_tpl ) );?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['is_refunded']) {?><span class="badge badge-danger badge-cancelled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refunded'),$_smarty_tpl ) );?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['refund_denied']) {?><span class="badge badge-danger badge-cancelled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund denied'),$_smarty_tpl ) );?>
</span> <i class="icon-info-circle refund-denied-info" data-refund_denied_info="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund for this booking is denied. Please contact admin for more detail.'),$_smarty_tpl ) );?>
"></i><?php } elseif ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_status'] != $_smarty_tpl->tpl_vars['ROOM_STATUS_ALLOTED']->value) {?><span class="badge badge-danger badge-cancelled"><?php if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_status'] == $_smarty_tpl->tpl_vars['ROOM_STATUS_CHECKED_OUT']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checked-Out'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checked-In'),$_smarty_tpl ) );
}?></span><?php }?>
                                                                                </div>
                                                                            </div>

                                                                                                                                                        <?php $_smarty_tpl->_assignInScope('has_services', ((isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking']])) && (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking']]['additional_services']))));?>
                                                                                                                                                        <?php $_smarty_tpl->_assignInScope('has_facilities', ((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && (isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_room']])) && (isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_room']]['extra_demands']))));?>
                                                                            <?php if ($_smarty_tpl->tpl_vars['has_services']->value || $_smarty_tpl->tpl_vars['has_facilities']->value) {?>
                                                                                <div class="extra-services-wrap clearfix">
                                                                                    <?php if ($_smarty_tpl->tpl_vars['has_services']->value) {?>
                                                                                        <div class="services-wrap clearfix">
                                                                                            <div class="col-xs-3">
                                                                                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</strong>
                                                                                            </div>
                                                                                            <div class="col-xs-9">
                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_v']->value['additional_services'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking']]['additional_services'], 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                                                                                    <span class="service"><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
</span>
                                                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php }?>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['has_facilities']->value) {?>
                                                                                        <div class="facilities-wrap clearfix">
                                                                                            <div class="col-xs-3">
                                                                                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</strong>
                                                                                            </div>
                                                                                            <div class="col-xs-9">
                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_room']]['extra_demands'], 'facility');
$_smarty_tpl->tpl_vars['facility']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facility']->value) {
$_smarty_tpl->tpl_vars['facility']->do_else = false;
?>
                                                                                                    <span class="facility"><?php echo $_smarty_tpl->tpl_vars['facility']->value['name'];?>
</span>
                                                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php }?>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="extra-services-wrap clearfix">
                                                                                    <p class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No extra services added for this room.'),$_smarty_tpl ) );?>
</p>
                                                                                </div>
                                                                            <?php }?>
                                                                        </div>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </div>
                                                            </div>
                                                            <?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {
$_smarty_tpl->_assignInScope('flag_is_first_iteration', false);
}?>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['service_products_formatted']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
                                                        <div id="product-info-tab-<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {?>active<?php }?>">
                                                            <div class="refund_element_summary">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_v']->value['options'], 'product_option');
$_smarty_tpl->tpl_vars['product_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_option']->value) {
$_smarty_tpl->tpl_vars['product_option']->do_else = false;
?>
                                                                    <?php $_smarty_tpl->_assignInScope('is_product_cancelled', ((isset($_smarty_tpl->tpl_vars['refundReqProducts']->value)) && in_array($_smarty_tpl->tpl_vars['product_option']->value['id_service_product_order_detail'],$_smarty_tpl->tpl_vars['refundReqProducts']->value)));?>
                                                                    <div class="refund_element_details <?php if ($_smarty_tpl->tpl_vars['is_product_cancelled']->value) {?>cancelled<?php }?> clearfix">
                                                                        <div class="checkbox">
                                                                            <label for="products_to_refund_<?php echo $_smarty_tpl->tpl_vars['product_option']->value['id_service_product_order_detail'];?>
">
                                                                                <input type="checkbox" class="bookings_to_refund" id="products_to_refund_<?php echo $_smarty_tpl->tpl_vars['product_option']->value['id_service_product_order_detail'];?>
" name="id_service_product_order_detail[]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product_option']->value['id_service_product_order_detail'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['is_product_cancelled']->value) {?>disabled<?php }?>/>
                                                                                <?php echo $_smarty_tpl->tpl_vars['product_option']->value['name'];
if ((isset($_smarty_tpl->tpl_vars['product_option']->value['option_name'])) && $_smarty_tpl->tpl_vars['product_option']->value['option_name']) {?> : <?php echo $_smarty_tpl->tpl_vars['product_option']->value['option_name'];
}?>
                                                                            </label>
                                                                            <?php if ($_smarty_tpl->tpl_vars['product_option']->value['is_cancelled']) {?><span class="badge badge-danger badge-cancelled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancelled'),$_smarty_tpl ) );?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['product_option']->value['is_refunded']) {?><span class="badge badge-danger badge-cancelled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refunded'),$_smarty_tpl ) );?>
</span><?php } elseif ((isset($_smarty_tpl->tpl_vars['product_option']->value['refund_denied'])) && $_smarty_tpl->tpl_vars['product_option']->value['refund_denied']) {?><span class="badge badge-danger badge-cancelled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund denied'),$_smarty_tpl ) );?>
</span> <i class="icon-info-circle refund-denied-info" data-refund_denied_info="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund for this product is denied. Please contact admin for more detail.'),$_smarty_tpl ) );?>
"></i></span><?php }?>
                                                                        </div>
                                                                        <?php if ($_smarty_tpl->tpl_vars['product_option']->value['allow_multiple_quantity']) {?>
                                                                            <div class="quantity-wrap clearfix">
                                                                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
 : <?php echo $_smarty_tpl->tpl_vars['product_option']->value['quantity'];?>
</span>
                                                                            </div>
                                                                        <?php }?>
                                                                    </div>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </div>
                                                        </div>
                                                        <?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {
$_smarty_tpl->_assignInScope('flag_is_first_iteration', false);
}?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="selected-rooms-wrap">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected: '),$_smarty_tpl ) );?>
<span class="num-selected-rooms"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'00'),$_smarty_tpl ) );?>
</span>
                                    </div>
                                    <div class="actions-wrap">
                                        <button class="btn btn-secondary btn-cancel">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next'),$_smarty_tpl ) );?>

                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card cancel-booking-preview" style="display:none;">
                                <div class="card-header">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancellation Reason'),$_smarty_tpl ) );?>

                                </div>
                                <div class="card-body">
                                    <div class="errors" style="display: none;"></div>

                                    <div class="well well-sm">
                                        <p class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total cancel request:'),$_smarty_tpl ) );?>
 <span class="count-total-rooms"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'00'),$_smarty_tpl ) );?>
</span></p>
                                    </div>

                                    <div class="form-group">
                                        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mention reason for cancellation'),$_smarty_tpl ) );?>
<sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'*'),$_smarty_tpl ) );?>
</sup></label>
                                        <textarea class="form-control cancellation_reason" name="cancellation_reason" rows="4" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type here...'),$_smarty_tpl ) );?>
"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer clearfix">
                                    <div class="pull-right">
                                        <button class="btn btn-secondary btn-back">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>

                                        </button>
                                        <button class="btn btn-primary btn-submit">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit'),$_smarty_tpl ) );?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="popup-cancellation-submit-success" class="popup-cancellation-submit-success" style="display: none;">
                    <div class="card">
                        <div class="text-center">
                            <div><i class="icon icon-check-circle text-success"></i></div>
                            <h3><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request submitted successfully'),$_smarty_tpl ) );?>
</b></h3>
                            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cancellation request has been submitted successfully. Go to Booking Refund Requests page for further updates.'),$_smarty_tpl ) );?>
</h4>
                        </div>
                    </div>
                </div>

                <div id="popup-cancellation-order-cancel-success" class="popup-cancellation-submit-success" style="display: none;">
                    <div class="card">
                        <div class="text-center">
                            <div><i class="icon icon-check-circle text-success"></i></div>
                            <h3><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking cancelled successfully'),$_smarty_tpl ) );?>
</b></h3>
                            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your booking has been cancelled successfully.'),$_smarty_tpl ) );?>
</h4>
                        </div>
                    </div>
                </div>
            <?php }?>
            <div id="popup-view-extra-services" class="popup-view-extra-services" style="display: none;"></div>
        <?php
}
}
/* {/block 'order_detail_refund_popups'} */
/* {block 'order_detail_js_vars'} */
class Block_74723962968698294f08942_67042420 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('historyUrl'=>preg_replace("%(?<!\\\\)'%", "\'", (string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('orderdetail',true))),$_smarty_tpl ) );
$_block_plugin73 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin73, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'req_sent_msg'));
$_block_repeat=true;
echo $_block_plugin73->addJsDefL(array('name'=>'req_sent_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request Sent..','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin73->addJsDefL(array('name'=>'req_sent_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin74 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin74, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'wait_stage_msg'));
$_block_repeat=true;
echo $_block_plugin74->addJsDefL(array('name'=>'wait_stage_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Waiting','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin74->addJsDefL(array('name'=>'wait_stage_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin75 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin75, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'pending_state_msg'));
$_block_repeat=true;
echo $_block_plugin75->addJsDefL(array('name'=>'pending_state_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending...','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin75->addJsDefL(array('name'=>'pending_state_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin76 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin76, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'mail_sending_err'));
$_block_repeat=true;
echo $_block_plugin76->addJsDefL(array('name'=>'mail_sending_err'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while sending mail to the customer','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin76->addJsDefL(array('name'=>'mail_sending_err'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin77 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin77, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'refund_request_sending_error'));
$_block_repeat=true;
echo $_block_plugin77->addJsDefL(array('name'=>'refund_request_sending_error'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while processing request for booking cancellation.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin77->addJsDefL(array('name'=>'refund_request_sending_error'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin78 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin78, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'no_bookings_selected'));
$_block_repeat=true;
echo $_block_plugin78->addJsDefL(array('name'=>'no_bookings_selected'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select at least one room to proceed for cancellation.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin78->addJsDefL(array('name'=>'no_bookings_selected'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin79 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin79, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'refund_request_success_txt'));
$_block_repeat=true;
echo $_block_plugin79->addJsDefL(array('name'=>'refund_request_success_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request for booking cancellation is successffully created.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin79->addJsDefL(array('name'=>'refund_request_success_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin80 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin80, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'order_message_choose_txt'));
$_block_repeat=true;
echo $_block_plugin80->addJsDefL(array('name'=>'order_message_choose_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- Choose --','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin80->addJsDefL(array('name'=>'order_message_choose_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin81 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin81, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'order_message_success_txt'));
$_block_repeat=true;
echo $_block_plugin81->addJsDefL(array('name'=>'order_message_success_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order message sent successfully.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin81->addJsDefL(array('name'=>'order_message_success_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin82 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin82, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'cancel_req_txt'));
$_block_repeat=true;
echo $_block_plugin82->addJsDefL(array('name'=>'cancel_req_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Request','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin82->addJsDefL(array('name'=>'cancel_req_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin83 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin83, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'cancel_booking_txt'));
$_block_repeat=true;
echo $_block_plugin83->addJsDefL(array('name'=>'cancel_booking_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Bookings','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin83->addJsDefL(array('name'=>'cancel_booking_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'order_detail_js_vars'} */
/* {block 'order_detail'} */
class Block_140646892168698294509f19_22362653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_detail' => 
  array (
    0 => 'Block_140646892168698294509f19_22362653',
  ),
  'order_detail_heading' => 
  array (
    0 => 'Block_84298171168698294513450_99439940',
  ),
  'errors' => 
  array (
    0 => 'Block_16103644668698294515053_94195288',
  ),
  'order_detail_subheading' => 
  array (
    0 => 'Block_2103751703686982945186d0_68894752',
  ),
  'displayOrderDetail' => 
  array (
    0 => 'Block_9801438796869829451ec66_95163987',
  ),
  'displayOrderDetailTopLeft' => 
  array (
    0 => 'Block_14690025168698294520248_42514943',
  ),
  'order_detail_hotel_details' => 
  array (
    0 => 'Block_364959101686982945258e2_83086699',
  ),
  'displayBookingAction' => 
  array (
    0 => 'Block_5463769466869829452f3d8_34208176',
    1 => 'Block_202101492668698294734c96_48186549',
  ),
  'displayOrderDetailHotelDetailsAfter' => 
  array (
    0 => 'Block_20850276326869829453ca09_46936031',
  ),
  'order_details_payment_details_mobile' => 
  array (
    0 => 'Block_1785151577686982945425e2_50717840',
  ),
  'displayOrderDetailPaymentDetailsRow' => 
  array (
    0 => 'Block_461839296686982946d4b05_24321549',
    1 => 'Block_197856935268698294a374a5_65632344',
  ),
  'order_detail_hotel_location_mobile' => 
  array (
    0 => 'Block_109343375686982946d8369_78475622',
  ),
  'displayOrderDetailHotelLocationAfter' => 
  array (
    0 => 'Block_1630455676686982946f5537_02552507',
    1 => 'Block_105748934268698294a55dc7_65291722',
  ),
  'order_detail_refund_requests' => 
  array (
    0 => 'Block_577813923686982946f8e22_18812867',
  ),
  'displayOrderDetailRoomDetailsBefore' => 
  array (
    0 => 'Block_863351302686982947127d2_76832391',
  ),
  'order_detail_room_details' => 
  array (
    0 => 'Block_35103920568698294714df5_79942208',
  ),
  'order_room_detail' => 
  array (
    0 => 'Block_4818865186869829471b691_90759321',
  ),
  'displayOrderDetailRoomDetailsRoomsAfter' => 
  array (
    0 => 'Block_13715145426869829471db78_48220770',
  ),
  'hotel_service_products_block' => 
  array (
    0 => 'Block_201566874368698294721ec9_79457794',
  ),
  'hotel_service_products_detail' => 
  array (
    0 => 'Block_151788595668698294725bf3_21424021',
  ),
  'standalone_products_block' => 
  array (
    0 => 'Block_1475084764686982947288c0_51931238',
  ),
  'standalone_service_products_detail' => 
  array (
    0 => 'Block_931335626686982947386c5_73096589',
  ),
  'order_detail_payment_summary_mobile' => 
  array (
    0 => 'Block_16923801946869829473b746_05847873',
  ),
  'displayOrderDetailPaymentSummaryRow' => 
  array (
    0 => 'Block_12842912246869829485ba50_05818654',
    1 => 'Block_42840900668698294bd0304_12753675',
  ),
  'displayOrderDetailPaymentSummaryAfter' => 
  array (
    0 => 'Block_718702116869829485dfa1_38854293',
    1 => 'Block_89780457968698294bd2b21_96965541',
  ),
  'order_detail_guest_details_mobile' => 
  array (
    0 => 'Block_54904664868698294862329_94463058',
  ),
  'displayOrderDetailGuestDetailsRow' => 
  array (
    0 => 'Block_153404082686982948ea517_83195265',
    1 => 'Block_83770818468698294c84c61_82800947',
  ),
  'displayOrderDetailGuestDetailsAfter' => 
  array (
    0 => 'Block_1786425336686982948ecb80_41372493',
    1 => 'Block_17356491468698294c87ba6_02312768',
  ),
  'order_detail_hotel_policies' => 
  array (
    0 => 'Block_522760047686982948f0122_99759684',
  ),
  'displayOrderDetailPoliciesTab' => 
  array (
    0 => 'Block_209521685686982948fd6f4_61653312',
  ),
  'displayOrderDetailPoliciesTabContent' => 
  array (
    0 => 'Block_10381421056869829490c3e5_35921862',
  ),
  'order_detail_order_messages' => 
  array (
    0 => 'Block_132408012268698294910a38_86190713',
  ),
  'order_message' => 
  array (
    0 => 'Block_74392374968698294916363_74826166',
  ),
  'displayOrderDetailMessagesBefore' => 
  array (
    0 => 'Block_342049872686982949195c7_41073523',
  ),
  'order_detail_add_order_messages' => 
  array (
    0 => 'Block_1516662886869829491bb57_43113755',
  ),
  'order_detail_add_order_messages_form' => 
  array (
    0 => 'Block_3051806126869829491e178_54473302',
  ),
  'displayOrderDetailBottomLeft' => 
  array (
    0 => 'Block_1625102757686982949a1f17_34725103',
  ),
  'displayOrderDetailTopRight' => 
  array (
    0 => 'Block_2108436831686982949a4349_57482664',
  ),
  'order_detail_payment_details' => 
  array (
    0 => 'Block_1389717319686982949a6446_98716310',
  ),
  'order_detail_hotel_location' => 
  array (
    0 => 'Block_9656746568698294a3d9c9_90643833',
  ),
  'order_detail_payment_summary' => 
  array (
    0 => 'Block_21236509468698294a59840_23162017',
  ),
  'order_detail_guest_details' => 
  array (
    0 => 'Block_42531358768698294bd77c4_17768594',
  ),
  'displayOrderDetailBottomRight' => 
  array (
    0 => 'Block_26862491968698294c8b000_42585989',
  ),
  'order_detail_refund_popups' => 
  array (
    0 => 'Block_174759233468698294c8e810_02077145',
  ),
  'order_detail_js_vars' => 
  array (
    0 => 'Block_74723962968698294f08942_67042420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>

        </a>
        <span class="navigation-pipe">
            <?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

        </span>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bookings'),$_smarty_tpl ) );?>

        </a>
        <span class="navigation-pipe">
            <?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

        </span>
        <span class="navigation_page">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking details'),$_smarty_tpl ) );?>

        </span>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84298171168698294513450_99439940', 'order_detail_heading', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16103644668698294515053_94195288', 'errors', $this->tplIndex);
?>


    <?php if ((isset($_smarty_tpl->tpl_vars['order']->value)) && $_smarty_tpl->tpl_vars['order']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2103751703686982945186d0_68894752', 'order_detail_subheading', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9801438796869829451ec66_95163987', 'displayOrderDetail', $this->tplIndex);
?>


        <div class="row" id="order_detail_container">
            <div class="col-md-8">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14690025168698294520248_42514943', 'displayOrderDetailTopLeft', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_364959101686982945258e2_83086699', 'order_detail_hotel_details', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1785151577686982945425e2_50717840', 'order_details_payment_details_mobile', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109343375686982946d8369_78475622', 'order_detail_hotel_location_mobile', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_577813923686982946f8e22_18812867', 'order_detail_refund_requests', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_863351302686982947127d2_76832391', 'displayOrderDetailRoomDetailsBefore', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35103920568698294714df5_79942208', 'order_detail_room_details', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201566874368698294721ec9_79457794', 'hotel_service_products_block', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1475084764686982947288c0_51931238', 'standalone_products_block', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16923801946869829473b746_05847873', 'order_detail_payment_summary_mobile', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54904664868698294862329_94463058', 'order_detail_guest_details_mobile', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_522760047686982948f0122_99759684', 'order_detail_hotel_policies', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132408012268698294910a38_86190713', 'order_detail_order_messages', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_342049872686982949195c7_41073523', 'displayOrderDetailMessagesBefore', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1516662886869829491bb57_43113755', 'order_detail_add_order_messages', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1625102757686982949a1f17_34725103', 'displayOrderDetailBottomLeft', $this->tplIndex);
?>

            </div>
            <div class="col-md-4">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2108436831686982949a4349_57482664', 'displayOrderDetailTopRight', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1389717319686982949a6446_98716310', 'order_detail_payment_details', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9656746568698294a3d9c9_90643833', 'order_detail_hotel_location', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21236509468698294a59840_23162017', 'order_detail_payment_summary', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42531358768698294bd77c4_17768594', 'order_detail_guest_details', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26862491968698294c8b000_42585989', 'displayOrderDetailBottomRight', $this->tplIndex);
?>

            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>
            <div class="row">
                <div class="col-sm-8">
                    <p class="alert alert-info"><i class="icon-info-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot request refund with a guest account.'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174759233468698294c8e810_02077145', 'order_detail_refund_popups', $this->tplIndex);
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74723962968698294f08942_67042420', 'order_detail_js_vars', $this->tplIndex);
?>

<?php
}
}
/* {/block 'order_detail'} */
}
