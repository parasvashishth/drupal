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

/* themes/custom/paras/templates/page--front.html.twig */
class __TwigTemplate_c507c965c0a1717ad909a662dd4089ecf34390380f59873bcfe783d7347be365 extends \Twig\Template
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
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/custom/paras/templates/page--front.html.twig", 44)->display($context);
        // line 45
        echo "
<div class=\"banner_sec\" style=\"background-image: url('https://imperialauto.in/wp-content/themes/imperial-auto/assets/images/main-hero-img.jpg');\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"banner_content\">
\t\t\t\t\t<div class=\"banner_left\">
\t\t\t\t\t\t<h1>Fluid Transmission Solutions</h1>
<p>All spectrums that include flexible high-pressure assemblies, metal tubular assemblies, low-pressure hose assemblies and EV thermal management circuits.</p>
\t\t\t\t\t\t<div class=\"bannerBtn\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/about-us/\" class=\"btn_imperial\">Know More</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn_imperial wtBtn banner_right\"><i class=\"fas fa-video\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<video autoplay=\"\" muted=\"\" loop=\"\" class=\"small_video\">
\t\t<source src=\"https://imperialauto.in/wp-content/uploads/2023/01/imperial-video-1.mp4\" type=\"video/mp4\">
\t\t<source src=\"https://imperialauto.in/wp-content/uploads/2023/01/imperial-video-1.mp4\" type=\"video/ogg\">
\t</video>
\t
\t<video autoplay=\"\" muted=\"\" loop=\"\" class=\"banner_video\">
\t\t<source src=\"https://imperialauto.in/wp-content/uploads/2022/11/video.mp4\" type=\"video/mp4\">
\t\t<source src=\"https://imperialauto.in/wp-content/uploads/2022/11/video.mp4\" type=\"video/ogg\">
\t</video>
\t
</div>

<!-- <section class=\"highway\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-4 col-4\">
\t\t\t\t<div class=\"onhighway line\">
\t\t\t\t\t<h2><a href=\"\"></a></h2>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-4 col-4\">
\t\t\t\t<div class=\"onhighway line\">
\t\t\t\t\t<h2><a href=\"/product_range/new-energy-vehicles/\">NEW ENERGY VEHICLES</a></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-4\">
\t\t\t\t<div class=\"onhighway line2\">
\t\t\t\t\t<h2><a href=\"\"></a></h2>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section> -->

<section class=\"aboutUs\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsLeft\">
\t\t\t\t\t<h6>About us</h6>
\t\t\t\t\t<h3>Imperial Auto Industries</h3>
\t\t\t\t\t<p>As India's largest integrated assembler and manufacturer of fluid transmission solutions, our expertise and dedication to quality are unmatched. Whether you require custom-made or ready-made solutions for your vehicle transmission problems, we have you covered.</p>
\t\t\t\t\t
\t\t\t\t\t<p>With a proven track record of delivering over 14,000 special solutions to clients across diverse sectors, we're a trusted partner for solving all types of fluid transmission challenges. Learn more about our company and discover how we can help you succeed.</p>
\t\t\t\t\t<a href=\"https://imperialauto.in/about-us/\" class=\"btnImperial blueImp\">Know more</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsRight\">
\t\t\t\t\t<div class=\"aboutRightBox\">
\t\t\t\t\t\t<div class=\"aboutRightFlexBox\">
\t\t\t\t\t\t\t<div class=\"aboutRightBoxImg\">
\t\t\t\t\t\t\t\t<a href=\"https://imperialauto.in/product_range/on-highway/\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/04/hv.png\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
       <div class=\"aboutRightBoxHead\">
\t\t\t\t\t\t\t\t<h5><a href=\"https://imperialauto.in/product_range/on-highway/\">On-Highway</a></h5>
<p>Touching almost every automotive life on the Indian roads as we know it and expanding our roots across a rapidly growing automobile landscape.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t<div class=\"aboutRightBox\">
\t\t\t\t\t\t<div class=\"aboutRightFlexBox\">
\t\t\t\t\t\t\t<div class=\"aboutRightBoxImg\">
\t\t\t\t\t\t\t\t<a href=\"https://imperialauto.in/product_range/off-highway/\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/04/off-highway.png\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
       <div class=\"aboutRightBoxHead\">
