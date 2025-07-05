<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:08
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\orders\_filter_hotel_rooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982a40aa947_92455703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8367fa04167ed4ad0dc93c7af259ccfc06e8d678' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\orders\\_filter_hotel_rooms.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982a40aa947_92455703 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['hotel_rooms_info']->value) && count($_smarty_tpl->tpl_vars['hotel_rooms_info']->value)) {?>
    <option value="" selected="selected">-</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_rooms_info']->value, 'hotel_room');
$_smarty_tpl->tpl_vars['hotel_room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_room']->value) {
$_smarty_tpl->tpl_vars['hotel_room']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['hotel_room']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotel_room']->value['room_num'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel_room']->value['room_type_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel_room']->value['hotel_name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
