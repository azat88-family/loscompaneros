<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:52:55
  from 'C:\xampp\htdocs\loscompaneros\themes\hotel-reservation-theme\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68698297a57a67_69212578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '304709fb26391b18f977117422ae79caa3d84e6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\themes\\hotel-reservation-theme\\password.tpl',
      1 => 1751743138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68698297a57a67_69212578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134622040768698297a1c2f9_14035872', 'password');
?>

<?php }
/* {block 'password_heading'} */
class Block_162438078568698297a23464_03104683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?'),$_smarty_tpl ) );?>
</h1>
	<?php
}
}
/* {/block 'password_heading'} */
/* {block 'errors'} */
class Block_204805930268698297a25089_03894926 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block 'errors'} */
/* {block 'displayForgotPasswordFormFieldsAfter'} */
class Block_5624638068698297a4f254_72429230 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayForgotPasswordFormFieldsAfter'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'displayForgotPasswordFormFieldsAfter'} */
/* {block 'password_form_action'} */
class Block_113048693668698297a50e75_42951891 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<p class="submit">
						<button type="submit" class="btn button button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Retrieve Password'),$_smarty_tpl ) );?>
&nbsp;<i class="icon-chevron-right right"></i></span></button>
					</p>
				<?php
}
}
/* {/block 'password_form_action'} */
/* {block 'password_form'} */
class Block_127129175868698297a34749_12898527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['request_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std" id="form_forgotpassword">
			<fieldset>
				<div class="form-group">
					<label for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address'),$_smarty_tpl ) );?>
</label>
					<input class="form-control" type="email" id="email" name="email" value="<?php if ((isset($_POST['email']))) {
echo stripslashes(htmlspecialchars((string)$_POST['email'], ENT_QUOTES, 'UTF-8', true));
}?>" />
				</div>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5624638068698297a4f254_72429230', 'displayForgotPasswordFormFieldsAfter', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113048693668698297a50e75_42951891', 'password_form_action', $this->tplIndex);
?>

			</fieldset>
		</form>
	<?php
}
}
/* {/block 'password_form'} */
/* {block 'password'} */
class Block_134622040768698297a1c2f9_14035872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'password' => 
  array (
    0 => 'Block_134622040768698297a1c2f9_14035872',
  ),
  'password_heading' => 
  array (
    0 => 'Block_162438078568698297a23464_03104683',
  ),
  'errors' => 
  array (
    0 => 'Block_204805930268698297a25089_03894926',
  ),
  'password_form' => 
  array (
    0 => 'Block_127129175868698297a34749_12898527',
  ),
  'displayForgotPasswordFormFieldsAfter' => 
  array (
    0 => 'Block_5624638068698297a4f254_72429230',
  ),
  'password_form_action' => 
  array (
    0 => 'Block_113048693668698297a50e75_42951891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<div class="box">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162438078568698297a23464_03104683', 'password_heading', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204805930268698297a25089_03894926', 'errors', $this->tplIndex);
?>


	<?php if ((isset($_smarty_tpl->tpl_vars['confirmation']->value)) && $_smarty_tpl->tpl_vars['confirmation']->value == 1) {?>
	<p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your password has been successfully reset and a confirmation has been sent to your email address:'),$_smarty_tpl ) );?>
 <?php if ((isset($_smarty_tpl->tpl_vars['customer_email']->value))) {
echo stripslashes(htmlspecialchars((string)$_smarty_tpl->tpl_vars['customer_email']->value, ENT_QUOTES, 'UTF-8', true));
}?></p>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['confirmation']->value)) && $_smarty_tpl->tpl_vars['confirmation']->value == 2) {?>
	<p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A confirmation email has been sent to your address:'),$_smarty_tpl ) );?>
 <?php if ((isset($_smarty_tpl->tpl_vars['customer_email']->value))) {
echo stripslashes(htmlspecialchars((string)$_smarty_tpl->tpl_vars['customer_email']->value, ENT_QUOTES, 'UTF-8', true));
}?></p>
	<?php } else { ?>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter the email address you used to register. We will then send you a new password. '),$_smarty_tpl ) );?>
</p>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127129175868698297a34749_12898527', 'password_form', $this->tplIndex);
?>

	<?php }?>
	</div>
	<ul class="clearfix footer_links">
		<li><a class="btn button button-small" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Login'),$_smarty_tpl ) );?>
" rel="nofollow"><span><i class="icon-chevron-left"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Login'),$_smarty_tpl ) );?>
</span></a></li>
	</ul>
<?php
}
}
/* {/block 'password'} */
}
