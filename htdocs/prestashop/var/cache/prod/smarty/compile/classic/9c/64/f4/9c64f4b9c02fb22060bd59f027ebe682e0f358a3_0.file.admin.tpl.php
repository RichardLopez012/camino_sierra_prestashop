<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:11:00
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c1de45d1f46_62345091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c64f4b9c02fb22060bd59f027ebe682e0f358a3' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\admin.tpl',
      1 => 1711753268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c1de45d1f46_62345091 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['ets_blog_sidebar']->value;?>

<div class="blog_center_content col-lg-12 ets_blogpost">
    <?php echo $_smarty_tpl->tpl_vars['ets_blog_content']->value;?>

</div>
<?php echo Module::getInstanceByName('ets_blog')->displayIframe();
}
}
