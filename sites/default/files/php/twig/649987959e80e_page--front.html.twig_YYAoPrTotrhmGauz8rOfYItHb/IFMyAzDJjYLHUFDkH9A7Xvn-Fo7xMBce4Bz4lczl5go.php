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

/* themes/custom/sumit/templates/page--front.html.twig */
class __TwigTemplate_b7f30ef6c36c5e901c865fe7edc59f1ccd1ff68ec1f7655c75d7d0e6dd43d5d1 extends \Twig\Template
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
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/header.html.twig"), "themes/custom/sumit/templates/page--front.html.twig", 42)->display($context);
        // line 43
        echo "
<section class=\"hero_aera\">
    <div class=\"container-fluid\">
        <div class=\"slider-for\">
\t\t\t\t\t\t
            <div>
                <div class=\"slider_image\">
\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/banner.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
\t\t\t\t\t\t\t<h2>A journey of culinary<br />
delights with us</h2>
                            <a href=\"https://gillzsweetfactory.com/menu\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t\t\t\t
            <div>
                <div class=\"slider_image\">
\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-page-banner-2.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
\t\t\t\t\t\t\t<h2>A journey of culinary<br />
delights with us</h2>
                            <a href=\"https://gillzsweetfactory.com/menu\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t\t\t\t
            <div>
                <div class=\"slider_image\">
\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/banner3.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
\t\t\t\t\t\t\t<h2>A journey of culinary<br />
delights with us</h2>
                            <a href=\"https://gillzsweetfactory.com/menu\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t\t\t\t
<!-- \t\t\t<div>
\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t<img src=\"/assets/images/banner.webp\" alt=\"banner\"> 
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"slider_content\">
\t\t\t\t\t\t\t<h2>A journey of culinary <br> delights with us</h2>
\t\t\t\t\t\t\t<a href=\"#.\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <div>
                <div class=\"slider_image\">
                    <img src=\"/assets/images/banner2.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
                            <h2>A journey of culinary <br> delights with us</h2>
                            <a href=\"#.\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class=\"slider_image\">
                    <img src=\"/assets/images/banner3.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
                            <h2>A journey of culinary <br> delights with us</h2>
                            <a href=\"#.\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>  -->
        </div>
        <div class=\"container\">
            <div class=\"slider-nav\">
\t\t\t\t
\t\t\t\t<div>
\t\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/banner.webp\" alt=\"banner\">
\t\t\t\t\t\t<span class=\"border_btom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div>
\t\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-page-banner-2.webp\" alt=\"banner\">
\t\t\t\t\t\t<span class=\"border_btom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div>
\t\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/banner3.webp\" alt=\"banner\">
\t\t\t\t\t\t<span class=\"border_btom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t\t
<!-- \t\t\t\t<div>
\t\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t\t<img src=\"/assets/images/banner.webp\" alt=\"banner\">
\t\t\t\t\t\t<span class=\"border_btom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div>
                    <div class=\"slider_image\">
                        <img src=\"/assets/images/banner2.webp\" alt=\"banner\">
\t\t\t\t\t\t\t<span class=\"border_btom\"></span>
                    </div>
                </div>
                <div>
                    <div class=\"slider_image\">
                        <img src=\"/assets/images/banner3.webp\" alt=\"banner\">
\t\t\t\t\t\t\t<span class=\"border_btom\"></span>
                    </div>
                </div> -->
            </div>
        </div>
     
    </div>
</section>


<section class=\" home_about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7\" data-aos=\"fade-right\" data-aos-offset=\"100\" data-aos-easing=\"ease-in-sine\">
                <div class=\"common_heading\">
\t\t\t\t\t<h6>Welcome to</h6>
<h3>Gillz Sweet Factory</h3>
<!--                     <h6>Welcome to</h6>
                    <h3>Gillz Sweet Factory</h3> -->
                </div>
                <div class=\"home_about\">
