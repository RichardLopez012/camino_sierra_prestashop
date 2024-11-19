<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:28:28
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c21fc005394_61543769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33f4733db8bdb0e8de8f85ea2e2c6bc237987dce' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\confirmation.tpl',
      1 => 1711753268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c21fc005394_61543769 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bootstrap">
    <div class="module_confirmation conf confirm alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_blog_string']->value,'html','UTF-8' ));?>

        <?php if ((isset($_smarty_tpl->tpl_vars['link_view']->value)) && $_smarty_tpl->tpl_vars['link_view']->value) {?>
            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_view']->value,'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['view_text']->value,'html','UTF-8' ));?>
</a>
        <?php }?>
    </div>
</div><?php }
}
