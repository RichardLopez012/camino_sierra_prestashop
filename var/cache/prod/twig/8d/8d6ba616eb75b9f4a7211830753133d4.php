<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__45e85e88f42ea3c84fbd57ee507c0ea4 */
class __TwigTemplate_24dfe48e757e1a9338edea95e003e6be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/camino_sierra_prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/camino_sierra_prestashop/img/app_icon.png\" />

<title>Home • Camino de la Sierra</title>

  <script type=\"text/javascript\">
    var help_class_name = 'HOME';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'MX';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = 'b023a4a9244bbb8d0de2d6b73cd3aff5';
    var currentIndex = 'index.php?controller=HOME';
    var employee_token = 'cfbe9d0cf1f70efd9f56c00381922009';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/camino_sierra_prestashop/administracion/index.php/improve/modules/manage?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo';
    var admin_notification_get_link = '/camino_sierra_prestashop/administracion/index.php/common/notifications?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo';
    var admin_notification_push_link = adminNotificationPushLink = '/camino_sierra_prestashop/administracion/index.php/common/notifications/ack?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo';
    var tab_";
        // line 41
        echo "modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/camino_sierra_prestashop/administracion/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/camino_sierra_prestashop/administracion/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/camino_sierra_prestashop/administracion/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/camino_sierra_prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/camino_sierra_prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/camino_sierra_prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/camino_sierra_prestashop/administracion/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.9d2d6ef1.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/camino_sierra_prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/camino_sierra_prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/camino_sierra_prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/camino_sierra_prestashop\\/administracion\\/\";
var baseDir = \"\\/camino_sierra_prestashop\\/\";
var changeFormLanguageUrl = \"\\/camino_sierra_prestashop\\/administracion\\/index.php\\/configure\\/a";
        // line 69
        echo "dvanced\\/employees\\/change-form-language?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\";