\t\t\t\t\t<p>Gillz Sweet Factory, your one-stop shop for the best Indian sweets and savories, was established in 2016, Providing the best North Indian recipes. Our passion for customer satisfaction fuels our desire to keep moving forward.</p>
<p>Our kitchen is filled with the aromas of numerous sweets and savories under preparation, thanks to an outstanding combination of experienced and dedicated chefs who all share an exceptional passion for cooking.</p>
<!--                     <p>Gillz Sweet Factory, your one-stop shop for the best Indian sweets and savories, was
                        established in 2016, Providing the best North Indian recipes. Our passion for customer
                        satisfaction fuels our desire to keep moving forward.</p>
                    <p> Our kitchen are filled with the aromas of numerous sweets and savories under preparation,
                        thanks to an outstanding combination of experienced and dedicated chefs who all share an
                        exceptional passion for cooking.</p> -->
                    <a href=\"https://gillzsweetfactory.com/our-story/\" class=\"main__button\">Read More <i class=\"fa fa-long-arrow-right\"
                            aria-hidden=\"true\"></i></a>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"home_about_image\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/about.webp\" alt=\"\">
<!--                     <img src=\"/assets/images/about.webp\" alt=\"\"> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"p_100 home_menu o_hidden f_lex\" style=\"background-image: url(https://gillzsweetfactory.com/wp-content/uploads/2023/04/specialmenubg.webp);\">
    <span class=\"image_fix\" data-aos=\"fade-up-right\" data-aos-duration=\"2000\"> 
        <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/flower1.webp\" alt=\"\">
    </span>
    <div class=\"container\">
        <div class=\"common_heading\">
            <div class=\"flex\">
\t\t\t\t<h6>Explore Our</h6>
<h3>Special Menu</h3>
            </div>
            <div class=\"flex_button\">
                <a href=\"https://gillzsweetfactory.com/menu/\" class=\"main__button\">See All menu <i class=\"fa fa-long-arrow-right\"
                        aria-hidden=\"true\"></i></a>
            </div>
        </div>
        <div class=\"row row-cols-2 row-cols-lg-3 g-2 g-lg-3\">
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"400\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-menu2.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Makki Di Roti Saag with Lassi (Tuesday special)</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"600\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/CHANNA-POORI.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Channa Poori Halwa(Monday Special)</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"800\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-menu1.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Badam Milk</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1000\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/DAHI-BHALLE.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Dahi Bhalla</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1200\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-menu-3.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Pakora</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1400\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/Shahi-Paneer-1.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Shahi Paneer</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
<!--             <div class=\"col\" data-aos=\"fade-right\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Makki-Di-Roti-Saag-with-Lassi.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Makki Di Roti Saag with Lassi (Tuesday special)</h3>
                        </div>
                    </a>
                </div>
            </div>
\t\t\t
\t\t\t
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"400\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Veg-Biryani.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Veg Biryani</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"600\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"/assets/images/Mix-Veg-Raita.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Mix Veg Raita</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"800\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Paneer-Paratha.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Paneer Paratha</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1000\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Pav-Bhaji.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Pav Bhaji</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1200\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/shahi-paneer.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Shahi Paneer</h3>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</section>


<section class=\"p_100 home_video\">
    <span class=\"image_fix\" data-aos=\"fade-up-left\" data-aos-duration=\"2000\">
        <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/flower.webp\" alt=\"\">
    </span>
    <div class=\"container\">
        <div class=\"common_heading\">
\t\t\t<h6>Why Choose Us</h6>
<h3>What Makes us Special?</h3>
<!--             <h6>Why Choose Us</h6>
            <h3>What Makes us Special?</h3> -->
        </div>
        <div class=\"get-videos-wrap\">
            <div class=\"video-wrapper\">
                <video autoplay loop controls muted loop playsinline preload=\"metadata\">
\t\t\t\t\t  <source src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/Gillzvideo-1.mp4\" type=\"video/mp4\">
<!--                     <source src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Gillzvideo.mp4\" type=\"video/mp4\"> -->
                </video>
            </div>

        </div>
        <div class=\"row row-cols-2 row-cols-lg-4 g-2 g-lg-3\">
