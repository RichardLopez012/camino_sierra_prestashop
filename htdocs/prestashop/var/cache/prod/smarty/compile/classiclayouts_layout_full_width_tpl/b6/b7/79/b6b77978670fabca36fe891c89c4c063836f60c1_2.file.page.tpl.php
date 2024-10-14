<?php
/* Smarty version 4.3.4, created on 2024-10-14 01:50:06
  from 'C:\PrestashopXAMPP\htdocs\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_670ccd2e1d56d5_14986532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6b77978670fabca36fe891c89c4c063836f60c1' => 
    array (
      0 => 'C:\\PrestashopXAMPP\\htdocs\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670ccd2e1d56d5_14986532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1437586901670ccd2e1cd396_12665019', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1405178317670ccd2e1ce386_22127609 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_393398639670ccd2e1cda20_25530215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1405178317670ccd2e1ce386_22127609', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1230608170670ccd2e1d28a4_60593960 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1339699846670ccd2e1d3221_65408625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6155394670ccd2e1d2271_49647732 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1230608170670ccd2e1d28a4_60593960', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1339699846670ccd2e1d3221_65408625', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_64377741670ccd2e1d45c7_96558634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_884296257670ccd2e1d4036_52136148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64377741670ccd2e1d45c7_96558634', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1437586901670ccd2e1cd396_12665019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1437586901670ccd2e1cd396_12665019',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_393398639670ccd2e1cda20_25530215',
  ),
  'page_title' => 
  array (
    0 => 'Block_1405178317670ccd2e1ce386_22127609',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6155394670ccd2e1d2271_49647732',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1230608170670ccd2e1d28a4_60593960',
  ),
  'page_content' => 
  array (
    0 => 'Block_1339699846670ccd2e1d3221_65408625',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_884296257670ccd2e1d4036_52136148',
  ),
  'page_footer' => 
  array (
    0 => 'Block_64377741670ccd2e1d45c7_96558634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_393398639670ccd2e1cda20_25530215', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6155394670ccd2e1d2271_49647732', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_884296257670ccd2e1d4036_52136148', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
