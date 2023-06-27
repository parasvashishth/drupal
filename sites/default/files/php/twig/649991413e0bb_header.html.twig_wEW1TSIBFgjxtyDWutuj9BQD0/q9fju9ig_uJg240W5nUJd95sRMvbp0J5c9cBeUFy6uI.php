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
                    <a class=\"nav-brand\" href=\"#\">
                        <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/headerlogo.webp\" alt=\"logo\">
                    </a>
                    <div class=\"nav-toggle\"></div>
                    <div class=\"nav-menus-wrapper\">
                        <div class=\"div_outer\">
                            ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gillz_header", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
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
        return array (  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<header class=\"header__area\">
    <div class=\"main_header_area\">
        <div class=\"container\">
            <nav id=\"navigation1\" class=\"navigation\">
                <div class=\"nav-header\">
                    <a class=\"nav-brand\" href=\"#\">
                        <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/headerlogo.webp\" alt=\"logo\">
                    </a>
                    <div class=\"nav-toggle\"></div>
                    <div class=\"nav-menus-wrapper\">
                        <div class=\"div_outer\">
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
        static $filters = array("escape" => 13);
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
