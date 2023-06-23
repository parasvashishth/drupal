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

/* core/modules/system/templates/off-canvas-page-wrapper.html.twig */
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_off-canvas-page-wrapper.h_f4UdO5070xuRThxW3Gf55XRwY/dzEf-Ydsu0u_TUeJj0TITJh3QIzOom8fVu_aMz4CfKE.php
class __TwigTemplate_4f858cc1b2a3ab602f170fea587ddb8c98fd6285999b0857a6feb703828a6c4d extends \Twig\Template
========
class __TwigTemplate_91dd56abb4fab08dbbf76ad0af32d20969507536f2f3aa2934a2d5045d8857b0 extends \Twig\Template
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_off-canvas-page-wrapper.h_bvNHqwm0tJlOa6DEXgW2E-Ya-/-jcvDGOKPS9S71qb6YB2LRtSDEjXrjmrC7xPci0O-zY.php
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
        // line 22
        if (($context["children"] ?? null)) {
            // line 23
            echo "  <div class=\"dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas>
    ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 24, $this->source), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/off-canvas-page-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 24,  41 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
<<<<<<<< HEAD:sites/default/files/php/twig/64958ebde7c57_off-canvas-page-wrapper.h_f4UdO5070xuRThxW3Gf55XRwY/dzEf-Ydsu0u_TUeJj0TITJh3QIzOom8fVu_aMz4CfKE.php
        return new Source("{#
/**
 * @file
 * Default theme implementation for a page wrapper.
 *
 * For consistent wrapping to {{ page }} render in all themes. The
 * \"data-off-canvas-main-canvas\" attribute is required by the off-canvas dialog.
 * This is used by the core/drupal.dialog.off_canvas library to select the
 * \"main canvas\" page element as opposed to the \"off canvas\" which is the dialog
 * itself. The \"main canvas\" element must be resized according to the width of
 * the \"off canvas\" dialog so that no portion of the \"main canvas\" is obstructed
 * by the off-canvas dialog. The off-canvas dialog can vary in width when opened
 * and can be resized by the user. The \"data-off-canvas-main-canvas\" attribute
 * cannot be removed without breaking the off-canvas dialog functionality.
 *
 * Available variables:
 * - children: Contains the child elements of the page.
 *
 * @ingroup themeable
 */
#}
{% if children %}
  <div class=\"dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas>
    {{ children }}
  </div>
{% endif %}
", "core/modules/system/templates/off-canvas-page-wrapper.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\modules\\system\\templates\\off-canvas-page-wrapper.html.twig");
========
        return new Source("", "core/modules/system/templates/off-canvas-page-wrapper.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\modules\\system\\templates\\off-canvas-page-wrapper.html.twig");
>>>>>>>> 7005307441953572476bb43c2a5c374c6a0aaa82:sites/default/files/php/twig/6495830626a73_off-canvas-page-wrapper.h_bvNHqwm0tJlOa6DEXgW2E-Ya-/-jcvDGOKPS9S71qb6YB2LRtSDEjXrjmrC7xPci0O-zY.php
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array("escape" => 24);
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
