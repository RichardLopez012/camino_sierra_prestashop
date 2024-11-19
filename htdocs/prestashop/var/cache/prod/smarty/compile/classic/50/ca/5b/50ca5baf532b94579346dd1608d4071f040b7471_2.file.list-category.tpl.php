<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:28:35
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\list-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c2203624be6_39041345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ca5baf532b94579346dd1608d4071f040b7471' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\list-category.tpl',
      1 => 1711753268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c2203624be6_39041345 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ets_blog_layout_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_layout']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ets-blog-wrapper ets-blog-wrapper-blog-list<?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['ETS_BLOG_AUTO_LOAD'])) && $_smarty_tpl->tpl_vars['blog_config']->value['ETS_BLOG_AUTO_LOAD']) {?> loadmore<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['blog_categories']->value) {?>
        <h2 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All categories','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</h2>
        <ul class="ets-blog-list row">
            <?php $_smarty_tpl->_assignInScope('first_post', true);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <li class="list_category_item">                         
                    <div class="post-wrapper">
                        <?php if ($_smarty_tpl->tpl_vars['first_post']->value && ($_smarty_tpl->tpl_vars['blog_layout']->value == 'large_list' || $_smarty_tpl->tpl_vars['blog_layout']->value == 'large_grid')) {?>
                            <?php if ($_smarty_tpl->tpl_vars['category']->value['thumb']) {?>
                                <a class="ets_item_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <img title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  />
                                    
                                </a> 
                            <?php } elseif ($_smarty_tpl->tpl_vars['category']->value['image']) {?>
                                <a class="ets_item_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <img title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  />
                                    
                                </a> 
                             <?php }?>                              
                            <?php $_smarty_tpl->_assignInScope('first_post', false);?>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['category']->value['thumb']) {?>
                                <a class="ets_item_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <img title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  />

                                </a> 
                            <?php } elseif ($_smarty_tpl->tpl_vars['category']->value['image']) {?>
                                <a class="ets_item_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <img title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                </a>
                            <?php }?>
                        <?php }?>
                        <div class="ets-blog-wrapper-content">
                             <div class="ets-blog-wrapper-content-main">
                                <a class="ets_title_block" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['count_posts'] )), ENT_QUOTES, 'UTF-8');?>
)
                                </a>
                                
                                <?php if ($_smarty_tpl->tpl_vars['category']->value['sub_categogires']) {?>
                                    <div class="sub_category">
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['sub_categogires'], 'sub_category');
$_smarty_tpl->tpl_vars['sub_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_category']->value) {
$_smarty_tpl->tpl_vars['sub_category']->do_else = false;
?>
                                                <li>
                                                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_category']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                                                </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                <?php }?>
                                <div class="blog_description">
                                        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['description'],500,'...' )),'html','UTF-8' ));?>

                                        <?php }?>                                
                                </div><div class="clearfix"></div>
                                <?php if (($_smarty_tpl->tpl_vars['category']->value['count_posts'] > 0)) {?>
                                    <?php if (($_smarty_tpl->tpl_vars['category']->value['count_posts'] == 1)) {?>
                                        <a class="view_detail_link blog_view_all" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View %d post','sprintf'=>array($_smarty_tpl->tpl_vars['category']->value['count_posts']),'mod'=>'ets_blog'),$_smarty_tpl ) );?>

                                        </a>  
                                     <?php } else { ?>
                                        <a class="view_detail_link blog_view_all" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View %d posts','sprintf'=>array($_smarty_tpl->tpl_vars['category']->value['count_posts']),'mod'=>'ets_blog'),$_smarty_tpl ) );?>

                                        </a> 
                                     <?php }?>  
                                <?php } else { ?>
                                    <a class="view_detail_link blog_view_all" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View detail','mod'=>'ets_blog'),$_smarty_tpl ) );?>

                                    </a>
                                <?php }?>
                             </div>
                        </div>
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php if ($_smarty_tpl->tpl_vars['blog_paggination']->value) {?>
            <div class="blog-paggination">
                <?php echo $_smarty_tpl->tpl_vars['blog_paggination']->value;?>

            </div>
        <?php }?>
    <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No category found','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</p>
    <?php }?>
    </div> <?php }
}
