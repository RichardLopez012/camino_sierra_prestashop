<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:10:11
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c1db3db2187_77053646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc2277082c7a12d112501ac73759ccc2c6eb8c95' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c1db3db2187_77053646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1153514780673c1db3dac736_50128071';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2085766578673c1db3dae027_47168868', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_2085766578673c1db3dae027_47168868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_2085766578673c1db3dae027_47168868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
