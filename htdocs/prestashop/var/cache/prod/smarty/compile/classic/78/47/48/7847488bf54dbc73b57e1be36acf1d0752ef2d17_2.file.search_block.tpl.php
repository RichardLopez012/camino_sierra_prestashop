<?php
/* Smarty version 4.3.4, created on 2024-12-04 20:04:18
  from 'C:\Users\173587\Desktop\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\search_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67510a223d4c74_52576729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7847488bf54dbc73b57e1be36acf1d0752ef2d17' => 
    array (
      0 => 'C:\\Users\\173587\\Desktop\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\search_block.tpl',
      1 => 1733360506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67510a223d4c74_52576729 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block ets_block_search <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_BLOG_RTL_CLASS']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <h4 class="title_blog title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search in blog','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</h4>
    <div class="content_block block_content">
        <form action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input class="form-control" type="text" name="ets_blog_search" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type in keywords...','mod'=>'ets_blog'),$_smarty_tpl ) );?>
" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
            <input class="button" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'ets_blog'),$_smarty_tpl ) );?>
" />
            <span class="icon_search"></span>
        </form>
    </div>
</div>
<?php }
}
