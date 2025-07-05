<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:08
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\orders\_filter_room_types.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982a416b7f7_62868011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '514b43f8e10e4a74e66218f6392c7c337e015332' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\orders\\_filter_room_types.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982a416b7f7_62868011 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['room_types_info']->value) && count($_smarty_tpl->tpl_vars['room_types_info']->value)) {?>
    <option value="" selected="selected">-</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room_types_info']->value, 'room_type');
$_smarty_tpl->tpl_vars['room_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_type']->value) {
$_smarty_tpl->tpl_vars['room_type']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['room_type']->value['id_product'];?>
"><?php echo $_smarty_tpl->tpl_vars['room_type']->value['room_type'];?>
, <?php echo $_smarty_tpl->tpl_vars['room_type']->value['hotel_name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