\t\t\t\t\t\t\t\t<h5><a href=\"https://imperialauto.in/product_range/off-highway/\">Off-Highway</a></h5>
<p>Advancing fluid transmission technology in agriculture, construction, railways, and military sectors while building strong government associations.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div><div class=\"aboutRightBox\">
\t\t\t\t\t\t<div class=\"aboutRightFlexBox\">
\t\t\t\t\t\t\t<div class=\"aboutRightBoxImg\">
\t\t\t\t\t\t\t\t<a href=\"https://imperialauto.in/product_range/new-energy-vehicles/\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/04/new-energy-vehicle.png\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
       <div class=\"aboutRightBoxHead\">
\t\t\t\t\t\t\t\t<h5><a href=\"https://imperialauto.in/product_range/new-energy-vehicles/\">New Energy Vehicles</a></h5>
<p>Contributing to the ever evolving automotive industry through advance products that help improve fuel efficiency and lower fuel emission in Hybrid and Battery Electric Vehicles.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>

<section class=\"opportunity\">
\t<div class=\"container\">
\t\t<div class=\"row\">
<!-- \t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"opportunity_left\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t</div> -->
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"opportunity_right\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"53\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Years Of History</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"25\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Plants In India And Worldwide</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"150\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Million Assemblies Per Year</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"17\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Product Lines</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"125\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>OEM Customers</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"7000\">0</div><span>+</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Dedicated Employees</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"trusted_brands\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"leading_heading\">
\t\t\t\t\t<h6>TRUSTED BY LEADING BRANDS</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"brands_owl owl-carousel\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-6.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-1.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-7.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-3.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-8.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-2.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-5.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-4.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-9.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/renault-nissan-alliance.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/audi-1.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/AVL.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/simpson.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Skoda.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/SML-isuZU.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/steelantis.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Swaraj.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/PSA.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/renault.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/UFI.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/vinfast.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Volkswagen.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Volvo.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/yamaha.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/afe.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/AVL-1.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Avtovaz.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/eicher.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/fiat.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/ford.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/hitachi.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/HWASEUNG.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/honda.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Komatsu.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Kobelco.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/john-dheere.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Eberspacher.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/ISUZI.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/maruti-suzuki.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Mahle.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/mahindra.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/kuboto.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/nissan.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/new-holland.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/navistar.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/mercedes-benz-.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/maserati.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/bombardier.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/bobcat.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Porsche.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/PACCAR.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Cummins.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Claas.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/chrysler.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/BorgWarner.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Daimler.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/DAF.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/toyato.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/tata-motors.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/AMG.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-11.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"news_media\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"newsCont\">
\t\t\t\t\t<div class=\"newsContInner\">
\t\t\t\t\t\t<h6>News and Media</h6>
\t\t\t\t\t\t<h3>Latest News</h3>
\t\t\t\t\t\t<p>Get information</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"newsBtn\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/\" class=\"btnImperial blueImp\">View all posts</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_img\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/warburg-pincus-buys-out-imperial-auto/\">
\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/auto_img.webp\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/warburg-pincus-buys-out-imperial-auto/\"><h4>Warburg Pincus to invest in imperial auto, India&#8217;s largest manufacturer of fluid transmission products</h4></a>
\t\t\t\t\t\t<p>Stone Plant Investments B.V., an affiliate of&nbsp;Warburg Pincus, a leading global private...</p>
<!-- \t\t\t\t\t\t<a href=\"\">Read More <img src=\"/assets/images/arrow-right.png\" alt=\"\"></a> -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_img\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/stone-plant-investments-b-v-an-affiliate-of-warburg-pincus-us-based-private-equity-firm-has-acquired-a-majority-stake-in-imperial-auto-industries-limited-and-its-affiliated-companies-imperial-s/\">
\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/03/stone-plant-1-1568x1045.jpeg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/stone-plant-investments-b-v-an-affiliate-of-warburg-pincus-us-based-private-equity-firm-has-acquired-a-majority-stake-in-imperial-auto-industries-limited-and-its-affiliated-companies-imperial-s/\"><h4>Stone Plant Investments B.V., an affiliate of Warburg Pincus, US based private equity firm, has acquired a majority stake in Imperial Auto Industries Limited and its affiliated companies (Imperial), said a company statement.</h4></a>
\t\t\t\t\t\t<p>Mumbai: US-based private equity (PE) major Warburg Pincus has acquired a majority...</p>
<!-- \t\t\t\t\t\t<a href=\"\">Read More <img src=\"/assets/images/arrow-right.png\" alt=\"\"></a> -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_img\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/imperial-auto-industries-acquires-sbr-expands-german-footprint/\">
\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/77604644.jpg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/imperial-auto-industries-acquires-sbr-expands-german-footprint/\"><h4>Imperial Auto Industries acquires SBR, expands German footprint</h4></a>
\t\t\t\t\t\t<p>Imperial Auto Industries Limited, one of the oldest auto parts makers in...</p>
<!-- \t\t\t\t\t\t<a href=\"\">Read More <img src=\"/assets/images/arrow-right.png\" alt=\"\"></a> -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t</div>
\t</div>
</section>
<!-- 
<section class=\"build_together\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"build_head\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn_imperial\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-md-6\"> 
\t\t\t\t<div class=\"build_head_img\">
\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</section> -->

