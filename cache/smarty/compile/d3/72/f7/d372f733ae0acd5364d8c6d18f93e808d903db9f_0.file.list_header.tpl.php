<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:51
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\customer_threads\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982930e8384_82560088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd372f733ae0acd5364d8c6d18f93e808d903db9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\customer_threads\\helpers\\list\\list_header.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982930e8384_82560088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_544688210686982930e42e4_50678320', "list_filter_items");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "list_filter_items"} */
class Block_544688210686982930e42e4_50678320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'list_filter_items' => 
  array (
    0 => 'Block_544688210686982930e42e4_50678320',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="pull-right col-xs-4 col-sm-3 col-md-2 col-lg-2">
		<div class="list_availibility_container">
			<button type="button" class="btn btn-default btn-left btn-block dropdown-toggle" data-toggle="dropdown" data-target="MeaningStatus">
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thread Statuses'),$_smarty_tpl ) );?>

				<i class="icon-caret-down pull-right"></i>
			</button>
			<div id="MeaningStatus" class="dropdown-menu">
				<ul class="list-unstyled">
					<li><p><i class="icon-circle text-success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open'),$_smarty_tpl ) );?>
</p></li>
					<li><p><i class="icon-circle text-danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Closed'),$_smarty_tpl ) );?>
</p></li>
					<li><p><i class="icon-circle text-warning"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending 1'),$_smarty_tpl ) );?>
</p></li>
					<li><p><i class="icon-circle text-warning"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending 2'),$_smarty_tpl ) );?>
</p></li>
				</ul>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block "list_filter_items"} */
}
