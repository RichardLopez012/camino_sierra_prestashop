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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/Alerts/theme_enable_alert.html.twig */
class __TwigTemplate_c757ed6da6fcb86d445530f35fad3b18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"alert alert-success d-md-flex justify-content-between\">
    <div class=\"mb-2 mb-md-0 mr-md-2\">
        <p>
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The %s% theme has just been added.", ["%s%" => ($context["importedThemeDisplayName"] ?? null)], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
        </p>
    </div>
    <div class=\"pr-0 flex-shrink-0 d-flex\" style=\"display:flex\">
        <button type=\"button\" class=\"btn btn-text mr-2\" data-dismiss=\"alert\" aria-label=\"Close\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Later", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
            <button
                    type=\"button\"
                    class=\"btn btn-success mr-2 js-open-use-theme-modal\"
                    data-toggle=\"modal\"
                    data-target=\"#use_theme_modal\" ";
        // line 38
        echo (( !($context["isSingleShopContext"] ?? null)) ? ("disabled") : (""));
        echo "
                    data-action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_enable", ["themeName" => ($context["importedThemeName"] ?? null)]), "html", null, true);
        echo "\"
                    data-theme-name=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["importedThemeDisplayName"] ?? null), "html", null, true);
        echo "\"
            >
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use this theme", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
            </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/Alerts/theme_enable_alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 42,  66 => 40,  62 => 39,  58 => 38,  50 => 33,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/Alerts/theme_enable_alert.html.twig", "C:\\camino_sierra_prestashop\\htdocs\\prestashop\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\Alerts\\theme_enable_alert.html.twig");
    }
}