<section class=\"ourTeam\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsLeft\">
\t\t\t\t\t<h6>Join our team</h6>
\t\t\t\t\t<h3>Let’s build something great together.</h3>
\t\t\t\t\t<p>Our philosophy is simple — hire a team of diverse, passionate people and foster a culture that empowers you to do your best work.</p>
\t\t\t\t\t<a href=\"https://imperialauto.in/mission-and-vision/?id=core-values\" class=\"btnGrey me-2 mb-3\">Read our principles</a>
\t\t\t\t\t<a href=\"https://imperialauto.in/careers/\" class=\"btnImperial blueImp\">We’re hiring!</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"careerRight\">
\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/04/team.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
";
        // line 667
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/custom/paras/templates/page--front.html.twig", 667)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/paras/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 667,  45 => 45,  43 => 44,  39 => 42,);
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
  

  {% include directory ~ '/templates/includes/header.html.twig' %}

<div class=\"banner_sec\" style=\"background-image: url('https://imperialauto.in/wp-content/themes/imperial-auto/assets/images/main-hero-img.jpg');\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"banner_content\">
\t\t\t\t\t<div class=\"banner_left\">
\t\t\t\t\t\t<h1>Fluid Transmission Solutions</h1>
<p>All spectrums that include flexible high-pressure assemblies, metal tubular assemblies, low-pressure hose assemblies and EV thermal management circuits.</p>
\t\t\t\t\t\t<div class=\"bannerBtn\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/about-us/\" class=\"btn_imperial\">Know More</a>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn_imperial wtBtn banner_right\"><i class=\"fas fa-video\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<video autoplay=\"\" muted=\"\" loop=\"\" class=\"small_video\">
\t\t<source src=\"https://imperialauto.in/wp-content/uploads/2023/01/imperial-video-1.mp4\" type=\"video/mp4\">
\t\t<source src=\"https://imperialauto.in/wp-content/uploads/2023/01/imperial-video-1.mp4\" type=\"video/ogg\">
\t</video>
\t
\t<video autoplay=\"\" muted=\"\" loop=\"\" class=\"banner_video\">
\t\t<source src=\"https://imperialauto.in/wp-content/uploads/2022/11/video.mp4\" type=\"video/mp4\">
\t\t<source src=\"https://imperialauto.in/wp-content/uploads/2022/11/video.mp4\" type=\"video/ogg\">
\t</video>
\t
</div>

<!-- <section class=\"highway\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-4 col-4\">
\t\t\t\t<div class=\"onhighway line\">
\t\t\t\t\t<h2><a href=\"\"></a></h2>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-4 col-4\">
\t\t\t\t<div class=\"onhighway line\">
\t\t\t\t\t<h2><a href=\"/product_range/new-energy-vehicles/\">NEW ENERGY VEHICLES</a></h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-4\">
\t\t\t\t<div class=\"onhighway line2\">
\t\t\t\t\t<h2><a href=\"\"></a></h2>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section> -->

