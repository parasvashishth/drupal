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

/* themes/custom/breeze/templates/header.html.twig */
class __TwigTemplate_d7f3750a3e1f7ac7db79f2dfee892d8cb9f4285056c8d88020d7f43e536ff0aa extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "\t\t<header class=\"header\">
\t\t\t<nav id=\"navigation1\" class=\"navigation\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"main-header\">
\t\t\t\t\t\t<div class=\"header_logo\">
\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars\">
\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/header_logo.png\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"header_menu\">
\t\t\t\t\t\t\t<div class=\"nav-toggle\"></div>
\t\t\t\t\t\t\t<div class=\"nav-menus-wrapper\">
";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"nav-search \">
\t\t\t\t\t\t\t\t\t\t<div class=\"nav-search-button\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search by Car name Or Brand Name\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<form action=\"https://nextstep.net.in/fusion-cars\" name=\"SearchForm\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-search-inner\">
\t\t\t\t\t\t\t\t\t\t\t     <input type=\"text\" name=\"s\" maxlength=\"64\" id=\"SearchForm\" placeholder=\"Search by Car name Or Brand Name\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>";
    }

    public function getTemplateName()
    {
        return "themes/custom/breeze/templates/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t\t<header class=\"header\">
\t\t\t<nav id=\"navigation1\" class=\"navigation\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"main-header\">
\t\t\t\t\t\t<div class=\"header_logo\">
\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars\">
\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/header_logo.png\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"header_menu\">
\t\t\t\t\t\t\t<div class=\"nav-toggle\"></div>
\t\t\t\t\t\t\t<div class=\"nav-menus-wrapper\">
{{ page.header }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"nav-search \">
\t\t\t\t\t\t\t\t\t\t<div class=\"nav-search-button\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search by Car name Or Brand Name\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<form action=\"https://nextstep.net.in/fusion-cars\" name=\"SearchForm\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-search-inner\">
\t\t\t\t\t\t\t\t\t\t\t     <input type=\"text\" name=\"s\" maxlength=\"64\" id=\"SearchForm\" placeholder=\"Search by Car name Or Brand Name\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>", "themes/custom/breeze/templates/header.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\breeze\\Templates\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
