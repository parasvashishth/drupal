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

/* core/themes/seven/templates/classy/form/form-element-label.html.twig */
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_form-element-label.html.t_r7eTCGrU4_XLGpPuq9ZG_hNPx/b9UX3eHX4zMMCHHjCa8r_bnwyW3bDC3l0JAYO1PJNfI.php
class __TwigTemplate_095a2d0a3f0e64fffd0fb0f061fdba0cb133b9674f176349e01466f642c2a393 extends \Twig\Template
========
class __TwigTemplate_60c669ca3bf9c78b9ec3fcbfb9e6c25d04858975b19db1dfbdd574f7d81014c8 extends \Twig\Template
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_form-element-label.html.t_o4UYobrNqBKeyR_EUtTkcE9mu/cUTTKsY2VdVPipjAZKrsDKvXj9klKO3bxOhM_Cg6DUQ.php
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
        $context["classes"] = [0 => (((        // line 17
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 1 => (((        // line 18
($context["title_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 19
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((        // line 20
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 23
        if (( !twig_test_empty(($context["title"] ?? null)) || ($context["required"] ?? null))) {
            // line 24
            echo "<label";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 24, $this->source), "html", null, true);
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  45 => 23,  43 => 20,  42 => 19,  41 => 18,  40 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_form-element-label.html.t_r7eTCGrU4_XLGpPuq9ZG_hNPx/b9UX3eHX4zMMCHHjCa8r_bnwyW3bDC3l0JAYO1PJNfI.php
        return new Source("{#
/**
 * @file
 * Theme override for a form element label.
 *
 * Available variables:
 * - title: The label's text.
 * - title_display: Elements title_display setting.
 * - required: An indicator for whether the associated form element is required.
 * - attributes: A list of HTML attributes for the label.
 *
 * @see template_preprocess_form_element_label()
 */
#}
{%
  set classes = [
    title_display == 'after' ? 'option',
    title_display == 'invisible' ? 'visually-hidden',
    required ? 'js-form-required',
    required ? 'form-required',
  ]
%}
{% if title is not empty or required -%}
  <label{{ attributes.addClass(classes) }}>{{ title }}</label>
{%- endif %}
", "core/themes/seven/templates/classy/form/form-element-label.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\form\\form-element-label.html.twig");
========
        return new Source("", "core/themes/seven/templates/classy/form/form-element-label.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\form\\form-element-label.html.twig");
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_form-element-label.html.t_o4UYobrNqBKeyR_EUtTkcE9mu/cUTTKsY2VdVPipjAZKrsDKvXj9klKO3bxOhM_Cg6DUQ.php
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 23);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
