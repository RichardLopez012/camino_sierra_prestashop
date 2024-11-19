<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:28:35
  from 'module:ets_blogviewstemplatesfrontblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c2203731941_29301444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4021e7125d808924f9313702d292303e9725dd52' => 
    array (
      0 => 'module:ets_blogviewstemplatesfrontblog.tpl',
      1 => 1711753268,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c2203731941_29301444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_874153459673c2203730770_45921003', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "page.tpl");
}
/* {block "content"} */
class Block_874153459673c2203730770_45921003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_874153459673c2203730770_45921003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
        <div class="ets_blog_sidebar ">
            <?php echo $_smarty_tpl->tpl_vars['blog_left_sidebar']->value;?>

        </div>
    </div>
    <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
        <?php echo $_smarty_tpl->tpl_vars['blog_content']->value;?>

    </div>
<?php
}
}
/* {/block "content"} */
}
