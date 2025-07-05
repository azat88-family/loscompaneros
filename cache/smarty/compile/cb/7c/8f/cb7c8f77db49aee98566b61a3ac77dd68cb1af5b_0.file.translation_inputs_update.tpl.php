<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:31
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\translations\helpers\view\translation_inputs_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982bb2e4099_32374249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb7c8f77db49aee98566b61a3ac77dd68cb1af5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\translations\\helpers\\view\\translation_inputs_update.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982bb2e4099_32374249 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $('#translations_form input:text,textarea').each(function(){
            $(this).data('name',$(this).attr('name'));
            $(this).removeAttr('name');
        });
        $('#translations_form').on('change','input:text,textarea',function(){
            var name = $(this).data('name');
            if(name) $(this).attr('name',name);
        });
    });
<?php echo '</script'; ?>
><?php }
}
