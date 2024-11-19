<?php
/* Smarty version 4.3.4, created on 2024-11-19 01:47:16
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\doofinder\views\templates\admin\configure_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c4284728376_32609159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c567e8f30f96e2dec9ff33b9f5334204c69ad96' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\doofinder\\views\\templates\\admin\\configure_footer.tpl',
      1 => 1731595214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./support_tab.tpl' => 1,
  ),
),false)) {
function content_673c4284728376_32609159 (Smarty_Internal_Template $_smarty_tpl) {
?>	
	<?php if ($_smarty_tpl->tpl_vars['configured']->value) {?>
		<div class="tab-pane" id="support_tab"><?php $_smarty_tpl->_subTemplateRender('file:./support_tab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<?php }?>
</div>
<!-- End Tab panes -->
<?php }
}
