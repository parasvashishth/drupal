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

<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_block--local-tasks-block._BSgd5njt2Q0akDTMipsCiD9Ge/9UsxOdlfpL5ji6tRhuLI9NH_GqcVFBr-KCJzVqzmmXA.php
/* core/themes/seven/templates/classy/block/block--local-tasks-block.html.twig */
class __TwigTemplate_44d5435d7e791e3c44a7680fa652724b8239dd9bfc3a9e5a9c39bcd1e5743767 extends \Twig\Template
=======
/* core/themes/seven/templates/classy/layout/region.html.twig */
class __TwigTemplate_97edac9a59f70d36cf549e5cfd58ef71ebbf7cd0ca39d573560fad4120a28e76 extends \Twig\Template
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region.html.twig_bpJ2RNfDNcYhLbhVL8kMxjaLD/skWxMDYvvA6PbiKNY2Df2WGMRX4AM2o0l3Wd_XhO1M0.php
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/seven/templates/classy/block/block--local-tasks-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tabs"));
            echo "\">
      ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 11, $this->source), "html", null, true);
            echo "
    </nav>
  ";
        }
    }

    public function getTemplateName()
    {
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_block--local-tasks-block._BSgd5njt2Q0akDTMipsCiD9Ge/9UsxOdlfpL5ji6tRhuLI9NH_GqcVFBr-KCJzVqzmmXA.php
        return "core/themes/seven/templates/classy/block/block--local-tasks-block.html.twig";
=======
        return "core/themes/seven/templates/classy/layout/region.html.twig";
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region.html.twig_bpJ2RNfDNcYhLbhVL8kMxjaLD/skWxMDYvvA6PbiKNY2Df2WGMRX4AM2o0l3Wd_XhO1M0.php
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  55 => 10,  52 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for tabs.
 */
#}
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_block--local-tasks-block._BSgd5njt2Q0akDTMipsCiD9Ge/9UsxOdlfpL5ji6tRhuLI9NH_GqcVFBr-KCJzVqzmmXA.php
{% block content %}
  {% if content %}
    <nav class=\"tabs\" role=\"navigation\" aria-label=\"{{ 'Tabs'|t }}\">
      {{ content }}
    </nav>
  {% endif %}
{% endblock %}
", "core/themes/seven/templates/classy/block/block--local-tasks-block.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\block\\block--local-tasks-block.html.twig");
=======
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
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region.html.twig_bpJ2RNfDNcYhLbhVL8kMxjaLD/skWxMDYvvA6PbiKNY2Df2WGMRX4AM2o0l3Wd_XhO1M0.php
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("t" => 10, "escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
