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

/* themes/custom/sumit/templates/footer.html.twig */
class __TwigTemplate_cb7a76750216abe669615f6137f680b57bf2d69c2fae57c4c2003e6766abbe50 extends \Twig\Template
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
        echo "<footer class=\"p_100 footer_aera\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_logo\">
\t\t\t\t\t<a href=\"https://gillzsweetfactory.com\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/headerlogo.webp\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer_news\">
 \t\t\t\t\t<input type=\"text\" placeholder=\"Enter your email address\">
\t\t\t\t\t<a href=\"#.\" class=\"main__button\">Sign Up <i class=\"fa fa-long-arrow-right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t aria-hidden=\"true\"></i></a> 
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/Gillzsweetfactory/\" target=\"_blank\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/gillzsweetfactory/\" target=\"_blank\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a> 
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_link\">
\t\t\t\t\t<h2>About</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/our-story\">Our story </a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/menu\">menu</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/gallery\">Gallery</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/community\">Community</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/events\">Events</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/catering\">Catering</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wholesale\">Wholesale</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_link\">
\t\t\t\t\t<h2>Our Menu</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Main Course</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Dessert</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Appetizer</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Drink</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Bread</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Rice & Noodles</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Raita</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_add\">
\t\t\t\t\t<h2>Get in Touch</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<p><span>2131 Williams Pkwy #3 Brampton ON L6S-5Z4</span></p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<p><a href=\"tel:+9057992616\">+905 799 2616</a></p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<p><a href=\"mailto:info@gillzsweetfactory.com\">info@gillzsweetfactory.com</a></p>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"copy\">
\t\t\t\t<p>© Copyright Gillz sweet factory
\t\t\t\t\t<script>document.write(new Date().getFullYear())</script>. All Rights Reserved.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<script src=\"https://nextstep.net.in/elmas-meat/wp-content/themes/Elmas-Meat/assets/js/fontawesome.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sumit/templates/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"p_100 footer_aera\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_logo\">
\t\t\t\t\t<a href=\"https://gillzsweetfactory.com\">
\t\t\t\t\t\t<img src=\"https://gillzsweetfactory.com/wp-content/themes/gillz-sweets-factory-new/assets/images/headerlogo.webp\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer_news\">
 \t\t\t\t\t<input type=\"text\" placeholder=\"Enter your email address\">
\t\t\t\t\t<a href=\"#.\" class=\"main__button\">Sign Up <i class=\"fa fa-long-arrow-right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t aria-hidden=\"true\"></i></a> 
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/Gillzsweetfactory/\" target=\"_blank\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/gillzsweetfactory/\" target=\"_blank\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a> 
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_link\">
\t\t\t\t\t<h2>About</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/our-story\">Our story </a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/menu\">menu</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/gallery\">Gallery</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/community\">Community</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/events\">Events</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/catering\">Catering</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wholesale\">Wholesale</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_link\">
\t\t\t\t\t<h2>Our Menu</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Main Course</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Dessert</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Appetizer</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Drink</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Bread</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Rice & Noodles</a></li>
\t\t\t\t\t\t<li><a href=\"https://gillzsweetfactory.com/wp-content/uploads/2023/05/GILLZ-MENU.pdf\" target=\"_blank\">Raita</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_add\">
\t\t\t\t\t<h2>Get in Touch</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<p><span>2131 Williams Pkwy #3 Brampton ON L6S-5Z4</span></p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<p><a href=\"tel:+9057992616\">+905 799 2616</a></p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<p><a href=\"mailto:info@gillzsweetfactory.com\">info@gillzsweetfactory.com</a></p>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"copy\">
\t\t\t\t<p>© Copyright Gillz sweet factory
\t\t\t\t\t<script>document.write(new Date().getFullYear())</script>. All Rights Reserved.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<script src=\"https://nextstep.net.in/elmas-meat/wp-content/themes/Elmas-Meat/assets/js/fontawesome.js\"></script>
", "themes/custom/sumit/templates/footer.html.twig", "E:\\xampp\\htdocs\\drupal\\themes\\custom\\sumit\\templates\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
