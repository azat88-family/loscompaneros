<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:00
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\_partials\quantity_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6869829c4adcb7_26537456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fcccd6503ccd6825a676a7ab051dc8d09b5e8f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\_partials\\quantity_field.tpl',
      1 => 1751743137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6869829c4adcb7_26537456 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="rm_qty_cont form-group clearfix">
    <input type="hidden" class="text-center form-control quantity_wanted" min="1" name="qty" value="<?php if ((isset($_smarty_tpl->tpl_vars['quantity']->value)) && $_smarty_tpl->tpl_vars['quantity']->value) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['quantity']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>1<?php }?>">
    <input type="hidden" class="max_avail_type_qty" value="<?php if ((isset($_smarty_tpl->tpl_vars['total_available_rooms']->value))) {?>	<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['total_available_rooms']->value, ENT_QUOTES, 'UTF-8', true);
}?>">
    <div class="qty_count pull-left">
        <span><?php if ((isset($_smarty_tpl->tpl_vars['quantity']->value)) && $_smarty_tpl->tpl_vars['quantity']->value) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['quantity']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>1<?php }?></span>
    </div>
    <div class="qty_direction pull-left">
        <a href="#" data-field-qty="qty" class="btn btn-default quantity_up rm_quantity_up">
            <span><i class="icon-plus"></i></span>
        </a>
        <a href="#" data-field-qty="qty" class="btn btn-default quantity_down rm_quantity_down">
            <span><i class="icon-minus"></i></span>
        </a>
    </div>
</div>
<?php }
}
