<?php
/* Smarty version 4.3.4, created on 2024-10-01 22:29:38
  from 'C:\xampp\htdocs\camino_sierra_prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fccc32b9b481_01526272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e52ff2c61b4941ab96585a1f8919af722d22bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\camino_sierra_prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fccc32b9b481_01526272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\camino_sierra_prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\f3\\e5\\2f\\f3e52ff2c61b4941ab96585a1f8919af722d22bf_2.file.helpers.tpl.php',
    'uid' => 'f3e52ff2c61b4941ab96585a1f8919af722d22bf',
    'call_name' => 'smarty_template_function_renderLogo_107675535966fccc32b66e36_74296843',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_107675535966fccc32b66e36_74296843 */
if (!function_exists('smarty_template_function_renderLogo_107675535966fccc32b66e36_74296843')) {
function smarty_template_function_renderLogo_107675535966fccc32b66e36_74296843(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_107675535966fccc32b66e36_74296843 */
}
