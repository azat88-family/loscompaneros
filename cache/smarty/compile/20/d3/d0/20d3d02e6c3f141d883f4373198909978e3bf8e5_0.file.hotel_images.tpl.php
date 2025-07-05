<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:59
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\_partials\hotel_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6869829b5bb263_62777916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d3d02e6c3f141d883f4373198909978e3bf8e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\_partials\\hotel_images.tpl',
      1 => 1751743137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6869829b5bb263_62777916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17330654126869829b5afd99_90238852', 'hotel_images');
?>

<?php }
/* {block 'hotel_images'} */
class Block_17330654126869829b5afd99_90238852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hotel_images' => 
  array (
    0 => 'Block_17330654126869829b5afd99_90238852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (is_array($_smarty_tpl->tpl_vars['hotel_images']->value) && count($_smarty_tpl->tpl_vars['hotel_images']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_images']->value, 'hotel_image');
$_smarty_tpl->tpl_vars['hotel_image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_image']->value) {
$_smarty_tpl->tpl_vars['hotel_image']->do_else = false;
?>
            <div class="col-sm-4 image-item">
                <a class="hotel-images-fancybox" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['hotel_image']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <img class="img img-responsive" src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['hotel_image']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
}
/* {/block 'hotel_images'} */
}
