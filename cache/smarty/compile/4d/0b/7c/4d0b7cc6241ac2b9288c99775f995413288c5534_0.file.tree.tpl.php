<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:40
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\helpers\tree\tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982c4aef316_97365288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d0b7cc6241ac2b9288c99775f995413288c5534' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\helpers\\tree\\tree.tpl',
      1 => 1751743119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982c4aef316_97365288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_930929537686982c4ac8c28_26644656', "tree_panel");
?>

<?php echo '<script'; ?>
 type="text/javascript">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49817889686982c4ad4558_45485558', "script");
?>

<?php echo '</script'; ?>
><?php }
/* {block "tree_header"} */
class Block_1851393916686982c4ac9f27_21776336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
		<?php
}
}
/* {/block "tree_header"} */
/* {block "tree"} */
class Block_1655906637686982c4acd688_36109778 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
				<ul id="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree top cattree" style="max-height: <?php echo $_smarty_tpl->tpl_vars['max_height']->value;?>
px;">
				<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

				</ul>
			<?php }?>
		<?php
}
}
/* {/block "tree"} */
/* {block "tree_panel"} */
class Block_930929537686982c4ac8c28_26644656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tree_panel' => 
  array (
    0 => 'Block_930929537686982c4ac8c28_26644656',
  ),
  'tree_header' => 
  array (
    0 => 'Block_1851393916686982c4ac9f27_21776336',
  ),
  'tree' => 
  array (
    0 => 'Block_1655906637686982c4acd688_36109778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="panel">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1851393916686982c4ac9f27_21776336', "tree_header", $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1655906637686982c4acd688_36109778', "tree", $this->tplIndex);
?>

	</div>
<?php
}
}
/* {/block "tree_panel"} */
/* {block "script"} */
class Block_49817889686982c4ad4558_45485558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_49817889686982c4ad4558_45485558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ((isset($_smarty_tpl->tpl_vars['use_checkbox']->value)) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true) {?>
			function checkAll($tree)
			{
				$tree.find(":input[type=checkbox]:not([hidden])").each(
					function()
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
					}
				);
			}

			function uncheckAll($tree)
			{
				$tree.find(":input[type=checkbox]:not([hidden])").each(
					function()
					{
						$(this).prop("checked", false);
						$(this).parent().removeClass("tree-selected");
					}
				);
			}
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['use_search']->value)) && $_smarty_tpl->tpl_vars['use_search']->value == true) {?>
			$("#<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-search").bind("typeahead:selected", function(obj, datum) {
				var suffix = '<?php if ((isset($_smarty_tpl->tpl_vars['use_checkbox']->value)) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true) {?>[]<?php }?>';
				$("#<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").find('[name="'+datum.input_name + suffix + '"]:input').each(
					function()
					{
						if ($(this).val() == datum.value)
						{
							<?php if ((!((isset($_smarty_tpl->tpl_vars['use_checkbox']->value)) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true))) {?>
								$("#<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
 label").removeClass("tree-selected");
							<?php }?>
							$(this).prop("checked", true);
							$(this).parent().addClass("tree-selected");
							$(this).parents('ul.tree').each(function(){
								$(this).show();
								$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
							});

							<?php if ((isset($_smarty_tpl->tpl_vars['auto_select_children']->value)) && $_smarty_tpl->tpl_vars['auto_select_children']->value == true) {?>
								if ($(this).closest('.tree-item').length == 0) {
									$(this).closest('.tree-folder').find(':input[type=checkbox]').each(function(){
										$(this).prop('checked', true);
										$(this).parent().addClass('tree-selected');
									});
								}
							<?php }?>
						}
					}
				);
			});
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['auto_select_children']->value)) && $_smarty_tpl->tpl_vars['auto_select_children']->value == true) {?>
			$('#<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find(':input[type=checkbox]').on('click', function(){
				if ($(this).closest('.tree-item').length == 0) {
					if ($(this).is(":checked")) {
						$(this).closest('.tree-folder').find(':input[type=checkbox]').each(function(){
							$(this).prop('checked', true);
							$(this).parent().addClass('tree-selected');
						});
					} else {
						$(this).closest('.tree-folder').find(':input[type=checkbox]').each(function(){
							$(this).prop('checked', false);
							$(this).parent().removeClass('tree-selected');
						});
					}
				}

				if ($(this).closest('.tree-item').length) {
					if (!$(this).is(":checked")) {
						$(this).parents('.tree-folder').find(':input[type=checkbox]:first').each(function(){
							$(this).prop('checked', false);
							$(this).parent().removeClass('tree-selected');
						});
					}
				}
			});
		<?php }?>

		function startTree(idElem) {
			if (typeof $.fn.tree === 'undefined') {
				setTimeout(startTree, 100);
				return;
			}

			let tree = $("#"+idElem).tree('collapseAll');
			if ($("#"+idElem).find(":input:checked").length > 1)
					$('#expand-all-'+idElem).hide();
				else
					$('#collapse-all-'+idElem).hide();

			$("#"+idElem).find(":input:checked").each(function(){
				$(this).parent().addClass("tree-selected");
				$(this).parents('ul.tree').each(function(){
					$(this).show();
					$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
				});
			});
		}

		$(document).ready(function () {
			startTree("<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
");
		});
	<?php
}
}
/* {/block "script"} */
}
