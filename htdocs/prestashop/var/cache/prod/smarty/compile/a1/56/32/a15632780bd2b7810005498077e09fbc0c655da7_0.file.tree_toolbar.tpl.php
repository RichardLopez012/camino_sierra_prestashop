<?php
/* Smarty version 4.3.4, created on 2024-11-18 22:47:34
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\administracion\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c1866beea77_39108710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15632780bd2b7810005498077e09fbc0c655da7' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\administracion\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1727254120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c1866beea77_39108710 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
