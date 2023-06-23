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

/* core/themes/seven/templates/classy/content/page-title.html.twig */
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_page-title.html.twig_4c8UliE3gQdYm0e98OD09JyAs/tYIr9QMTJLR0PWGBexQzMOK_AdPIZiy57ddo0BymmnY.php
class __TwigTemplate_c1b3b48e937b838d49dbe46b0e6cced8762ab20514b9766e8e9418994c5a8eaf extends \Twig\Template
========
class __TwigTemplate_b164d68ea565044175140786e4fb393fc006221b7d78233ea161ae3830f62609 extends \Twig\Template
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_page-title.html.twig_fjTNj-AfK_pKZTJJpXYcr_9p-/7SOIv-mu1jTz5uHstHVGMAI7USw1Ykrcp52uX-de7M8.php
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
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 15, $this->source), "html", null, true);
        echo "
";
        // line 16
        if (($context["title"] ?? null)) {
            // line 17
            echo "  <h1";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "page-title"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 17, $this->source), "html", null, true);
            echo "</h1>
";
        }
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 19, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/content/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  45 => 17,  43 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_page-title.html.twig_4c8UliE3gQdYm0e98OD09JyAs/tYIr9QMTJLR0PWGBexQzMOK_AdPIZiy57ddo0BymmnY.php
        return new Source("{#
/**
 * @file
 * Theme override for page titles.
 *
 * Available variables:
 * - title_attributes: HTML attributes for the page title element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 */
#}
{{ title_prefix }}
{% if title %}
  <h1{{ title_attributes.addClass('page-title') }}>{{ title }}</h1>
{% endif %}
{{ title_suffix }}
", "core/themes/seven/templates/classy/content/page-title.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\content\\page-title.html.twig");
========
        return new Source("", "core/themes/seven/templates/classy/content/page-title.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\content\\page-title.html.twig");
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_page-title.html.twig_fjTNj-AfK_pKZTJJpXYcr_9p-/7SOIv-mu1jTz5uHstHVGMAI7USw1Ykrcp52uX-de7M8.php
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
