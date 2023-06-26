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

/* themes/custom/sumit/templates/header.html.twig */
class __TwigTemplate_324228b3b5d54e22afdb473c6ec2e04eb257989c4e7fe76bf98150a4f62c3a12 extends \Twig\Template
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
        echo "
<header class=\"header__area\">
    <div class=\"main_header_area\">
        <div class=\"container\">
            <nav id=\"navigation1\" class=\"navigation\">
                <div class=\"nav-header\">
                    <a class=\"nav-brand\" href=\"https://gillzsweetfactory.com\">
                        <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/headerlogo.webp\" alt=\"logo\">
                    </a>
                    <div class=\"nav-toggle\"></div>
                    <div class=\"nav-menus-wrapper\">
                        <div class=\"div_outer\">
                            ";
        // line 39
        echo "                            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gillz_header", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
                            <a href=\"#\" target=\"_blank\" class=\"main__button\">Order online</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sumit/templates/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 39,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<header class=\"header__area\">
    <div class=\"main_header_area\">
        <div class=\"container\">
            <nav id=\"navigation1\" class=\"navigation\">
                <div class=\"nav-header\">
                    <a class=\"nav-brand\" href=\"https://gillzsweetfactory.com\">
                        <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/headerlogo.webp\" alt=\"logo\">
                    </a>
                    <div class=\"nav-toggle\"></div>
                    <div class=\"nav-menus-wrapper\">
                        <div class=\"div_outer\">
                            {# <ul id=\"menu-main-menu\" class=\"nav-menu\">
                                <li id=\"menu-item-698\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-698\">
                                    <a href=\"#\">Our Story</a>
                                </li>
                                <li id=\"menu-item-697\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-697\">
                                    <a href=\"#\">Menu</a>
                                </li>
                                <li id=\"menu-item-695\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-695\">
                                    <a href=\"#\">Gallery</a>
                                </li>
                                <li id=\"menu-item-692\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-692\">
                                    <a href=\"#\">Community</a>
                                </li>
                                <li id=\"menu-item-694\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-694\">
                                    <a href=\"#\">Events</a>
                                </li>
                                <li id=\"menu-item-691\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-691\">
                                    <a href=\"#\">Catering</a>
                                </li>
                                <li id=\"menu-item-700\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-700\">
                                    <a href=\"#\">Wholesale</a>
                                </li>
                                <li id=\"menu-item-693\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-693\">
                                    <a href=\"#\">Contact</a>
                                </li>
                            </ul> #}
                            {{ page.gillz_header }}
                            <a href=\"#\" target=\"_blank\" class=\"main__button\">Order online</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>", "themes/custom/sumit/templates/header.html.twig", "E:\\xampp\\htdocs\\drupal\\themes\\custom\\sumit\\templates\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 39);
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
