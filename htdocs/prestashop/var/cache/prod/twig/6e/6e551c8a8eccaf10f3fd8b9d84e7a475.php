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

/* __string_template__c5fed29b121aaabb973abcb197906281 */
class __TwigTemplate_58a0d78212590f9c9eab5d76e9074273 extends Template
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
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Páginas • Camino de la Sierra</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'MX';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Leer este mensaje';
    var token = '133432614d098d90656604df29397e88';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = '3ff5883fe9a45283a1bea85462748386';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/administracion/index.php/improve/modules/manage?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM';
    var admin_notification_get_link = '/prestashop/administracion/index.php/common/notifications?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/administracion/index.php/common/notifications/ack?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM';
    var tab_modules_list = '';
    var upda";
        // line 42
        echo "te_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/administracion/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/administracion/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/administracion/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/administracion/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.9d2d6ef1.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ets_blog/views/css/admin_all.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admi";
        // line 70
        echo "nistracion\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/administracion\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\";
var currency = {\"iso_code\":\"MXN\",\"sign\":\"\$\",\"name\":\"Peso mexicano\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MXN\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/administracion/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop/administracion/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.7\"></script>
<script type=\"t";
        // line 89
        echo "ext/javascript\" src=\"/prestashop/administracion/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/administracion/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/administracion\\/index.php?controller=AdminGamification&token=d9cf647635d5ef61cfd2b1af3115bd71\";
            var current_id_tab = 47;
        </script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>
    <script>
        window.userLocale  = 'es';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/administracion/index.php/common/n";
        // line 114
        echo "otifications?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script type=\"text/javascript\">
var ets_blog_link_ajax_comment='http://localhost/prestashop/administracion/index.php?controller=AdminEtsBlogComment&token=e7611d9d351afc8213a5c213528cde56';
\$(document).ready(function(){
    \$.ajax({
        url: ets_blog_link_ajax_comment,
        data: 'action=getCountCommentsNoViewed',
        type: 'post',
        dataType: 'json',                
        success: function(json){ 
            if(parseInt(json.count) >0)
            {
                if(\$('#subtab-AdminEtsBlogComment span').length)
                    \$('#subtab-AdminEtsBlogComment span').append('<span class=\"count_messages \">'+json.count+'</span>'); 
                else
                    \$('#subtab-AdminEtsBlogComment a').append('<span class=\"count_messages \">'+json.count+'</span>');
            }
            else
            {
                if(\$('#subtab-AdminEtsBlogComment span').length)
                    \$('#subtab-AdminEtsBlogComment span').append('<span class=\"count_messages hide\">'+json.count+'</span>'); 
                else
                    \$('#subtab-AdminEtsBlogComment a').append('<span class=\"count_messages hide\">'+json.count+'</span>');
            }
                                                              
        },
    });
});
</script><style>
i.mi-crisp {
\tfont-size: 14px !important;
}
i.icon-AdminParentCEContent, i.mi-crisp {
\tposition: relative;
\theight: 16px;
\twidth: 1.2857em;
}
i.icon-AdminParentCEContent:after, i.mi-crisp:after {
\tcontent: '';
\tposition: absolute;
\tmargin: 0;
\tleft: .2143em;
\ttop: 0;
\twidth: 16px;
\theight: 16px;
\tbox-sizing: content-box;
    background: url('data:image/svg+xml,<svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\"><defs><linearGradient x1=\"56.322%\" y1=\"-3.";
        // line 167
        echo "436%\" x2=\"56.322%\" y2=\"125.636%\" id=\"a\"><stop stop-color=\"%232ACDFC\" offset=\"0%\"/><stop stop-color=\"%230051D7\" offset=\"100%\"/></linearGradient></defs><g fill=\"none\" fill-rule=\"evenodd\"><path fill=\"url(%23a)\" d=\"M0 0h16v16H0z\"/><path d=\"m12.012 4.484.482 5.25-2.99.33-1.124 1.818-1.445-1.534-3.076.34-.482-5.25 8.634-.953Z\" fill=\"%23FFF\"/></g></svg>');
}
</style>


";
        // line 172
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es admincmscontent\"
  data-base-url=\"/prestashop/administracion/index.php\"  data-token=\"yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/administracion/index.php/modules/pseditionbasic/homepage?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/administracion/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=bf153ac1b1b00aa47eed6e85c1914980\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/administracion/index.php/improve/modules/manage?token=9a9889d487ab51f343271d368047b89c\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/administracion/index.php/sell/catalog/categories/new?token=9a9889d487ab51f343271d368047b89c\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/administracion/index.php/sell/catalog/products-v2/create?token=9a9889d487ab51f343271d368047b89c\"
                 da";
        // line 207
        echo "ta-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=544fcf3f1fd2f3af580e18e702651c51\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/administracion/index.php/sell/orders?token=9a9889d487ab51f343271d368047b89c\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"149\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages/new\"
        data-post-link=\"http://localhost/prestashop/administracion/index.php?controller=AdminQuickAccesses&token=d14d4afffccad8f5abf2bee609fec5b8\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"P&aacute;ginas - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/administracion/index.php?controller=AdminQuickAccesses&token=d14d4afffccad8f5abf2bee609fec5b8\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
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
      action=\"/prestashop/administracion/index.php?controller=AdminSearch&amp;token=9cc1a15adf74a6be85e93ff15432f3aa\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_typ";
        // line 247
        echo "e\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i cla";
        // line 262
        echo "ss=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/administracion/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=bf153ac1b1b00aa47eed6e85c1914980\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/administracion/index.php/improve/modules/manage?token=9a9889d487ab51f343271d368047b89c\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/administracion/index.php/sell/catalog/categories/new?token=9a9889d487ab51f343271d368047b89c\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/administracion/index.php/sell/catalog/products-v2/create?token=9a9889d487ab51f343271d368047b89c\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5";
        // line 299
        echo "44fcf3f1fd2f3af580e18e702651c51\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/administracion/index.php/sell/orders?token=9a9889d487ab51f343271d368047b89c\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"74\"
      data-icon=\"icon-AdminParentThemes\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/cms-pages/new\"
      data-post-link=\"http://localhost/prestashop/administracion/index.php?controller=AdminQuickAccesses&token=d14d4afffccad8f5abf2bee609fec5b8\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"P&aacute;ginas - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/administracion/index.php?controller=AdminQuickAccesses&token=d14d4afffccad8f5abf2bee609fec5b8\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"mate";
        // line 345
        echo "rial-icons\">notifications_none</i>
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
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=1df01a69da3f17c525a9ecd65d5d8a43\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
          ";
        // line 396
        echo "  <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
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
  <div class=\"dropdown-menu dropdo";
        // line 446
        echo "wn-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Ricardo\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Ricardo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/administracion/index.php/configure/advanced/employees/1/edit?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gestione tu cuenta PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/cursos?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-es&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formación
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/expertos?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-es&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Encuentra un experto
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/administracion/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM&utm_source=back-office&utm_medium=menu&utm_content=download8_";
        // line 470
        echo "1&utm_campaign=addons-es&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-es&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centro de ayuda
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/administracion/index.php?controller=AdminLogin&amp;logout=1&amp;token=d54311eb7c2cde1b5acf32d2bd1a245d\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/administracion/index.php/configure/advanced/employees/toggle-navigation?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/administracion/index.php/modules/pseditionbasic/homepage?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"149\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
       ";
        // line 511
        echo "           
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/administracion/index.php/modules/pseditionbasic/homepage?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminDashboard&amp;token=c0301210d1f00f050cb7bd819d8f23a1\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Inicio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=";
        // line 547
        echo "\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/administracion/index.php/sell/orders/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/administracion/index.php/sell/orders/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/administracion/index.php/sell/orders/invoices/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Facturas
                                </a>
                              </li>

        ";
        // line 581
        echo "                                                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/administracion/index.php/sell/orders/credit-slips/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/administracion/index.php/sell/orders/delivery-slips/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCarts&amp;token=1df01a69da3f17c525a9ecd65d5d8a43\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    ";
        // line 612
        echo "<a href=\"/prestashop/administracion/index.php/sell/catalog/products?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/administracion/index.php/sell/catalog/products?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/administracion/index.php/sell/catalog/categories?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
        ";
        // line 642
        echo "                        <a href=\"/prestashop/administracion/index.php/sell/catalog/monitoring/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminAttributesGroups&amp;token=6792f1ff1b81d753349ee130d9f1effa\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/administracion/index.php/sell/catalog/brands/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/administracion/index.php/sell/attachments/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                       ";
        // line 671
        echo "       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCartRules&amp;token=544fcf3f1fd2f3af580e18e702651c51\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/administracion/index.php/sell/stocks/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/administracion/index.php/sell/customers/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                            ";
        // line 702
        echo "  <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/administracion/index.php/sell/customers/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/administracion/index.php/sell/addresses/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCustomerThreads&amp;token=fbd20107b0659f83da0fcf8c625c5b53\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                            ";
        // line 732
        echo "        keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCustomerThreads&amp;token=fbd20107b0659f83da0fcf8c625c5b53\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/administracion/index.php/sell/customer-service/order-messages/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminReturn&amp;token=ac9f1d043af57e52443c2276bb1af0b9\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                    ";
        // line 761
        echo "    </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/administracion/index.php/modules/metrics/legacy/stats?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/administracion/index.php/modules/metrics/legacy/stats?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/administracion/index.php/modules/metrics?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> PrestaShop Metrics
                             ";
        // line 790
        echo "   </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/administracion/index.php/modules/mbo/modules/catalog/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/administracion/index.php/modules/mbo/modules/catalog/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Marketplace
                   ";
        // line 825
        echo "             </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/administracion/index.php/improve/modules/manage?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=4ca633aeb4482f4200e6e52ff33c2aa1\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                        ";
        // line 855
        echo "                                    
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=4ca633aeb4482f4200e6e52ff33c2aa1\" class=\"link\"> Modulos del tema
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/administracion/index.php/modules/mbo/themes/catalog/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/administracion/index.php/modules/improve/design/themes?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Personalización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/administracion/index.php/improve/design/mail_theme/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Tema Email
           ";
        // line 882
        echo "                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/administracion/index.php/improve/design/cms-pages/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/administracion/index.php/improve/design/modules/positions/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminImages&amp;token=680f495a842df3eb2ce28dc44f23cbaa\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                        ";
        // line 913
        echo "        <a href=\"/prestashop/administracion/index.php/modules/link-widget/list?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCarriers&amp;token=a14186a9ed1ee64b4c0d1d3d6a103b1d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCarriers&amp;token=a14186a9ed1ee64b4c0d1d3d6a103b1d\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                      ";
        // line 944
        echo "                                      
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/administracion/index.php/improve/shipping/preferences/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/administracion/index.php/improve/payment/payment_methods?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/administracion/index.php/improve/payment/payment_methods?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Métodos de pago
                                </a>
                              ";
        // line 973
        echo "</li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/administracion/index.php/improve/payment/preferences?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/administracion/index.php/improve/international/localization/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/administracion/index.php/impro";
        // line 1004
        echo "ve/international/localization/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/administracion/index.php/improve/international/zones/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/administracion/index.php/improve/international/taxes/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/administracion/index.php/improve/international/translations/settings?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                       ";
        // line 1034
        echo "       
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"139\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=c50a7aafa842c389d984c7d04f1ec513\" class=\"link\">
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
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=c50a7aafa842c389d984c7d04f1ec513\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminPsfacebookModule&amp;token=65afcb2023a5486f3a1913166fd27083\" class=\"link\"> Facebook &amp; Instagram
                             ";
        // line 1062
        echo "   </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/administracion/index.php/modules/pseditionbasic/settings?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Ajustes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/administracion/index.php/configure/shop/preferences/preferences?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                     ";
        // line 1102
        echo "               <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/administracion/index.php/configure/shop/preferences/preferences?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/administracion/index.php/configure/shop/order-preferences/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/administracion/index.php/configure/shop/product-preferences/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Configuración de Productos
                                </a>
                    ";
        // line 1129
        echo "          </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/administracion/index.php/configure/shop/customer-preferences/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/administracion/index.php/configure/shop/contacts/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/administracion/index.php/configure/shop/seo-urls/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://loca";
        // line 1159
        echo "lhost/prestashop/administracion/index.php?controller=AdminSearchConf&amp;token=08032cdd445a79e3c96099dd6c98ea73\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/administracion/index.php/configure/advanced/system-information/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/system-information/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
        ";
        // line 1190
        echo "                                                    
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/performance/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/administration/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/emails/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/import/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Importar
                                </a>
           ";
        // line 1218
        echo "                   </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/employees/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/sql-requests/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/logs/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/administracion/index.ph";
        // line 1248
        echo "p/configure/advanced/webservice-keys/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/feature-flags/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/administracion/index.php/configure/advanced/security/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminKlaviyoPsConfig&amp;token=73e0616c2340fb20192025f2a0224b0d\" class=\"link\"";
        // line 1275
        echo ">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">Más</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"178\" id=\"subtab-AdminCrisp\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminCrisp&amp;token=33b8e93946cec533f10f7ac9573ebbfb\" class=\"link\">
                      <i class=\"material-icons mi-crisp\">crisp</i>
                      <span>
                      Crisp
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"171\" id=\"tab-AdminEtsBlog\">
                <span class=\"title\">Blog</span>
            </li>

                              
                 ";
        // line 1321
        echo " 
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"172\" id=\"subtab-AdminEtsBlogPost\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminEtsBlogPost&amp;token=a59bfcb695f3feb309e8f8cb8d06508e\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminPriceRule\">icon icon-AdminPriceRule</i>
                      <span>
                      Posts
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"173\" id=\"subtab-AdminEtsBlogCategory\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminEtsBlogCategory&amp;token=2f5c1f1cbdcbd530ddeca45f23b311ee\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminCatalog\">icon icon-AdminCatalog</i>
                      <span>
                      Categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" d";
        // line 1354
        echo "ata-submenu=\"174\" id=\"subtab-AdminEtsBlogComment\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminEtsBlogComment&amp;token=e7611d9d351afc8213a5c213528cde56\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-comments\">icon icon-comments</i>
                      <span>
                      Comments
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"175\" id=\"subtab-AdminEtsBlogSetting\">
                    <a href=\"http://localhost/prestashop/administracion/index.php?controller=AdminEtsBlogSetting&amp;token=393499550be72889ab29e721bc20e4db\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminAdmin\">icon icon-AdminAdmin</i>
                      <span>
                      Global settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"176\" id=\"subtab-AdminEtsBlogBackup\">
                    <a href=\"http://localhost/prestashop/administracion/ind";
        // line 1385
        echo "ex.php?controller=AdminEtsBlogBackup&amp;token=22262124eda47920c9828ccda21903d6\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-backup\">icon icon-backup</i>
                      <span>
                      Backup
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
                      <li class=\"breadcrumb-item\">Diseño</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/administracion/index.php/improve/design/cms-pages/?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" aria-current=\"page\">Páginas</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Páginas          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/administracion/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminCmsContent%253Fversion%253D8.1.7%2526country%253Des/Ayuda?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\"
                   id=\"product_form_open_help\"
                >
 ";
        // line 1438
        echo "                 Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/administracion/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminCmsContent%253Fversion%253D8.1.7%2526country%253Des/Ayuda?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Personalizar páginas',
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/prestashop/administracion/index.php/modules/mbo/modules/recommended/?tabClassName=AdminCmsContent&recommendation_format=modal&_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1496
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"/prestashop/administracion/index.php/modules/pseditionbasic/homepage?_token=yaRch_F8R5wQDmZSCDDi7QoZ_VdPVDlwdYDsXRCc3jM\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1530
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 172
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1496
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

    // line 1530
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
        return "__string_template__c5fed29b121aaabb973abcb197906281";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1715 => 1530,  1694 => 1496,  1683 => 172,  1674 => 1530,  1634 => 1496,  1574 => 1438,  1519 => 1385,  1486 => 1354,  1451 => 1321,  1403 => 1275,  1374 => 1248,  1342 => 1218,  1312 => 1190,  1279 => 1159,  1247 => 1129,  1218 => 1102,  1176 => 1062,  1146 => 1034,  1114 => 1004,  1081 => 973,  1050 => 944,  1017 => 913,  984 => 882,  955 => 855,  923 => 825,  886 => 790,  855 => 761,  824 => 732,  792 => 702,  759 => 671,  728 => 642,  696 => 612,  663 => 581,  627 => 547,  589 => 511,  546 => 470,  520 => 446,  468 => 396,  415 => 345,  367 => 299,  328 => 262,  311 => 247,  269 => 207,  229 => 172,  222 => 167,  167 => 114,  140 => 89,  119 => 70,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c5fed29b121aaabb973abcb197906281", "");
    }
}