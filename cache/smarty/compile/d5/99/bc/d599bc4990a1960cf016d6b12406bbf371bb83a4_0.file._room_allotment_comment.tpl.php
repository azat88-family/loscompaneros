<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:07
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\orders\modals\_room_allotment_comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982a37bae20_64142102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd599bc4990a1960cf016d6b12406bbf371bb83a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\orders\\modals\\_room_allotment_comment.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982a37bae20_64142102 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body">
    <div><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allotment remark'),$_smarty_tpl ) );?>
</b>: <?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</div>

    <?php if ((isset($_smarty_tpl->tpl_vars['loaderImg']->value)) && $_smarty_tpl->tpl_vars['loaderImg']->value) {?>
        <div class="loading_overlay">
            <img src='<?php echo $_smarty_tpl->tpl_vars['loaderImg']->value;?>
' class="loading-img"/>
        </div>
    <?php }?>
</div>
<?php }
}