\t\t\t
\t\t\t
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"usps_main\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/tradition.webp\" alt=\"img\">
\t\t\t\t\t<h4>Tradition</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"usps_main\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/quality.webp\" alt=\"img\">
\t\t\t\t\t<h4>Quality</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"usps_main\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/creativity.webp\" alt=\"img\">
\t\t\t\t\t<h4>Creativity</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"usps_main\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/passion.webp\" alt=\"img\">
\t\t\t\t\t<h4>Passion</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
<!--             <div class=\"col\">
                <div class=\"usps_main\">
                    <img src=\"/assets/images/tradition.webp\" alt=\"\">
                    <h4>Tradition</h4>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"usps_main\">
                    <img src=\"/assets/images/quality.webp\" alt=\"\">
                    <h4>Quality</h4>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"usps_main\">
                    <img src=\"/assets/images/creativity.webp\" alt=\"\">
                    <h4>Creativity</h4>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"usps_main\">
                    <img src=\"/assets/images/passion.webp\" alt=\"\">
                    <h4>Passion</h4>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class=\"p_100 home_testimonial\" style=\"background-image: url(https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial-bg.webp);\">
    <div class=\"container\">
        <div class=\"common_heading\">
\t\t\t<h6>Our Client</h6>
<h3>Testimonials</h3>
<!--             <h6>Our Client</h6>
            <h3>Testimonials</h3> -->
        </div>
        <div class=\"slider-reviews\">
\t\t\t\t\t\t <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
\t\t\t\t\t\t<p>I have ordered delivery from here for years and years, and their food is always been great. Recently, I went for a sit-in meal with my mom, which I hadn&#8217;t done before, and it was a great experience. The server was very polite, and we had a great time. If you haven&#8217;t eaten here, I definitely recommend that you try it</p>
<hr class=\"line\" />
<h5>Charles Arnold</h5>
<h6>Brampton</h6>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
\t\t\t\t\t\t<p>I have ordered delivery from here for years and years, and their food is always been great. Recently, I went for a sit-in meal with my mom, which I hadn&#8217;t done before, and it was a great experience. The server was very polite, and we had a great time. If you haven&#8217;t eaten here, I definitely recommend that you try it</p>
<hr class=\"line\" />
<h5>Charles Arnold</h5>
<h6>Brampton</h6>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
\t\t\t\t\t\t<p>I have ordered delivery from here for years and years, and their food is always been great. Recently, I went for a sit-in meal with my mom, which I hadn&#8217;t done before, and it was a great experience. The server was very polite, and we had a great time. If you haven&#8217;t eaten here, I definitely recommend that you try it</p>
<hr class=\"line\" />
<h5>Charles Arnold</h5>
<h6>Brampton</h6>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
\t\t\t\t\t\t<p>I have ordered delivery from here for years and years, and their food is always been great. Recently, I went for a sit-in meal with my mom, which I hadn&#8217;t done before, and it was a great experience. The server was very polite, and we had a great time. If you haven&#8217;t eaten here, I definitely recommend that you try it</p>
<hr class=\"line\" />
<h5>Charles Arnold</h5>
<h6>Brampton</h6>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t
\t\t\t
\t\t\t
<!--             <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"/assets/images/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
                        <p>I have ordered delivery from here for years and years, and their food is always been
                            great. Recently, I went for a sit-in meal with my mom, which I hadn't done before, and
                            it was a great experience. The server was very polite, and we had a great time. If you
                            haven't eaten here, I definitely recommend that you try it</p>
                        <hr class=\"line\">
                        <h5>Charles Arnold</h5>
                        <h6>Brampton</h6>
                    </div>
                </div>
            </div>
            <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"/assets/images/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
                        <p>I have ordered delivery from here for years and years, and their food is always been
                            great. Recently, I went for a sit-in meal with my mom, which I hadn't done before, and
                            it was a great experience. The server was very polite, and we had a great time. If you
                            haven't eaten here, I definitely recommend that you try it</p>
                        <hr class=\"line\">
                        <h5>Charles Arnold</h5>
                        <h6>Brampton</h6>
                    </div>
                </div>
            </div>
            <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"/assets/images/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
                        <p>I have ordered delivery from here for years and years, and their food is always been
                            great. Recently, I went for a sit-in meal with my mom, which I hadn't done before, and
                            it was a great experience. The server was very polite, and we had a great time. If you
                            haven't eaten here, I definitely recommend that you try it</p>
                        <hr class=\"line\">
                        <h5>Charles Arnold</h5>
                        <h6>Brampton</h6>
                    </div>
                </div>
            </div>
            <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"/assets/images/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
                        <p>I have ordered delivery from here for years and years, and their food is always been
                            great. Recently, I went for a sit-in meal with my mom, which I hadn't done before, and
                            it was a great experience. The server was very polite, and we had a great time. If you
                            haven't eaten here, I definitely recommend that you try it</p>
                        <hr class=\"line\">
                        <h5>Charles Arnold</h5>
                        <h6>Brampton</h6>
                    </div>
                </div>
            </div>  -->
        </div>

    </div>
