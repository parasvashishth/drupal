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

/* themes/custom/paras/templates/page--node--2.html.twig */
class __TwigTemplate_3ca9ca9887b3b7945456ac212e5b234b38124cec0caa430ac815f76a7dd2b556 extends \Twig\Template
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
        // line 1
        echo " ";
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/custom/paras/templates/page--node--2.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "

";
        // line 151
        echo "
";
        // line 152
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/custom/paras/templates/page--node--2.html.twig", 152)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/paras/templates/page--node--2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 152,  50 => 151,  45 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% include directory ~ '/templates/includes/header.html.twig' %}

{{page.content}}

{# <section class=\"groupBoxSec\">
\t<div class=\"container\">
\t\t
\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">  
\t\t\t\t<div class=\"groupBoxLeft\">
\t\t\t\t\t<h3>IAI Chakan (100% IAI Owned)</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t<li>Founded in 1995</li>
\t\t\t\t\t<li>Focuses on Domestic FTP customers</li>
\t\t\t\t\t<li>Location – Pune</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"groupBoxRt\">
\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-10.38.40-AM.jpeg\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">  
\t\t\t\t<div class=\"groupBoxLeft\">
\t\t\t\t\t<h3>Imperial Auto Industries (100% IAI owned)</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t<li>Founded in 1969</li>
\t\t\t\t\t<li>Manufacturing fluid transmission products</li>
\t\t\t\t\t<li>Location – PAN India</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"groupBoxRt\">
\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-11-at-10.38.40-AM.jpeg\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">  
\t\t\t\t<div class=\"groupBoxLeft\">
\t\t\t\t\t<h3>Imperial Martor Engine Tubes Pvt. Ltd. (100% IAI owned)</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t<li>Joint venture with Martor S.P.A (Italy)</li>
\t\t\t\t\t<li>Established in 2008</li>
\t\t\t\t\t<li>Manufacturing engine components for OEMs in India</li>
\t\t\t\t\t<li>Location – Pune, Maharashtra</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"groupBoxRt\">
\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/imperial-martor-1.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">  
\t\t\t\t<div class=\"groupBoxLeft\">
\t\t\t\t\t<h3>Sumitomo Riko Imperial Rubber India Pvt. Ltd. (60% Sumitomo Riko : 40% IAI)</h3>
\t\t\t\t<ul>
\t\t\t\t<li>Joint Venture with Sumitomo Riko Company Limited (Japan)</li>
\t\t\t\t<li>Established in 2005</li>
\t\t\t\t<li>Manufacturing direct injection fuel hoses and assemblies for OEMs in India</li>
\t\t\t\t<li>Location – Faridabad, Haryana</li>
\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"groupBoxRt\">
\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/riko.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">  
\t\t\t\t<div class=\"groupBoxLeft\">
\t\t\t\t\t<h3>SJ Industries (100% IAI owned)</h3>
\t\t\t\t<ul>
\t\t\t\t<li>SJ is a wholly owned company by original promoters</li>
\t\t\t\t<li>Dedicated unit for compounding rubber exclusively for IAI group companies</li>
\t\t\t\t<li>Rubber mixing approximately 600 tons per month presently</li>
\t\t\t\t<li>Location – Faridabad, Haryana</li>
\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"groupBoxRt\">
\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/sj-rubber.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">  
\t\t\t\t<div class=\"groupBoxLeft\">
\t\t\t\t\t<h3>Sumitomo Riko Imperial Hydraulics India Pvt. Ltd. (86% Sumitomo Riko : 14% IAI)</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t<li>Joint Venture with Sumitomo Riko Company Limited (Japan)</li>
\t\t\t\t\t<li>Established in 2013</li>
\t\t\t\t\t<li>Manufacturing Hydraulic hoses for off highway OEM industry</li>
\t\t\t\t\t<li>Location – Neemrana, Rajasthan</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"groupBoxRt\">
\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/tokai-imperial.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">  
\t\t\t\t<div class=\"groupBoxLeft\">
\t\t\t\t\t<h3>Nichirin Imperial Pvt. Ltd. (60% Nichirin : 40% IAI)</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Joint Venture with Nichirin Autoparts India Pvt. Limited (Japan)</li>
\t\t\t\t\t\t<li>Established in 2019</li>
\t\t\t\t\t\t<li>Manufacturing rubber brake hose assemblies for OEMs in India</li>
\t\t\t\t\t\t<li>Location – Faridabad, Haryana</li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"groupBoxRt\">
\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/nichirin-imperial.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t

\t</div>
</section> #}

{% include directory ~ '/templates/includes/footer.html.twig' %}
", "themes/custom/paras/templates/page--node--2.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\paras\\templates\\page--node--2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
