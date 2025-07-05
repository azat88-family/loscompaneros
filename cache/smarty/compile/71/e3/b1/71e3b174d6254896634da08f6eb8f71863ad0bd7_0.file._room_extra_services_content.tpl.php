<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:07
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\orders\modals\_partials\_room_extra_services_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982a372fe41_41912285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71e3b174d6254896634da08f6eb8f71863ad0bd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\orders\\modals\\_partials\\_room_extra_services_content.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/orders/modals/_extra_services_facilities_tab_content.tpl' => 1,
    'file:controllers/orders/modals/_extra_services_service_products_tab_content.tpl' => 1,
  ),
),false)) {
function content_686982a372fe41_41912285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:controllers/orders/modals/_extra_services_facilities_tab_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:controllers/orders/modals/_extra_services_service_products_tab_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style type="text/css">
	/*Extra demands CSS*/
	#edit_product .extra-services-container .room_demands_container,
	#edit_product .extra-services-container .room_services_container {
		display: none;}
	#edit_product .extra-services-container #save_room_demands,
	#edit_product .extra-services-container #back_to_demands_btn,
	#edit_product .extra-services-container #save_service_service,
	#edit_product .extra-services-container #back_to_service_btn {
		display: none;}
</style>

<?php }
}
