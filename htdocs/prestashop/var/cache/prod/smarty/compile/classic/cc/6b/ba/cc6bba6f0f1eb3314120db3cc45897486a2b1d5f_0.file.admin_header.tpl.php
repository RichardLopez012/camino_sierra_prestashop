<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:11:00
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\ets_blog\views\templates\hook\admin_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c1de4399a44_81613865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc6bba6f0f1eb3314120db3cc45897486a2b1d5f' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\ets_blog\\views\\templates\\hook\\admin_header.tpl',
      1 => 1711753268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c1de4399a44_81613865 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var ets_blog_link_ajax_comment='<?php echo $_smarty_tpl->tpl_vars['ets_blog_link_ajax_comment']->value;?>
';
$(document).ready(function(){
    $.ajax({
        url: ets_blog_link_ajax_comment,
        data: 'action=getCountCommentsNoViewed',
        type: 'post',
        dataType: 'json',                
        success: function(json){ 
            if(parseInt(json.count) >0)
            {
                if($('#subtab-AdminEtsBlogComment span').length)
                    $('#subtab-AdminEtsBlogComment span').append('<span class="count_messages ">'+json.count+'</span>'); 
                else
                    $('#subtab-AdminEtsBlogComment a').append('<span class="count_messages ">'+json.count+'</span>');
            }
            else
            {
                if($('#subtab-AdminEtsBlogComment span').length)
                    $('#subtab-AdminEtsBlogComment span').append('<span class="count_messages hide">'+json.count+'</span>'); 
                else
                    $('#subtab-AdminEtsBlogComment a').append('<span class="count_messages hide">'+json.count+'</span>');
            }
                                                              
        },
    });
});
<?php echo '</script'; ?>
><?php }
}
