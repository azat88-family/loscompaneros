<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:51
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\order-carrier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68698293db2f33_28717768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78e7e29f84fdac67101c78474eec8f49bea1d14e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\order-carrier.tpl',
      1 => 1751743138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68698293db2f33_28717768 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="box" id="tc_cont">
    <p class="checkbox">
        <input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
        <label for="cgv" id="tc_txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl ) );?>
</label>
        <a id="tc_link" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Read the Terms of Service)'),$_smarty_tpl ) );?>
</a>
    </p>
</div><?php }
}