</section>

<section class=\"p_100 home_testimonial\">
    <div class=\"container\">
        <div class=\"common_heading\">
\t\t\t<h6>Make Memories</h6>
<h3>Make Memories <img decoding=\"async\" src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/instagram.webp\" alt=\"\" /></h3>
        </div>

        <div class=\"row row-cols-2 row-cols-lg-4 g-2 g-lg-3\">
\t\t\t
\t\t\t\t\t\t <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/insta1.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-duration=\"4000\">
                <div class=\"insta_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/insta2.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"500\" data-aos-duration=\"6000\">
                <div class=\"insta_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/insta3.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"600\" data-aos-duration=\"8000\">
                <div class=\"insta_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/insta-4.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t
\t\t\t
\t\t\t
<!--             <div class=\"col\" data-aos=\"fade-left\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"/assets/images/insta1.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"/assets/images/insta2.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"500\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"/assets/images/insta3.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"600\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"/assets/images/insta 4.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>



";
        // line 672
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer.html.twig"), "themes/custom/sumit/templates/page--front.html.twig", 672)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/sumit/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 672,  41 => 43,  39 => 42,);
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

<section class=\"hero_aera\">
    <div class=\"container-fluid\">
        <div class=\"slider-for\">
\t\t\t\t\t\t
            <div>
                <div class=\"slider_image\">
\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/banner.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
\t\t\t\t\t\t\t<h2>A journey of culinary<br />
delights with us</h2>
                            <a href=\"https://gillzsweetfactory.com/menu\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t\t\t\t
            <div>
                <div class=\"slider_image\">
\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-page-banner-2.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
\t\t\t\t\t\t\t<h2>A journey of culinary<br />
delights with us</h2>
                            <a href=\"https://gillzsweetfactory.com/menu\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t\t\t\t
            <div>
                <div class=\"slider_image\">
\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/banner3.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
\t\t\t\t\t\t\t<h2>A journey of culinary<br />
delights with us</h2>
                            <a href=\"https://gillzsweetfactory.com/menu\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t\t\t\t
<!-- \t\t\t<div>
\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t<img src=\"/assets/images/banner.webp\" alt=\"banner\"> 
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"slider_content\">
\t\t\t\t\t\t\t<h2>A journey of culinary <br> delights with us</h2>
\t\t\t\t\t\t\t<a href=\"#.\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <div>
                <div class=\"slider_image\">
                    <img src=\"/assets/images/banner2.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
                            <h2>A journey of culinary <br> delights with us</h2>
                            <a href=\"#.\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class=\"slider_image\">
                    <img src=\"/assets/images/banner3.webp\" alt=\"banner\">
                    <div class=\"container\">
                        <div class=\"slider_content\">
                            <h2>A journey of culinary <br> delights with us</h2>
                            <a href=\"#.\" class=\"main__button\">Explore More <i class=\"fa fa-long-arrow-right\"
                                    aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>  -->
        </div>
        <div class=\"container\">
            <div class=\"slider-nav\">
\t\t\t\t
\t\t\t\t<div>
\t\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/banner.webp\" alt=\"banner\">
\t\t\t\t\t\t<span class=\"border_btom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div>
\t\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-page-banner-2.webp\" alt=\"banner\">
\t\t\t\t\t\t<span class=\"border_btom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div>
\t\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t\t <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/banner3.webp\" alt=\"banner\">
\t\t\t\t\t\t<span class=\"border_btom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t\t
<!-- \t\t\t\t<div>
\t\t\t\t\t<div class=\"slider_image\">
\t\t\t\t\t\t<img src=\"/assets/images/banner.webp\" alt=\"banner\">
\t\t\t\t\t\t<span class=\"border_btom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div>
                    <div class=\"slider_image\">
                        <img src=\"/assets/images/banner2.webp\" alt=\"banner\">
