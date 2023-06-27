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

<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_menu-local-task.html.twig_GKZfe6LpAJ51LWQQlc_15bMUL/NCl-WPLFINM_EpRqHMYOTCHuJnSGlP9tnsq05ddOrg8.php
/* core/themes/seven/templates/classy/navigation/menu-local-task.html.twig */
class __TwigTemplate_bf6d1e7337a198b902b06cee79e99eed7cf6eb45b0a90ac4604ab1e1d6ef3f8a extends \Twig\Template
=======
/* core/themes/seven/templates/classy/content/page-title.html.twig */
class __TwigTemplate_b9c2d1dd0f372a4a244d75d2adf765d6d96d111c91f303385023050ac04aa7b0 extends \Twig\Template
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_page-title.html.twig_k9emceh7QGia_M5x-sG1iMCXg/EQGi4_h6bE5Sht624c-tRQNu9BJOCYlPxo1HijJ2u5Y.php
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
        // line 17
        echo "<li";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ((($context["is_active"] ?? null)) ? ("is-active") : (""))], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 17, $this->source), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_menu-local-task.html.twig_GKZfe6LpAJ51LWQQlc_15bMUL/NCl-WPLFINM_EpRqHMYOTCHuJnSGlP9tnsq05ddOrg8.php
        return "core/themes/seven/templates/classy/navigation/menu-local-task.html.twig";
=======
        return "core/themes/seven/templates/classy/content/page-title.html.twig";
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_page-title.html.twig_k9emceh7QGia_M5x-sG1iMCXg/EQGi4_h6bE5Sht624c-tRQNu9BJOCYlPxo1HijJ2u5Y.php
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a local task link.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper element.
 * - is_active: Whether the task item is an active tab.
 * - link: A rendered link element.
 *
 * Note: This template renders the content for each task item in
 * menu-local-tasks.html.twig.
 *
 * @see template_preprocess_menu_local_task()
 */
#}
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_menu-local-task.html.twig_GKZfe6LpAJ51LWQQlc_15bMUL/NCl-WPLFINM_EpRqHMYOTCHuJnSGlP9tnsq05ddOrg8.php
<li{{ attributes.addClass(is_active ? 'is-active') }}>{{ link }}</li>
", "core/themes/seven/templates/classy/navigation/menu-local-task.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\navigation\\menu-local-task.html.twig");
=======
{{ title_prefix }}
{% if title %}
  <h1{{ title_attributes.addClass('page-title') }}>{{ title }}</h1>
{% endif %}
{{ title_suffix }}
", "core/themes/seven/templates/classy/content/page-title.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\content\\page-title.html.twig");
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_page-title.html.twig_k9emceh7QGia_M5x-sG1iMCXg/EQGi4_h6bE5Sht624c-tRQNu9BJOCYlPxo1HijJ2u5Y.php
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17);
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
