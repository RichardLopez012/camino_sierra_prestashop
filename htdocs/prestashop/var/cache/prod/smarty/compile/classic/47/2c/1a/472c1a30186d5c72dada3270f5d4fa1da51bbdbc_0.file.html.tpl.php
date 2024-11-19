<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:11:00
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c1de44d9273_24368050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '472c1a30186d5c72dada3270f5d4fa1da51bbdbc' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\html.tpl',
      1 => 1711753268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c1de44d9273_24368050 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tag']->value) {?>
<<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value,'html','UTF-8' ));?>

    <?php if ($_smarty_tpl->tpl_vars['tag_class']->value) {?> class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag_class']->value,'html','UTF-8' ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tag_id']->value) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag_id']->value,'html','UTF-8' ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['rel']->value) {?> rel="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rel']->value,'html','UTF-8' ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['type']->value) {?> type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value,'html','UTF-8' ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['data_id_product']->value) {?> data-id_product="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data_id_product']->value,'html','UTF-8' ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['href']->value) {?> href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['tag']->value == 'a' && $_smarty_tpl->tpl_vars['blank']->value) {?> target="_blank"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tag']->value == 'img' && $_smarty_tpl->tpl_vars['src']->value) {?> src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['attr_name']->value) {?> name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['attr_name']->value,'html','UTF-8' ));?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['attr_datas']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attr_datas']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['name'],'html','UTF-8' ));?>
="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['value'],'html','UTF-8' ));?>
"
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tag']->value == 'img' || $_smarty_tpl->tpl_vars['tag']->value == 'br' || $_smarty_tpl->tpl_vars['tag']->value == 'input') {?> /<?php }?>
    
>
    <?php }
if ($_smarty_tpl->tpl_vars['tag']->value && $_smarty_tpl->tpl_vars['tag']->value != 'img' && $_smarty_tpl->tpl_vars['tag']->value != 'input' && $_smarty_tpl->tpl_vars['tag']->value != 'br' && !is_null($_smarty_tpl->tpl_vars['content']->value)) {
echo $_smarty_tpl->tpl_vars['content']->value;
}
if ($_smarty_tpl->tpl_vars['tag']->value && $_smarty_tpl->tpl_vars['tag']->value != 'img' && $_smarty_tpl->tpl_vars['tag']->value != 'input' && $_smarty_tpl->tpl_vars['tag']->value != 'br') {?></<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value,'html','UTF-8' ));?>
><?php }
}
}
