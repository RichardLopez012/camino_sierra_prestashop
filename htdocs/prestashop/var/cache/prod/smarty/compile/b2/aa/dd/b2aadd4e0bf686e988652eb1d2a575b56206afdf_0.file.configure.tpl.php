<?php
/* Smarty version 4.3.4, created on 2024-11-18 23:39:14
  from 'C:\camino_sierra_prestashop\htdocs\prestashop\modules\crisp\views\templates\admin\configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c24822c6923_84723932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2aadd4e0bf686e988652eb1d2a575b56206afdf' => 
    array (
      0 => 'C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\crisp\\views\\templates\\admin\\configure.tpl',
      1 => 1717424552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c24822c6923_84723932 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  const CRISP_PLUGIN_ID = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['crisp_plugin_identifier']->value,'javascript','UTF-8' ));?>
";
  const CRISP_PLUGIN_URL = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['crisp_plugin_url']->value,'javascript','UTF-8' ));?>
";
  const CRISP_PLUGIN_SOURCE = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['crisp_plugin_source']->value,'javascript','UTF-8' ));?>
";
  const API_KEY = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['crisp_api_key']->value,'javascript','UTF-8' ));?>
";
  const WEBSITE_ID = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['website_id']->value,'javascript','UTF-8' ));?>
";
  const IS_CONNECTED = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['is_crisp_working']->value,'javascript','UTF-8' ));?>
";
  const WEBSERVICE_KEY_ID = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['crisp_webservice_key_id']->value,'javascript','UTF-8' ));?>
";
  const CALLBACK_URL = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['http_callback']->value,'javascript','UTF-8' ));?>
";
  const ADMIN_URL = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['admin_url']->value,'javascript','UTF-8' ));?>
";
  const ADMIN_LOCALE = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['admin_locale']->value,'javascript','UTF-8' ));?>
";
  const CHATBOX_DISABLED = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chatbox_disabled']->value,'javascript','UTF-8' ));?>
";
  const API_KEY_DISABLED = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['api_key_disabled']->value,'javascript','UTF-8' ));?>
";
  const API_KEY_INVALID = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['api_key_invalid']->value,'javascript','UTF-8' ));?>
";
  const SHOP_NAME = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_name']->value,'javascript','UTF-8' ));?>
";
  const SHOP_DOMAIN = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_domain']->value,'javascript','UTF-8' ));?>
";
  const USER_EMAIL = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_email']->value,'javascript','UTF-8' ));?>
";
  const USER_NAME = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_name']->value,'javascript','UTF-8' ));?>
";
<?php echo '</script'; ?>
>

<div id="app" v-scope="InitPreferences(API_KEY, WEBSITE_ID, IS_CONNECTED, WEBSERVICE_KEY_ID, CALLBACK_URL, ADMIN_URL, ADMIN_LOCALE, CHATBOX_DISABLED, API_KEY_DISABLED)" @vue:mounted="mounted" class="container">
  <div>
    <h1 class="mb-3">
      <img id="logo" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo']->value,'javascript','UTF-8' ));?>
">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome to your Crisp Integration','mod'=>'crisp'),$_smarty_tpl ) );?>

    </h1>
  </div>

  <div>
    <div class="row mb-2">
      <div class="col-md-5 col-12 pr-1 pl-0">
        <prestashop-accounts style="height:100%;display:flex;width:100%"></prestashop-accounts>
      </div>
      <div class="col-md-7 col-12 pl-1 pr-0">
        <div id="prestashop-cloudsync" style="height:100%;display: flex;"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 p-0">
        <div v-if="!store.psAccountsConnected" class="alert alert-warning" role="alert">
          <p class="alert-text">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please associate your Prestashop account with this module before continuing.','mod'=>'crisp'),$_smarty_tpl ) );?>

          </p>
        </div>

        <div id="crisp">
          <div v-if="store.isConnected" class="crisp-panel">
            <div class="wrap crisp-wrap">
              <div class="crisp-modal">
                <div class="crisp-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure Crisp for your Prestashop Store','mod'=>'crisp'),$_smarty_tpl ) );?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['crisp_installed']->value == true) {?>
                  <p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Crisp has been successfully linked with your Prestashop data.','mod'=>'crisp'),$_smarty_tpl ) );?>
</p>
                <?php }?>
                <div id="installcrisp" class="d-flex flex-column">
                  <a class="crisp-button crisp u-mb20" href="https://app.crisp.chat/website/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['website_id']->value,'htmlall','UTF-8' ));?>
/inbox" target="_blank">💬 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open Crisp inbox','mod'=>'crisp'),$_smarty_tpl ) );?>
</a>
                  <a class="crisp-button crisp-neutral u-mb20" href="https://app.crisp.chat/settings/website/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['website_id']->value,'htmlall','UTF-8' ));?>
" target="_blank">⚙️ <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to my Crisp settings','mod'=>'crisp'),$_smarty_tpl ) );?>
</a>
                  <a class="crisp-button crisp-neutral u-mb20" onclick="actions.linkWithCrispCloudSync()">🪄 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Relink Crisp to my Prestashop','mod'=>'crisp'),$_smarty_tpl ) );?>
</a>

                  <div v-if="store.webservice.key !== ''">
                    <div class="crisp-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable your Stores Webservice','mod'=>'crisp'),$_smarty_tpl ) );?>
</div>

                    <div v-if="store.webservice.loading" class="crisp-loading">
                      <div class="spinner"></div>
                      <div>
                        <span class="crisp-label-subdued pt-4"> Connecting webservice to Crisp... </span>
                      </div>
                    </div>

                    <div v-else>
                      <div v-if="store.webservice.success !== ''" class="alert alert-success" role="alert">
                        <p class="alert-text">
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[[store.webservice.success]]','mod'=>'crisp'),$_smarty_tpl ) );?>

                        </p>
                      </div>

                      <div v-if="store.webservice.error !== ''" class="alert alert-danger" role="alert">
                        <p class="alert-text">
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[[store.webservice.error]]','mod'=>'crisp'),$_smarty_tpl ) );?>

                        </p>
                      </div>

                      <div v-if="store.webservice.success === ''">
                        <div v-if="store.webservice.invalid">
                          <p v-if="store.webservice.error === ''" class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have a Crisp webservice key but it is not enabled. Please link the webservice and enabled it in Advanced Parameters > Webservice','mod'=>'crisp'),$_smarty_tpl ) );?>
</p>

                          <a v-if="!store.webservice.enabled" id="installcrisp" class="crisp-button crisp" onclick="actions.linkWithCrispWebservice()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link Webservice to Crisp','mod'=>'crisp'),$_smarty_tpl ) );?>
</a>
                          <a v-else class="crisp-button crisp-neutral u-mb20" onclick="actions.linkWithCrispWebservice()">🪄 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Relink Webservice to Crisp','mod'=>'crisp'),$_smarty_tpl ) );?>
</a>
                        </div>

                        <div v-else-if="store.webservice.error === ''" class="alert alert-warning" role="alert">
                          <p class="alert-text">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prestashop data is now syncing with Crisp through Cloudsync. Enable your stores webservice in order to view customers\' data from Crisp.','mod'=>'crisp'),$_smarty_tpl ) );?>

                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="crisp-options">
                    <div class="crisp-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Options','mod'=>'crisp'),$_smarty_tpl ) );?>
</div>

                    <div class="crisp-option">
                      <label for="crisp-chatbox">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Include Crisp Chatbox on storefront.','mod'=>'crisp'),$_smarty_tpl ) );?>
 <span class="crisp-label-subdued"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable this option to show the Chatbox on you store.','mod'=>'crisp'),$_smarty_tpl ) );?>
</span>
                      </label>
                      <input v-model="store.chatboxEnabled" onchange="actions.toggleChatbox()" data-toggle="switch" class="switch-input-lg" id="crisp-chatbox" data-inverse="true" type="checkbox" name="switch[]" ref="chatboxToggle" />
                    </div>

                    <div class="crisp-option">
                      <label for="crisp-chatbox">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use stores webservice.','mod'=>'crisp'),$_smarty_tpl ) );?>
 <span class="crisp-label-subdued"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable this option to allow Crisp to use the stores webservice in order to find customers and their order details.','mod'=>'crisp'),$_smarty_tpl ) );?>
</span>
                      </label>
                      <input v-model="store.webservice.active" onchange="actions.toggleWebservice()" data-toggle="switch" class="switch-input-lg" id="crisp-chatbox" data-inverse="true" type="checkbox" name="switch[]" ref="webserviceToggle" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div v-if="!store.isConnected" class="crisp-panel">
            <div class="wrap crisp-wrap">
              <div class="crisp-modal">
                <div class="crisp-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link Crisp with your Prestashop data','mod'=>'crisp'),$_smarty_tpl ) );?>
</div>
                <div class="crisp-actions">
                  <p class="crisp-subtitle" class="mb-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By clicking this link you will allow data to flow between Crisp and Prestashop','mod'=>'crisp'),$_smarty_tpl ) );?>
</p>
                  <a id="installcrisp" class="crisp-button crisp" href="#" onclick="actions.linkWithCrispCloudSync()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install Crisp on my Prestashop','mod'=>'crisp'),$_smarty_tpl ) );?>
</a>
                </div>

                <div class="crisp-side">
                  <div class="crisp-side-illustration"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urlAccountsCdn']->value,'htmlall','UTF-8' ));?>
" rel=preload><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urlCloudsync']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  window?.psaccountsVue?.init();
  store.psAccountsConnected = window?.psaccountsVue?.isOnboardingCompleted();

  if (window.psaccountsVue.isOnboardingCompleted() != true)
  {
    document.getElementById("crisp").style.opacity = "0.5";
    document.getElementById("installcrisp").style.display = "none!important";
  } else {
    store.psAccountsConnected = true;
  }

  // Cloud Sync
  const cdc = window.cloudSyncSharingConsent;
  cdc.init('#prestashop-cloudsync');
<?php echo '</script'; ?>
>
<?php }
}
