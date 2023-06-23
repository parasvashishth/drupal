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

/* core/modules/system/templates/form.html.twig */
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_form.html.twig_Zofb5LbGtYFLKI7jCvFkaZmpT/i76prc55rsXa1yzQtaCGdwLUjLmE3GvCt5Ilec049mM.php
class __TwigTemplate_fbdc01b74a5590b44117ee268d3bcd920a7c979458b7b9d9aac46f99136b4e1a extends \Twig\Template
========
class __TwigTemplate_08a6278fe58ddfc9ad488c041e1e020eea5d351c30f59723a631272110e22fd9 extends \Twig\Template
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_form.html.twig_zC4PADIwZQTj0eaAkPbHoYXDY/8jifFv5ITRNiKndDWo6AG2eOx0chrSp8rM1wBxTfQcY.php
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
        echo "<form";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 15, $this->source), "html", null, true);
        echo ">
  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 16, $this->source), "html", null, true);
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_form.html.twig_Zofb5LbGtYFLKI7jCvFkaZmpT/i76prc55rsXa1yzQtaCGdwLUjLmE3GvCt5Ilec049mM.php
        return new Source("{#
/**
 * @file
 * Default theme implementation for a 'form' element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 *
 * @ingroup themeable
 */
#}
<form{{ attributes }}>
  {{ children }}
</form>
", "core/modules/system/templates/form.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\modules\\system\\templates\\form.html.twig");
========
        return new Source("", "core/modules/system/templates/form.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\modules\\system\\templates\\form.html.twig");
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_form.html.twig_zC4PADIwZQTj0eaAkPbHoYXDY/8jifFv5ITRNiKndDWo6AG2eOx0chrSp8rM1wBxTfQcY.php
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 15);
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
