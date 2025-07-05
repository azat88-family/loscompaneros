<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:06
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\orders\modals\_edit_room_booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982a2b135e0_79560361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a063caeb026a9cc1fe7088ae5c46100d83ed33b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\orders\\modals\\_edit_room_booking.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/orders/modals/_edit_room_tab_content.tpl' => 1,
    'file:controllers/orders/modals/_partials/_room_extra_services_content.tpl' => 1,
  ),
),false)) {
function content_686982a2b135e0_79560361 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body">
    <div id="edit_product">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#edit_room_tab" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );?>
</a>
            </li>
            <li role="presentation">
                <a href="#room_type_demands_desc" aria-controls="facilities" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</a>
            </li>
            <li role="presentation">
                <a href="#room_type_service_product_desc" aria-controls="services" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</a>
            </li>
        </ul>

        <div class="tab-content clearfix">
            <?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/modals/_edit_room_tab_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/modals/_partials/_room_extra_services_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['loaderImg']->value)) && $_smarty_tpl->tpl_vars['loaderImg']->value) {?>
        <div class="loading_overlay">
            <img src='<?php echo $_smarty_tpl->tpl_vars['loaderImg']->value;?>
' class="loading-img"/>
        </div>
    <?php }?>
</div><?php }
}
