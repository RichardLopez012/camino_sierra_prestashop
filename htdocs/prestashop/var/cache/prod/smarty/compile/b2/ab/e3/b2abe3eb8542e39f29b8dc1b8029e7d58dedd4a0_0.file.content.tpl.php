<?php
/* Smarty version 4.3.4, created on 2024-12-04 20:03:27
  from 'C:\Users\173587\Desktop\camino_sierra_prestashop\htdocs\prestashop\administracion\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_675109efb01e12_30736729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2abe3eb8542e39f29b8dc1b8029e7d58dedd4a0' => 
    array (
      0 => 'C:\\Users\\173587\\Desktop\\camino_sierra_prestashop\\htdocs\\prestashop\\administracion\\themes\\default\\template\\content.tpl',
      1 => 1728959101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675109efb01e12_30736729 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