\t\t\t\t\t\t\t<span class=\"border_btom\"></span>
                    </div>
                </div>
                <div>
                    <div class=\"slider_image\">
                        <img src=\"/assets/images/banner3.webp\" alt=\"banner\">
\t\t\t\t\t\t\t<span class=\"border_btom\"></span>
                    </div>
                </div> -->
            </div>
        </div>
     
    </div>
</section>


<section class=\" home_about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7\" data-aos=\"fade-right\" data-aos-offset=\"100\" data-aos-easing=\"ease-in-sine\">
                <div class=\"common_heading\">
\t\t\t\t\t<h6>Welcome to</h6>
<h3>Gillz Sweet Factory</h3>
<!--                     <h6>Welcome to</h6>
                    <h3>Gillz Sweet Factory</h3> -->
                </div>
                <div class=\"home_about\">
\t\t\t\t\t<p>Gillz Sweet Factory, your one-stop shop for the best Indian sweets and savories, was established in 2016, Providing the best North Indian recipes. Our passion for customer satisfaction fuels our desire to keep moving forward.</p>
<p>Our kitchen is filled with the aromas of numerous sweets and savories under preparation, thanks to an outstanding combination of experienced and dedicated chefs who all share an exceptional passion for cooking.</p>
<!--                     <p>Gillz Sweet Factory, your one-stop shop for the best Indian sweets and savories, was
                        established in 2016, Providing the best North Indian recipes. Our passion for customer
                        satisfaction fuels our desire to keep moving forward.</p>
                    <p> Our kitchen are filled with the aromas of numerous sweets and savories under preparation,
                        thanks to an outstanding combination of experienced and dedicated chefs who all share an
                        exceptional passion for cooking.</p> -->
                    <a href=\"https://gillzsweetfactory.com/our-story/\" class=\"main__button\">Read More <i class=\"fa fa-long-arrow-right\"
                            aria-hidden=\"true\"></i></a>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"home_about_image\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/about.webp\" alt=\"\">
<!--                     <img src=\"/assets/images/about.webp\" alt=\"\"> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"p_100 home_menu o_hidden f_lex\" style=\"background-image: url(https://gillzsweetfactory.com/wp-content/uploads/2023/04/specialmenubg.webp);\">
    <span class=\"image_fix\" data-aos=\"fade-up-right\" data-aos-duration=\"2000\"> 
        <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/flower1.webp\" alt=\"\">
    </span>
    <div class=\"container\">
        <div class=\"common_heading\">
            <div class=\"flex\">
\t\t\t\t<h6>Explore Our</h6>
<h3>Special Menu</h3>
            </div>
            <div class=\"flex_button\">
                <a href=\"https://gillzsweetfactory.com/menu/\" class=\"main__button\">See All menu <i class=\"fa fa-long-arrow-right\"
                        aria-hidden=\"true\"></i></a>
            </div>
        </div>
        <div class=\"row row-cols-2 row-cols-lg-3 g-2 g-lg-3\">
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"400\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-menu2.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Makki Di Roti Saag with Lassi (Tuesday special)</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"600\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/CHANNA-POORI.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Channa Poori Halwa(Monday Special)</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"800\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-menu1.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Badam Milk</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1000\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/DAHI-BHALLE.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Dahi Bhalla</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1200\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/home-menu-3.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Pakora</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1400\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"menu_home\">
\t\t\t\t\t<a href=\"#.\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/Shahi-Paneer-1.webp\" alt=\"\">
\t\t\t\t\t\t<div class=\"overlay_text\">
\t\t\t\t\t\t\t<h3>Shahi Paneer</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
<!--             <div class=\"col\" data-aos=\"fade-right\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Makki-Di-Roti-Saag-with-Lassi.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Makki Di Roti Saag with Lassi (Tuesday special)</h3>
                        </div>
                    </a>
                </div>
            </div>
