<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:11:00
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c1de449a208_63385445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4153acd80ee3716e7965a0de4cba9add33a1337' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\sidebar.tpl',
      1 => 1711753268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c1de449a208_63385445 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ets-left-panel col-lg-12">
    <div class="blog-list-group">
        <?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                <a class="<?php if ($_smarty_tpl->tpl_vars['controller']->value == $_smarty_tpl->tpl_vars['tab']->value['controller']) {?> active<?php }?>  blog-list-group-item" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['url'],'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id'],'html','UTF-8' ));?>
"><?php if ((isset($_smarty_tpl->tpl_vars['tab']->value['icon']))) {?><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['icon'],'html','UTF-8' ));?>
"></i> <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['label'],'html','UTF-8' ));
if ((isset($_smarty_tpl->tpl_vars['tab']->value['total_result'])) && $_smarty_tpl->tpl_vars['tab']->value['total_result']) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['total_result'] ));?>
)<?php }?></a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div><?php }
}
