<?php
/* Smarty version 4.3.4, created on 2024-11-19 01:47:15
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\doofinder\views\templates\admin\dummy\pre_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c428325b290_94348154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1742e4223a2030418557e9b718aa966ba63db731' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\doofinder\\views\\templates\\admin\\dummy\\pre_tab.tpl',
      1 => 1731595214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c428325b290_94348154 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['id_tab']->value == 'onboarding_tab' || ($_smarty_tpl->tpl_vars['configured']->value && $_smarty_tpl->tpl_vars['id_tab']->value == 'data_feed_tab')) {?>active<?php }?>" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_tab']->value,'htmlall','UTF-8' ));?>
"><?php }
}
