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

/* themes/custom/breeze/Templates/page--front.html.twig */
class __TwigTemplate_ba79940ef8664128158e0ccbb1abd7726c3a1633edae32431e3120bc0d74ec16 extends \Twig\Template
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
        // line 42
        echo "  

  ";
        // line 44
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/header.html.twig"), "themes/custom/breeze/Templates/page--front.html.twig", 44)->display($context);
        // line 45
        echo "
<style>
\theader.header {
\t\tposition: fixed;
\t\ttop: 0;
\t\tbackground: transparent;
\t}
</style>
<section class=\"slider-sec\">
\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-indicators\">
\t\t\t<div class=\"container\" style=\"display: flex; align-items: end; justify-content: space-between;\">
\t\t\t\t<div class=\"carasol_bt_head\">
\t\t\t\t\t<h4 class=\"text-white\">100+ CARS TYPE &amp; BRANDS</h4>
<h2>Search Your <em>Best Car</em></h2>
\t\t\t\t</div>
            <div class=\"carssol-indicater\">
                                        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-label=\"Slide 1\" aria-current=\"true\">
                            01                        </button>
                                        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" class=\"\" aria-label=\"Slide 2\" aria-current=\"false\">
                            02                        </button>
                                        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" class=\"\" aria-label=\"Slide 3\" aria-current=\"false\">
                            03                        </button>
                            </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"carousel-inner\">
\t\t\t
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Untitled-1.jpg2_.jpg\" class=\"d-block w-100 mobile_slide\" alt=\"...\" >
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/LOMBERGHINI.jpg\" class=\"d-block w-100 dk_slide\" alt=\"...\" >
\t\t\t</div>

\t\t\t
\t\t\t<div class=\"carousel-item \">
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Untitled-1.jpg\" class=\"d-block w-100 mobile_slide\" alt=\"...\" >
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/BANNER-FUSION.jpg\" class=\"d-block w-100 dk_slide\" alt=\"...\" >
\t\t\t</div>

\t\t\t
\t\t\t<div class=\"carousel-item \">
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Untitled-1.jpg3_.jpg\" class=\"d-block w-100 mobile_slide\" alt=\"...\" >
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002913-scaled.jpg\" class=\"d-block w-100 dk_slide\" alt=\"...\" >
\t\t\t</div>

\t\t\t

\t\t</div>
\t</div>
\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\" style=\"background-image: url('https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Vector_previous.png');\"></span>
\t\t<span class=\"visually-hidden\">Previous</span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\" style=\"background-image: url('https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Vector_next.png');\"></span>
\t\t<span class=\"visually-hidden\">Next</span>
\t</button>

\t<div class=\"home_form\">
\t\t<div class=\"container\">

