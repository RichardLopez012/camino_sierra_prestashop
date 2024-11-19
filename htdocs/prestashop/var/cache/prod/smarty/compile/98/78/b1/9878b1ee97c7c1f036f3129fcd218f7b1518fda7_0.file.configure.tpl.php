<?php
/* Smarty version 4.3.4, created on 2024-11-19 01:47:15
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\doofinder\views\templates\admin\configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c42831cfc79_76973967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9878b1ee97c7c1f036f3129fcd218f7b1518fda7' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\doofinder\\views\\templates\\admin\\configure.tpl',
      1 => 1731595214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./onboarding_tab.tpl' => 1,
  ),
),false)) {
function content_673c42831cfc79_76973967 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oldPS']->value) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $("#content").addClass("bootstrap");
        $(".defaultForm").addClass("panel");
        $("input[type='submit']").addClass("btn-lg");
    });
<?php echo '</script'; ?>
>
<?php }
if ((isset($_smarty_tpl->tpl_vars['formUpdatedToClick']->value))) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $('.nav-tabs a[href="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formUpdatedToClick']->value,'htmlall','UTF-8' ));?>
"]').trigger('click');
    });
<?php echo '</script'; ?>
>
<?php }?>


<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <?php if (!$_smarty_tpl->tpl_vars['configured']->value) {?>
    <li class="active"><a href="#onboarding_tab" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On Boarding','mod'=>'doofinder'),$_smarty_tpl ) );?>
</a></li>
    <?php } else { ?>
    <li class="active"><a href="#data_feed_tab" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'store','mod'=>'doofinder'),$_smarty_tpl ) );?>
</a></li>
    <li><a href="#support_tab" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Support','mod'=>'doofinder'),$_smarty_tpl ) );?>
</a></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['adv']->value && $_smarty_tpl->tpl_vars['configured']->value) {?>
    <li><a href="#advanced_tab" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advanced','mod'=>'doofinder'),$_smarty_tpl ) );?>
</a></li>
    <?php }?>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <?php if (!$_smarty_tpl->tpl_vars['configured']->value || $_smarty_tpl->tpl_vars['is_new_shop']->value) {?>
        <div class="tab-pane active" id="onboarding_tab"><?php $_smarty_tpl->_subTemplateRender('file:./onboarding_tab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
    <?php }
}
}
