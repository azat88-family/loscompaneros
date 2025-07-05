<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:51
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\customer_threads\page_header_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68698293f109f2_75879738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '191738d082783ec3ec268e7308e5a5682ad9c2a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\customer_threads\\page_header_toolbar.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68698293f109f2_75879738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19688575368698293efd1e0_72134787', 'pageTitle');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "page_header_toolbar.tpl");
}
/* {block 'pageTitle'} */
class Block_19688575368698293efd1e0_72134787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_19688575368698293efd1e0_72134787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['display']->value)) && $_smarty_tpl->tpl_vars['display']->value == 'view') {?>
        <h2 class="page-title">
            <?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {?>
                <?php echo preg_replace('!<[^>]*?>!', ' ', (string) end($_smarty_tpl->tpl_vars['title']->value));?>

            <?php } else { ?>
                <span title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['title']->value),40 ));?>

                </span>
            <?php }?>
        </h2>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block 'pageTitle'} */
}
