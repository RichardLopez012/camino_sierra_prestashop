<?php
/* Smarty version 4.3.4, created on 2024-10-01 22:10:58
  from 'C:\xampp\htdocs\camino_sierra_prestashop\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fcc7d261be47_33510161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03c550c13cd5069b7a7eac868a1de5b4ba1a7e2c' => 
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
function content_66fcc7d261be47_33510161 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}