<section class=\"aboutUs\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsLeft\">
\t\t\t\t\t<h6>About us</h6>
\t\t\t\t\t<h3>Imperial Auto Industries</h3>
\t\t\t\t\t<p>As India's largest integrated assembler and manufacturer of fluid transmission solutions, our expertise and dedication to quality are unmatched. Whether you require custom-made or ready-made solutions for your vehicle transmission problems, we have you covered.</p>
\t\t\t\t\t
\t\t\t\t\t<p>With a proven track record of delivering over 14,000 special solutions to clients across diverse sectors, we're a trusted partner for solving all types of fluid transmission challenges. Learn more about our company and discover how we can help you succeed.</p>
\t\t\t\t\t<a href=\"https://imperialauto.in/about-us/\" class=\"btnImperial blueImp\">Know more</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsRight\">
\t\t\t\t\t<div class=\"aboutRightBox\">
\t\t\t\t\t\t<div class=\"aboutRightFlexBox\">
\t\t\t\t\t\t\t<div class=\"aboutRightBoxImg\">
\t\t\t\t\t\t\t\t<a href=\"https://imperialauto.in/product_range/on-highway/\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/04/hv.png\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
       <div class=\"aboutRightBoxHead\">
\t\t\t\t\t\t\t\t<h5><a href=\"https://imperialauto.in/product_range/on-highway/\">On-Highway</a></h5>
<p>Touching almost every automotive life on the Indian roads as we know it and expanding our roots across a rapidly growing automobile landscape.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t<div class=\"aboutRightBox\">
\t\t\t\t\t\t<div class=\"aboutRightFlexBox\">
\t\t\t\t\t\t\t<div class=\"aboutRightBoxImg\">
\t\t\t\t\t\t\t\t<a href=\"https://imperialauto.in/product_range/off-highway/\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/04/off-highway.png\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
       <div class=\"aboutRightBoxHead\">
\t\t\t\t\t\t\t\t<h5><a href=\"https://imperialauto.in/product_range/off-highway/\">Off-Highway</a></h5>
<p>Advancing fluid transmission technology in agriculture, construction, railways, and military sectors while building strong government associations.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div><div class=\"aboutRightBox\">
\t\t\t\t\t\t<div class=\"aboutRightFlexBox\">
\t\t\t\t\t\t\t<div class=\"aboutRightBoxImg\">
\t\t\t\t\t\t\t\t<a href=\"https://imperialauto.in/product_range/new-energy-vehicles/\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/04/new-energy-vehicle.png\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
       <div class=\"aboutRightBoxHead\">
\t\t\t\t\t\t\t\t<h5><a href=\"https://imperialauto.in/product_range/new-energy-vehicles/\">New Energy Vehicles</a></h5>
<p>Contributing to the ever evolving automotive industry through advance products that help improve fuel efficiency and lower fuel emission in Hybrid and Battery Electric Vehicles.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>

