<?php
/* Smarty version 4.3.4, created on 2024-11-19 01:48:31
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c42cf27b257_99443762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0436aeb53f20f522a84c947c93856ff995a956c' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\my-account.tpl',
      1 => 1711753268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c42cf27b257_99443762 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="col-lg-4 col-md-6 col-sm-6 col-xs-12" >
    <a id="author-blog-comment-link" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ets_blog','comments'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My blog comments','mod'=>'ets_blog'),$_smarty_tpl ) );?>
">
        <span class="link-item">
            <span class="ss_icon_group">
                <i class="fa fa-comments"></i>
            </span>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My blog comments','mod'=>'ets_blog'),$_smarty_tpl ) );?>

        </span>
    </a>
</li> <?php }
}
