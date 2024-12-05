<?php
/* Smarty version 4.3.4, created on 2024-12-04 20:36:32
  from 'C:\Users\173587\Desktop\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_675111b0c088c8_23195027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee94d260b47d3cce7860103c617d66386a0d2aa7' => 
    array (
      0 => 'C:\\Users\\173587\\Desktop\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\head.tpl',
      1 => 1733360506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675111b0c088c8_23195027 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['ets_blog_post_header']->value))) {?>
    <meta property="og:app_id"        content="id_app" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_blog_post_header']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:image"         content="<?php if ($_smarty_tpl->tpl_vars['ets_blog_post_header']->value['image']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_blog_post_header']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_blog_post_header']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
    <meta property="og:description"   content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['ets_blog_post_header']->value['short_description']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:url"           content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_blog_post_header']->value['link'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
    <meta name="twitter:card"         content="summary_large_image" />
<?php }
}
}
