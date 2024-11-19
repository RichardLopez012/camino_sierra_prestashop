<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:11:00
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\administracion\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c1de4600667_34704283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '700825454e70c05f0a0af7d72391e6cc118cf425' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\administracion\\themes\\default\\template\\content.tpl',
      1 => 1727254120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c1de4600667_34704283 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
