<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:40:25
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\smartsupp\views\templates\admin\connect_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c24c98afc53_41124651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '824c41351c04fc43efa31d8ec6e87895dac49b61' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\smartsupp\\views\\templates\\admin\\connect_account.tpl',
      1 => 1694471344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./includes/features.tpl' => 1,
    'file:./includes/clients.tpl' => 1,
  ),
),false)) {
function content_673c24c98afc53_41124651 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="smartsupp_connect_account" class="panel">
	<header class="header">
		<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/smartsupp_logo.png" alt="Smartsupp" />
		<nav>
			<div class="header-user">
				<span class="header-user__email">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not a Smartsupp user yet?','mod'=>'smartsupp'),$_smarty_tpl ) );?>

				</span>
				<button id="create_account_btn2" class="btn btn--sm">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a free account','mod'=>'smartsupp'),$_smarty_tpl ) );?>

				</button>
			</div>
		</nav>
	</header>

	<main class="main" role="main">
		<div class="main__left">
			<div class="main-form">
				<h1 class="main-form__h1">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in','mod'=>'smartsupp'),$_smarty_tpl ) );?>

				</h1>
				<div id="smartsupp-login-alerts" class="alerts">
					<div id="smartsupp-login-alert" class="alert alert-danger js-clear"></div>
				</div>
				<div class="form-horizontal">
					<input id="SMARTSUPP_EMAIL" type="email" value="" name="SMARTSUPP_EMAIL" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail:','mod'=>'smartsupp'),$_smarty_tpl ) );?>
" class="input" required>
					<input id="SMARTSUPP_PASSWORD" type="password" value="" name="SMARTSUPP_PASSWORD" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password:','mod'=>'smartsupp'),$_smarty_tpl ) );?>
" class="input" required>
					<button id="connect_existing_account_do" class="btn btn--primary btn--arrow btn--all-width">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in','mod'=>'smartsupp'),$_smarty_tpl ) );?>

					</button>
                    <p class="main-form__bottom-text">
						<span>
							<a href="https://app.smartsupp.com/app/sign/reset" target="_blank" class="link">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I forgot my password','mod'=>'smartsupp'),$_smarty_tpl ) );?>

							</a>
						</span>
					</p>
				</div>
			</div>
		</div>

		<div class="main__right">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/tablet-screen.png">
		</div>
	</main>

	<?php $_smarty_tpl->_subTemplateRender('file:./includes/features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('file:./includes/clients.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><?php }
}
