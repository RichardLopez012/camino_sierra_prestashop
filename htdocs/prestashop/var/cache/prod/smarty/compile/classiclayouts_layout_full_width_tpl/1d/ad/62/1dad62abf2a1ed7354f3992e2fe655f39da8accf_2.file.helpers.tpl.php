<?php
/* Smarty version 4.3.4, created on 2024-12-04 20:04:21
  from 'C:\Users\173587\Desktop\camino_sierra_prestashop\htdocs\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67510a253eef90_01448707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dad62abf2a1ed7354f3992e2fe655f39da8accf' => 
    array (
      0 => 'C:\\Users\\173587\\Desktop\\camino_sierra_prestashop\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1728959126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67510a253eef90_01448707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\Users\\173587\\Desktop\\camino_sierra_prestashop\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\1d\\ad\\62\\1dad62abf2a1ed7354f3992e2fe655f39da8accf_2.file.helpers.tpl.php',
    'uid' => '1dad62abf2a1ed7354f3992e2fe655f39da8accf',
    'call_name' => 'smarty_template_function_renderLogo_78874180967510a253e7bc3_14044203',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_78874180967510a253e7bc3_14044203 */
if (!function_exists('smarty_template_function_renderLogo_78874180967510a253e7bc3_14044203')) {
function smarty_template_function_renderLogo_78874180967510a253e7bc3_14044203(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_78874180967510a253e7bc3_14044203 */
}
