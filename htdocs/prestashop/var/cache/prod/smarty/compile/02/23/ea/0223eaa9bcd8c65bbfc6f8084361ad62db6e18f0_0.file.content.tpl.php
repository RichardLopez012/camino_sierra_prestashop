<?php
/* Smarty version 4.3.4, created on 2024-10-21 01:14:45
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\administracion\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6715ff65dc31e3_01434698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0223eaa9bcd8c65bbfc6f8084361ad62db6e18f0' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\administracion\\themes\\new-theme\\template\\content.tpl',
      1 => 1727254120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6715ff65dc31e3_01434698 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}