\t\t\t
\t\t\t
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"400\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Veg-Biryani.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Veg Biryani</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"600\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"/assets/images/Mix-Veg-Raita.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Mix Veg Raita</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"800\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Paneer-Paratha.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Paneer Paratha</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1000\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Pav-Bhaji.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Pav Bhaji</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-right\" data-aos-delay=\"1200\" data-aos-duration=\"2000\">
                <div class=\"menu_home\">
                    <a href=\"#.\">
                        <img src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/shahi-paneer.webp\" alt=\"\">
                        <div class=\"overlay_text\">
                            <h3>Shahi Paneer</h3>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</section>


<section class=\"p_100 home_video\">
    <span class=\"image_fix\" data-aos=\"fade-up-left\" data-aos-duration=\"2000\">
        <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/flower.webp\" alt=\"\">
    </span>
    <div class=\"container\">
        <div class=\"common_heading\">
\t\t\t<h6>Why Choose Us</h6>
<h3>What Makes us Special?</h3>
<!--             <h6>Why Choose Us</h6>
            <h3>What Makes us Special?</h3> -->
        </div>
        <div class=\"get-videos-wrap\">
            <div class=\"video-wrapper\">
                <video autoplay loop controls muted loop playsinline preload=\"metadata\">
\t\t\t\t\t  <source src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/Gillzvideo-1.mp4\" type=\"video/mp4\">
<!--                     <source src=\"http://nextstep.net.in/gillz-sweets-factory-new/wp-content/uploads/2023/04/Gillzvideo.mp4\" type=\"video/mp4\"> -->
                </video>
            </div>

        </div>
        <div class=\"row row-cols-2 row-cols-lg-4 g-2 g-lg-3\">
\t\t\t
\t\t\t
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"usps_main\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/tradition.webp\" alt=\"img\">
\t\t\t\t\t<h4>Tradition</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"usps_main\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/quality.webp\" alt=\"img\">
\t\t\t\t\t<h4>Quality</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"usps_main\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/creativity.webp\" alt=\"img\">
\t\t\t\t\t<h4>Creativity</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"usps_main\">
\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/passion.webp\" alt=\"img\">
\t\t\t\t\t<h4>Passion</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
<!--             <div class=\"col\">
                <div class=\"usps_main\">
                    <img src=\"/assets/images/tradition.webp\" alt=\"\">
                    <h4>Tradition</h4>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"usps_main\">
                    <img src=\"/assets/images/quality.webp\" alt=\"\">
                    <h4>Quality</h4>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"usps_main\">
                    <img src=\"/assets/images/creativity.webp\" alt=\"\">
                    <h4>Creativity</h4>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"usps_main\">
                    <img src=\"/assets/images/passion.webp\" alt=\"\">
                    <h4>Passion</h4>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class=\"p_100 home_testimonial\" style=\"background-image: url(https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial-bg.webp);\">
    <div class=\"container\">
        <div class=\"common_heading\">
\t\t\t<h6>Our Client</h6>
<h3>Testimonials</h3>
<!--             <h6>Our Client</h6>
            <h3>Testimonials</h3> -->
        </div>
        <div class=\"slider-reviews\">
