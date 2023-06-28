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

/* themes/custom/paras/region--header-menu.html.twig */
class __TwigTemplate_91050e95510c4fcbb5d2d07e1bf6bdd3ae873892198f16d6d33c1fe8f94ef28e extends \Twig\Template
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
        echo "<div class=\"main-header\">
<div class=\"header_logo\">
    <a href=\"#.\"></a>
</div>

<div class=\"header_menu\">
    <div class=\"nav-toggle\"></div>
    <div class=\"nav-menus-wrapper\">
    <div class=\"headerMenu\">
    ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 10, $this->source), "html", null, true);
        echo "
    </div>
    </div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/paras/region--header-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-header\">
<div class=\"header_logo\">
    <a href=\"#.\"></a>
</div>

<div class=\"header_menu\">
    <div class=\"nav-toggle\"></div>
    <div class=\"nav-menus-wrapper\">
    <div class=\"headerMenu\">
    {{ content }}
    </div>
    </div>
</div>

</div>", "themes/custom/paras/region--header-menu.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\paras\\region--header-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 10);
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