\t\t\t<script>
\t\t\t\tfunction searchCars() {
\t\t\t\t\tvar brand = document.getElementById(\"cars\").value;
\t\t\t\t\tvar type = document.getElementById(\"types\").value;
\t\t\t\t\tvar price = document.getElementById(\"prices\").value;
\t\t\t\t\tvar url = \"https://nextstep.net.in/fusion-cars/collections?brand=\" + brand + \"&type=\" + type + \"&price=\" + price;
\t\t\t\t\twindow.location.href = url;
\t\t\t\t}
\t\t\t</script>

\t\t\t<form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<label>Car Brand</label>
\t\t\t\t\t\t<div class=\"home_form_fields\">
\t\t\t\t\t\t\t<select id=\"cars\" name=\"cars\">
\t\t\t\t\t\t\t\t<option value=\"\">Select Car Brand</option>
\t\t\t\t\t\t\t\t<option value=\"Kia\">Kia</option><option value=\"Ford\">Ford</option><option value=\"Range Rover/Land Rover\">Range Rover/Land Rover</option><option value=\"JEEP\">JEEP</option><option value=\"Audi\">Audi</option><option value=\"Mini\">Mini</option><option value=\"Lexus\">Lexus</option><option value=\"Jaguar\">Jaguar</option><option value=\"Porsche\">Porsche</option><option value=\"Toyota\">Toyota</option><option value=\"Mahindra\">Mahindra</option><option value=\"Lamborghini\">Lamborghini</option><option value=\"MG\">MG</option><option value=\"Volvo\">Volvo</option><option value=\"Mercedes Benz\">Mercedes Benz</option><option value=\"BMW\">BMW</option>\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<label>Car Type</label>
\t\t\t\t\t\t<div class=\"home_form_fields\">
\t\t\t\t\t\t\t<select id=\"types\" name=\"types\">
\t\t\t\t\t\t\t\t<option value=\"\">Select Car Type</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sedan\">sedan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hatchback\">hatchback</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"suv\">suv</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pickup\">pickup</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"coupe\">coupe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"convertible\">convertible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"wagon\">wagon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sports-car\">sports-car</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"luxury-car\">luxury-car</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"off-road-vehicle\">off-road-vehicle</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<label>Car Price</label>
\t\t\t\t\t\t<div class=\"home_form_fields\">
\t\t\t\t\t\t\t<select id=\"prices\" name=\"prices\">
\t\t\t\t\t\t\t\t<option value=\"\">Select Price Range</option>
\t\t\t\t\t\t\t\t<option value=\"0-100000\">Below ₹1 Lakh</option>
\t\t\t\t\t\t\t\t<option value=\"100000-500000\">₹1 Lakh to ₹5 Lakhs</option>
\t\t\t\t\t\t\t\t<option value=\"500000-1000000\">₹5 Lakhs to ₹10 Lakhs</option>
\t\t\t\t\t\t\t\t<option value=\"1000000-2000000\">₹10 Lakhs to ₹20 Lakhs</option>
\t\t\t\t\t\t\t\t<option value=\"2000000-5000000\">₹20 Lakhs to ₹50 Lakhs</option>
\t\t\t\t\t\t\t\t<option value=\"5000000-10000000\">₹50 Lakhs to ₹1 Crore</option>
\t\t\t\t\t\t\t\t<option value=\"10000000-20000000\">₹1 Crore to ₹2 Crores</option>
\t\t\t\t\t\t\t\t<option value=\"20000000-50000000\">₹2 Crores to ₹5 Crores</option>
\t\t\t\t\t\t\t\t<option value=\"50000000-100000000\">₹5 Crores to ₹10 Crores</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"home_form_fields\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fusion_btn text-center\" onclick=\"searchCars()\">SEARCH CAR NOW<span></span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>\t
</section>
<section class=\"p_100 fusion_cars bg_theme\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h4>100+ CARS TYPE &amp; BRANDS</h4>
<h2>Fusion Cars <em>Advantage</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row adv_row\">
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<div class=\"adv-box\">
\t\t\t\t\t\t<div class=\"adv-box-image\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/support.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"adv-box-content\">
\t\t\t\t\t\t\t<h3>100% Customer Satisfaction</h3>
<h5>Dedicated team of experts</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<div class=\"adv-box\">
\t\t\t\t\t\t<div class=\"adv-box-image\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/noun-hand-shake-821752-1.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"adv-box-content\">
\t\t\t\t\t\t\t<h3>Transparent Dealing</h3>
<h5>Hassle-free paperwork and peace of mind</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<div class=\"adv-box\">
\t\t\t\t\t\t<div class=\"adv-box-image\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/unnamed.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"adv-box-content\">
\t\t\t\t\t\t\t<h3>Unique Selection</h3>
<h5>Explore a wide range of pre-loved cars</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"about_us p_100 bg_black\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"about_left\">
\t\t\t\t\t<div class=\"ab_image_bottom\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/ab_image_bottom-1.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ab_image_top\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/aboutus_top-1.png\" alt=\"\">
\t\t\t\t\t\t<span class=\"verti_text\">15+ Years of Excellence</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"about_right\">
\t\t\t\t\t";
        // line 245
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
        echo "
\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/about-us/\" class=\"fusion_btn\">KNOW MORE</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"cars p_100 bg_theme\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h4>OUR VEHICLE BRAND &amp; TYPE</h4>
<h2>Fusion Cars <em>Collection</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"cars_tabs\">
\t\t\t\t<!-- Collection Nav for Mobile -->
\t\t\t\t<div class=\"nav_tab_outer\">
\t\t\t\t\t<div class=\"nav nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-0-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-0\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-0\" aria-selected=\"true\">
\t\t\t\t\t\t\tKia\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-1-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"\">
\t\t\t\t\t\t\tFord\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-2-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"\">
\t\t\t\t\t\t\tRange Rover/Land Rover\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-3-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-3\" aria-selected=\"\">
\t\t\t\t\t\t\tJEEP\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-4-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-4\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-4\" aria-selected=\"\">
\t\t\t\t\t\t\tAudi\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-5-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-5\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-5\" aria-selected=\"\">
\t\t\t\t\t\t\tMini\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-6-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-6\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-6\" aria-selected=\"\">
\t\t\t\t\t\t\tLexus\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-7-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-7\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-7\" aria-selected=\"\">
\t\t\t\t\t\t\tJaguar\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-8-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-8\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-8\" aria-selected=\"\">
\t\t\t\t\t\t\tPorsche\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-9-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-9\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-9\" aria-selected=\"\">
\t\t\t\t\t\t\tToyota\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-10-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-10\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-10\" aria-selected=\"\">
\t\t\t\t\t\t\tMahindra\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-11-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-11\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-11\" aria-selected=\"\">
\t\t\t\t\t\t\tLamborghini\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-12-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-12\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-12\" aria-selected=\"\">
\t\t\t\t\t\t\tMG\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-13-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-13\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-13\" aria-selected=\"\">
\t\t\t\t\t\t\tVolvo\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-14-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-14\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-14\" aria-selected=\"\">
\t\t\t\t\t\t\tMercedes Benz\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-15-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-15\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-15\" aria-selected=\"\">
\t\t\t\t\t\t\tBMW\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t<!-- Collection Nav for Big Screen -->
\t\t\t\t\t<div class=\"nav flex-column nav-pills me-4 car_buttons\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t<h4>All Manufacturers</h4>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-0-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-0\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-0\" aria-selected=\"true\">
\t\t\t\t\t\t\tKia\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-1-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"\">
\t\t\t\t\t\t\tFord\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-2-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"\">
\t\t\t\t\t\t\tRange Rover/Land Rover\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-3-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-3\" aria-selected=\"\">
\t\t\t\t\t\t\tJEEP\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-4-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-4\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-4\" aria-selected=\"\">
\t\t\t\t\t\t\tAudi\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-5-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-5\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-5\" aria-selected=\"\">
\t\t\t\t\t\t\tMini\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-6-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-6\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-6\" aria-selected=\"\">
\t\t\t\t\t\t\tLexus\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-7-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-7\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-7\" aria-selected=\"\">
\t\t\t\t\t\t\tJaguar\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-8-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-8\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-8\" aria-selected=\"\">
\t\t\t\t\t\t\tPorsche\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-9-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-9\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-9\" aria-selected=\"\">
\t\t\t\t\t\t\tToyota\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-10-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-10\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-10\" aria-selected=\"\">
\t\t\t\t\t\t\tMahindra\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-11-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-11\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-11\" aria-selected=\"\">
\t\t\t\t\t\t\tLamborghini\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-12-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-12\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-12\" aria-selected=\"\">
\t\t\t\t\t\t\tMG\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-13-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-13\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-13\" aria-selected=\"\">
\t\t\t\t\t\t\tVolvo\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-14-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-14\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-14\" aria-selected=\"\">
\t\t\t\t\t\t\tMercedes Benz\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-15-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-15\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-15\" aria-selected=\"\">
\t\t\t\t\t\t\tBMW\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-16\" role=\"tabpanel\" aria-labelledby=\"v-pills-16-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-lamborghini-huracan-lp-580/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-1.35.26-PM-3-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 Lamborghini Huracan LP 580</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">3200</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 29,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+Lamborghini+Huracan+LP+580%0A%20Price:%20₹%2029500000%0A%20Year:%202016%0A%20KMs%20Driven:%203200%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-bmw-x4-xdrive-30i-m-sport/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.21.15-PM-1-1568x1569.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 BMW X4 XDRIVE 30I  M SPORT</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">14000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 7,975,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+BMW+X4+XDRIVE+30I++M+SPORT%0A%20Price:%20₹%207975000%0A%20Year:%202022%0A%20KMs%20Driven:%2014000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-kia-carnival-limousine/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.55-PM-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 KIA CARNIVAL LIMOUSINE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">28000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,350,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+KIA+CARNIVAL+LIMOUSINE%0A%20Price:%20₹%203350000%0A%20Year:%202020%0A%20KMs%20Driven:%2028000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-mini-cooper-s-clubman/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.39-PM-1-1-1568x1567.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 MINI COOPER S CLUBMAN</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">36000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+MINI+COOPER+S+CLUBMAN%0A%20Price:%20₹%203200000%0A%20Year:%20%0A%20KMs%20Driven:%2036000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020-mercedes-benz-gle-53-amg/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.12-PM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020 Mercedes Benz GLE 53 AMG</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">25000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 13,900,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020+Mercedes+Benz+GLE+53+AMG%0A%20Price:%20₹%2013900000%0A%20Year:%20%0A%20KMs%20Driven:%2025000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2015-mercedes-benz-slk-350/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.19.44-PM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2015 MERCEDES BENZ SLK 350</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2015</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">9600</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 5,100,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202015+MERCEDES+BENZ+SLK+350%0A%20Price:%20₹%205100000%0A%20Year:%20%0A%20KMs%20Driven:%209600%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=BMW\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-0\" role=\"tabpanel\" aria-labelledby=\"v-pills-0-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-kia-carnival-limousine/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.55-PM-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 KIA CARNIVAL LIMOUSINE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">28000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,350,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+KIA+CARNIVAL+LIMOUSINE%0A%20Price:%20₹%203350000%0A%20Year:%202020%0A%20KMs%20Driven:%2028000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020-kia-carnival-limousine/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_347341582_237555632216448_3533321652105792580_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020 KIA CARNIVAL LIMOUSINE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">36000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,300,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020+KIA+CARNIVAL+LIMOUSINE%0A%20Price:%20₹%203300000%0A%20Year:%20%0A%20KMs%20Driven:%2036000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-kia-carnival-at-prestige/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_346455939_113306705083314_3897935112220415029_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 KIA CARNIVAL AT PRESTIGE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">30000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,250,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+KIA+CARNIVAL+AT+PRESTIGE%0A%20Price:%20₹%203250000%0A%20Year:%20%0A%20KMs%20Driven:%2030000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Kia\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-1-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-foed-endeavour-3-2-titanium/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_318973954_1352369581969070_7518848102194639553_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 FOED ENDEAVOUR 3.2 TITANIUM</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\"></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">55000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 2,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+FOED+ENDEAVOUR+3.2+TITANIUM%0A%20Price:%20₹%202700000%0A%20Year:%20%0A%20KMs%20Driven:%2055000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Ford\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-2-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/range-rover-vogue/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/range-rover2.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>RANGE ROVER VOGUE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2018</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">52000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 14,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%20RANGE+ROVER+VOGUE%0A%20Price:%20₹%2014500000%0A%20Year:%202017%0A%20KMs%20Driven:%2052000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Range Rover/Land Rover\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-3\" role=\"tabpanel\" aria-labelledby=\"v-pills-3-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-jeep-wrangler-rubicon-2-0l/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.24.29-AM-2-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 JEEP WRANGLER RUBICON 2.0L</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">5500</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 6,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+JEEP+WRANGLER+RUBICON+2.0L%0A%20Price:%20₹%206700000%0A%20Year:%20%0A%20KMs%20Driven:%205500%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=JEEP\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-4\" role=\"tabpanel\" aria-labelledby=\"v-pills-4-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-audi-a-tfsi-premium/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.23.13-AM-1-1568x1569.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 AUDI A TFSI PREMIUM</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">5200</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+AUDI+A+TFSI+PREMIUM%0A%20Price:%20₹%204200000%0A%20Year:%202021%0A%20KMs%20Driven:%205200%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2015-a3-cabriolet-convertible/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.22.42-AM-3.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2015 A3 Cabriolet Convertible</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2015</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">57000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,650,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202015+A3+Cabriolet+Convertible%0A%20Price:%20₹%203650000%0A%20Year:%20%0A%20KMs%20Driven:%2057000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2018-audi-a5/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-4.08.21-PM-3-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2018 AUDI A5</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\"></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">48000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202018+AUDI+A5%0A%20Price:%20₹%203700000%0A%20Year:%202018%0A%20KMs%20Driven:%2048000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-audi-a4-tfsi-premium-plus/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_339506928_3449310471973963_7668123725944920399_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 AUDI A4 TFSI PREMIUM PLUS</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">5200</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+AUDI+A4+TFSI+PREMIUM+PLUS%0A%20Price:%20₹%204200000%0A%20Year:%202021%0A%20KMs%20Driven:%205200%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Audi\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-5\" role=\"tabpanel\" aria-labelledby=\"v-pills-5-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-mini-cooper-s-clubman/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.39-PM-1-1-1568x1567.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 MINI COOPER S CLUBMAN</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">36000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+MINI+COOPER+S+CLUBMAN%0A%20Price:%20₹%203200000%0A%20Year:%20%0A%20KMs%20Driven:%2036000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mini\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-6\" role=\"tabpanel\" aria-labelledby=\"v-pills-6-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-lexus-rx-450-hl/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_347672868_6380453145331400_5718099624617533718_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019 LEXUS RX 450 HL</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2019</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">14000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 9,000,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019+LEXUS+RX+450+HL%0A%20Price:%20₹%209000000%0A%20Year:%20%0A%20KMs%20Driven:%2014000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Lexus\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-7\" role=\"tabpanel\" aria-labelledby=\"v-pills-7-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-2022-jaguar-f-pace/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_346120011_761019862171633_9156077042175920466_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021/2022 Jaguar F-Pace</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">27000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 720,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021%2F2022+Jaguar+F-Pace%0A%20Price:%20₹%20720000%0A%20Year:%202021%0A%20KMs%20Driven:%2027000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Jaguar\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-8\" role=\"tabpanel\" aria-labelledby=\"v-pills-8-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Porsche\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-9\" role=\"tabpanel\" aria-labelledby=\"v-pills-9-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020fortuner-a-t-42/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_346920778_169777022706381_2824790568973049336_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020FORTUNER A/T 4*2</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">55000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,600,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020FORTUNER+A%2FT+4%2A2%0A%20Price:%20₹%203600000%0A%20Year:%202020%0A%20KMs%20Driven:%2055000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-fortuner-2-8-4x2-at/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_347078360_959644905237409_5725810025204562196_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019 FORTUNER 2.8 4X2 AT</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2019</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">72000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 32,000,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019+FORTUNER+2.8+4X2+AT%0A%20Price:%20₹%2032000000%0A%20Year:%202019%0A%20KMs%20Driven:%2072000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Toyota\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-10\" role=\"tabpanel\" aria-labelledby=\"v-pills-10-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mahindra\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-11\" role=\"tabpanel\" aria-labelledby=\"v-pills-11-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-lamborghini-huracan-lp-580/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-1.35.26-PM-3-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 Lamborghini Huracan LP 580</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">3200</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 29,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+Lamborghini+Huracan+LP+580%0A%20Price:%20₹%2029500000%0A%20Year:%202016%0A%20KMs%20Driven:%203200%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-lamborghini-urus-capsule-edition/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_346073571_2223692111165737_3631832249003264828_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 LAMBORGHINI URUS CAPSULE EDITION</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">11000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 47,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+LAMBORGHINI+URUS+CAPSULE+EDITION%0A%20Price:%20₹%2047500000%0A%20Year:%202021%0A%20KMs%20Driven:%2011000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Lamborghini\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-12\" role=\"tabpanel\" aria-labelledby=\"v-pills-12-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=MG\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-13\" role=\"tabpanel\" aria-labelledby=\"v-pills-13-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/volvo/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/unnamed.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>VOLVO</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">105000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%20VOLVO%0A%20Price:%20₹%203700000%0A%20Year:%20%0A%20KMs%20Driven:%20105000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Volvo\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-14\" role=\"tabpanel\" aria-labelledby=\"v-pills-14-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020-mercedes-benz-gle-53-amg/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.12-PM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020 Mercedes Benz GLE 53 AMG</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">25000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 13,900,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020+Mercedes+Benz+GLE+53+AMG%0A%20Price:%20₹%2013900000%0A%20Year:%20%0A%20KMs%20Driven:%2025000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2015-mercedes-benz-slk-350/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.19.44-PM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2015 MERCEDES BENZ SLK 350</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2015</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">9600</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 5,100,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202015+MERCEDES+BENZ+SLK+350%0A%20Price:%20₹%205100000%0A%20Year:%20%0A%20KMs%20Driven:%209600%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-mercedes-benz-glc-220d/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.26.03-AM-1-1568x1562.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 MERCEDES BENZ GLC 220D</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">20000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 6,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+MERCEDES+BENZ+GLC+220D%0A%20Price:%20₹%206700000%0A%20Year:%20%0A%20KMs%20Driven:%2020000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-mercedes-cla-200/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.25.35-AM-1568x1569.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019 MERCEDES CLA 200</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2019</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">43000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 2,950,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019+MERCEDES+CLA+200%0A%20Price:%20₹%202950000%0A%20Year:%20%0A%20KMs%20Driven:%2043000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-20-mercedes-benz-c220-d/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.24.54-AM-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019/20 MERCEDES BENZ C220 D</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">100000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019%2F20+MERCEDES+BENZ+C220+D%0A%20Price:%20₹%204200000%0A%20Year:%202019%0A%20KMs%20Driven:%20100000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-mercedes-benz-e22od-class/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_332362509_109395228749065_8012967361856335310_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 Mercedes Benz E22OD Class</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\"></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">43000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+Mercedes+Benz+E22OD+Class%0A%20Price:%20₹%204200000%0A%20Year:%20%0A%20KMs%20Driven:%2043000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mercedes Benz\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-15\" role=\"tabpanel\" aria-labelledby=\"v-pills-15-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-bmw-x4-xdrive-30i-m-sport/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.21.15-PM-1-1568x1569.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 BMW X4 XDRIVE 30I  M SPORT</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">14000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 7,975,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+BMW+X4+XDRIVE+30I++M+SPORT%0A%20Price:%20₹%207975000%0A%20Year:%202022%0A%20KMs%20Driven:%2014000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-bmw-x5-x-drive-40i-m-sports/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.18.43-PM-1-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 BMW X5 X DRIVE 40i M Sports</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">20000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 8,950,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+BMW+X5+X+DRIVE+40i+M+Sports%0A%20Price:%20₹%208950000%0A%20Year:%202020%0A%20KMs%20Driven:%2020000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-bmw-330-li/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.23.53-AM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 BMW 330 LI</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">11000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 5,800,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+BMW+330+LI%0A%20Price:%20₹%205800000%0A%20Year:%202022%0A%20KMs%20Driven:%2011000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2010-bmw-650i-convertable/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_198314845_289561962855993_7036146490470055916_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2010 BMW 650i Convertable</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\"></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">26500</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 2,900,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202010+BMW+650i+Convertable%0A%20Price:%20₹%202900000%0A%20Year:%20%0A%20KMs%20Driven:%2026500%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020-bmw-x5-x-drive-30d-x-line/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_295877850_437179031468625_96183275205839934_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020 BMW X5 X Drive 30D X Line</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">25000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 8,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020+BMW+X5+X+Drive+30D+X+Line%0A%20Price:%20₹%208500000%0A%20Year:%202019%0A%20KMs%20Driven:%2025000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-bmw-5-series-520-d/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_300993824_1453309721760635_4776978256818366782_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019 BMW 5 SERIES 520 D</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2019</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">30000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,450,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019+BMW+5+SERIES+520+D%0A%20Price:%20₹%204450000%0A%20Year:%202018%0A%20KMs%20Driven:%2030000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=BMW\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"explore bg_black p_100\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h2>Explore Luxury Cars <em>by Brand</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Kia\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002931.png\" alt=\"\">
\t\t\t\t\t\t<h5>Kia</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Ford\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002916.png\" alt=\"\">
\t\t\t\t\t\t<h5>Ford</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Range Rover/Land Rover\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002919.png\" alt=\"\">
\t\t\t\t\t\t<h5>Range Rover/Land Rover</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=JEEP\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002930.png\" alt=\"\">
\t\t\t\t\t\t<h5>JEEP</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Audi\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002914.png\" alt=\"\">
\t\t\t\t\t\t<h5>Audi</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mini\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002927.png\" alt=\"\">
\t\t\t\t\t\t<h5>Mini</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Lexus\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002925.png\" alt=\"\">
\t\t\t\t\t\t<h5>Lexus</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Jaguar\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002929.png\" alt=\"\">
\t\t\t\t\t\t<h5>Jaguar</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Porsche\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002920.png\" alt=\"\">
\t\t\t\t\t\t<h5>Porsche</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Toyota\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002915.png\" alt=\"\">
\t\t\t\t\t\t<h5>Toyota</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mahindra\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002928.png\" alt=\"\">
\t\t\t\t\t\t<h5>Mahindra</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Lamborghini\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002923.png\" alt=\"\">
\t\t\t\t\t\t<h5>Lamborghini</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=MG\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002924.png\" alt=\"\">
\t\t\t\t\t\t<h5>MG</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Volvo\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002921.png\" alt=\"\">
\t\t\t\t\t\t<h5>Volvo</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mercedes Benz\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002922.png\" alt=\"\">
\t\t\t\t\t\t<h5>Mercedes Benz</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=BMW\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002917.png\" alt=\"\">
\t\t\t\t\t\t<h5>BMW</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t</div>
\t</div>
</section>
<section class=\"testi p_100 bg_theme \">
\t<div class=\"container\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h2>What Clients Say <em>About Us</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-8 offset-2 \">
\t\t\t\t<div class=\"testi_lg owl-carousel\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>They are just amazing they know how to deliver happiness trust worthyI bought mercedes s class from them completely hassle free transfer and reliable productKeep growing like this malik brothers..</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Mridul Sahi</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>Literally !very good experience to buy a Utensils and jewellery and the product is  branded /Excellent quality. All in all must recommend to buy some products.👍</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Ravi</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>They are just amazing they know how to deliver happiness trust worthy I bought mercedes s class from them completely hassle free transfer and reliable product Keep growing like this malik brothers</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Mridul Sahi</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>Good collection, less driven cars on best price deals available Highly recommended place for luxury cars purchase</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Sumit Sharma</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>Fusion cars one of the best and trusted  place in delhi  to buy and sell your car Excellent treatment transparency  i strongly recommend.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Vaishnavi Kashyap</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>EXCELLENT SERVICE AND QUICK PROCESS WILL SURELY SUGGEST EVERYONE TO GO AND BUY FROM HERE ONLY #fusion cars</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Ibha Sharma</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>Awesome collection.।। Have an audi Q5 from here... Highly Recommended ✌😊</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Diksha Thakur</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
</section>
<section class=\"news p_100 bg_black\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h4>News/Blogs</h4>
<h2>Our Latest <em>Updates</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/04/news3.png\" alt=\"\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span class=\"news_date\">
\t\t\t\t\t\t\tJul 4, 2022\t\t\t\t\t\t</span>
\t\t\t\t\t\t<p>The Story Of Fusion Cars And Its Founders, Malik Brothers (drivespark)</p>
\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/news/the-story-of-fusion-cars-and-its-founders-malik-brothers-drivespark/\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/04/news3.png\" alt=\"\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span class=\"news_date\">
\t\t\t\t\t\t\tApr 22, 2022\t\t\t\t\t\t</span>
\t\t\t\t\t\t<p>Story Of Malik Brothers And How They Shaped One Of India’s Leading Pre-Owned Car Dealerships (Outlook)</p>
\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/news/story-of-malik-brothers-and-how-they-shaped-one-of-indias-leading-pre-owned-car-dealerships-outlook/\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/04/news3.png\" alt=\"\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span class=\"news_date\">
\t\t\t\t\t\t\tApr 22, 2022\t\t\t\t\t\t</span>
\t\t\t\t\t\t<p>The Real Story of Malik Brothers and how they shaped one of India’s leading pre-owned car Dealerships, Fusion Cars (apnlive)</p>
\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/news/the-real-story-of-malik-brothers-and-how-they-shaped-one-of-indias-leading-pre-owned-car-dealerships-fusion-cars-apnlive/\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t</div>
\t</div>
</section>
<section class=\"youtube p_100 bg_theme\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h2>Subscribe to our  <span>YouTube Channel</span></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"youtube_slider\">
\t\t\t\t\t<div class=\"slider slider-single\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"awards_single_item\">
\t\t\t\t\t\t\t<div class=\"video_box\">
\t\t\t\t\t\t\t\t<a href=\"https://youtu.be/9vIRmg2uAMs\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"550\" src=\"https://youtube.com/embed/9vIRmg2uAMs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"awards_single_item\">
\t\t\t\t\t\t\t<div class=\"video_box\">
\t\t\t\t\t\t\t\t<a href=\"https://youtu.be/OfMDxAj0_8k\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"550\" src=\"https://youtube.com/embed/OfMDxAj0_8k\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"awards_single_item\">
\t\t\t\t\t\t\t<div class=\"video_box\">
\t\t\t\t\t\t\t\t<a href=\"https://youtu.be/v4uqtWCy2Uc\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"550\" src=\"https://youtube.com/embed/v4uqtWCy2Uc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"awards_single_item\">
\t\t\t\t\t\t\t<div class=\"video_box\">
\t\t\t\t\t\t\t\t<a href=\"https://youtu.be/PJw7w_uRwGQ\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"550\" src=\"https://youtube.com/embed/PJw7w_uRwGQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slider slider-nav\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"youtube_item\">
\t\t\t\t\t\t\t<img src=\"https://img.youtube.com/vi/9vIRmg2uAMs/default.jpg\" alt=\"Thumbnail of the video\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"youtube_item\">
\t\t\t\t\t\t\t<img src=\"https://img.youtube.com/vi/OfMDxAj0_8k/default.jpg\" alt=\"Thumbnail of the video\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"youtube_item\">
\t\t\t\t\t\t\t<img src=\"https://img.youtube.com/vi/v4uqtWCy2Uc/default.jpg\" alt=\"Thumbnail of the video\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"youtube_item\">
\t\t\t\t\t\t\t<img src=\"https://img.youtube.com/vi/PJw7w_uRwGQ/default.jpg\" alt=\"Thumbnail of the video\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>



<section class=\"seen_sec p_100\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h2>As Seen On</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"platforms\">
\t\t\t\t<div class=\"ptl_lg owl-carousel\"> 
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/Outlook-1.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/apn.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/one-india.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/drive-spark.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/the-tribune.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 1951
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer.html.twig"), "themes/custom/breeze/Templates/page--front.html.twig", 1951)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/breeze/Templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1948 => 1951,  239 => 245,  45 => 45,  43 => 44,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Claro's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head, and body tags are not in this template. Instead
 * they can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.pre_content: Items for the pre-content region.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.highlighted: Items for the highlighted region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
  

  {% include directory ~ '/templates/header.html.twig' %}

<style>
\theader.header {
\t\tposition: fixed;
\t\ttop: 0;
\t\tbackground: transparent;
\t}
</style>
<section class=\"slider-sec\">
\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t<div class=\"carousel-indicators\">
\t\t\t<div class=\"container\" style=\"display: flex; align-items: end; justify-content: space-between;\">
\t\t\t\t<div class=\"carasol_bt_head\">
\t\t\t\t\t<h4 class=\"text-white\">100+ CARS TYPE &amp; BRANDS</h4>
<h2>Search Your <em>Best Car</em></h2>
\t\t\t\t</div>
            <div class=\"carssol-indicater\">
                                        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-label=\"Slide 1\" aria-current=\"true\">
                            01                        </button>
                                        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" class=\"\" aria-label=\"Slide 2\" aria-current=\"false\">
                            02                        </button>
                                        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" class=\"\" aria-label=\"Slide 3\" aria-current=\"false\">
                            03                        </button>
                            </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"carousel-inner\">
\t\t\t
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Untitled-1.jpg2_.jpg\" class=\"d-block w-100 mobile_slide\" alt=\"...\" >
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/LOMBERGHINI.jpg\" class=\"d-block w-100 dk_slide\" alt=\"...\" >
\t\t\t</div>

\t\t\t
\t\t\t<div class=\"carousel-item \">
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Untitled-1.jpg\" class=\"d-block w-100 mobile_slide\" alt=\"...\" >
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/BANNER-FUSION.jpg\" class=\"d-block w-100 dk_slide\" alt=\"...\" >
\t\t\t</div>

\t\t\t
\t\t\t<div class=\"carousel-item \">
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Untitled-1.jpg3_.jpg\" class=\"d-block w-100 mobile_slide\" alt=\"...\" >
\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002913-scaled.jpg\" class=\"d-block w-100 dk_slide\" alt=\"...\" >
\t\t\t</div>

\t\t\t

\t\t</div>
\t</div>
\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\" style=\"background-image: url('https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Vector_previous.png');\"></span>
\t\t<span class=\"visually-hidden\">Previous</span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\" style=\"background-image: url('https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Vector_next.png');\"></span>
\t\t<span class=\"visually-hidden\">Next</span>
\t</button>

\t<div class=\"home_form\">
\t\t<div class=\"container\">

\t\t\t<script>
\t\t\t\tfunction searchCars() {
\t\t\t\t\tvar brand = document.getElementById(\"cars\").value;
\t\t\t\t\tvar type = document.getElementById(\"types\").value;
\t\t\t\t\tvar price = document.getElementById(\"prices\").value;
\t\t\t\t\tvar url = \"https://nextstep.net.in/fusion-cars/collections?brand=\" + brand + \"&type=\" + type + \"&price=\" + price;
\t\t\t\t\twindow.location.href = url;
\t\t\t\t}
\t\t\t</script>

\t\t\t<form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<label>Car Brand</label>
\t\t\t\t\t\t<div class=\"home_form_fields\">
\t\t\t\t\t\t\t<select id=\"cars\" name=\"cars\">
\t\t\t\t\t\t\t\t<option value=\"\">Select Car Brand</option>
\t\t\t\t\t\t\t\t<option value=\"Kia\">Kia</option><option value=\"Ford\">Ford</option><option value=\"Range Rover/Land Rover\">Range Rover/Land Rover</option><option value=\"JEEP\">JEEP</option><option value=\"Audi\">Audi</option><option value=\"Mini\">Mini</option><option value=\"Lexus\">Lexus</option><option value=\"Jaguar\">Jaguar</option><option value=\"Porsche\">Porsche</option><option value=\"Toyota\">Toyota</option><option value=\"Mahindra\">Mahindra</option><option value=\"Lamborghini\">Lamborghini</option><option value=\"MG\">MG</option><option value=\"Volvo\">Volvo</option><option value=\"Mercedes Benz\">Mercedes Benz</option><option value=\"BMW\">BMW</option>\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<label>Car Type</label>
\t\t\t\t\t\t<div class=\"home_form_fields\">
\t\t\t\t\t\t\t<select id=\"types\" name=\"types\">
\t\t\t\t\t\t\t\t<option value=\"\">Select Car Type</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sedan\">sedan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hatchback\">hatchback</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"suv\">suv</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"pickup\">pickup</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"coupe\">coupe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"convertible\">convertible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"wagon\">wagon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sports-car\">sports-car</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"luxury-car\">luxury-car</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"off-road-vehicle\">off-road-vehicle</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<label>Car Price</label>
\t\t\t\t\t\t<div class=\"home_form_fields\">
\t\t\t\t\t\t\t<select id=\"prices\" name=\"prices\">
\t\t\t\t\t\t\t\t<option value=\"\">Select Price Range</option>
\t\t\t\t\t\t\t\t<option value=\"0-100000\">Below ₹1 Lakh</option>
\t\t\t\t\t\t\t\t<option value=\"100000-500000\">₹1 Lakh to ₹5 Lakhs</option>
\t\t\t\t\t\t\t\t<option value=\"500000-1000000\">₹5 Lakhs to ₹10 Lakhs</option>
\t\t\t\t\t\t\t\t<option value=\"1000000-2000000\">₹10 Lakhs to ₹20 Lakhs</option>
\t\t\t\t\t\t\t\t<option value=\"2000000-5000000\">₹20 Lakhs to ₹50 Lakhs</option>
\t\t\t\t\t\t\t\t<option value=\"5000000-10000000\">₹50 Lakhs to ₹1 Crore</option>
\t\t\t\t\t\t\t\t<option value=\"10000000-20000000\">₹1 Crore to ₹2 Crores</option>
\t\t\t\t\t\t\t\t<option value=\"20000000-50000000\">₹2 Crores to ₹5 Crores</option>
\t\t\t\t\t\t\t\t<option value=\"50000000-100000000\">₹5 Crores to ₹10 Crores</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"home_form_fields\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"fusion_btn text-center\" onclick=\"searchCars()\">SEARCH CAR NOW<span></span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>\t
</section>
<section class=\"p_100 fusion_cars bg_theme\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h4>100+ CARS TYPE &amp; BRANDS</h4>
<h2>Fusion Cars <em>Advantage</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row adv_row\">
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<div class=\"adv-box\">
\t\t\t\t\t\t<div class=\"adv-box-image\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/support.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"adv-box-content\">
\t\t\t\t\t\t\t<h3>100% Customer Satisfaction</h3>
<h5>Dedicated team of experts</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<div class=\"adv-box\">
\t\t\t\t\t\t<div class=\"adv-box-image\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/noun-hand-shake-821752-1.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"adv-box-content\">
\t\t\t\t\t\t\t<h3>Transparent Dealing</h3>
<h5>Hassle-free paperwork and peace of mind</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<div class=\"adv-box\">
\t\t\t\t\t\t<div class=\"adv-box-image\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/unnamed.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"adv-box-content\">
\t\t\t\t\t\t\t<h3>Unique Selection</h3>
<h5>Explore a wide range of pre-loved cars</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"about_us p_100 bg_black\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"about_left\">
\t\t\t\t\t<div class=\"ab_image_bottom\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/ab_image_bottom-1.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ab_image_top\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/aboutus_top-1.png\" alt=\"\">
\t\t\t\t\t\t<span class=\"verti_text\">15+ Years of Excellence</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"about_right\">
\t\t\t\t\t{# <h4>ABOUT US</h4>
<h2>Who <em>FUSION CARS</em> Are</h2>
<p>We&#8217;re a pre-owned car dealership in Tilak Nagar, Delhi with a focus on transparency and impeccable client service in mind since the very beginning&#8230;</p>
<ul>
<li>5000+ Happy Clients Since 2008</li>
<li>Premium less driven pre-owned cars</li>
<li>25+ Best Quality Awards</li>
</ul> #}
{{ page.about }}
\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/about-us/\" class=\"fusion_btn\">KNOW MORE</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"cars p_100 bg_theme\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h4>OUR VEHICLE BRAND &amp; TYPE</h4>
<h2>Fusion Cars <em>Collection</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"cars_tabs\">
\t\t\t\t<!-- Collection Nav for Mobile -->
\t\t\t\t<div class=\"nav_tab_outer\">
\t\t\t\t\t<div class=\"nav nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-0-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-0\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-0\" aria-selected=\"true\">
\t\t\t\t\t\t\tKia\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-1-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"\">
\t\t\t\t\t\t\tFord\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-2-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"\">
\t\t\t\t\t\t\tRange Rover/Land Rover\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-3-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-3\" aria-selected=\"\">
\t\t\t\t\t\t\tJEEP\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-4-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-4\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-4\" aria-selected=\"\">
\t\t\t\t\t\t\tAudi\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-5-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-5\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-5\" aria-selected=\"\">
\t\t\t\t\t\t\tMini\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-6-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-6\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-6\" aria-selected=\"\">
\t\t\t\t\t\t\tLexus\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-7-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-7\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-7\" aria-selected=\"\">
\t\t\t\t\t\t\tJaguar\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-8-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-8\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-8\" aria-selected=\"\">
\t\t\t\t\t\t\tPorsche\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-9-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-9\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-9\" aria-selected=\"\">
\t\t\t\t\t\t\tToyota\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-10-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-10\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-10\" aria-selected=\"\">
\t\t\t\t\t\t\tMahindra\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-11-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-11\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-11\" aria-selected=\"\">
\t\t\t\t\t\t\tLamborghini\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-12-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-12\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-12\" aria-selected=\"\">
\t\t\t\t\t\t\tMG\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-13-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-13\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-13\" aria-selected=\"\">
\t\t\t\t\t\t\tVolvo\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-14-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-14\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-14\" aria-selected=\"\">
\t\t\t\t\t\t\tMercedes Benz\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-15-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-15\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-15\" aria-selected=\"\">
\t\t\t\t\t\t\tBMW\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t<!-- Collection Nav for Big Screen -->
\t\t\t\t\t<div class=\"nav flex-column nav-pills me-4 car_buttons\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t<h4>All Manufacturers</h4>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-0-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-0\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-0\" aria-selected=\"true\">
\t\t\t\t\t\t\tKia\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-1-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"\">
\t\t\t\t\t\t\tFord\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-2-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"\">
\t\t\t\t\t\t\tRange Rover/Land Rover\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-3-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-3\" aria-selected=\"\">
\t\t\t\t\t\t\tJEEP\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-4-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-4\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-4\" aria-selected=\"\">
\t\t\t\t\t\t\tAudi\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-5-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-5\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-5\" aria-selected=\"\">
\t\t\t\t\t\t\tMini\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-6-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-6\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-6\" aria-selected=\"\">
\t\t\t\t\t\t\tLexus\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-7-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-7\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-7\" aria-selected=\"\">
\t\t\t\t\t\t\tJaguar\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-8-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-8\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-8\" aria-selected=\"\">
\t\t\t\t\t\t\tPorsche\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-9-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-9\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-9\" aria-selected=\"\">
\t\t\t\t\t\t\tToyota\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-10-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-10\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-10\" aria-selected=\"\">
\t\t\t\t\t\t\tMahindra\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-11-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-11\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-11\" aria-selected=\"\">
\t\t\t\t\t\t\tLamborghini\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-12-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-12\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-12\" aria-selected=\"\">
\t\t\t\t\t\t\tMG\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-13-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-13\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-13\" aria-selected=\"\">
\t\t\t\t\t\t\tVolvo\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-14-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-14\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-14\" aria-selected=\"\">
\t\t\t\t\t\t\tMercedes Benz\t\t\t\t\t\t</button>
\t\t\t\t\t\t   
\t\t\t\t\t\t<button class=\"nav-links\"id=\"v-pills-15-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-15\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-15\" aria-selected=\"\">
\t\t\t\t\t\t\tBMW\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-16\" role=\"tabpanel\" aria-labelledby=\"v-pills-16-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-lamborghini-huracan-lp-580/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-1.35.26-PM-3-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 Lamborghini Huracan LP 580</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">3200</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 29,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+Lamborghini+Huracan+LP+580%0A%20Price:%20₹%2029500000%0A%20Year:%202016%0A%20KMs%20Driven:%203200%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-bmw-x4-xdrive-30i-m-sport/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.21.15-PM-1-1568x1569.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 BMW X4 XDRIVE 30I  M SPORT</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">14000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 7,975,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+BMW+X4+XDRIVE+30I++M+SPORT%0A%20Price:%20₹%207975000%0A%20Year:%202022%0A%20KMs%20Driven:%2014000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-kia-carnival-limousine/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.55-PM-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 KIA CARNIVAL LIMOUSINE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">28000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,350,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+KIA+CARNIVAL+LIMOUSINE%0A%20Price:%20₹%203350000%0A%20Year:%202020%0A%20KMs%20Driven:%2028000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-mini-cooper-s-clubman/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.39-PM-1-1-1568x1567.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 MINI COOPER S CLUBMAN</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">36000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+MINI+COOPER+S+CLUBMAN%0A%20Price:%20₹%203200000%0A%20Year:%20%0A%20KMs%20Driven:%2036000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020-mercedes-benz-gle-53-amg/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.12-PM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020 Mercedes Benz GLE 53 AMG</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">25000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 13,900,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020+Mercedes+Benz+GLE+53+AMG%0A%20Price:%20₹%2013900000%0A%20Year:%20%0A%20KMs%20Driven:%2025000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2015-mercedes-benz-slk-350/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t   <!-- \t\t\t\t\t\t\t\t\t<div class=\"my-badge\">Sold</div> -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.19.44-PM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2015 MERCEDES BENZ SLK 350</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2015</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">9600</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 5,100,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9911026666\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202015+MERCEDES+BENZ+SLK+350%0A%20Price:%20₹%205100000%0A%20Year:%20%0A%20KMs%20Driven:%209600%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=BMW\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-0\" role=\"tabpanel\" aria-labelledby=\"v-pills-0-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-kia-carnival-limousine/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.55-PM-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 KIA CARNIVAL LIMOUSINE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">28000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,350,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+KIA+CARNIVAL+LIMOUSINE%0A%20Price:%20₹%203350000%0A%20Year:%202020%0A%20KMs%20Driven:%2028000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020-kia-carnival-limousine/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_347341582_237555632216448_3533321652105792580_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020 KIA CARNIVAL LIMOUSINE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">36000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,300,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020+KIA+CARNIVAL+LIMOUSINE%0A%20Price:%20₹%203300000%0A%20Year:%20%0A%20KMs%20Driven:%2036000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-kia-carnival-at-prestige/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_346455939_113306705083314_3897935112220415029_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 KIA CARNIVAL AT PRESTIGE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">30000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,250,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+KIA+CARNIVAL+AT+PRESTIGE%0A%20Price:%20₹%203250000%0A%20Year:%20%0A%20KMs%20Driven:%2030000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Kia\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-1-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-foed-endeavour-3-2-titanium/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_318973954_1352369581969070_7518848102194639553_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 FOED ENDEAVOUR 3.2 TITANIUM</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\"></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">55000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 2,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+FOED+ENDEAVOUR+3.2+TITANIUM%0A%20Price:%20₹%202700000%0A%20Year:%20%0A%20KMs%20Driven:%2055000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Ford\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-2-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/range-rover-vogue/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/range-rover2.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>RANGE ROVER VOGUE</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2018</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">52000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 14,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%20RANGE+ROVER+VOGUE%0A%20Price:%20₹%2014500000%0A%20Year:%202017%0A%20KMs%20Driven:%2052000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Range Rover/Land Rover\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-3\" role=\"tabpanel\" aria-labelledby=\"v-pills-3-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-jeep-wrangler-rubicon-2-0l/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.24.29-AM-2-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 JEEP WRANGLER RUBICON 2.0L</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">5500</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 6,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+JEEP+WRANGLER+RUBICON+2.0L%0A%20Price:%20₹%206700000%0A%20Year:%20%0A%20KMs%20Driven:%205500%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=JEEP\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-4\" role=\"tabpanel\" aria-labelledby=\"v-pills-4-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-audi-a-tfsi-premium/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.23.13-AM-1-1568x1569.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 AUDI A TFSI PREMIUM</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">5200</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+AUDI+A+TFSI+PREMIUM%0A%20Price:%20₹%204200000%0A%20Year:%202021%0A%20KMs%20Driven:%205200%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2015-a3-cabriolet-convertible/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.22.42-AM-3.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2015 A3 Cabriolet Convertible</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2015</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">57000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,650,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202015+A3+Cabriolet+Convertible%0A%20Price:%20₹%203650000%0A%20Year:%20%0A%20KMs%20Driven:%2057000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2018-audi-a5/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/WhatsApp-Image-2023-05-11-at-4.08.21-PM-3-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2018 AUDI A5</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\"></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">48000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202018+AUDI+A5%0A%20Price:%20₹%203700000%0A%20Year:%202018%0A%20KMs%20Driven:%2048000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-audi-a4-tfsi-premium-plus/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_339506928_3449310471973963_7668123725944920399_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 AUDI A4 TFSI PREMIUM PLUS</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">5200</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+AUDI+A4+TFSI+PREMIUM+PLUS%0A%20Price:%20₹%204200000%0A%20Year:%202021%0A%20KMs%20Driven:%205200%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Audi\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-5\" role=\"tabpanel\" aria-labelledby=\"v-pills-5-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-mini-cooper-s-clubman/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.39-PM-1-1-1568x1567.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 MINI COOPER S CLUBMAN</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">36000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+MINI+COOPER+S+CLUBMAN%0A%20Price:%20₹%203200000%0A%20Year:%20%0A%20KMs%20Driven:%2036000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mini\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-6\" role=\"tabpanel\" aria-labelledby=\"v-pills-6-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-lexus-rx-450-hl/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_347672868_6380453145331400_5718099624617533718_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019 LEXUS RX 450 HL</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2019</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">14000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 9,000,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019+LEXUS+RX+450+HL%0A%20Price:%20₹%209000000%0A%20Year:%20%0A%20KMs%20Driven:%2014000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Lexus\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-7\" role=\"tabpanel\" aria-labelledby=\"v-pills-7-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-2022-jaguar-f-pace/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_346120011_761019862171633_9156077042175920466_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021/2022 Jaguar F-Pace</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">27000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 720,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021%2F2022+Jaguar+F-Pace%0A%20Price:%20₹%20720000%0A%20Year:%202021%0A%20KMs%20Driven:%2027000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Jaguar\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-8\" role=\"tabpanel\" aria-labelledby=\"v-pills-8-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Porsche\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-9\" role=\"tabpanel\" aria-labelledby=\"v-pills-9-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020fortuner-a-t-42/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_346920778_169777022706381_2824790568973049336_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020FORTUNER A/T 4*2</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">55000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,600,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020FORTUNER+A%2FT+4%2A2%0A%20Price:%20₹%203600000%0A%20Year:%202020%0A%20KMs%20Driven:%2055000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-fortuner-2-8-4x2-at/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_347078360_959644905237409_5725810025204562196_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019 FORTUNER 2.8 4X2 AT</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2019</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">72000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 32,000,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019+FORTUNER+2.8+4X2+AT%0A%20Price:%20₹%2032000000%0A%20Year:%202019%0A%20KMs%20Driven:%2072000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Toyota\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-10\" role=\"tabpanel\" aria-labelledby=\"v-pills-10-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mahindra\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-11\" role=\"tabpanel\" aria-labelledby=\"v-pills-11-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-lamborghini-huracan-lp-580/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-1.35.26-PM-3-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 Lamborghini Huracan LP 580</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">3200</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 29,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+Lamborghini+Huracan+LP+580%0A%20Price:%20₹%2029500000%0A%20Year:%202016%0A%20KMs%20Driven:%203200%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-lamborghini-urus-capsule-edition/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_346073571_2223692111165737_3631832249003264828_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 LAMBORGHINI URUS CAPSULE EDITION</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">11000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 47,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+LAMBORGHINI+URUS+CAPSULE+EDITION%0A%20Price:%20₹%2047500000%0A%20Year:%202021%0A%20KMs%20Driven:%2011000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Lamborghini\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-12\" role=\"tabpanel\" aria-labelledby=\"v-pills-12-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=MG\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-13\" role=\"tabpanel\" aria-labelledby=\"v-pills-13-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/volvo/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/unnamed.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>VOLVO</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2017</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">105000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 3,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%20VOLVO%0A%20Price:%20₹%203700000%0A%20Year:%20%0A%20KMs%20Driven:%20105000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Volvo\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-14\" role=\"tabpanel\" aria-labelledby=\"v-pills-14-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020-mercedes-benz-gle-53-amg/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.20.12-PM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020 Mercedes Benz GLE 53 AMG</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">25000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 13,900,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020+Mercedes+Benz+GLE+53+AMG%0A%20Price:%20₹%2013900000%0A%20Year:%20%0A%20KMs%20Driven:%2025000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2015-mercedes-benz-slk-350/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.19.44-PM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2015 MERCEDES BENZ SLK 350</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2015</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">9600</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 5,100,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202015+MERCEDES+BENZ+SLK+350%0A%20Price:%20₹%205100000%0A%20Year:%20%0A%20KMs%20Driven:%209600%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-mercedes-benz-glc-220d/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.26.03-AM-1-1568x1562.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 MERCEDES BENZ GLC 220D</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">20000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 6,700,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+MERCEDES+BENZ+GLC+220D%0A%20Price:%20₹%206700000%0A%20Year:%20%0A%20KMs%20Driven:%2020000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-mercedes-cla-200/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.25.35-AM-1568x1569.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019 MERCEDES CLA 200</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2019</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">43000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 2,950,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019+MERCEDES+CLA+200%0A%20Price:%20₹%202950000%0A%20Year:%20%0A%20KMs%20Driven:%2043000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-20-mercedes-benz-c220-d/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.24.54-AM-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019/20 MERCEDES BENZ C220 D</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">100000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019%2F20+MERCEDES+BENZ+C220+D%0A%20Price:%20₹%204200000%0A%20Year:%202019%0A%20KMs%20Driven:%20100000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2017-mercedes-benz-e22od-class/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_332362509_109395228749065_8012967361856335310_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2017 Mercedes Benz E22OD Class</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\"></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">43000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,200,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202017+Mercedes+Benz+E22OD+Class%0A%20Price:%20₹%204200000%0A%20Year:%20%0A%20KMs%20Driven:%2043000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mercedes Benz\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-15\" role=\"tabpanel\" aria-labelledby=\"v-pills-15-tab\">
\t\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2022-bmw-x4-xdrive-30i-m-sport/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.21.15-PM-1-1568x1569.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2022 BMW X4 XDRIVE 30I  M SPORT</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">14000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 7,975,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202022+BMW+X4+XDRIVE+30I++M+SPORT%0A%20Price:%20₹%207975000%0A%20Year:%202022%0A%20KMs%20Driven:%2014000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-bmw-x5-x-drive-40i-m-sports/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-20-at-12.18.43-PM-1-1568x1568.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 BMW X5 X DRIVE 40i M Sports</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2021</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">20000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 8,950,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+BMW+X5+X+DRIVE+40i+M+Sports%0A%20Price:%20₹%208950000%0A%20Year:%202020%0A%20KMs%20Driven:%2020000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2021-bmw-330-li/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/WhatsApp-Image-2023-06-14-at-11.23.53-AM.jpeg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2021 BMW 330 LI</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2022</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">11000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 5,800,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202021+BMW+330+LI%0A%20Price:%20₹%205800000%0A%20Year:%202022%0A%20KMs%20Driven:%2011000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2010-bmw-650i-convertable/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_198314845_289561962855993_7036146490470055916_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2010 BMW 650i Convertable</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\"></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Petrol</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">26500</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 2,900,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202010+BMW+650i+Convertable%0A%20Price:%20₹%202900000%0A%20Year:%20%0A%20KMs%20Driven:%2026500%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2020-bmw-x5-x-drive-30d-x-line/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_295877850_437179031468625_96183275205839934_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2020 BMW X5 X Drive 30D X Line</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2020</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">25000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 8,500,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202020+BMW+X5+X+Drive+30D+X+Line%0A%20Price:%20₹%208500000%0A%20Year:%202019%0A%20KMs%20Driven:%2025000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 product\">
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/cars/2019-bmw-5-series-520-d/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"car_box\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_image\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Snapinsta.app_300993824_1453309721760635_4776978256818366782_n_1080.jpg\" alt=\"\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_heading text-center\"><h5>2019 BMW 5 SERIES 520 D</h5\t></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car_info mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Registered</h6><span class=\"asert\">2019</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Fuel</h6><span class=\"asert\">Diesel</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><h6>Kms</h6><span class=\"asert\">30000</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"car-price text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fusion_btn text-white\">₹ 4,450,000.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_contact_buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"cp_button\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/call.png\" alt=\"\"> Call Now</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://api.whatsapp.com/send?phone=+91%209811213441&text=Hi!%20I%20want%20to%20buy%20the%20car%20%0A*Car%20Details*%0A%0A%20Title:%202019+BMW+5+SERIES+520+D%0A%20Price:%20₹%204450000%0A%20Year:%202018%0A%20KMs%20Driven:%2030000%0A%0ALet's%20discuss%20further.%20Thanks!\" class=\"cp_button\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/Whatsapp.png\" alt=\"\"> Whatsapp
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat_view_more\">
\t\t\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=BMW\" class=\"fusion_btn\">View More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"explore bg_black p_100\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h2>Explore Luxury Cars <em>by Brand</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Kia\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002931.png\" alt=\"\">
\t\t\t\t\t\t<h5>Kia</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Ford\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002916.png\" alt=\"\">
\t\t\t\t\t\t<h5>Ford</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Range Rover/Land Rover\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002919.png\" alt=\"\">
\t\t\t\t\t\t<h5>Range Rover/Land Rover</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=JEEP\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002930.png\" alt=\"\">
\t\t\t\t\t\t<h5>JEEP</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Audi\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002914.png\" alt=\"\">
\t\t\t\t\t\t<h5>Audi</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mini\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002927.png\" alt=\"\">
\t\t\t\t\t\t<h5>Mini</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Lexus\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002925.png\" alt=\"\">
\t\t\t\t\t\t<h5>Lexus</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Jaguar\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002929.png\" alt=\"\">
\t\t\t\t\t\t<h5>Jaguar</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Porsche\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002920.png\" alt=\"\">
\t\t\t\t\t\t<h5>Porsche</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Toyota\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002915.png\" alt=\"\">
\t\t\t\t\t\t<h5>Toyota</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mahindra\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002928.png\" alt=\"\">
\t\t\t\t\t\t<h5>Mahindra</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Lamborghini\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002923.png\" alt=\"\">
\t\t\t\t\t\t<h5>Lamborghini</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=MG\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002924.png\" alt=\"\">
\t\t\t\t\t\t<h5>MG</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Volvo\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002921.png\" alt=\"\">
\t\t\t\t\t\t<h5>Volvo</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Mercedes Benz\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002922.png\" alt=\"\">
\t\t\t\t\t\t<h5>Mercedes Benz</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=BMW\".brand=Audi>
\t\t\t\t\t<div class=\"brand_logo\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/06/Group-1000002917.png\" alt=\"\">
\t\t\t\t\t\t<h5>BMW</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t\t\t</div>
\t</div>
</section>
<section class=\"testi p_100 bg_theme \">
\t<div class=\"container\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h2>What Clients Say <em>About Us</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-8 offset-2 \">
\t\t\t\t<div class=\"testi_lg owl-carousel\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>They are just amazing they know how to deliver happiness trust worthyI bought mercedes s class from them completely hassle free transfer and reliable productKeep growing like this malik brothers..</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Mridul Sahi</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>Literally !very good experience to buy a Utensils and jewellery and the product is  branded /Excellent quality. All in all must recommend to buy some products.👍</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Ravi</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>They are just amazing they know how to deliver happiness trust worthy I bought mercedes s class from them completely hassle free transfer and reliable product Keep growing like this malik brothers</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Mridul Sahi</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>Good collection, less driven cars on best price deals available Highly recommended place for luxury cars purchase</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Sumit Sharma</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>Fusion cars one of the best and trusted  place in delhi  to buy and sell your car Excellent treatment transparency  i strongly recommend.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Vaishnavi Kashyap</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>EXCELLENT SERVICE AND QUICK PROCESS WILL SURELY SUGGEST EVERYONE TO GO AND BUY FROM HERE ONLY #fusion cars</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Ibha Sharma</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"testi_box\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"testi-box\">
\t\t\t\t\t\t\t\t\t<div class=\"test_rating\">
\t\t\t\t\t\t\t\t\t\t<img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/stars.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"testi_para\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_before\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_before.png\" alt=\"\"  style=\"float: left;\"></div>
\t\t\t\t\t\t\t\t\t\t<p>Awesome collection.।। Have an audi Q5 from here... Highly Recommended ✌😊</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"testi_quotes_after\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/quotes_after.png\" alt=\"\" style=\"float: right;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tester_name\">
\t\t\t\t\t\t\t\t\t\t<h4>Diksha Thakur</h4>
\t\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t\t\t\t\t\t<h5>South Delhi</h5> -->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
</section>
<section class=\"news p_100 bg_black\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h4>News/Blogs</h4>
<h2>Our Latest <em>Updates</em></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/04/news3.png\" alt=\"\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span class=\"news_date\">
\t\t\t\t\t\t\tJul 4, 2022\t\t\t\t\t\t</span>
\t\t\t\t\t\t<p>The Story Of Fusion Cars And Its Founders, Malik Brothers (drivespark)</p>
\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/news/the-story-of-fusion-cars-and-its-founders-malik-brothers-drivespark/\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/04/news3.png\" alt=\"\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span class=\"news_date\">
\t\t\t\t\t\t\tApr 22, 2022\t\t\t\t\t\t</span>
\t\t\t\t\t\t<p>Story Of Malik Brothers And How They Shaped One Of India’s Leading Pre-Owned Car Dealerships (Outlook)</p>
\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/news/story-of-malik-brothers-and-how-they-shaped-one-of-indias-leading-pre-owned-car-dealerships-outlook/\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/04/news3.png\" alt=\"\" width=\"100%\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span class=\"news_date\">
\t\t\t\t\t\t\tApr 22, 2022\t\t\t\t\t\t</span>
\t\t\t\t\t\t<p>The Real Story of Malik Brothers and how they shaped one of India’s leading pre-owned car Dealerships, Fusion Cars (apnlive)</p>
\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars/news/the-real-story-of-malik-brothers-and-how-they-shaped-one-of-indias-leading-pre-owned-car-dealerships-fusion-cars-apnlive/\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t</div>
\t</div>
</section>
<section class=\"youtube p_100 bg_theme\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h2>Subscribe to our  <span>YouTube Channel</span></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"youtube_slider\">
\t\t\t\t\t<div class=\"slider slider-single\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"awards_single_item\">
\t\t\t\t\t\t\t<div class=\"video_box\">
\t\t\t\t\t\t\t\t<a href=\"https://youtu.be/9vIRmg2uAMs\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"550\" src=\"https://youtube.com/embed/9vIRmg2uAMs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"awards_single_item\">
\t\t\t\t\t\t\t<div class=\"video_box\">
\t\t\t\t\t\t\t\t<a href=\"https://youtu.be/OfMDxAj0_8k\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"550\" src=\"https://youtube.com/embed/OfMDxAj0_8k\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"awards_single_item\">
\t\t\t\t\t\t\t<div class=\"video_box\">
\t\t\t\t\t\t\t\t<a href=\"https://youtu.be/v4uqtWCy2Uc\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"550\" src=\"https://youtube.com/embed/v4uqtWCy2Uc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"awards_single_item\">
\t\t\t\t\t\t\t<div class=\"video_box\">
\t\t\t\t\t\t\t\t<a href=\"https://youtu.be/PJw7w_uRwGQ\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<iframe width=\"100%\" height=\"550\" src=\"https://youtube.com/embed/PJw7w_uRwGQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"slider slider-nav\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"youtube_item\">
\t\t\t\t\t\t\t<img src=\"https://img.youtube.com/vi/9vIRmg2uAMs/default.jpg\" alt=\"Thumbnail of the video\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"youtube_item\">
\t\t\t\t\t\t\t<img src=\"https://img.youtube.com/vi/OfMDxAj0_8k/default.jpg\" alt=\"Thumbnail of the video\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"youtube_item\">
\t\t\t\t\t\t\t<img src=\"https://img.youtube.com/vi/v4uqtWCy2Uc/default.jpg\" alt=\"Thumbnail of the video\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"youtube_item\">
\t\t\t\t\t\t\t<img src=\"https://img.youtube.com/vi/PJw7w_uRwGQ/default.jpg\" alt=\"Thumbnail of the video\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>



<section class=\"seen_sec p_100\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center mb-3\">
\t\t\t\t<div class=\"fusion_head\">
\t\t\t\t\t<h2>As Seen On</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"platforms\">
\t\t\t\t<div class=\"ptl_lg owl-carousel\"> 
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/Outlook-1.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/apn.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/one-india.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/drive-spark.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pt_box\">
\t\t\t\t\t\t\t<img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/the-tribune.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{% include directory ~ '/templates/footer.html.twig' %}", "themes/custom/breeze/Templates/page--front.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\breeze\\Templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 44);
        static $filters = array("escape" => 245);
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