\t\t\t\t\t\t <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
\t\t\t\t\t\t<p>I have ordered delivery from here for years and years, and their food is always been great. Recently, I went for a sit-in meal with my mom, which I hadn&#8217;t done before, and it was a great experience. The server was very polite, and we had a great time. If you haven&#8217;t eaten here, I definitely recommend that you try it</p>
<hr class=\"line\" />
<h5>Charles Arnold</h5>
<h6>Brampton</h6>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
\t\t\t\t\t\t<p>I have ordered delivery from here for years and years, and their food is always been great. Recently, I went for a sit-in meal with my mom, which I hadn&#8217;t done before, and it was a great experience. The server was very polite, and we had a great time. If you haven&#8217;t eaten here, I definitely recommend that you try it</p>
<hr class=\"line\" />
<h5>Charles Arnold</h5>
<h6>Brampton</h6>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
\t\t\t\t\t\t<p>I have ordered delivery from here for years and years, and their food is always been great. Recently, I went for a sit-in meal with my mom, which I hadn&#8217;t done before, and it was a great experience. The server was very polite, and we had a great time. If you haven&#8217;t eaten here, I definitely recommend that you try it</p>
<hr class=\"line\" />
<h5>Charles Arnold</h5>
<h6>Brampton</h6>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
\t\t\t\t\t\t<p>I have ordered delivery from here for years and years, and their food is always been great. Recently, I went for a sit-in meal with my mom, which I hadn&#8217;t done before, and it was a great experience. The server was very polite, and we had a great time. If you haven&#8217;t eaten here, I definitely recommend that you try it</p>
<hr class=\"line\" />
<h5>Charles Arnold</h5>
<h6>Brampton</h6>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t
\t\t\t
\t\t\t
<!--             <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"/assets/images/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
                        <p>I have ordered delivery from here for years and years, and their food is always been
                            great. Recently, I went for a sit-in meal with my mom, which I hadn't done before, and
                            it was a great experience. The server was very polite, and we had a great time. If you
                            haven't eaten here, I definitely recommend that you try it</p>
                        <hr class=\"line\">
                        <h5>Charles Arnold</h5>
                        <h6>Brampton</h6>
                    </div>
                </div>
            </div>
            <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"/assets/images/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
                        <p>I have ordered delivery from here for years and years, and their food is always been
                            great. Recently, I went for a sit-in meal with my mom, which I hadn't done before, and
                            it was a great experience. The server was very polite, and we had a great time. If you
                            haven't eaten here, I definitely recommend that you try it</p>
                        <hr class=\"line\">
                        <h5>Charles Arnold</h5>
                        <h6>Brampton</h6>
                    </div>
                </div>
            </div>
            <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"/assets/images/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
                        <p>I have ordered delivery from here for years and years, and their food is always been
                            great. Recently, I went for a sit-in meal with my mom, which I hadn't done before, and
                            it was a great experience. The server was very polite, and we had a great time. If you
                            haven't eaten here, I definitely recommend that you try it</p>
                        <hr class=\"line\">
                        <h5>Charles Arnold</h5>
                        <h6>Brampton</h6>
                    </div>
                </div>
            </div>
            <div class=\"flex_reviews\">
                <div class=\"reviews_image\">
                    <img src=\"/assets/images/testomonial.webp\" alt=\"\">
                </div>
                <div class=\"reviews_content\">
                    <img src=\"/assets/images/quote.webp\" alt=\"image\">
                    <div class=\"content_content\">
                        <p>I have ordered delivery from here for years and years, and their food is always been
                            great. Recently, I went for a sit-in meal with my mom, which I hadn't done before, and
                            it was a great experience. The server was very polite, and we had a great time. If you
                            haven't eaten here, I definitely recommend that you try it</p>
                        <hr class=\"line\">
                        <h5>Charles Arnold</h5>
                        <h6>Brampton</h6>
                    </div>
                </div>
            </div>  -->
        </div>

    </div>
</section>

<section class=\"p_100 home_testimonial\">
    <div class=\"container\">
        <div class=\"common_heading\">
\t\t\t<h6>Make Memories</h6>
<h3>Make Memories <img decoding=\"async\" src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/instagram.webp\" alt=\"\" /></h3>
        </div>

        <div class=\"row row-cols-2 row-cols-lg-4 g-2 g-lg-3\">
\t\t\t
\t\t\t\t\t\t <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/insta1.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-duration=\"4000\">
                <div class=\"insta_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/insta2.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"500\" data-aos-duration=\"6000\">
                <div class=\"insta_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/insta3.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"600\" data-aos-duration=\"8000\">
                <div class=\"insta_image\">
                    <img src=\"https://gillzsweetfactory.com/wp-content/uploads/2023/04/insta-4.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
\t\t\t\t\t\t
\t\t\t
\t\t\t
<!--             <div class=\"col\" data-aos=\"fade-left\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"/assets/images/insta1.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"400\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"/assets/images/insta2.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"500\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"/assets/images/insta3.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col\" data-aos=\"fade-left\" data-aos-delay=\"600\" data-aos-duration=\"2000\">
                <div class=\"insta_image\">
                    <img src=\"/assets/images/insta 4.webp\" alt=\"\">
                    <div class=\"insta_overlay\">
                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>



{% include directory ~ '/templates/footer.html.twig' %}", "themes/custom/sumit/templates/page--front.html.twig", "E:\\xampp\\htdocs\\drupal\\themes\\custom\\sumit\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 42);
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
