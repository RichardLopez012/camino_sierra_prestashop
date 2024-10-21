<?php
/* Smarty version 4.3.4, created on 2024-10-21 01:14:55
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6715ff6fba8ce2_48591827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48c12c0df0bb7f71632c96a128b2c272f4641730' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6715ff6fba8ce2_48591827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\48\\c1\\2c\\48c12c0df0bb7f71632c96a128b2c272f4641730_2.file.helpers.tpl.php',
    'uid' => '48c12c0df0bb7f71632c96a128b2c272f4641730',
    'call_name' => 'smarty_template_function_renderLogo_2782018746715ff6fba1697_69698282',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_2782018746715ff6fba1697_69698282 */
if (!function_exists('smarty_template_function_renderLogo_2782018746715ff6fba1697_69698282')) {
function smarty_template_function_renderLogo_2782018746715ff6fba1697_69698282(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_2782018746715ff6fba1697_69698282 */
}
