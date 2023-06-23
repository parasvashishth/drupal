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

/* core/modules/system/templates/block--system-messages-block.html.twig */
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_block--system-messages-bl_7eDm1I5xVEgUH419YBCdrAJlf/BFrAIJ0-u237dbeJWpFke4WNi5NuzaX0SG9eDG8iUJ0.php
class __TwigTemplate_233fc074e0e10b510b1a6539f16feac830eaf51a3ec0c0eb4750b15e4846f2e3 extends \Twig\Template
========
class __TwigTemplate_6484ce740b343b6de7befd42a851cf3bcf002eb2abec1c2bd6981ee74d8c2113 extends \Twig\Template
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_block--system-messages-bl_0dvGMUoFUN4stxL3C8OrpX7wd/pYH_3eTASSszpvEdoMlcWHdwXuy9tWGnBG_BkklNl8Y.php
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 15, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/block--system-messages-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,);
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_block--system-messages-bl_7eDm1I5xVEgUH419YBCdrAJlf/BFrAIJ0-u237dbeJWpFke4WNi5NuzaX0SG9eDG8iUJ0.php
        return new Source("{#
/**
 * @file
 * Default theme implementation for the messages block.
 *
 * Removes wrapper elements from block so that empty block does not appear when
 * there are no messages.
 *
 * Available variables:
 * - content: The content of this block.
 *
 * @ingroup themeable
 */
#}
{{ content }}
", "core/modules/system/templates/block--system-messages-block.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\modules\\system\\templates\\block--system-messages-block.html.twig");
========
        return new Source("", "core/modules/system/templates/block--system-messages-block.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\modules\\system\\templates\\block--system-messages-block.html.twig");
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_block--system-messages-bl_0dvGMUoFUN4stxL3C8OrpX7wd/pYH_3eTASSszpvEdoMlcWHdwXuy9tWGnBG_BkklNl8Y.php
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
