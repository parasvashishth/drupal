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

/* themes/custom/paras/templates/includes/header.html.twig */
class __TwigTemplate_068c87c7778cf69ceb99ddf412140d2e1926bff25bd941fc2ec258a3e69a8e80 extends \Twig\Template
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
        echo "<header class=\"header\">
\t\t\t<nav id=\"navigation1\" class=\"navigation\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"main-header\">
\t\t\t\t\t\t<div class=\"header_logo\">
\t\t\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t\t\t";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_logo", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"header_menu\">
\t\t\t\t\t\t\t<div class=\"nav-toggle\"></div>
\t\t\t\t\t\t\t<div class=\"nav-menus-wrapper\">

\t\t\t\t\t\t\t<div class=\"headerMenu\">
\t\t\t\t\t\t\t";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_menu", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 123
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</nav>
\t\t</header>";
    }

    public function getTemplateName()
    {
        return "themes/custom/paras/templates/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 123,  60 => 17,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
\t\t\t<nav id=\"navigation1\" class=\"navigation\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"main-header\">
\t\t\t\t\t\t<div class=\"header_logo\">
\t\t\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t\t\t{{ page.header_logo }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"header_menu\">
\t\t\t\t\t\t\t<div class=\"nav-toggle\"></div>
\t\t\t\t\t\t\t<div class=\"nav-menus-wrapper\">

\t\t\t\t\t\t\t<div class=\"headerMenu\">
\t\t\t\t\t\t\t{{ page.header_menu }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{# <ul class=\"nav-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"http://localhost/drupal/\">Home</a></li>       
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://localhost/drupal/node/1\">Company</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://localhost/drupal/node/1\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/mission-and-vision/\">History</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/mission-and-vision/?id=mission-vision\">Mission & Vision</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/mission-and-vision/?id=core-values\">Core Values</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/group-companies/\">Group Companies</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/mergers-and-acquisitions/\">Mergers & Acquisitions</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#.\">Our People</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/board-of-directors/\">Board of Directors</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/leadership/\">Leadership</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/careers/\">Careers</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#.\">Our Reach</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product-range/on-highway/\">On-Highway</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product-range/automotive/\">Automotive</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product-range/commercial/\">Commercial</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product-range/off-highway/\">Off-Highway</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product-range/agriculture/\">Agriculture</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product-range/construction/\">Construction</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product-range/defense-and-railway/\">Defence and Railway</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product-range/engine/\">Engine</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product-range/new-energy-vehicles/\">New Energy Vehicles</a></li>\t
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/products/\">Products & Solutions</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/fcev-thermal-management/\">FC-FCEV &#8211; Thermal Management</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/cng-hose-metal-tube/\">CNG Hose &#038; Metal Tube</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/hvac-lines-hvac-assembly/\">HVAC Lines &#038; HVAC Assembly</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/coolant-pipes-hoses-heater-hose/\">Heater Hose / Coolant Pipes &#038; Hoses</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/brake-assembly-clutch-assembly/\">Brake Assembly &#038; Clutch Assembly</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/hydraulic-power-steering/\">Hydraulic Power Steering</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/hydraulic-hose/\">Hydraulic Hose</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/structural-fabrication-parts/\">Structural / Fabrication Parts</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/hydraulic-tube-high-pressure-tubes/\">High Pressure Tubes / Hydraulic Tube</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/aftertreatment-system-and-exhaust-assembly/\">Aftertreatment System / Exhaust Assembly</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/fuel-hose-and-fuel-lines-assembly/\">Fuel Hose / Fuel Line Assembly</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/injector-leak-off-assembly/\">Injector Leak off Assembly</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/hp-injector-crdi-gdi/\">HP Injector (CRDI &amp; GDI)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/charge-air-cooler-and-intercooler-assembly/\">Charge Air Cooler / Intercooler Assembly</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/oil-line-and-oil-cooler-assembly/\">Oil Line &#038; Oil Cooler Assembly</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/engine-tubular-assemblies/\">Engine Tubular Assemblies</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/product/dp-lines/\">DP Lines</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#.\">Technology</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/certifications/\">Certifications</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/facilities/\">Facilities</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/facilities/\">Rubber Processing</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/facilities/\">Tube Manipulations</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/facilities/\">Assemblies</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/facilities/\">Hydraulic Cleanliness</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/facilities/\">Quality and Certification</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/facilities/\">IAI Design Center</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/news/\">News & Media</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"https://imperialauto.in/contact/\">Contact</a></li>
\t\t\t\t\t\t\t\t\t<div class=\"nav-search \">
\t\t\t\t\t\t\t\t\t\t<div class=\"nav-search-button\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search by Part no, product or keyword\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<form action=\"https://imperialauto.in\" name=\"SearchForm\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-search-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"s\" maxlength=\"64\" id=\"SearchForm\" placeholder=\"Search by Part no, product or keyword\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</ul> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</nav>
\t\t</header>", "themes/custom/paras/templates/includes/header.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\paras\\templates\\includes\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7);
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
