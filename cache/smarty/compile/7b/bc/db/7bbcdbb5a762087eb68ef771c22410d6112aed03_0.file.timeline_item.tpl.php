<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:51
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\controllers\customer_threads\helpers\view\timeline_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68698293664f86_22727622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bbcdbb5a762087eb68ef771c22410d6112aed03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\controllers\\customer_threads\\helpers\\view\\timeline_item.tpl',
      1 => 1751743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68698293664f86_22727622 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="timeline-item<?php if ((isset($_smarty_tpl->tpl_vars['timeline_item']->value['alt']))) {?> alt<?php }?>">
	<div class="timeline-caption">
		<div class="timeline-panel arrow arrow-<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['arrow'];?>
">
			<span class="timeline-icon" style="background-color:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['timeline_item']->value['background_color'], ENT_QUOTES, 'UTF-8', true);?>
;">
				<i class="<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['icon'];?>
"></i>
			</span>
			<span class="timeline-date"><i class="icon-calendar"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['timeline_item']->value['date'],'full'=>0),$_smarty_tpl ) );?>
 - <i class="icon-time"></i> <?php echo substr((string) $_smarty_tpl->tpl_vars['timeline_item']->value['date'], (int) 11, (int) 5);?>
</span>
			<?php if ((isset($_smarty_tpl->tpl_vars['timeline_item']->value['id_order']))) {?><a class="badge" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Order #"),$_smarty_tpl ) );
echo intval($_smarty_tpl->tpl_vars['timeline_item']->value['id_order']);?>
</a><br/><?php }?>
			<span><?php echo nl2br((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['timeline_item']->value['content'],220 )), (bool) 1);?>
</span>
			<?php if ((isset($_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link']))) {?>
				<br/><br/><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default _blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"See more"),$_smarty_tpl ) );?>
</a>
			<?php }?>
		</div>
	</div>
</article>
<?php }
}
