<?php
/* Smarty version 4.3.4, created on 2024-11-19 01:47:16
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\doofinder\views\templates\admin\support_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c428473baf6_55604342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '025192b5e69c3cb68b4d0118945c8fcb2bae84c2' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\doofinder\\views\\templates\\admin\\support_tab.tpl',
      1 => 1731595214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c428473baf6_55604342 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
	<div class="row doofinder-header text-center pb-5 mb-5">
		<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/doofinder_logo.png"  id="payment-logo" />
	</div>
	<div class="row" style="margin-top: 2em;">
		<div class="col-md-12 text-center">
			<h3 style="background-color:  #f4f4f4 ; text-transform:uppercase;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Need help configuring your search engine?','mod'=>'doofinder'),$_smarty_tpl ) );?>
</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<h2><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All documentation in one place!','mod'=>'doofinder'),$_smarty_tpl ) );?>
 </strong><a href="https://support.doofinder.com/">https://support.doofinder.com/</a></h2>
		</div>
	</div>
		
	<div class="doofinder-content">
		<div class="row" style="margin-top: 2em;">
			<div class="col-md-12">
				<dl>
					<dt>&middot; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Understand how the product feed works to display results in the Doofinder search layer','mod'=>'doofinder'),$_smarty_tpl ) );?>
</dt>
					<dd><a href="https://support.doofinder.com/managing-data/the-product-data-feed.html" target="_blank">Visitar página</a></dd>
					
					<dt>&middot; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to add information in the Doofinder search layer','mod'=>'doofinder'),$_smarty_tpl ) );?>
</dt>
					<dd><a href="https://support.doofinder.com/layers/appearance.html" target="_blank">Visitar página</a></dd>
					
					<dt>&middot; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to configure the search layer filters','mod'=>'doofinder'),$_smarty_tpl ) );?>
</dt>
					<dd><a href="https://support.doofinder.com/managing-results/filters-configuration" target="_blank">Visitar página</a></dd>

					<dt>&middot; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn the basics about Live Layer','mod'=>'doofinder'),$_smarty_tpl ) );?>
</dt>
					<dd><a href="https://support.doofinder.com/layers/live-layer-basics.html" target="_blank">Visitar página</a></dd>

				</dl>
			</div>
		</div>

		<hr />

		<div class="row">
			<div class="col-md-12">
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or contact directly with us. We will be glad to help you','mod'=>'doofinder'),$_smarty_tpl ) );?>
</h4>
				<dl>
					<dt>&middot; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Support email','mod'=>'doofinder'),$_smarty_tpl ) );?>
</dt>
					<dd><a href="mailto:support@doofinder.com" target="_blank">support@doofinder.com</a></dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<?php }
}
