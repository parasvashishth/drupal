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

/* core/themes/seven/templates/details.html.twig */
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_details.html.twig_EFWKjwzJw0gkQ2GKwTU_YeCuB/3MdeUHkbfahApzwLoLEf_vOQU-6AD76Onags2bbZ25o.php
class __TwigTemplate_fba75360a5d8431430402130110f376f19522c625ff92c749adea041fb42174a extends \Twig\Template
========
class __TwigTemplate_32ce39420af78dcbfc9a34b84ac9a4d76889fcc6d9dba203e017a23f35ccfe55 extends \Twig\Template
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_details.html.twig_gMzJqp7Hl3CdeQGM6Afdty0sv/9dbEaDLw9t_cdYNNqMSS-bFsjXPzyWD751YxC5_sc7w.php
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
        // line 23
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "seven-details"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ">";
        // line 24
        if (($context["title"] ?? null)) {
            // line 26
            $context["summary_classes"] = [0 => "seven-details__summary", 1 => ((            // line 28
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((            // line 29
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 32
            echo "    <summary";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [0 => ($context["summary_classes"] ?? null)], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo ">
      <span>";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 33, $this->source), "html", null, true);
            echo "</span>
    </summary>";
        }
        // line 36
        echo "<div class=\"seven-details__wrapper details-wrapper\">
    ";
        // line 37
        if (($context["errors"] ?? null)) {
            // line 38
            echo "      <div class=\"form-item form-item--error-message\">
        <strong>";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 39, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 42
        if (($context["description"] ?? null)) {
            // line 43
            echo "<div class=\"seven-details__description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 43, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 45
        if (($context["children"] ?? null)) {
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 46, $this->source), "html", null, true);
        }
        // line 48
        if (($context["value"] ?? null)) {
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 49, $this->source), "html", null, true);
        }
        // line 51
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 51,  87 => 49,  85 => 48,  82 => 46,  80 => 45,  75 => 43,  73 => 42,  67 => 39,  64 => 38,  62 => 37,  59 => 36,  54 => 33,  49 => 32,  47 => 29,  46 => 28,  45 => 26,  43 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_details.html.twig_EFWKjwzJw0gkQ2GKwTU_YeCuB/3MdeUHkbfahApzwLoLEf_vOQU-6AD76Onags2bbZ25o.php
        return new Source("{#
/**
 * @file
 * Theme override for a details element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the details element.
 * - errors: (optional) Any errors for this details element, may not be set.
 * - title: (optional) The title of the element, may not be set.
 * - summary_attributes: A list of HTML attributes for the summary element.
 * - description: (optional) The description of the element, may not be set.
 * - children: (optional) The children of the element, may not be set.
 * - value: (optional) The value of the element, may not be set.
 *
 * @see template_preprocess_details()
 */
#}
{#
  Prefix 'details' class to avoid collision with Modernizr.

  @todo Remove prefix after https://www.drupal.org/node/2981732 has been solved.
#}
<details{{ attributes.addClass('seven-details') }}>
  {%- if title -%}
    {%
      set summary_classes = [
        'seven-details__summary',
        required ? 'js-form-required',
        required ? 'form-required',
      ]
    %}
    <summary{{ summary_attributes.addClass(summary_classes) }}>
      <span>{{ title }}</span>
    </summary>
  {%- endif -%}
  <div class=\"seven-details__wrapper details-wrapper\">
    {% if errors %}
      <div class=\"form-item form-item--error-message\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}
    {%- if description -%}
      <div class=\"seven-details__description\">{{ description }}</div>
    {%- endif -%}
    {%- if children -%}
      {{ children }}
    {%- endif -%}
    {%- if value -%}
      {{ value }}
    {%- endif -%}
  </div>
</details>
", "core/themes/seven/templates/details.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\details.html.twig");
========
        return new Source("", "core/themes/seven/templates/details.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\details.html.twig");
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_details.html.twig_gMzJqp7Hl3CdeQGM6Afdty0sv/9dbEaDLw9t_cdYNNqMSS-bFsjXPzyWD751YxC5_sc7w.php
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "set" => 26);
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
