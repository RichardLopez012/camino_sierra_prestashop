<?php
/* Smarty version 4.3.4, created on 2024-10-14 01:49:50
  from 'C:\PrestashopXAMPP\htdocs\prestashop\administracion\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_670ccd1ef338e9_72129769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '025e14752476dd7a650dfbbfb22d4c2fd500c084' => 
    array (
      0 => 'C:\\PrestashopXAMPP\\htdocs\\prestashop\\administracion\\themes\\new-theme\\template\\content.tpl',
      1 => 1727254120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670ccd1ef338e9_72129769 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
