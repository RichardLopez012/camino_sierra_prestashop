<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:28:48
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c2210e71349_13055019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa344a1849e238177ea8d0f7793fad808dceecbc' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\head.tpl',
      1 => 1711753268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c2210e71349_13055019 (Smarty_Internal_Template $_smarty_tpl) {
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
