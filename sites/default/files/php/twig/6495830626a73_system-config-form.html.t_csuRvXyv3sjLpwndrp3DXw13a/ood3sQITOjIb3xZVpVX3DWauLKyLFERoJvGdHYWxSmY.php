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

/* core/modules/system/templates/system-config-form.html.twig */
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_system-config-form.html.t_1LFQe7rDOX-B8V-6rupAyeube/qoZAQ_I5bwL3IVBWgknc3GCcfFzjuxt7XUmirzQKfzw.php
class __TwigTemplate_b1be93c61bd2128daad64ed7a5e2b63c77c71b4058e22e89d3727db9db6bd1d0 extends \Twig\Template
========
class __TwigTemplate_fa87dc23d67b345413511213408f83f95294413335fe8a0e19bcff57f375233d extends \Twig\Template
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_system-config-form.html.t_csuRvXyv3sjLpwndrp3DXw13a/ood3sQITOjIb3xZVpVX3DWauLKyLFERoJvGdHYWxSmY.php
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 17, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/system-config-form.html.twig";
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
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_system-config-form.html.t_1LFQe7rDOX-B8V-6rupAyeube/qoZAQ_I5bwL3IVBWgknc3GCcfFzjuxt7XUmirzQKfzw.php
        return new Source("{#
/**
 * @file
 * Default theme implementation for a system settings form.
 *
 * This template will be used when a system config form specifies 'config_form'
 * as its #theme callback.  Otherwise, by default, system config forms will be
 * themed by form.html.twig. This does not alter the appearance of a form at
 * all, but is provided as a convenience for themers.
 *
 * Available variables:
 * - form: The confirm form.
 *
 * @ingroup themeable
 */
#}
{{ form }}
", "core/modules/system/templates/system-config-form.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\modules\\system\\templates\\system-config-form.html.twig");
========
        return new Source("", "core/modules/system/templates/system-config-form.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\modules\\system\\templates\\system-config-form.html.twig");
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_system-config-form.html.t_csuRvXyv3sjLpwndrp3DXw13a/ood3sQITOjIb3xZVpVX3DWauLKyLFERoJvGdHYWxSmY.php
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
