<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:42:49
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ph_recommendbycategories\views\templates\hook\recommended_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c2559cbdd05_03273111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b07fb97ad694ea293a4200ad36bd190330d7c4' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ph_recommendbycategories\\views\\templates\\hook\\recommended_product.tpl',
      1 => 1715977442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 2,
  ),
),false)) {
function content_673c2559cbdd05_03273111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '691155113673c2559cb7b00_98636642';
if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <section class="ph-recommend-products featured-products clearfix">
        <?php if ((isset($_smarty_tpl->tpl_vars['title']->value)) && $_smarty_tpl->tpl_vars['title']->value) {?>
            <h2 class="recomment_title"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h2>
        <?php }?>
        <div class="products row only_desktop <?php if ($_smarty_tpl->tpl_vars['enable_slider_on_desktop']->value) {?>slider_enabled<?php } else { ?>slider_disabled<?php }?>">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="products row only_mobile <?php if ($_smarty_tpl->tpl_vars['enable_slider_on_mobile']->value) {?> slider_enabled<?php } else { ?>slider_disabled<?php }?>" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'indexItem');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['indexItem']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </section>
<?php }
}
}