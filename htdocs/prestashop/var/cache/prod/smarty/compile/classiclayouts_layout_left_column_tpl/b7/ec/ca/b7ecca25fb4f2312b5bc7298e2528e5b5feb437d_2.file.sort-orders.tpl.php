<?php
/* Smarty version 4.3.4, created on 2024-10-21 01:14:56
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\themes\classic\templates\catalog\_partials\sort-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6715ff7015e3e0_79337076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7ecca25fb4f2312b5bc7298e2528e5b5feb437d' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\sort-orders.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6715ff7015e3e0_79337076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="col-sm-3 col-md-5 hidden-sm-down sort-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
<div class="<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>col-xs-8 col-sm-7<?php } else { ?>col-xs-12 col-sm-12<?php }?> col-md-9 products-sort-order dropdown">
  <button
    class="btn-unstyle select-title"
    rel="nofollow"
    data-toggle="dropdown"
    aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by selection','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
    aria-haspopup="true"
    aria-expanded="false">
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['sort_selected']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>
    <i class="material-icons float-xs-right">&#xE5C5;</i>
  </button>
  <div class="dropdown-menu">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
      <a
        rel="nofollow"
        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
        class="select-list <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
      >
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php }
}