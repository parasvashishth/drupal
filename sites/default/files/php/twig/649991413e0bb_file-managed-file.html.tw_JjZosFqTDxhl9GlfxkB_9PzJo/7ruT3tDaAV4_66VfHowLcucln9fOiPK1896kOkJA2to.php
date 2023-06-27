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

<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_file-managed-file.html.tw_JjZosFqTDxhl9GlfxkB_9PzJo/7ruT3tDaAV4_66VfHowLcucln9fOiPK1896kOkJA2to.php
/* core/themes/seven/templates/classy/content-edit/file-managed-file.html.twig */
class __TwigTemplate_26bac733c1e5e17fe8f191d87f3ba7611ee0ce4679b12dd4224eb2b88debd557 extends \Twig\Template
=======
/* region.html.twig */
class __TwigTemplate_18c4467149f5cba9284fb6383bdae9854607170a7a671a4b4c26d04c60b3d177 extends \Twig\Template
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region--breadcrumb.html.t_PNFDR9sihnBDuQqKQ8p8MAYqs/mHMc8rfgzobORl0DEX-5EGts-Up_sNHHATQPS2jqPBo.php
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
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_file-managed-file.html.tw_JjZosFqTDxhl9GlfxkB_9PzJo/7ruT3tDaAV4_66VfHowLcucln9fOiPK1896kOkJA2to.php
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("seven/classy.file"), "html", null, true);
        echo "
";
        // line 15
        $context["classes"] = [0 => "js-form-managed-file", 1 => "form-managed-file"];
        // line 20
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 20), 20, $this->source), "html", null, true);
        echo ">
  ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 21, $this->source), "html", null, true);
        echo "
</div>
=======
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
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region--breadcrumb.html.t_PNFDR9sihnBDuQqKQ8p8MAYqs/mHMc8rfgzobORl0DEX-5EGts-Up_sNHHATQPS2jqPBo.php
";
        }
    }

    public function getTemplateName()
    {
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_file-managed-file.html.tw_JjZosFqTDxhl9GlfxkB_9PzJo/7ruT3tDaAV4_66VfHowLcucln9fOiPK1896kOkJA2to.php
        return "core/themes/seven/templates/classy/content-edit/file-managed-file.html.twig";
=======
        return "region.html.twig";
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region--breadcrumb.html.t_PNFDR9sihnBDuQqKQ8p8MAYqs/mHMc8rfgzobORl0DEX-5EGts-Up_sNHHATQPS2jqPBo.php
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_file-managed-file.html.tw_JjZosFqTDxhl9GlfxkB_9PzJo/7ruT3tDaAV4_66VfHowLcucln9fOiPK1896kOkJA2to.php
        return array (  50 => 21,  45 => 20,  43 => 15,  39 => 13,);
=======
        return array (  49 => 23,  44 => 22,  42 => 21,  40 => 18,  39 => 16,);
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region--breadcrumb.html.t_PNFDR9sihnBDuQqKQ8p8MAYqs/mHMc8rfgzobORl0DEX-5EGts-Up_sNHHATQPS2jqPBo.php
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_file-managed-file.html.tw_JjZosFqTDxhl9GlfxkB_9PzJo/7ruT3tDaAV4_66VfHowLcucln9fOiPK1896kOkJA2to.php
 * Theme override to display a file form widget.
=======
 * Theme override to display a region.
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region--breadcrumb.html.t_PNFDR9sihnBDuQqKQ8p8MAYqs/mHMc8rfgzobORl0DEX-5EGts-Up_sNHHATQPS2jqPBo.php
 *
 * Available variables:
 * - element: Form element for the file upload.
 * - attributes: HTML attributes for the containing element.
 *
 * @see template_preprocess_file_managed_file()
 */
#}
{{ attach_library('seven/classy.file') }}
{%
  set classes = [
    'js-form-managed-file',
    'form-managed-file',
  ]
%}
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_file-managed-file.html.tw_JjZosFqTDxhl9GlfxkB_9PzJo/7ruT3tDaAV4_66VfHowLcucln9fOiPK1896kOkJA2to.php
<div{{ attributes.addClass(classes) }}>
  {{ element }}
</div>
", "core/themes/seven/templates/classy/content-edit/file-managed-file.html.twig", "E:\\xampp\\htdocs\\drupal\\core\\themes\\seven\\templates\\classy\\content-edit\\file-managed-file.html.twig");
=======
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {{ content }}
  </div>
{% endif %}
", "region.html.twig", "core/themes/bartik/templates/classy/layout/region.html.twig");
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region--breadcrumb.html.t_PNFDR9sihnBDuQqKQ8p8MAYqs/mHMc8rfgzobORl0DEX-5EGts-Up_sNHHATQPS2jqPBo.php
    }
    
    public function checkSecurity()
    {
<<<<<<< HEAD:sites/default/files/php/twig/649991413e0bb_file-managed-file.html.tw_JjZosFqTDxhl9GlfxkB_9PzJo/7ruT3tDaAV4_66VfHowLcucln9fOiPK1896kOkJA2to.php
        static $tags = array("set" => 15);
        static $filters = array("escape" => 13);
        static $functions = array("attach_library" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['attach_library']
=======
        static $tags = array("set" => 16, "if" => 21);
        static $filters = array("clean_class" => 18, "escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
>>>>>>> 9e9a783727e6f5eb438efd0727dd7abc43e8e0a9:sites/default/files/php/twig/64998336e596e_region--breadcrumb.html.t_PNFDR9sihnBDuQqKQ8p8MAYqs/mHMc8rfgzobORl0DEX-5EGts-Up_sNHHATQPS2jqPBo.php
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
