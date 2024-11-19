<?php
/* Smarty version 4.3.4, created on 2024-11-19 01:47:15
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\doofinder\views\templates\admin\indexation_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c4283204077_64806158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6af63079585143471f673359e974f49dd4faa5c' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\doofinder\\views\\templates\\admin\\indexation_status.tpl',
      1 => 1731595214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c4283204077_64806158 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="doofinder-indexation-status" style="margin-top: 2em; margin-bottom: 2em; background-color: #e2e2e2;">
    <div class="row" >
        <div class="col-xs-10" style="margin-left: 1em; margin-top: 1em; background-color: #e2e2e2; border-bottom: none;">
            <h3 style="margin: 0; background-color: #e2e2e2; border-bottom: none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Doofinder Indexation Status','mod'=>'doofinder'),$_smarty_tpl ) );?>
</h3>
        </div>
        <div class="col-xs-1 pull-right" style="margin-right: 1em;">
            <button type="button" class="close pull-right" aria-label="Close" style="font-size: 3em;">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <div style="padding: 15px;">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product feed is being processed. Depending on the size of the product catalog in the store, this process may take a few minutes.','mod'=>'doofinder'),$_smarty_tpl ) );?>
</p>
        <div class="text-center">
            <div class="loader"></div>
            <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your products may not appear correctly updated in the search results until the process has been completed.','mod'=>'doofinder'),$_smarty_tpl ) );?>
</strong></p>
        </div>
    </div>
</div>

<style>
    .loader {
        border: 5px solid #e2e2e2;
        border-top: 5px solid #3498db;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
        margin: 0 auto;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<?php echo '<script'; ?>
>
    var checkFeedUrl = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['check_feed_url']->value,'javascript','UTF-8' ));?>
";

    $( ".close" ).on( "click", function() {
        $(".doofinder-indexation-status").css("display", "none");
        var updateFeedUrl = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['update_feed_url']->value,'javascript','UTF-8' ));?>
";
        $.post(updateFeedUrl, function( data ) {});
    });

    checkFeed();

    function checkFeed() {
        $.ajax({
            url: checkFeedUrl,
            type: "POST",
            data: {},
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $(".doofinder-indexation-status").css("display", "none");
                    return;
                }
                setTimeout(checkFeed, 5000);
            },
            error: function() {
                setTimeout(checkFeed, 5000);
            }
        });
    }
    
<?php echo '</script'; ?>
>
<?php }
}