var contextPsAccounts = {\"currentContext\":{\"type\":1,\"id\":1},\"psxName\":\"ps_edition_basic\",\"psIs17\":true,\"psAccountsVersion\":\"7.0.7\",\"psAccountsIsInstalled\":true,\"psAccountsInstallLink\":null,\"psAccountsIsEnabled\":true,\"psAccountsEnableLink\":\"http:\\/\\/localhost\\/camino_sierra_prestashop\\/administracion\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_accounts?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\",\"psAccountsIsUptodate\":true,\"psAccountsUpdateLink\":null,\"user\":{\"uuid\":null,\"email\":null,\"emailIsValidated\":false,\"isSuperAdmin\":true},\"backendUser\":{\"email\":\"173587@upslp.edu.mx\",\"employeeId\":1,\"isSuperAdmin\":true},\"currentShop\":{\"id\":\"1\",\"name\":\"Camino de la Sierra\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/camino_sierra_prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/camino_sierra_prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAOcgp0FudOUm7LuUQ9QoFqE5SYaf7p6wpO96HjwuXabNhKrFhxmxPb0L\\r\\nz8M2MljnAS6Hj0s\\/DMB1hHeJyK4UxnwHLdq81I6AMLwXu1\\/UmOJQ9lEHYXT4ujBD\\r\\ntsb2EJcU0mDmEGAQMcXttXp9qm8TUTX\\/G2qyWLzhvu8zTIEWYFeLAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/camino_sierra_prestashop\\/administracion\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=24ea226a0df77f2554626fe525b26cd4\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.7\"},\"isShopContext\":true,\"superAdminEmail\":\"173587@upslp.edu.mx\",\"onboardingLink\":\"https:\\/\\/accounts.distribution.prestashop.net?shops=W3siaWQiOiIxIiwibmFtZSI6IkNhbWlubyBkZSBsYSBTaWVycmEiLCJkb21haW4iOiJsb2NhbGhvc3QiLCJkb21haW5Tc2wiOiJsb2NhbGhvc3QiLCJwaHlzaWNhbFVyaSI6IlwvY2FtaW5vX3NpZXJyYV9wcmVzdGFzaG9wXC8iLCJ2aXJ0dWFsVXJpIjoiIiwiZnJvbnRVcmwiOiJodHRwczpcL1wvbG9jYWxob3N0XC9jYW1pbm9fc2";
        // line 70
        echo "llcnJhX3ByZXN0YXNob3BcLyIsInV1aWQiOm51bGwsInB1YmxpY0tleSI6Ii0tLS0tQkVHSU4gUlNBIFBVQkxJQyBLRVktLS0tLVxyXG5NSUdKQW9HQkFPY2dwMEZ1ZE9VbTdMdVVROVFvRnFFNVNZYWY3cDZ3cE85Nkhqd3VYYWJOaEtyRmh4bXhQYjBMXHJcbno4TTJNbGpuQVM2SGowc1wvRE1CMWhIZUp5SzRVeG53SExkcTgxSTZBTUx3WHUxXC9VbU9KUTlsRUhZWFQ0dWpCRFxyXG50c2IyRUpjVTBtRG1FR0FRTWNYdHRYcDlxbThUVVRYXC9HMnF5V0x6aHZ1OHpUSUVXWUZlTEFnTUJBQUU9XHJcbi0tLS0tRU5EIFJTQSBQVUJMSUMgS0VZLS0tLS0iLCJlbXBsb3llZUlkIjoiMSIsInVzZXIiOnsiZW1haWwiOm51bGwsImVtYWlsSXNWYWxpZGF0ZWQiOmZhbHNlLCJ1dWlkIjpudWxsfSwidXJsIjoiaHR0cDpcL1wvbG9jYWxob3N0XC9jYW1pbm9fc2llcnJhX3ByZXN0YXNob3BcL2FkbWluaXN0cmFjaW9uXC9pbmRleC5waHA\\/Y29udHJvbGxlcj1BZG1pbk1vZHVsZXMmY29uZmlndXJlPXBzX2VkaXRpb25fYmFzaWMmc2V0U2hvcENvbnRleHQ9cy0xJnRva2VuPTI0ZWEyMjZhMGRmNzdmMjU1NDYyNmZlNTI1YjI2Y2Q0IiwiaXNMaW5rZWRWNCI6ZmFsc2UsInVubGlua2VkQXV0byI6ZmFsc2UsIm11bHRpc2hvcCI6ZmFsc2UsIm1vZHVsZU5hbWUiOiJwc19lZGl0aW9uX2Jhc2ljIiwicHNWZXJzaW9uIjoiOC4xLjcifV0=\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=en\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"Camino de la Sierra\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/camino_sierra_prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/camino_sierra_prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAOcgp0FudOUm7LuUQ9QoFqE5SYaf7p6wpO96HjwuXabNhKrFhxmxPb0L\\r\\nz8M2MljnAS6Hj0s\\/DMB1hHeJyK4UxnwHLdq81I6AMLwXu1\\/UmOJQ9lEHYXT4ujBD\\r\\ntsb2EJcU0mDmEGAQMcXttXp9qm8TUTX\\/G2qyWLzhvu8zTIEWYFeLAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/camino_sierra_prestashop\\/administracion\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=24ea226a0df77f2554626fe525b26cd4\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_bas";
        echo "ic\",\"psVersion\":\"8.1.7\",\"moduleVersion\":\"7.0.7\"}],\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.7\"}],\"adminAjaxLink\":\"http:\\/\\/localhost\\/camino_sierra_prestashop\\/administracion\\/index.php?controller=AdminAjaxPsAccounts&ajax=1&token=e1004d70853da3d25b0f6d05104b2380\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"http:\\/\\/localhost\\/camino_sierra_prestashop\\/administracion\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/ps_eventbus?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\",\"isEnabled\":true,\"enableLink\":\"http:\\/\\/localhost\\/camino_sierra_prestashop\\/administracion\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\"}}};
var currency = {\"iso_code\":\"MXN\",\"sign\":\"\$\",\"name\":\"Mexican Peso\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MXN\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script";
        // line 81
        echo " type=\"text/javascript\" src=\"/camino_sierra_prestashop/administracion/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/administracion/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/administracion/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/administracion/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/camino_sierra_prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/camino_sierra_prestashop\\/administracion\\/index.php?controller=AdminGamification&token=21ece42610241ef40ab4e8a6ca45e94e\";
            var current_i";
        // line 99
        echo "d_tab = 149;
        </script><script type=\"module\" src=\"/camino_sierra_prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>
    <script>
        window.userLocale  = 'en';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/camino_sierra_prestashop/administracion/index.php/common/notifications?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 120
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en home\"
  data-base-url=\"/camino_sierra_prestashop/administracion/index.php\"  data-token=\"3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/camino_sierra_prestashop/administracion/index.php/modules/pseditionbasic/homepage?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e01173eb9b958c2d29e49e569a838af0\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/camino_sierra_prestashop/administracion/index.php/improve/modules/manage?token=cd90b2aa4a82e8727f1959e81db954fd\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/camino_sierra_prestashop/administracion/index.php/sell/catalog/categories/new?token=cd90b2aa4a82e8727f1959e81db954fd\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/camino_sierra_prestashop/administracion/index.php/sell/catalog/products-v2/create?token=cd90b2aa";
        // line 154
        echo "4a82e8727f1959e81db954fd\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=589e7000b9dfa73db68147a5c2f5700e\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/camino_sierra_prestashop/administracion/index.php/sell/orders?token=cd90b2aa4a82e8727f1959e81db954fd\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"173\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/homepage?-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\"
        data-post-link=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminQuickAccesses&token=fdf12f9dba70650df0b65609eea8857f\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Welcome - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminQuickAccesses&token=fdf12f9dba70650df0b65609eea8857f\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/camino_sierra_prestashop/administracion/index.php?controller=AdminSearch&amp;token=f8c8c781e55";
        // line 193
        echo "7b6a51c418c5bca63bc7c\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopp";
        // line 210
        echo "ing-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e01173eb9b958c2d29e49e569a838af0\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/camino_sierra_prestashop/administracion/index.php/improve/modules/manage?token=cd90b2aa4a82e8727f1959e81db954fd\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/camino_sierra_prestashop/administracion/index.php/sell/catalog/categories/new?token=cd90b2aa4a82e8727f1959e81db954fd\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/camino_sierra_prestashop/administracion/index.php/sell/catalog/products-v2/create?token=cd90b2aa4a82e8727f1959e81db954fd\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?c";
        // line 247
        echo "ontroller=AdminCartRules&amp;addcart_rule&amp;token=589e7000b9dfa73db68147a5c2f5700e\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/camino_sierra_prestashop/administracion/index.php/sell/orders?token=cd90b2aa4a82e8727f1959e81db954fd\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"30\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/homepage?-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\"
      data-post-link=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminQuickAccesses&token=fdf12f9dba70650df0b65609eea8857f\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Welcome - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminQuickAccesses&token=fdf12f9dba70650df0b65609eea8857f\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p";
        // line 291
        echo "&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/camino_sierra_prestashop/administracion/index.php/configure/shop/maintenance/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Maintenance mode</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/camino_sierra_prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
   ";
        // line 337
        echo "       </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=decc762bc2437ece25fec415dd21702d\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your ";
        // line 383
        echo "customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/camino_sierra_prestashop/img/pr/default.jpg\" alt=\"Ricardo\" /></span>
        <span class=\"employee_profile\">Welcome back Ricardo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/employees/1/edit?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

       ";
        // line 436
        echo "           <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/camino_sierra_prestashop/admin/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=jaEaqbpFYLzFFcFQzuHUI2YErGoo5wi9oo30HkY_PC4&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-ce";
        // line 453
        echo "nter\" id=\"header_logout\" href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminLogin&amp;logout=1&amp;token=8826d771bf5008eaf45ffcdfa97964eb\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/employees/toggle-navigation?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/camino_sierra_prestashop/administracion/index.php/modules/pseditionbasic/homepage?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"149\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/pseditionbasic/homepage?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icon";
        // line 495
        echo "s sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminDashboard&amp;token=c6ff0d35988ce7148b5de22a6fecc278\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/orders/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
  ";
        // line 534
        echo "                    </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/orders/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/orders/invoices/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/orders/credit-slips/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Credit Slips
                                </a>
                              </li>

 ";
        // line 564
        echo "                                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/orders/delivery-slips/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminCarts&amp;token=decc762bc2437ece25fec415dd21702d\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/catalog/products?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                       ";
        // line 594
        echo "                                     </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/catalog/products?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/catalog/categories?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/catalog/monitoring/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li cl";
        // line 624
        echo "ass=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminAttributesGroups&amp;token=b9ef4cb73ac57d1bcf15f693262cfd29\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/catalog/brands/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/attachments/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminCartRules&amp;token=589e7000b9dfa73db68147a5c2f5700e\" class=\"link\"> Discounts
                                </a>
  ";
        // line 651
        echo "                            </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/stocks/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/customers/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/camino_sierra_prestashop/admin";
        // line 682
        echo "istracion/index.php/sell/customers/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/addresses/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminCustomerThreads&amp;token=dab8cf237a4164f2ccce9501d8bbe23f\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
           ";
        // line 713
        echo "                                                 
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminCustomerThreads&amp;token=dab8cf237a4164f2ccce9501d8bbe23f\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/sell/customer-service/order-messages/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminReturn&amp;token=c8636cca5dc3bf08d3db5aff01c6c267\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/camino_sierra_prestashop/administ";
        // line 742
        echo "racion/index.php/modules/metrics/legacy/stats?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/metrics/legacy/stats?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/metrics?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
  ";
        // line 774
        echo "                  
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/mbo/modules/catalog/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/mbo/modules/catalog/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link";
        // line 806
        echo "-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/modules/manage?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=d01238eb6f1f1e99906814fd7ba8e44a\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=d01238eb6f1f1e99906";
        // line 832
        echo "814fd7ba8e44a\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/mbo/themes/catalog/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/improve/design/themes?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/design/mail_theme/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li cla";
        // line 863
        echo "ss=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/design/cms-pages/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/design/modules/positions/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminImages&amp;token=0594613cf16ea8f8d1575ba78e879889\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/link-widget/list?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Link List
                                </a>
                              </li>

            ";
        // line 892
        echo "                                                                  </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminCarriers&amp;token=c2f88ba152acf9ba164cce4e7450fdd7\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminCarriers&amp;token=c2f88ba152acf9ba164cce4e7450fdd7\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.";
        // line 921
        echo "php/improve/shipping/preferences/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/payment/payment_methods?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/payment/payment_methods?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
   ";
        // line 953
        echo "                           <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/payment/preferences?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/international/localization/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/international/localization/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Localization
                                </";
        // line 980
        echo "a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/international/zones/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/international/taxes/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/improve/international/translations/settings?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li";
        // line 1013
        echo " class=\"link-levelone has_submenu\" data-submenu=\"139\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=7dd0cb79798e8ddba58019b7c5092424\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-139\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=7dd0cb79798e8ddba58019b7c5092424\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/camino_sierra_prestashop/administracion/index.php?controller=AdminPsfacebookModule&amp;token=ff2359dba1e87b7fe8821999b99e8644\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                   ";
        // line 1040
        echo "                                           </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/pseditionbasic/settings?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/shop/preferences/preferences?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
    ";
        // line 1078
        echo "                                                                keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/shop/preferences/preferences?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/shop/order-preferences/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/shop/product-preferences/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Product Settings
                                </a>
                              </li>

                               ";
        // line 1106
        echo "                                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/shop/customer-preferences/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/shop/contacts/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/shop/seo-urls/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/camino_sier";
        // line 1134
        echo "ra_prestashop/administracion/index.php?controller=AdminSearchConf&amp;token=3f8d9eae271f773fc44711422672fd0a\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/system-information/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/system-information/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                 ";
        // line 1164
        echo "             
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/performance/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/administration/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/emails/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/import/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymv";
        // line 1191
        echo "Y5mo\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/employees/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/sql-requests/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/logs/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"s";
        // line 1222
        echo "ubtab-AdminWebservice\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/webservice-keys/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/feature-flags/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/camino_sierra_prestashop/administracion/index.php/configure/advanced/security/?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://l";
        // line 1250
        echo "ocalhost/camino_sierra_prestashop/administracion/index.php?controller=AdminKlaviyoPsConfig&amp;token=dab4bd527cecead104512bb2802695b7\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/pseditionbasic/homepage?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" aria-current=\"page\">Welcome</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Home          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"https://help.prestashop-project.org/en/doc/HOME?version=8.1.7&amp;country=en\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floati";
        // line 1313
        echo "ng\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"https://help.prestashop-project.org/en/doc/HOME?version=8.1.7&amp;country=en\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1346
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/camino_sierra_prestashop/administracion/index.php/modules/pseditionbasic/homepage?_token=3yWH-tX6whBnMf4r24QrokjnTVAnOv6GpPOGymvY5mo\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1380
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 120
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1346
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1380
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__45e85e88f42ea3c84fbd57ee507c0ea4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1562 => 1380,  1541 => 1346,  1530 => 120,  1521 => 1380,  1481 => 1346,  1446 => 1313,  1381 => 1250,  1351 => 1222,  1318 => 1191,  1289 => 1164,  1257 => 1134,  1227 => 1106,  1197 => 1078,  1157 => 1040,  1128 => 1013,  1093 => 980,  1064 => 953,  1030 => 921,  999 => 892,  968 => 863,  935 => 832,  907 => 806,  873 => 774,  839 => 742,  808 => 713,  775 => 682,  742 => 651,  713 => 624,  681 => 594,  649 => 564,  617 => 534,  576 => 495,  532 => 453,  513 => 436,  458 => 383,  410 => 337,  362 => 291,  316 => 247,  277 => 210,  258 => 193,  217 => 154,  178 => 120,  155 => 99,  135 => 81,  121 => 70,  118 => 69,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__45e85e88f42ea3c84fbd57ee507c0ea4", "");
    }
}
