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

/* themes/custom/paras/templates/page--node--3.html.twig */
class __TwigTemplate_48309f647ff8cfcbe9aa76b87f3195931ba25fe5b07ddc03f64df0cca3343a64 extends \Twig\Template
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
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/custom/paras/templates/page--node--3.html.twig", 1)->display($context);
        // line 2
        echo "
<section class=\"about\">
\t<div class=\"shape shape1\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/shape-1-1.png\" alt=\"ring shape\">
\t</div>
\t<div class=\"shape shape2\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/shape-2.png\" alt=\"half circle\">
\t</div>
\t<div class=\"shape shape3\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Ellipse-1.png\" alt=\"small circle\">
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t<h1>About us</h1>
<h4>Imperial Auto Industries Limited is India’s largest integrated manufacturer and assembler of Fluid Transmission Products covering the entire spectrum including flexible high-pressure assemblies, metal tubular assemblies, and low-pressure hose assemblies.</h4>
<p>The organization was established as a small-scale enterprise in 1969 in Faridabad, India. Today it has a global setup with over 20 facilities across India and another 3 outside India. The organization continues to grow and expand its operations continuously.</p>
<p>Imperial Auto is a supplier to Original Equipment Manufacturers and maintains a strong focus on high quality standards by constantly upgrading equipment and facilities, standards followed and quality management certifications.</p>
<p>The Company is well diversified across customers and industry segments, both in the domestic and exports market.</p>
<p>Today the organization is deeply backward integrated with its own fully controlled support for key functions such as electroplating, brazing and rubber compound mixing along with all requisite equipment, manpower, infrastructure as well as years of knowledge and experience in the fluid transmission products domain to serve our customers in a timely and productive manner.</p>
<p>Imperial Auto is an organization based on relationships as is evident from the strong bond and camaraderie that the founding team shares even after almost half a century of starting the establishment together. Values of togetherness, teamwork, respect and humility run deep and wide within the nervous system of the group.</p>
\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 31
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/custom/paras/templates/page--node--3.html.twig", 31)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/paras/templates/page--node--3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 31,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% include directory ~ '/templates/includes/header.html.twig' %}

<section class=\"about\">
\t<div class=\"shape shape1\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/shape-1-1.png\" alt=\"ring shape\">
\t</div>
\t<div class=\"shape shape2\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/shape-2.png\" alt=\"half circle\">
\t</div>
\t<div class=\"shape shape3\">
\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Ellipse-1.png\" alt=\"small circle\">
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t<h1>About us</h1>
<h4>Imperial Auto Industries Limited is India’s largest integrated manufacturer and assembler of Fluid Transmission Products covering the entire spectrum including flexible high-pressure assemblies, metal tubular assemblies, and low-pressure hose assemblies.</h4>
<p>The organization was established as a small-scale enterprise in 1969 in Faridabad, India. Today it has a global setup with over 20 facilities across India and another 3 outside India. The organization continues to grow and expand its operations continuously.</p>
<p>Imperial Auto is a supplier to Original Equipment Manufacturers and maintains a strong focus on high quality standards by constantly upgrading equipment and facilities, standards followed and quality management certifications.</p>
<p>The Company is well diversified across customers and industry segments, both in the domestic and exports market.</p>
<p>Today the organization is deeply backward integrated with its own fully controlled support for key functions such as electroplating, brazing and rubber compound mixing along with all requisite equipment, manpower, infrastructure as well as years of knowledge and experience in the fluid transmission products domain to serve our customers in a timely and productive manner.</p>
<p>Imperial Auto is an organization based on relationships as is evident from the strong bond and camaraderie that the founding team shares even after almost half a century of starting the establishment together. Values of togetherness, teamwork, respect and humility run deep and wide within the nervous system of the group.</p>
\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
{% include directory ~ '/templates/includes/footer.html.twig' %}
", "themes/custom/paras/templates/page--node--3.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\paras\\templates\\page--node--3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
