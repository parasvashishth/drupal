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

/* core/themes/seven/templates/classy/layout/region.html.twig */
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_region.html.twig__467sDE3SFB2b7YKK7Rnwwokk/9eV3K7LiDs9c0YnZ-4k9tN6nIXrMZA7-BwPTlFNCwC4.php
class __TwigTemplate_72a00dc652848de87050a96c86a56d96a753212bc8757a6c041280f7a6a45a23 extends \Twig\Template
========
class __TwigTemplate_52c28c4eafd1303f8e41e2c6da0530a7d299d33bde024c9e7187f01b3f20b1c9 extends \Twig\Template
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_region.html.twig_AIBRkEdlOROSXTicmX6UfbrDL/_p83rUrJ485nPgBiGSYmDl8ks7i892My3wWkr436eno.php
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
        // line 16
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["region"] ?? null), 18, $this->source)))];
        // line 21
        if (($context["content"] ?? null)) {
            // line 22
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ">
    ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 23, $this->source), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  44 => 22,  42 => 21,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_region.html.twig__467sDE3SFB2b7YKK7Rnwwokk/9eV3K7LiDs9c0YnZ-4k9tN6nIXrMZA7-BwPTlFNCwC4.php
        return new Source("{#
/**
 * @file
 * Theme override to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{%
  set classes = [
    'region',
    'region-' ~ region|clean_class,
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {{ content }}
  </div>
{% endif %}
", "core/themes/seven/templates/classy/layout/region.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\layout\\region.html.twig");
========
        return new Source("", "core/themes/seven/templates/classy/layout/region.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\layout\\region.html.twig");
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_region.html.twig_AIBRkEdlOROSXTicmX6UfbrDL/_p83rUrJ485nPgBiGSYmDl8ks7i892My3wWkr436eno.php
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 21);
        static $filters = array("clean_class" => 18, "escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
