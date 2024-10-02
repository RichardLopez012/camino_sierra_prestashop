<?php
/* Smarty version 4.3.4, created on 2024-10-01 23:56:32
  from 'C:\xampp\htdocs\camino_sierra_prestashop\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fce09039a334_18065281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c965b0bd9ff756269b15cf6eb2b3b3cd797b8e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\camino_sierra_prestashop\\modules\\psxdesign\\views\\templates\\hook\\displayModuleTag.tpl',
      1 => 1727254120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fce09039a334_18065281 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
