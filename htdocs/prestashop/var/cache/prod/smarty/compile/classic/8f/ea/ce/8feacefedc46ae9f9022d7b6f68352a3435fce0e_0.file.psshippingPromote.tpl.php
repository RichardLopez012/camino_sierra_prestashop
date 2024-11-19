<?php
/* Smarty version 4.3.4, created on 2024-11-18 22:11:36
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\psshipping\views\templates\hook\psshippingPromote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c0ff8437076_94190305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8feacefedc46ae9f9022d7b6f68352a3435fce0e' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\psshipping\\views\\templates\\hook\\psshippingPromote.tpl',
      1 => 1727254120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c0ff8437076_94190305 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['appLink']->value,'htmlall','UTF-8' ));?>
" type="module"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['appCss']->value,'htmlall','UTF-8' ));?>
" type="text/css" media="all">

<?php echo '<script'; ?>
>
document.addEventListener('DOMContentLoaded', function () {
  const findCarriersList = document.querySelector('#form-carrier.form-horizontal.clearfix');
  if (!findCarriersList) {
      return;
  }
  let promoteBanner = document.createElement('div');
  promoteBanner.setAttribute('id', 'promotePsshippingBanner');
  const content = `
    <i18n-host>
      <promote-shipping></promote-shipping>
    </i18n-host>
  `;
  promoteBanner.innerHTML = content;
  findCarriersList.before(promoteBanner);
});
<?php echo '</script'; ?>
>
<?php }
}
