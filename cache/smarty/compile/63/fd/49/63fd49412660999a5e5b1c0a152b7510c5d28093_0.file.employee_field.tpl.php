<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:55
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\logs\employee_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982972b4b41_02061409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63fd49412660999a5e5b1c0a152b7510c5d28093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982972b4b41_02061409 (Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['employee_name']->value, ENT_QUOTES, 'UTF-8', true);?>

<br />
(<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['employee_email']->value, ENT_QUOTES, 'UTF-8', true);?>
)
<?php }
}
