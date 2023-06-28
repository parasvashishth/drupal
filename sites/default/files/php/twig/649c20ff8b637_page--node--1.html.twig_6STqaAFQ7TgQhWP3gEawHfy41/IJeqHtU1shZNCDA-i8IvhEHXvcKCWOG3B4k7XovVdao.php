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

/* themes/custom/paras/templates/page--node--1.html.twig */
class __TwigTemplate_66d8f36fc929c33737016ece3c422c10f1e2dc7f0ca169d7d750eb933ea9ab81 extends \Twig\Template
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
        echo " ";
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/custom/paras/templates/page--node--1.html.twig", 1)->display($context);
        // line 2
        echo "
<section class=\"about\">
\t<div class=\"shape shape1\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/shape-1-1.png\" alt=\"ring shape\">
\t</div>
\t<div class=\"shape shape2\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/shape-2.png\" alt=\"half circle\">
\t</div>
\t<div class=\"shape shape3\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Ellipse-1.png\" alt=\"small circle\">
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 24
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/custom/paras/templates/page--node--1.html.twig", 24)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/paras/templates/page--node--1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  59 => 17,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% include directory ~ '/templates/includes/header.html.twig' %}

<section class=\"about\">
\t<div class=\"shape shape1\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/shape-1-1.png\" alt=\"ring shape\">
\t</div>
\t<div class=\"shape shape2\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/shape-2.png\" alt=\"half circle\">
\t</div>
\t<div class=\"shape shape3\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Ellipse-1.png\" alt=\"small circle\">
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t{{page.content}}
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
{% include directory ~ '/templates/includes/footer.html.twig' %}
", "themes/custom/paras/templates/page--node--1.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\paras\\templates\\page--node--1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
