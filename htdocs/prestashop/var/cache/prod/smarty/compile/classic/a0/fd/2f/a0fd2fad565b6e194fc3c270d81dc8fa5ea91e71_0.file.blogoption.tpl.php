<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:50:49
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\blogoption.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c27393889d8_41098150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0fd2fad565b6e194fc3c270d81dc8fa5ea91e71' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\blogoption.tpl',
      1 => 1711753268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c27393889d8_41098150 (Smarty_Internal_Template $_smarty_tpl) {
?><option class="search_depth_level_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['depth_level']->value ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_category']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['selected_blog_category']->value == $_smarty_tpl->tpl_vars['id_category']->value) {?> selected="selected"<?php }?> ><?php if ($_smarty_tpl->tpl_vars['levelSeparator']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['levelSeparator']->value,'html','UTF-8' ));?>
 <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' ));?>
</option><?php }
}
