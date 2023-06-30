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

/* themes/custom/paras/paragraphs/paragraph--group-box-content.html.twig */
class __TwigTemplate_a242cdfe8717a9380568457a75d96f89152376bd034516893e61c5f4e8e269e4 extends \Twig\Template
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
        echo "<section class=\"groupBoxSec\">
\t<div class=\"container\">
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">  
\t\t\t\t<div class=\"groupBoxLeft\">
\t\t\t\t\t";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_group_box_content", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"groupBoxRt\">
\t\t\t\t\t";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_group_box_image", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
                    ";
        // line 14
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/paras/paragraphs/paragraph--group-box-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  55 => 12,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"groupBoxSec\">
\t<div class=\"container\">
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">  
\t\t\t\t<div class=\"groupBoxLeft\">
\t\t\t\t\t{{content.field_group_box_content}}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"groupBoxRt\">
\t\t\t\t\t{{content.field_group_box_image}}
                    {# <img src=\"https://imperialauto.in/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-10.38.40-AM.jpeg\" alt=\"\"> #}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
</section>", "themes/custom/paras/paragraphs/paragraph--group-box-content.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\paras\\paragraphs\\paragraph--group-box-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7);
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
