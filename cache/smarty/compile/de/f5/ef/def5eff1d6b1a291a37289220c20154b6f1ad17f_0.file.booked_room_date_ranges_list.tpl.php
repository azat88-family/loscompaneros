<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:10
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\products\booked_room_date_ranges_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982a6557af9_52149639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'def5eff1d6b1a291a37289220c20154b6f1ad17f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\products\\booked_room_date_ranges_list.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982a6557af9_52149639 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The room "%s" already has a booking for the selected date range.'),$_smarty_tpl ) );
$_prefixVariable24 = ob_get_clean();
echo sprintf($_prefixVariable24,$_smarty_tpl->tpl_vars['orderDetails']->value->room_num);?>

<div class="row">
    <div class="col-xs-12">
        <span class="error_message_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order ID'),$_smarty_tpl ) );?>
:</span> <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders');?>
&id_order=<?php echo $_smarty_tpl->tpl_vars['orderDetails']->value->id_order;?>
&vieworder" target="_blank"><strong>#<?php echo intval($_smarty_tpl->tpl_vars['orderDetails']->value->id_order);?>
</strong></a>
    </div>
    <div class="col-xs-12">
        <span class="error_message_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date From'),$_smarty_tpl ) );?>
:</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['orderDetails']->value->date_from),$_smarty_tpl ) );?>

    </div>
    <div class="col-xs-12">
        <span class="error_message_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date To'),$_smarty_tpl ) );?>
:</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['orderDetails']->value->date_to),$_smarty_tpl ) );?>

    </div>
    <div>
    </div>
</div>
<?php }
}
