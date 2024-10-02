<?php
/* Smarty version 4.3.4, created on 2024-10-01 22:10:59
  from 'C:\xampp\htdocs\camino_sierra_prestashop\administracion\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fcc7d39e1e82_49380777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb8a7cf4720fc262c86d8ab7eb7c8932c2dc1744' => 
    array (
      0 => 'C:\\xampp\\htdocs\\camino_sierra_prestashop\\administracion\\themes\\new-theme\\template\\content.tpl',
      1 => 1727254120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc7d39e1e82_49380777 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
