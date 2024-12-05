<?php
/* Smarty version 4.3.4, created on 2024-12-04 20:04:19
  from 'C:\Users\173587\Desktop\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67510a23be9a67_82333298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '524048b324b46a952f4bb1d608d12bc6f125baec' => 
    array (
      0 => 'C:\\Users\\173587\\Desktop\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\my-account.tpl',
      1 => 1733360506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67510a23be9a67_82333298 (Smarty_Internal_Template $_smarty_tpl) {
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