<section class=\"opportunity\">
\t<div class=\"container\">
\t\t<div class=\"row\">
<!-- \t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"opportunity_left\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t</div> -->
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"opportunity_right\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"53\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Years Of History</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"25\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Plants In India And Worldwide</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"150\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Million Assemblies Per Year</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"17\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Product Lines</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"125\">0</div><span></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>OEM Customers</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 col-6\">
\t\t\t\t\t\t\t<div class=\"counter-numbers\">
\t\t\t\t\t\t\t\t<div class=\"counters\">
\t\t\t\t\t\t\t\t\t<div class=\"counting\" data-count=\"7000\">0</div><span>+</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Dedicated Employees</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"trusted_brands\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"leading_heading\">
\t\t\t\t\t<h6>TRUSTED BY LEADING BRANDS</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"brands_owl owl-carousel\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-6.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-1.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-7.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-3.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-8.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-2.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-5.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-4.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-9.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/renault-nissan-alliance.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/audi-1.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/AVL.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/simpson.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Skoda.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/SML-isuZU.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/steelantis.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Swaraj.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/PSA.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/renault.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/UFI.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/vinfast.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Volkswagen.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Volvo.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/yamaha.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/afe.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/AVL-1.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Avtovaz.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/eicher.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/fiat.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/ford.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/hitachi.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/HWASEUNG.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/honda.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Komatsu.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Kobelco.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/john-dheere.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Eberspacher.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/ISUZI.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/maruti-suzuki.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Mahle.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/mahindra.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/kuboto.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/nissan.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/new-holland.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/navistar.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/mercedes-benz-.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/maserati.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/bombardier.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/bobcat.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Porsche.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/PACCAR.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Cummins.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Claas.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/chrysler.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/BorgWarner.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/Daimler.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/DAF.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/toyato.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/tata-motors.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"brands_box\">
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/AMG.png\" alt=\"\">
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"brands_box_img\">
\t\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/10/Frame-11.png\" alt=\"\">
\t\t\t\t\t\t\t</div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"news_media\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"newsCont\">
\t\t\t\t\t<div class=\"newsContInner\">
\t\t\t\t\t\t<h6>News and Media</h6>
\t\t\t\t\t\t<h3>Latest News</h3>
\t\t\t\t\t\t<p>Get information</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"newsBtn\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/\" class=\"btnImperial blueImp\">View all posts</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_img\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/warburg-pincus-buys-out-imperial-auto/\">
\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/auto_img.webp\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/warburg-pincus-buys-out-imperial-auto/\"><h4>Warburg Pincus to invest in imperial auto, India&#8217;s largest manufacturer of fluid transmission products</h4></a>
\t\t\t\t\t\t<p>Stone Plant Investments B.V., an affiliate of&nbsp;Warburg Pincus, a leading global private...</p>
<!-- \t\t\t\t\t\t<a href=\"\">Read More <img src=\"/assets/images/arrow-right.png\" alt=\"\"></a> -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_img\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/stone-plant-investments-b-v-an-affiliate-of-warburg-pincus-us-based-private-equity-firm-has-acquired-a-majority-stake-in-imperial-auto-industries-limited-and-its-affiliated-companies-imperial-s/\">
\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/03/stone-plant-1-1568x1045.jpeg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/stone-plant-investments-b-v-an-affiliate-of-warburg-pincus-us-based-private-equity-firm-has-acquired-a-majority-stake-in-imperial-auto-industries-limited-and-its-affiliated-companies-imperial-s/\"><h4>Stone Plant Investments B.V., an affiliate of Warburg Pincus, US based private equity firm, has acquired a majority stake in Imperial Auto Industries Limited and its affiliated companies (Imperial), said a company statement.</h4></a>
\t\t\t\t\t\t<p>Mumbai: US-based private equity (PE) major Warburg Pincus has acquired a majority...</p>
<!-- \t\t\t\t\t\t<a href=\"\">Read More <img src=\"/assets/images/arrow-right.png\" alt=\"\"></a> -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"news_box\">
\t\t\t\t\t<div class=\"news_img\">
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/imperial-auto-industries-acquires-sbr-expands-german-footprint/\">
\t\t\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2022/11/77604644.jpg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_content\">
\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t<a href=\"https://imperialauto.in/news/imperial-auto-industries-acquires-sbr-expands-german-footprint/\"><h4>Imperial Auto Industries acquires SBR, expands German footprint</h4></a>
\t\t\t\t\t\t<p>Imperial Auto Industries Limited, one of the oldest auto parts makers in...</p>
<!-- \t\t\t\t\t\t<a href=\"\">Read More <img src=\"/assets/images/arrow-right.png\" alt=\"\"></a> -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t</div>
\t</div>
</section>
<!-- 
<section class=\"build_together\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"build_head\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn_imperial\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-md-6\"> 
\t\t\t\t<div class=\"build_head_img\">
\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</section> -->

<section class=\"ourTeam\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"aboutUsLeft\">
\t\t\t\t\t<h6>Join our team</h6>
\t\t\t\t\t<h3>Let’s build something great together.</h3>
\t\t\t\t\t<p>Our philosophy is simple — hire a team of diverse, passionate people and foster a culture that empowers you to do your best work.</p>
\t\t\t\t\t<a href=\"https://imperialauto.in/mission-and-vision/?id=core-values\" class=\"btnGrey me-2 mb-3\">Read our principles</a>
\t\t\t\t\t<a href=\"https://imperialauto.in/careers/\" class=\"btnImperial blueImp\">We’re hiring!</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"careerRight\">
\t\t\t\t\t<img src=\"https://imperialauto.in/wp-content/uploads/2023/04/team.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
{% include directory ~ '/templates/includes/footer.html.twig' %}", "themes/custom/paras/templates/page--front.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\paras\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 44);
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
