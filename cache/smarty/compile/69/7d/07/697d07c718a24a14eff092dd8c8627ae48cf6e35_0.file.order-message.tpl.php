<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:00
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\_partials\order-message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6869829c080047_39684450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '697d07c718a24a14eff092dd8c8627ae48cf6e35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\_partials\\order-message.tpl',
      1 => 1751743137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6869829c080047_39684450 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="message <?php if ((isset($_smarty_tpl->tpl_vars['message']->value['id_employee'])) && $_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>management<?php } else { ?>customer<?php }?>">
    <div class="profile">
        <div class="row">
            <div class="col-sm-6">
                <strong>
                    <?php if ($_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->hotel_name)) && $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->hotel_name) {?>
                            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->hotel_name, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['message']->value['elastname'])) && $_smarty_tpl->tpl_vars['message']->value['elastname']) {?>
                            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['efirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['elastname'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message']->value['clastname']) {?>
                            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['cfirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['clastname'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    <?php } else { ?>
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['cfirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['clastname'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </strong>
            </div>
            <div class="col-sm-6 text-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>1),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
    <div class="message-content">
        <?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>

    </div>
</div>
<?php }
}
