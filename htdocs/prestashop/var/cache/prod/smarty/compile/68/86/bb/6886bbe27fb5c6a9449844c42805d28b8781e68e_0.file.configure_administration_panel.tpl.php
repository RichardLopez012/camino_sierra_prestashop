<?php
/* Smarty version 4.3.4, created on 2024-11-19 01:47:15
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\doofinder\views\templates\admin\configure_administration_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c4283225326_21012731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6886bbe27fb5c6a9449844c42805d28b8781e68e' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\doofinder\\views\\templates\\admin\\configure_administration_panel.tpl',
      1 => 1731595214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c4283225326_21012731 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel ">
  <div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Administration panel','mod'=>'doofinder'),$_smarty_tpl ) );?>
</div>
  <div class="panel-body">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <p><strong style="font-size: 1.2em;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Config Doofinder in my shop','mod'=>'doofinder'),$_smarty_tpl ) );?>
</strong></p>
          <p style="font-size: 1.1em;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access the Doofinder dashboard and discover all the functionalities to increase your sales.','mod'=>'doofinder'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="col-md-6 col-sm-6 text-right">
          <a href="https://admin.doofinder.com" class="btn btn-default btn-lg" target="_blank">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to Doofinder dashboard','mod'=>'doofinder'),$_smarty_tpl ) );?>

            <span class="icon-arrow-right"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
