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

/* themes/custom/breeze/templates/footer.html.twig */
class __TwigTemplate_672e47e142889d61dd963c4fc4b44128ce30268559e4ec45500127cd3c9a69e6 extends \Twig\Template
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
        echo "<footer class=\"footer bg_black\">
\t<div class=\"container\">
\t\t<div class=\"row p_100\">
\t\t\t<div class=\"col-md-12 col-lg-3\">
\t\t\t\t<div class=\"footer_logo_part\">
\t\t\t\t\t<div class=\"footer_logo\">
\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/footer_logo.png\" alt=\"\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer_timing text-white\">
\t\t\t\t\t\t<h5> <strong>OPENING HOURS:</strong> <br>
\t\t\t\t\t\t\tMon - Sun: 10am - 8pm</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_call_now\">
\t\t\t\t\t<h5>Call Us On (1)</h5>
\t\t\t\t\t<a href=\"tel:+91 9999999 681\"><strong>+91 9999999 681</strong></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t<h5 class=\"mb-2\"><strong>USEFUL LINKS</strong></h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=BMW\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Pre-Owned BMW Cars</a></li>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Audi\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Pre-Owned Audi Cars</a></li>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/collections/\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Used Luxury Cars Collection</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_call_now\">
\t\t\t\t\t<h5>Call Us On (2)</h5>
\t\t\t\t\t<a href=\"tel:+91 999999 4720\"><strong>+91 999999 4720</strong></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t<h5 class=\"mb-2\"><strong>OUR INFO</strong></h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/about-us/\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">About Us</a></li>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/collections/\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Collections</a></li>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/showroom/\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Showrooms</a></li>
<!-- \t\t\t\t\t\t<li><a href=\"/insights/\"><img src=\"// /assets/images/footer_icon.png\">News/Update</a></li> -->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_adress mb-5\">
\t\t\t\t\t<a href=\"https://goo.gl/maps/orVnxPzSJfv9KLC96\" class=\"fusion_btn text-white\" target=\"_blank\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_map.png\" alt=\"\"> Fusion Cars On Map</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t<h5 class=\"mb-2\"><strong>Address</strong></h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">A-99/100, Ganesh Nagar Tilak Nagar, Delhi, 110018</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- \t\t\t\t\t<div class=\"footer_form\">
<div class=\"form_field\">
<input type=\"text\" placeholder=\"Subscribe Newsletter\">
</div>
<div class=\"form_submit_field\">
<a href=\"\" class=\"fusion_btn\"><img src=\" ///assets/images/Mail.png\" alt=\"\"> </a>
</div>
</div> -->
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"copyright_sec\">
\t\t\t\t<div class=\"copy_left\">
\t\t\t\t\t<p>© 2023 <a href=\"fusioncars.com\">FusionCars.com</a> all rights reserved.  </p>
\t\t\t\t\t<p>
\t\t\t\t\t\tPowered By
\t\t\t\t\t\t<a href=\"https://digitalbirbal.com/\">Digital Birbal</a>
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"copy_icons\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://instagram.com/fusioncarsindia?igshid=YmMyMTA2M2Y=\" target=\"_blank\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_insta.png\" alt=\"\"> . instagram</a></li>
\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/fusioncarsindia?mibextid=LQQJ4d\" target=\"_blank\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_facebook.png\" alt=\"\" > . facebook</a></li>
\t\t\t\t\t\t<li><a href=\" https://www.youtube.com/c/FusionCars\" target=\"_blank\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_youtube.png\" alt=\"\" > . youtube</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>



</footer>


<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/jquery.min.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/header.js\"></script>    
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/owl.carousel.min.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/main.js\"></script>
<script src=\"https://imperialauto.in/wp-content/themes/imperial-auto/assets/js/fontawesome.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/slick.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/slick.min.js\"></script>
<script src=\"https://www.avmarketingsolutions.in/wp-content/themes/av-marketing-solutions/assets/js/fontawesome.js\"></script>
<script src=\"https://bharatenterprises.co.in/wp-content/themes/bharat%20Enterprises/assets/js/fancybox.js\"></script>

<script>
\t\$('.slider-single').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tarrows: false,
\t\tfade: true,
\t\tasNavFor: '.slider-nav'

\t});
\t\$('.slider-nav').slick({
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tasNavFor: '.slider-single',
\t\tdots: false,
\t\tcenterMode: true,
\t\tcenterPadding: '0px',
\t\tfocusOnSelect: true,
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 1024,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,

\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 992,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 768,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 575,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t}
\t\t]
\t});
</script>

<script>
\t\$(\".ptl_lg\").owlCarousel({
\t\tloop: false,
\t\tnav: false,
\t\tdots: true,
\t\tsmartSpeed: 800,
\t\tmargin: 30,
\t\tautoplayHoverPause: false,
\t\tautoplay: true,
\t\tresponsive: {
\t\t\t0: {
\t\t\t\titems: 1,
\t\t\t},
\t\t\t576: {
\t\t\t\titems: 2,
\t\t\t},
\t\t\t768: {
\t\t\t\titems: 3,
\t\t\t},
\t\t\t992: {
\t\t\t\titems: 5,
\t\t\t},
\t\t\t1200: {
\t\t\t\titems: 5,
\t\t\t},
\t\t\t1400: {
\t\t\t\titems: 5,
\t\t\t},
\t\t},
\t});


</script>
<script>
\t// Get the select boxes and checkboxes
\tconst categorySelect = document.getElementById(\"category\");
\tconst brandSelect = document.getElementById(\"brand\");
\tconst priceSelect = document.getElementById(\"price\");
\tconst ratingSelect = document.getElementById(\"rating\");
\tconst fuelsSelect = document.getElementById(\"car-fuels\");
\tconst featuresCheckboxes = document.querySelectorAll('input[type=\"checkbox\"]');

\t// Get all the products
\tconst products = document.querySelectorAll(\".product\");

\t// Add event listeners to the select boxes and checkboxes
\tcategorySelect.addEventListener(\"change\", filterProducts);
\tbrandSelect.addEventListener(\"change\", filterProducts);
\tpriceSelect.addEventListener(\"change\", filterProducts);
\tratingSelect.addEventListener(\"change\", filterProducts);
\tfuelsSelect.addEventListener(\"change\", filterProducts);
\tfeaturesCheckboxes.forEach((checkbox) => {
\t\tcheckbox.addEventListener(\"change\", filterProducts);
\t});

\t// Define the filterProducts function
\tfunction filterProducts() {
\t\t// Get the selected options
\t\tconst selectedCategory = categorySelect.value;
\t\tconst selectedBrand = brandSelect.value;
\t\tconst selectedPrice = priceSelect.value;
\t\tconst selectedRating = ratingSelect.value;
\t\tconst selectedFuel = fuelsSelect.value;
\t\tconst selectedFeatures = [];
\t\tfeaturesCheckboxes.forEach((checkbox) => {
\t\t\tif (checkbox.checked) {
\t\t\t\tselectedFeatures.push(checkbox.value);
\t\t\t}
\t\t});

\t\t// Get the current year
\t\t

\t\t// Loop through all the products and show/hide them based on the selected options
\t\tproducts.forEach((product) => {
\t\t\tconst categoryMatch = selectedCategory === \"\" || product.getAttribute(\"data-category\") === selectedCategory;
\t\t\tconst brandMatch = selectedBrand === \"\" || product.getAttribute(\"data-brand\") === selectedBrand;
\t\t\tconst priceMatch =
\t\t\t\t  selectedPrice === \"\" ||
\t\t\t\t  (selectedPrice === \"0-100000\" && product.getAttribute(\"data-price\") <= 100000) ||
\t\t\t\t  (selectedPrice === \"100000-500000\" && product.getAttribute(\"data-price\") > 100000 && product.getAttribute(\"data-price\") <= 500000) ||
\t\t\t\t  (selectedPrice === \"500000-1000000\" && product.getAttribute(\"data-price\") > 500000 && product.getAttribute(\"data-price\") <= 1000000) ||
\t\t\t\t  (selectedPrice === \"1000000-2000000\" && product.getAttribute(\"data-price\") > 1000000 && product.getAttribute(\"data-price\") <= 2000000) ||
\t\t\t\t  (selectedPrice === \"2000000-5000000\" && product.getAttribute(\"data-price\") > 2000000 && product.getAttribute(\"data-price\") <= 5000000) ||
\t\t\t\t  (selectedPrice === \"5000000-10000000\" && product.getAttribute(\"data-price\") > 5000000 && product.getAttribute(\"data-price\") <= 10000000) ||
\t\t\t\t  (selectedPrice === \"10000000-20000000\" && product.getAttribute(\"data-price\") > 10000000 && product.getAttribute(\"data-price\") <= 20000000) ||
\t\t\t\t  (selectedPrice === \"20000000-50000000\" && product.getAttribute(\"data-price\") > 20000000 && product.getAttribute(\"data-price\") <= 50000000) ||
\t\t\t\t  (selectedPrice === \"50000000-100000000\" && product.getAttribute(\"data-price\") > 50000000 && product.getAttribute(\"data-price\") <= 100000000);

\t\t\tconst ratingMatch = selectedRating === \"\" || product.getAttribute(\"data-rating\") >= selectedRating;
\t\t\tconst fuelMatch = selectedFuel === \"\" || product.getAttribute(\"data-fuel\") === selectedFuel;
\t\t\tconst featuresMatch = selectedFeatures.length === 0 || selectedFeatures.some((feature) => product.getAttribute(\"data-features\").includes(feature));

\t\t\t// Filter based on brand year
\t\t\tconst yeear = new Date().getFullYear();
\t\t\t
\t\t\tconst currentYear = yeear - 1;
\t\t\t
\t\t\tconst brandYear = (product.getAttribute(\"data-brand-year\"));

\t\t\tconst yearDifference = currentYear - brandYear;

\t\t\tconst yearMatch = selectedBrand === \"\" || (selectedBrand === \"1\" && yearDifference < 1) ||
\t\t\t\t  (selectedBrand === \"2\" && yearDifference < 2) ||
\t\t\t\t  (selectedBrand === \"3\" && yearDifference < 3) ||
\t\t\t\t  (selectedBrand === \"4\" && yearDifference < 5) ||
\t\t\t\t  (selectedBrand === \"5\" && yearDifference < 7) ||
\t\t\t\t  (selectedBrand === \"6\" && yearDifference >= 7);

\t\t\tconsole.log(yearMatch);

\t\t\tif (categoryMatch  && priceMatch && ratingMatch && fuelMatch && featuresMatch && yearMatch) {
\t\t\t\tproduct.style.display = \"block\";
\t\t\t} else {
\t\t\t\tproduct.style.display = \"none\";
\t\t\t}
\t\t});
\t}

</script>
<script>
\t// Get the URL parameters
\tconst urlParams = new URLSearchParams(window.location.search);

\t// Pre-select the options based on the URL parameters
\tif (urlParams.has('category')) {
\t\tcategorySelect.value = urlParams.get('category');
\t}
\tif (urlParams.has('price')) {
\t\tpriceSelect.value = urlParams.get('price');
\t}
\tif (urlParams.has('features')) {
\t\tconst selectedFeatures = urlParams.get('features').split(',');
\t\tfeaturesCheckboxes.forEach((checkbox) => {
\t\t\tif (selectedFeatures.includes(checkbox.value)) {
\t\t\t\tcheckbox.checked = true;
\t\t\t}
\t\t});
\t}

\t// Call the filterProducts function to filter the products on page load
\tfilterProducts();

</script>
<script>
\t\$('.slider-single2').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tarrows: false,
\t\tfade: true,
\t\tasNavFor: '.slider-nav2'

\t});
\t\$('.slider-nav2').slick({
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tasNavFor: '.slider-single2',
\t\tdots: false,
\t\tfocusOnSelect: true,
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 1024,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tdots: true,

\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 992,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 768,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 575,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t}


\t\t]


\t});
</script>
<script>
\t\$(document).ready(function() {
\t\t\$('.fancybox').fancybox();
\t});
</script>
<script>
\t\$(\".similar_lg\").owlCarousel({
\t\tloop: false,
\t\tnav: false,
\t\tdots: true,
\t\tsmartSpeed: 800,
\t\tmargin: 30,
\t\tautoplayHoverPause: false,
\t\tautoplay: true,
\t\tresponsive: {
\t\t\t0: {
\t\t\t\titems: 1,
\t\t\t},
\t\t\t576: {
\t\t\t\titems: 1,
\t\t\t},
\t\t\t768: {
\t\t\t\titems: 3,
\t\t\t},
\t\t\t992: {
\t\t\t\titems: 3,
\t\t\t},
\t\t\t1200: {
\t\t\t\titems: 3,
\t\t\t},
\t\t\t1400: {
\t\t\t\titems: 3,
\t\t\t},
\t\t},
\t});


</script>
<script>
\tvar AndraPradesh = [\"Anantapur\",\"Chittoor\",\"East Godavari\",\"Guntur\",\"Kadapa\",\"Krishna\",\"Kurnool\",\"Prakasam\",\"Nellore\",\"Srikakulam\",\"Visakhapatnam\",\"Vizianagaram\",\"West Godavari\"];
\tvar ArunachalPradesh = [\"Anjaw\",\"Changlang\",\"Dibang Valley\",\"East Kameng\",\"East Siang\",\"Kra Daadi\",\"Kurung Kumey\",\"Lohit\",\"Longding\",\"Lower Dibang Valley\",\"Lower Subansiri\",\"Namsai\",\"Papum Pare\",\"Siang\",\"Tawang\",\"Tirap\",\"Upper Siang\",\"Upper Subansiri\",\"West Kameng\",\"West Siang\",\"Itanagar\"];
\tvar Assam = [\"Baksa\",\"Barpeta\",\"Biswanath\",\"Bongaigaon\",\"Cachar\",\"Charaideo\",\"Chirang\",\"Darrang\",\"Dhemaji\",\"Dhubri\",\"Dibrugarh\",\"Goalpara\",\"Golaghat\",\"Hailakandi\",\"Hojai\",\"Jorhat\",\"Kamrup Metropolitan\",\"Kamrup (Rural)\",\"Karbi Anglong\",\"Karimganj\",\"Kokrajhar\",\"Lakhimpur\",\"Majuli\",\"Morigaon\",\"Nagaon\",\"Nalbari\",\"Dima Hasao\",\"Sivasagar\",\"Sonitpur\",\"South Salmara Mankachar\",\"Tinsukia\",\"Udalguri\",\"West Karbi Anglong\"];
\tvar Bihar = [\"Araria\",\"Arwal\",\"Aurangabad\",\"Banka\",\"Begusarai\",\"Bhagalpur\",\"Bhojpur\",\"Buxar\",\"Darbhanga\",\"East Champaran\",\"Gaya\",\"Gopalganj\",\"Jamui\",\"Jehanabad\",\"Kaimur\",\"Katihar\",\"Khagaria\",\"Kishanganj\",\"Lakhisarai\",\"Madhepura\",\"Madhubani\",\"Munger\",\"Muzaffarpur\",\"Nalanda\",\"Nawada\",\"Patna\",\"Purnia\",\"Rohtas\",\"Saharsa\",\"Samastipur\",\"Saran\",\"Sheikhpura\",\"Sheohar\",\"Sitamarhi\",\"Siwan\",\"Supaul\",\"Vaishali\",\"West Champaran\"];
\tvar Chhattisgarh = [\"Balod\",\"Baloda Bazar\",\"Balrampur\",\"Bastar\",\"Bemetara\",\"Bijapur\",\"Bilaspur\",\"Dantewada\",\"Dhamtari\",\"Durg\",\"Gariaband\",\"Janjgir Champa\",\"Jashpur\",\"Kabirdham\",\"Kanker\",\"Kondagaon\",\"Korba\",\"Koriya\",\"Mahasamund\",\"Mungeli\",\"Narayanpur\",\"Raigarh\",\"Raipur\",\"Rajnandgaon\",\"Sukma\",\"Surajpur\",\"Surguja\"];
\tvar Goa = [\"North Goa\",\"South Goa\"];
\tvar Gujarat = [\"Ahmedabad\",\"Amreli\",\"Anand\",\"Aravalli\",\"Banaskantha\",\"Bharuch\",\"Bhavnagar\",\"Botad\",\"Chhota Udaipur\",\"Dahod\",\"Dang\",\"Devbhoomi Dwarka\",\"Gandhinagar\",\"Gir Somnath\",\"Jamnagar\",\"Junagadh\",\"Kheda\",\"Kutch\",\"Mahisagar\",\"Mehsana\",\"Morbi\",\"Narmada\",\"Navsari\",\"Panchmahal\",\"Patan\",\"Porbandar\",\"Rajkot\",\"Sabarkantha\",\"Surat\",\"Surendranagar\",\"Tapi\",\"Vadodara\",\"Valsad\"];
\tvar Haryana = [\"Ambala\",\"Bhiwani\",\"Charkhi Dadri\",\"Faridabad\",\"Fatehabad\",\"Gurugram\",\"Hisar\",\"Jhajjar\",\"Jind\",\"Kaithal\",\"Karnal\",\"Kurukshetra\",\"Mahendragarh\",\"Mewat\",\"Palwal\",\"Panchkula\",\"Panipat\",\"Rewari\",\"Rohtak\",\"Sirsa\",\"Sonipat\",\"Yamunanagar\"];
\tvar HimachalPradesh = [\"Bilaspur\",\"Chamba\",\"Hamirpur\",\"Kangra\",\"Kinnaur\",\"Kullu\",\"Lahaul Spiti\",\"Mandi\",\"Shimla\",\"Sirmaur\",\"Solan\",\"Una\"];
\tvar JammuKashmir = [\"Anantnag\",\"Bandipora\",\"Baramulla\",\"Budgam\",\"Doda\",\"Ganderbal\",\"Jammu\",\"Kargil\",\"Kathua\",\"Kishtwar\",\"Kulgam\",\"Kupwara\",\"Leh\",\"Poonch\",\"Pulwama\",\"Rajouri\",\"Ramban\",\"Reasi\",\"Samba\",\"Shopian\",\"Srinagar\",\"Udhampur\"];
\tvar Jharkhand = [\"Bokaro\",\"Chatra\",\"Deoghar\",\"Dhanbad\",\"Dumka\",\"East Singhbhum\",\"Garhwa\",\"Giridih\",\"Godda\",\"Gumla\",\"Hazaribagh\",\"Jamtara\",\"Khunti\",\"Koderma\",\"Latehar\",\"Lohardaga\",\"Pakur\",\"Palamu\",\"Ramgarh\",\"Ranchi\",\"Sahebganj\",\"Seraikela Kharsawan\",\"Simdega\",\"West Singhbhum\"];
\tvar Karnataka = [\"Bagalkot\",\"Bangalore Rural\",\"Bangalore Urban\",\"Belgaum\",\"Bellary\",\"Bidar\",\"Vijayapura\",\"Chamarajanagar\",\"Chikkaballapur\",\"Chikkamagaluru\",\"Chitradurga\",\"Dakshina Kannada\",\"Davanagere\",\"Dharwad\",\"Gadag\",\"Gulbarga\",\"Hassan\",\"Haveri\",\"Kodagu\",\"Kolar\",\"Koppal\",\"Mandya\",\"Mysore\",\"Raichur\",\"Ramanagara\",\"Shimoga\",\"Tumkur\",\"Udupi\",\"Uttara Kannada\",\"Yadgir\"];
\tvar Kerala = [\"Alappuzha\",\"Ernakulam\",\"Idukki\",\"Kannur\",\"Kasaragod\",\"Kollam\",\"Kottayam\",\"Kozhikode\",\"Malappuram\",\"Palakkad\",\"Pathanamthitta\",\"Thiruvananthapuram\",\"Thrissur\",\"Wayanad\"];
\tvar MadhyaPradesh = [\"Agar Malwa\",\"Alirajpur\",\"Anuppur\",\"Ashoknagar\",\"Balaghat\",\"Barwani\",\"Betul\",\"Bhind\",\"Bhopal\",\"Burhanpur\",\"Chhatarpur\",\"Chhindwara\",\"Damoh\",\"Datia\",\"Dewas\",\"Dhar\",\"Dindori\",\"Guna\",\"Gwalior\",\"Harda\",\"Hoshangabad\",\"Indore\",\"Jabalpur\",\"Jhabua\",\"Katni\",\"Khandwa\",\"Khargone\",\"Mandla\",\"Mandsaur\",\"Morena\",\"Narsinghpur\",\"Neemuch\",\"Panna\",\"Raisen\",\"Rajgarh\",\"Ratlam\",\"Rewa\",\"Sagar\",\"Satna\",
\t\t\t\t\t\t \"Sehore\",\"Seoni\",\"Shahdol\",\"Shajapur\",\"Sheopur\",\"Shivpuri\",\"Sidhi\",\"Singrauli\",\"Tikamgarh\",\"Ujjain\",\"Umaria\",\"Vidisha\"];
\tvar Maharashtra = [\"Ahmednagar\",\"Akola\",\"Amravati\",\"Aurangabad\",\"Beed\",\"Bhandara\",\"Buldhana\",\"Chandrapur\",\"Dhule\",\"Gadchiroli\",\"Gondia\",\"Hingoli\",\"Jalgaon\",\"Jalna\",\"Kolhapur\",\"Latur\",\"Mumbai City\",\"Mumbai Suburban\",\"Nagpur\",\"Nanded\",\"Nandurbar\",\"Nashik\",\"Osmanabad\",\"Palghar\",\"Parbhani\",\"Pune\",\"Raigad\",\"Ratnagiri\",\"Sangli\",\"Satara\",\"Sindhudurg\",\"Solapur\",\"Thane\",\"Wardha\",\"Washim\",\"Yavatmal\"];
\tvar Manipur = [\"Bishnupur\",\"Chandel\",\"Churachandpur\",\"Imphal East\",\"Imphal West\",\"Jiribam\",\"Kakching\",\"Kamjong\",\"Kangpokpi\",\"Noney\",\"Pherzawl\",\"Senapati\",\"Tamenglong\",\"Tengnoupal\",\"Thoubal\",\"Ukhrul\"];
\tvar Meghalaya = [\"East Garo Hills\",\"East Jaintia Hills\",\"East Khasi Hills\",\"North Garo Hills\",\"Ri Bhoi\",\"South Garo Hills\",\"South West Garo Hills\",\"South West Khasi Hills\",\"West Garo Hills\",\"West Jaintia Hills\",\"West Khasi Hills\"];
\tvar Mizoram = [\"Aizawl\",\"Champhai\",\"Kolasib\",\"Lawngtlai\",\"Lunglei\",\"Mamit\",\"Saiha\",\"Serchhip\",\"Aizawl\",\"Champhai\",\"Kolasib\",\"Lawngtlai\",\"Lunglei\",\"Mamit\",\"Saiha\",\"Serchhip\"];
\tvar Nagaland = [\"Dimapur\",\"Kiphire\",\"Kohima\",\"Longleng\",\"Mokokchung\",\"Mon\",\"Peren\",\"Phek\",\"Tuensang\",\"Wokha\",\"Zunheboto\"];
\tvar Odisha = [\"Angul\",\"Balangir\",\"Balasore\",\"Bargarh\",\"Bhadrak\",\"Boudh\",\"Cuttack\",\"Debagarh\",\"Dhenkanal\",\"Gajapati\",\"Ganjam\",\"Jagatsinghpur\",\"Jajpur\",\"Jharsuguda\",\"Kalahandi\",\"Kandhamal\",\"Kendrapara\",\"Kendujhar\",\"Khordha\",\"Koraput\",\"Malkangiri\",\"Mayurbhanj\",\"Nabarangpur\",\"Nayagarh\",\"Nuapada\",\"Puri\",\"Rayagada\",\"Sambalpur\",\"Subarnapur\",\"Sundergarh\"];
\tvar Punjab = [\"Amritsar\",\"Barnala\",\"Bathinda\",\"Faridkot\",\"Fatehgarh Sahib\",\"Fazilka\",\"Firozpur\",\"Gurdaspur\",\"Hoshiarpur\",\"Jalandhar\",\"Kapurthala\",\"Ludhiana\",\"Mansa\",\"Moga\",\"Mohali\",\"Muktsar\",\"Pathankot\",\"Patiala\",\"Rupnagar\",\"Sangrur\",\"Shaheed Bhagat Singh Nagar\",\"Tarn Taran\"];
\tvar Rajasthan = [\"Ajmer\",\"Alwar\",\"Banswara\",\"Baran\",\"Barmer\",\"Bharatpur\",\"Bhilwara\",\"Bikaner\",\"Bundi\",\"Chittorgarh\",\"Churu\",\"Dausa\",\"Dholpur\",\"Dungarpur\",\"Ganganagar\",\"Hanumangarh\",\"Jaipur\",\"Jaisalmer\",\"Jalore\",\"Jhalawar\",\"Jhunjhunu\",\"Jodhpur\",\"Karauli\",\"Kota\",\"Nagaur\",\"Pali\",\"Pratapgarh\",\"Rajsamand\",\"Sawai Madhopur\",\"Sikar\",\"Sirohi\",\"Tonk\",\"Udaipur\"];
\tvar Sikkim = [\"East Sikkim\",\"North Sikkim\",\"South Sikkim\",\"West Sikkim\"];
\tvar TamilNadu = [\"Ariyalur\",\"Chennai\",\"Coimbatore\",\"Cuddalore\",\"Dharmapuri\",\"Dindigul\",\"Erode\",\"Kanchipuram\",\"Kanyakumari\",\"Karur\",\"Krishnagiri\",\"Madurai\",\"Nagapattinam\",\"Namakkal\",\"Nilgiris\",\"Perambalur\",\"Pudukkottai\",\"Ramanathapuram\",\"Salem\",\"Sivaganga\",\"Thanjavur\",\"Theni\",\"Thoothukudi\",\"Tiruchirappalli\",\"Tirunelveli\",\"Tiruppur\",\"Tiruvallur\",\"Tiruvannamalai\",\"Tiruvarur\",\"Vellore\",\"Viluppuram\",\"Virudhunagar\"];
\tvar Telangana = [\"Adilabad\",\"Bhadradri Kothagudem\",\"Hyderabad\",\"Jagtial\",\"Jangaon\",\"Jayashankar\",\"Jogulamba\",\"Kamareddy\",\"Karimnagar\",\"Khammam\",\"Komaram Bheem\",\"Mahabubabad\",\"Mahbubnagar\",\"Mancherial\",\"Medak\",\"Medchal\",\"Nagarkurnool\",\"Nalgonda\",\"Nirmal\",\"Nizamabad\",\"Peddapalli\",\"Rajanna Sircilla\",\"Ranga Reddy\",\"Sangareddy\",\"Siddipet\",\"Suryapet\",\"Vikarabad\",\"Wanaparthy\",\"Warangal Rural\",\"Warangal Urban\",\"Yadadri Bhuvanagiri\"];
\tvar Tripura = [\"Dhalai\",\"Gomati\",\"Khowai\",\"North Tripura\",\"Sepahijala\",\"South Tripura\",\"Unakoti\",\"West Tripura\"];
\tvar UttarPradesh = [\"Agra\",\"Aligarh\",\"Allahabad\",\"Ambedkar Nagar\",\"Amethi\",\"Amroha\",\"Auraiya\",\"Azamgarh\",\"Baghpat\",\"Bahraich\",\"Ballia\",\"Balrampur\",\"Banda\",\"Barabanki\",\"Bareilly\",\"Basti\",\"Bhadohi\",\"Bijnor\",\"Budaun\",\"Bulandshahr\",\"Chandauli\",\"Chitrakoot\",\"Deoria\",\"Etah\",\"Etawah\",\"Faizabad\",\"Farrukhabad\",\"Fatehpur\",\"Firozabad\",\"Gautam Buddha Nagar\",\"Ghaziabad\",\"Ghazipur\",\"Gonda\",\"Gorakhpur\",\"Hamirpur\",\"Hapur\",\"Hardoi\",\"Hathras\",\"Jalaun\",\"Jaunpur\",\"Jhansi\",\"Kannauj\",\"Kanpur Dehat\",\"Kanpur Nagar\",\"Kasganj\",\"Kaushambi\",\"Kheri\",\"Kushinagar\",\"Lalitpur\",\"Lucknow\",\"Maharajganj\",\"Mahoba\",\"Mainpuri\",\"Mathura\",\"Mau\",\"Meerut\",\"Mirzapur\",\"Moradabad\",\"Muzaffarnagar\",\"Pilibhit\",\"Pratapgarh\",\"Raebareli\",\"Rampur\",\"Saharanpur\",\"Sambhal\",\"Sant Kabir Nagar\",\"Shahjahanpur\",\"Shamli\",\"Shravasti\",\"Siddharthnagar\",\"Sitapur\",\"Sonbhadra\",\"Sultanpur\",\"Unnao\",\"Varanasi\"];
\tvar Uttarakhand  = [\"Almora\",\"Bageshwar\",\"Chamoli\",\"Champawat\",\"Dehradun\",\"Haridwar\",\"Nainital\",\"Pauri\",\"Pithoragarh\",\"Rudraprayag\",\"Tehri\",\"Udham Singh Nagar\",\"Uttarkashi\"];
\tvar WestBengal = [\"Alipurduar\",\"Bankura\",\"Birbhum\",\"Cooch Behar\",\"Dakshin Dinajpur\",\"Darjeeling\",\"Hooghly\",\"Howrah\",\"Jalpaiguri\",\"Jhargram\",\"Kalimpong\",\"Kolkata\",\"Malda\",\"Murshidabad\",\"Nadia\",\"North 24 Parganas\",\"Paschim Bardhaman\",\"Paschim Medinipur\",\"Purba Bardhaman\",\"Purba Medinipur\",\"Purulia\",\"South 24 Parganas\",\"Uttar Dinajpur\"];
\tvar AndamanNicobar = [\"Nicobar\",\"North Middle Andaman\",\"South Andaman\"];
\tvar Chandigarh = [\"Chandigarh\"];
\tvar DadraHaveli = [\"Dadra Nagar Haveli\"];
\tvar DamanDiu = [\"Daman\",\"Diu\"];
\tvar Delhi = [\"Central Delhi\",\"East Delhi\",\"New Delhi\",\"North Delhi\",\"North East Delhi\",\"North West Delhi\",\"Shahdara\",\"South Delhi\",\"South East Delhi\",\"South West Delhi\",\"West Delhi\"];
\tvar Lakshadweep = [\"Lakshadweep\"];
\tvar Puducherry = [\"Karaikal\",\"Mahe\",\"Puducherry\",\"Yanam\"];


\t\$(\"#inputState\").change(function(){
\t\tvar StateSelected = \$(this).val();
\t\tvar optionsList;
\t\tvar htmlString = \"\";

\t\tswitch (StateSelected) {
\t\t\tcase \"Andra Pradesh\":
\t\t\t\toptionsList = AndraPradesh;
\t\t\t\tbreak;
\t\t\tcase \"Arunachal Pradesh\":
\t\t\t\toptionsList = ArunachalPradesh;
\t\t\t\tbreak;
\t\t\tcase \"Assam\":
\t\t\t\toptionsList = Assam;
\t\t\t\tbreak;
\t\t\tcase \"Bihar\":
\t\t\t\toptionsList = Bihar;
\t\t\t\tbreak;
\t\t\tcase \"Chhattisgarh\":
\t\t\t\toptionsList = Chhattisgarh;
\t\t\t\tbreak;
\t\t\tcase \"Goa\":
\t\t\t\toptionsList = Goa;
\t\t\t\tbreak;
\t\t\tcase  \"Gujarat\":
\t\t\t\toptionsList = Gujarat;
\t\t\t\tbreak;
\t\t\tcase \"Haryana\":
\t\t\t\toptionsList = Haryana;
\t\t\t\tbreak;
\t\t\tcase \"Himachal Pradesh\":
\t\t\t\toptionsList = HimachalPradesh;
\t\t\t\tbreak;
\t\t\tcase \"Jammu and Kashmir\":
\t\t\t\toptionsList = JammuKashmir;
\t\t\t\tbreak;
\t\t\tcase \"Jharkhand\":
\t\t\t\toptionsList = Jharkhand;
\t\t\t\tbreak;
\t\t\tcase  \"Karnataka\":
\t\t\t\toptionsList = Karnataka;
\t\t\t\tbreak;
\t\t\tcase \"Kerala\":
\t\t\t\toptionsList = Kerala;
\t\t\t\tbreak;
\t\t\tcase  \"Madya Pradesh\":
\t\t\t\toptionsList = MadhyaPradesh;
\t\t\t\tbreak;
\t\t\tcase \"Maharashtra\":
\t\t\t\toptionsList = Maharashtra;
\t\t\t\tbreak;
\t\t\tcase  \"Manipur\":
\t\t\t\toptionsList = Manipur;
\t\t\t\tbreak;
\t\t\tcase \"Meghalaya\":
\t\t\t\toptionsList = Meghalaya ;
\t\t\t\tbreak;
\t\t\tcase  \"Mizoram\":
\t\t\t\toptionsList = Mizoram;
\t\t\t\tbreak;
\t\t\tcase \"Nagaland\":
\t\t\t\toptionsList = Nagaland;
\t\t\t\tbreak;
\t\t\tcase  \"Orissa\":
\t\t\t\toptionsList = Orissa;
\t\t\t\tbreak;
\t\t\tcase \"Punjab\":
\t\t\t\toptionsList = Punjab;
\t\t\t\tbreak;
\t\t\tcase  \"Rajasthan\":
\t\t\t\toptionsList = Rajasthan;
\t\t\t\tbreak;
\t\t\tcase \"Sikkim\":
\t\t\t\toptionsList = Sikkim;
\t\t\t\tbreak;
\t\t\tcase  \"Tamil Nadu\":
\t\t\t\toptionsList = TamilNadu;
\t\t\t\tbreak;
\t\t\tcase  \"Telangana\":
\t\t\t\toptionsList = Telangana;
\t\t\t\tbreak;
\t\t\tcase \"Tripura\":
\t\t\t\toptionsList = Tripura ;
\t\t\t\tbreak;
\t\t\tcase  \"Uttaranchal\":
\t\t\t\toptionsList = Uttaranchal;
\t\t\t\tbreak;
\t\t\tcase  \"Uttar Pradesh\":
\t\t\t\toptionsList = UttarPradesh;
\t\t\t\tbreak;
\t\t\tcase \"West Bengal\":
\t\t\t\toptionsList = WestBengal;
\t\t\t\tbreak;
\t\t\tcase  \"Andaman and Nicobar Islands\":
\t\t\t\toptionsList = AndamanNicobar;
\t\t\t\tbreak;
\t\t\tcase \"Chandigarh\":
\t\t\t\toptionsList = Chandigarh;
\t\t\t\tbreak;
\t\t\tcase  \"Dadar and Nagar Haveli\":
\t\t\t\toptionsList = DadraHaveli;
\t\t\t\tbreak;
\t\t\tcase \"Daman and Diu\":
\t\t\t\toptionsList = DamanDiu;
\t\t\t\tbreak;
\t\t\tcase  \"Delhi\":
\t\t\t\toptionsList = Delhi;
\t\t\t\tbreak;
\t\t\tcase \"Lakshadeep\":
\t\t\t\toptionsList = Lakshadeep ;
\t\t\t\tbreak;
\t\t\tcase  \"Pondicherry\":
\t\t\t\toptionsList = Pondicherry;
\t\t\t\tbreak;
\t\t}


\t\tfor(var i = 0; i < optionsList.length; i++){
\t\t\thtmlString = htmlString+\"<option value='\"+ optionsList[i] +\"'>\"+ optionsList[i] +\"</option>\";
\t\t}
\t\t\$(\"#inputDistrict\").html(htmlString);

\t});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var AndraPradesh = [\"Anantapur\", \"Chittoor\", \"East Godavari\", \"Guntur\", \"Kadapa\", \"Krishna\", \"Kurnool\", \"Prakasam\", \"Nellore\", \"Srikakulam\", \"Visakhapatnam\", \"Vizianagaram\", \"West Godavari\"];
  // Rest of the states and districts go here...

  // Example usage: populate a dropdown with options
  var stateDropdown = document.getElementById('state-dropdown');
  var districtDropdown = document.getElementById('district-dropdown');

  stateDropdown.addEventListener('change', function() {
    var selectedState = stateDropdown.value;
    var districts = [];

    switch (selectedState) {
      case 'AndraPradesh':
        districts = AndraPradesh;
        break;
      // Add cases for other states...

      default:
        // Handle default case if needed
        break;
    }

    // Clear previous options
    districtDropdown.innerHTML = '';

    // Populate district dropdown with options
    districts.forEach(function(district) {
      var option = document.createElement('option');
      option.value = district;
      option.text = district;
      districtDropdown.appendChild(option);
    });
  });
});

</script>

<!-- Data Counter Js -->
<script>
\$(document).ready(function() {
  var a = 0;

  var \$counterBox = \$(\"#counter-box\");
  var oTop = \$counterBox.offset().top - window.innerHeight;

  \$(window).scroll(function() {
    if (a === 0 && \$(window).scrollTop() > oTop) {
      \$(\".counter\").each(function() {
        var \$this = \$(this);
        var countTo = \$this.attr(\"data-number\");
        \$({
          countNum: \$this.text()
        }).animate(
          {
            countNum: countTo
          },
          {
            duration: 5000,
            easing: \"swing\",
            step: function() {
              \$this.text(Math.ceil(this.countNum).toLocaleString(\"en\"));
            },
            complete: function() {
              \$this.text(Math.ceil(this.countNum).toLocaleString(\"en\"));
            }
          }
        );
      });
      a = 1;
    }
  });
});
</script>

<script>
\twindow.addEventListener('scroll', function() {
\t\tvar header = document.querySelector('header.header'); // Replace 'header' with the appropriate selector for your header element

\t\tif (window.pageYOffset > 10) {
\t\t\theader.classList.add('active');
\t\t} else {
\t\t\theader.classList.remove('active');
\t\t}
\t});

</script>

<script>
\t// Main Button Js Start
\t// JavaScript code
\twindow.addEventListener('DOMContentLoaded', function() {
\t\t// Find the element(s) with the specified class name
\t\tvar elements = document.getElementsByClassName('fusion_btn');
\t\t// Loop through each found element
\t\tfor (var i = 0; i < elements.length; i++) {
\t\t\t// Create a new span element for each iteration
\t\t\tvar span = document.createElement('span');

\t\t\t// Append the empty span element to the current element in the loop
\t\t\telements[i].appendChild(span);
\t\t}
\t});

\t\$(function () {
\t\t\$('.fusion_btn').
\t\ton('mouseenter', function (e) {
\t\t\tvar parentOffset = \$(this).offset(),
\t\t\t\trelX = e.pageX - parentOffset.left,
\t\t\t\trelY = e.pageY - parentOffset.top;
\t\t\t\$(this).find('span').css({ top: relY, left: relX });
\t\t}).
\t\ton('mouseout', function (e) {
\t\t\tvar parentOffset = \$(this).offset(),
\t\t\t\trelX = e.pageX - parentOffset.left,
\t\t\t\trelY = e.pageY - parentOffset.top;
\t\t\t\$(this).find('span').css({ top: relY, left: relX });
\t\t});
\t});
\t// Main Button Js End
</script>
  <script>
    window.addEventListener('scroll', function () {
      var scrollToTopBtn = document.getElementById('scrollToTopBtn');
      if (window.pageYOffset > 300) {
        scrollToTopBtn.classList.add('show');
      } else {
        scrollToTopBtn.classList.remove('show');
      }
    });

    document.getElementById('scrollToTopBtn').addEventListener('click', function () {
      smoothScrollToTop(1000);
    });

    function smoothScrollToTop(duration) {
      var start = window.pageYOffset;
      var distance = -start;
      var startTime = performance.now();

      function animation(currentTime) {
        var timeElapsed = currentTime - startTime;
        var scrollY = ease(timeElapsed, start, distance, duration);
        window.scrollTo(0, scrollY);
        if (timeElapsed < duration) requestAnimationFrame(animation);
      }

      function ease(t, b, c, d) {
        t /= d;
        t--;
        return c * (t * t * t * t * t + 1) + b;
      }

      requestAnimationFrame(animation);
    }
  </script>";
    }

    public function getTemplateName()
    {
        return "themes/custom/breeze/templates/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer bg_black\">
\t<div class=\"container\">
\t\t<div class=\"row p_100\">
\t\t\t<div class=\"col-md-12 col-lg-3\">
\t\t\t\t<div class=\"footer_logo_part\">
\t\t\t\t\t<div class=\"footer_logo\">
\t\t\t\t\t\t<a href=\"https://nextstep.net.in/fusion-cars\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/uploads/2023/05/footer_logo.png\" alt=\"\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer_timing text-white\">
\t\t\t\t\t\t<h5> <strong>OPENING HOURS:</strong> <br>
\t\t\t\t\t\t\tMon - Sun: 10am - 8pm</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_call_now\">
\t\t\t\t\t<h5>Call Us On (1)</h5>
\t\t\t\t\t<a href=\"tel:+91 9999999 681\"><strong>+91 9999999 681</strong></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t<h5 class=\"mb-2\"><strong>USEFUL LINKS</strong></h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=BMW\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Pre-Owned BMW Cars</a></li>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/collections/?brand=Audi\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Pre-Owned Audi Cars</a></li>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/collections/\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Used Luxury Cars Collection</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_call_now\">
\t\t\t\t\t<h5>Call Us On (2)</h5>
\t\t\t\t\t<a href=\"tel:+91 999999 4720\"><strong>+91 999999 4720</strong></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t<h5 class=\"mb-2\"><strong>OUR INFO</strong></h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/about-us/\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">About Us</a></li>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/collections/\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Collections</a></li>
\t\t\t\t\t\t<li><a href=\"https://nextstep.net.in/fusion-cars/showroom/\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">Showrooms</a></li>
<!-- \t\t\t\t\t\t<li><a href=\"/insights/\"><img src=\"// /assets/images/footer_icon.png\">News/Update</a></li> -->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"footer_adress mb-5\">
\t\t\t\t\t<a href=\"https://goo.gl/maps/orVnxPzSJfv9KLC96\" class=\"fusion_btn text-white\" target=\"_blank\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_map.png\" alt=\"\"> Fusion Cars On Map</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t<h5 class=\"mb-2\"><strong>Address</strong></h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_icon.png\">A-99/100, Ganesh Nagar Tilak Nagar, Delhi, 110018</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- \t\t\t\t\t<div class=\"footer_form\">
<div class=\"form_field\">
<input type=\"text\" placeholder=\"Subscribe Newsletter\">
</div>
<div class=\"form_submit_field\">
<a href=\"\" class=\"fusion_btn\"><img src=\" ///assets/images/Mail.png\" alt=\"\"> </a>
</div>
</div> -->
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"copyright_sec\">
\t\t\t\t<div class=\"copy_left\">
\t\t\t\t\t<p>© 2023 <a href=\"fusioncars.com\">FusionCars.com</a> all rights reserved.  </p>
\t\t\t\t\t<p>
\t\t\t\t\t\tPowered By
\t\t\t\t\t\t<a href=\"https://digitalbirbal.com/\">Digital Birbal</a>
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"copy_icons\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://instagram.com/fusioncarsindia?igshid=YmMyMTA2M2Y=\" target=\"_blank\"><img src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_insta.png\" alt=\"\"> . instagram</a></li>
\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/fusioncarsindia?mibextid=LQQJ4d\" target=\"_blank\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_facebook.png\" alt=\"\" > . facebook</a></li>
\t\t\t\t\t\t<li><a href=\" https://www.youtube.com/c/FusionCars\" target=\"_blank\"><img src=\" https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/images/footer_youtube.png\" alt=\"\" > . youtube</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>



</footer>


<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/jquery.min.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/header.js\"></script>    
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/owl.carousel.min.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/main.js\"></script>
<script src=\"https://imperialauto.in/wp-content/themes/imperial-auto/assets/js/fontawesome.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/slick.js\"></script>
<script src=\"https://nextstep.net.in/fusion-cars/wp-content/themes/Fusion%20Cars/assets/js/slick.min.js\"></script>
<script src=\"https://www.avmarketingsolutions.in/wp-content/themes/av-marketing-solutions/assets/js/fontawesome.js\"></script>
<script src=\"https://bharatenterprises.co.in/wp-content/themes/bharat%20Enterprises/assets/js/fancybox.js\"></script>

<script>
\t\$('.slider-single').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tarrows: false,
\t\tfade: true,
\t\tasNavFor: '.slider-nav'

\t});
\t\$('.slider-nav').slick({
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tasNavFor: '.slider-single',
\t\tdots: false,
\t\tcenterMode: true,
\t\tcenterPadding: '0px',
\t\tfocusOnSelect: true,
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 1024,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,

\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 992,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 768,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 575,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t}
\t\t]
\t});
</script>

<script>
\t\$(\".ptl_lg\").owlCarousel({
\t\tloop: false,
\t\tnav: false,
\t\tdots: true,
\t\tsmartSpeed: 800,
\t\tmargin: 30,
\t\tautoplayHoverPause: false,
\t\tautoplay: true,
\t\tresponsive: {
\t\t\t0: {
\t\t\t\titems: 1,
\t\t\t},
\t\t\t576: {
\t\t\t\titems: 2,
\t\t\t},
\t\t\t768: {
\t\t\t\titems: 3,
\t\t\t},
\t\t\t992: {
\t\t\t\titems: 5,
\t\t\t},
\t\t\t1200: {
\t\t\t\titems: 5,
\t\t\t},
\t\t\t1400: {
\t\t\t\titems: 5,
\t\t\t},
\t\t},
\t});


</script>
<script>
\t// Get the select boxes and checkboxes
\tconst categorySelect = document.getElementById(\"category\");
\tconst brandSelect = document.getElementById(\"brand\");
\tconst priceSelect = document.getElementById(\"price\");
\tconst ratingSelect = document.getElementById(\"rating\");
\tconst fuelsSelect = document.getElementById(\"car-fuels\");
\tconst featuresCheckboxes = document.querySelectorAll('input[type=\"checkbox\"]');

\t// Get all the products
\tconst products = document.querySelectorAll(\".product\");

\t// Add event listeners to the select boxes and checkboxes
\tcategorySelect.addEventListener(\"change\", filterProducts);
\tbrandSelect.addEventListener(\"change\", filterProducts);
\tpriceSelect.addEventListener(\"change\", filterProducts);
\tratingSelect.addEventListener(\"change\", filterProducts);
\tfuelsSelect.addEventListener(\"change\", filterProducts);
\tfeaturesCheckboxes.forEach((checkbox) => {
\t\tcheckbox.addEventListener(\"change\", filterProducts);
\t});

\t// Define the filterProducts function
\tfunction filterProducts() {
\t\t// Get the selected options
\t\tconst selectedCategory = categorySelect.value;
\t\tconst selectedBrand = brandSelect.value;
\t\tconst selectedPrice = priceSelect.value;
\t\tconst selectedRating = ratingSelect.value;
\t\tconst selectedFuel = fuelsSelect.value;
\t\tconst selectedFeatures = [];
\t\tfeaturesCheckboxes.forEach((checkbox) => {
\t\t\tif (checkbox.checked) {
\t\t\t\tselectedFeatures.push(checkbox.value);
\t\t\t}
\t\t});

\t\t// Get the current year
\t\t

\t\t// Loop through all the products and show/hide them based on the selected options
\t\tproducts.forEach((product) => {
\t\t\tconst categoryMatch = selectedCategory === \"\" || product.getAttribute(\"data-category\") === selectedCategory;
\t\t\tconst brandMatch = selectedBrand === \"\" || product.getAttribute(\"data-brand\") === selectedBrand;
\t\t\tconst priceMatch =
\t\t\t\t  selectedPrice === \"\" ||
\t\t\t\t  (selectedPrice === \"0-100000\" && product.getAttribute(\"data-price\") <= 100000) ||
\t\t\t\t  (selectedPrice === \"100000-500000\" && product.getAttribute(\"data-price\") > 100000 && product.getAttribute(\"data-price\") <= 500000) ||
\t\t\t\t  (selectedPrice === \"500000-1000000\" && product.getAttribute(\"data-price\") > 500000 && product.getAttribute(\"data-price\") <= 1000000) ||
\t\t\t\t  (selectedPrice === \"1000000-2000000\" && product.getAttribute(\"data-price\") > 1000000 && product.getAttribute(\"data-price\") <= 2000000) ||
\t\t\t\t  (selectedPrice === \"2000000-5000000\" && product.getAttribute(\"data-price\") > 2000000 && product.getAttribute(\"data-price\") <= 5000000) ||
\t\t\t\t  (selectedPrice === \"5000000-10000000\" && product.getAttribute(\"data-price\") > 5000000 && product.getAttribute(\"data-price\") <= 10000000) ||
\t\t\t\t  (selectedPrice === \"10000000-20000000\" && product.getAttribute(\"data-price\") > 10000000 && product.getAttribute(\"data-price\") <= 20000000) ||
\t\t\t\t  (selectedPrice === \"20000000-50000000\" && product.getAttribute(\"data-price\") > 20000000 && product.getAttribute(\"data-price\") <= 50000000) ||
\t\t\t\t  (selectedPrice === \"50000000-100000000\" && product.getAttribute(\"data-price\") > 50000000 && product.getAttribute(\"data-price\") <= 100000000);

\t\t\tconst ratingMatch = selectedRating === \"\" || product.getAttribute(\"data-rating\") >= selectedRating;
\t\t\tconst fuelMatch = selectedFuel === \"\" || product.getAttribute(\"data-fuel\") === selectedFuel;
\t\t\tconst featuresMatch = selectedFeatures.length === 0 || selectedFeatures.some((feature) => product.getAttribute(\"data-features\").includes(feature));

\t\t\t// Filter based on brand year
\t\t\tconst yeear = new Date().getFullYear();
\t\t\t
\t\t\tconst currentYear = yeear - 1;
\t\t\t
\t\t\tconst brandYear = (product.getAttribute(\"data-brand-year\"));

\t\t\tconst yearDifference = currentYear - brandYear;

\t\t\tconst yearMatch = selectedBrand === \"\" || (selectedBrand === \"1\" && yearDifference < 1) ||
\t\t\t\t  (selectedBrand === \"2\" && yearDifference < 2) ||
\t\t\t\t  (selectedBrand === \"3\" && yearDifference < 3) ||
\t\t\t\t  (selectedBrand === \"4\" && yearDifference < 5) ||
\t\t\t\t  (selectedBrand === \"5\" && yearDifference < 7) ||
\t\t\t\t  (selectedBrand === \"6\" && yearDifference >= 7);

\t\t\tconsole.log(yearMatch);

\t\t\tif (categoryMatch  && priceMatch && ratingMatch && fuelMatch && featuresMatch && yearMatch) {
\t\t\t\tproduct.style.display = \"block\";
\t\t\t} else {
\t\t\t\tproduct.style.display = \"none\";
\t\t\t}
\t\t});
\t}

</script>
<script>
\t// Get the URL parameters
\tconst urlParams = new URLSearchParams(window.location.search);

\t// Pre-select the options based on the URL parameters
\tif (urlParams.has('category')) {
\t\tcategorySelect.value = urlParams.get('category');
\t}
\tif (urlParams.has('price')) {
\t\tpriceSelect.value = urlParams.get('price');
\t}
\tif (urlParams.has('features')) {
\t\tconst selectedFeatures = urlParams.get('features').split(',');
\t\tfeaturesCheckboxes.forEach((checkbox) => {
\t\t\tif (selectedFeatures.includes(checkbox.value)) {
\t\t\t\tcheckbox.checked = true;
\t\t\t}
\t\t});
\t}

\t// Call the filterProducts function to filter the products on page load
\tfilterProducts();

</script>
<script>
\t\$('.slider-single2').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tarrows: false,
\t\tfade: true,
\t\tasNavFor: '.slider-nav2'

\t});
\t\$('.slider-nav2').slick({
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tasNavFor: '.slider-single2',
\t\tdots: false,
\t\tfocusOnSelect: true,
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 1024,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tdots: true,

\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 992,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 768,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 575,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tdots: true,
\t\t\t\t\tarrows: true,
\t\t\t\t\tarrows:false
\t\t\t\t}
\t\t\t}


\t\t]


\t});
</script>
<script>
\t\$(document).ready(function() {
\t\t\$('.fancybox').fancybox();
\t});
</script>
<script>
\t\$(\".similar_lg\").owlCarousel({
\t\tloop: false,
\t\tnav: false,
\t\tdots: true,
\t\tsmartSpeed: 800,
\t\tmargin: 30,
\t\tautoplayHoverPause: false,
\t\tautoplay: true,
\t\tresponsive: {
\t\t\t0: {
\t\t\t\titems: 1,
\t\t\t},
\t\t\t576: {
\t\t\t\titems: 1,
\t\t\t},
\t\t\t768: {
\t\t\t\titems: 3,
\t\t\t},
\t\t\t992: {
\t\t\t\titems: 3,
\t\t\t},
\t\t\t1200: {
\t\t\t\titems: 3,
\t\t\t},
\t\t\t1400: {
\t\t\t\titems: 3,
\t\t\t},
\t\t},
\t});


</script>
<script>
\tvar AndraPradesh = [\"Anantapur\",\"Chittoor\",\"East Godavari\",\"Guntur\",\"Kadapa\",\"Krishna\",\"Kurnool\",\"Prakasam\",\"Nellore\",\"Srikakulam\",\"Visakhapatnam\",\"Vizianagaram\",\"West Godavari\"];
\tvar ArunachalPradesh = [\"Anjaw\",\"Changlang\",\"Dibang Valley\",\"East Kameng\",\"East Siang\",\"Kra Daadi\",\"Kurung Kumey\",\"Lohit\",\"Longding\",\"Lower Dibang Valley\",\"Lower Subansiri\",\"Namsai\",\"Papum Pare\",\"Siang\",\"Tawang\",\"Tirap\",\"Upper Siang\",\"Upper Subansiri\",\"West Kameng\",\"West Siang\",\"Itanagar\"];
\tvar Assam = [\"Baksa\",\"Barpeta\",\"Biswanath\",\"Bongaigaon\",\"Cachar\",\"Charaideo\",\"Chirang\",\"Darrang\",\"Dhemaji\",\"Dhubri\",\"Dibrugarh\",\"Goalpara\",\"Golaghat\",\"Hailakandi\",\"Hojai\",\"Jorhat\",\"Kamrup Metropolitan\",\"Kamrup (Rural)\",\"Karbi Anglong\",\"Karimganj\",\"Kokrajhar\",\"Lakhimpur\",\"Majuli\",\"Morigaon\",\"Nagaon\",\"Nalbari\",\"Dima Hasao\",\"Sivasagar\",\"Sonitpur\",\"South Salmara Mankachar\",\"Tinsukia\",\"Udalguri\",\"West Karbi Anglong\"];
\tvar Bihar = [\"Araria\",\"Arwal\",\"Aurangabad\",\"Banka\",\"Begusarai\",\"Bhagalpur\",\"Bhojpur\",\"Buxar\",\"Darbhanga\",\"East Champaran\",\"Gaya\",\"Gopalganj\",\"Jamui\",\"Jehanabad\",\"Kaimur\",\"Katihar\",\"Khagaria\",\"Kishanganj\",\"Lakhisarai\",\"Madhepura\",\"Madhubani\",\"Munger\",\"Muzaffarpur\",\"Nalanda\",\"Nawada\",\"Patna\",\"Purnia\",\"Rohtas\",\"Saharsa\",\"Samastipur\",\"Saran\",\"Sheikhpura\",\"Sheohar\",\"Sitamarhi\",\"Siwan\",\"Supaul\",\"Vaishali\",\"West Champaran\"];
\tvar Chhattisgarh = [\"Balod\",\"Baloda Bazar\",\"Balrampur\",\"Bastar\",\"Bemetara\",\"Bijapur\",\"Bilaspur\",\"Dantewada\",\"Dhamtari\",\"Durg\",\"Gariaband\",\"Janjgir Champa\",\"Jashpur\",\"Kabirdham\",\"Kanker\",\"Kondagaon\",\"Korba\",\"Koriya\",\"Mahasamund\",\"Mungeli\",\"Narayanpur\",\"Raigarh\",\"Raipur\",\"Rajnandgaon\",\"Sukma\",\"Surajpur\",\"Surguja\"];
\tvar Goa = [\"North Goa\",\"South Goa\"];
\tvar Gujarat = [\"Ahmedabad\",\"Amreli\",\"Anand\",\"Aravalli\",\"Banaskantha\",\"Bharuch\",\"Bhavnagar\",\"Botad\",\"Chhota Udaipur\",\"Dahod\",\"Dang\",\"Devbhoomi Dwarka\",\"Gandhinagar\",\"Gir Somnath\",\"Jamnagar\",\"Junagadh\",\"Kheda\",\"Kutch\",\"Mahisagar\",\"Mehsana\",\"Morbi\",\"Narmada\",\"Navsari\",\"Panchmahal\",\"Patan\",\"Porbandar\",\"Rajkot\",\"Sabarkantha\",\"Surat\",\"Surendranagar\",\"Tapi\",\"Vadodara\",\"Valsad\"];
\tvar Haryana = [\"Ambala\",\"Bhiwani\",\"Charkhi Dadri\",\"Faridabad\",\"Fatehabad\",\"Gurugram\",\"Hisar\",\"Jhajjar\",\"Jind\",\"Kaithal\",\"Karnal\",\"Kurukshetra\",\"Mahendragarh\",\"Mewat\",\"Palwal\",\"Panchkula\",\"Panipat\",\"Rewari\",\"Rohtak\",\"Sirsa\",\"Sonipat\",\"Yamunanagar\"];
\tvar HimachalPradesh = [\"Bilaspur\",\"Chamba\",\"Hamirpur\",\"Kangra\",\"Kinnaur\",\"Kullu\",\"Lahaul Spiti\",\"Mandi\",\"Shimla\",\"Sirmaur\",\"Solan\",\"Una\"];
\tvar JammuKashmir = [\"Anantnag\",\"Bandipora\",\"Baramulla\",\"Budgam\",\"Doda\",\"Ganderbal\",\"Jammu\",\"Kargil\",\"Kathua\",\"Kishtwar\",\"Kulgam\",\"Kupwara\",\"Leh\",\"Poonch\",\"Pulwama\",\"Rajouri\",\"Ramban\",\"Reasi\",\"Samba\",\"Shopian\",\"Srinagar\",\"Udhampur\"];
\tvar Jharkhand = [\"Bokaro\",\"Chatra\",\"Deoghar\",\"Dhanbad\",\"Dumka\",\"East Singhbhum\",\"Garhwa\",\"Giridih\",\"Godda\",\"Gumla\",\"Hazaribagh\",\"Jamtara\",\"Khunti\",\"Koderma\",\"Latehar\",\"Lohardaga\",\"Pakur\",\"Palamu\",\"Ramgarh\",\"Ranchi\",\"Sahebganj\",\"Seraikela Kharsawan\",\"Simdega\",\"West Singhbhum\"];
\tvar Karnataka = [\"Bagalkot\",\"Bangalore Rural\",\"Bangalore Urban\",\"Belgaum\",\"Bellary\",\"Bidar\",\"Vijayapura\",\"Chamarajanagar\",\"Chikkaballapur\",\"Chikkamagaluru\",\"Chitradurga\",\"Dakshina Kannada\",\"Davanagere\",\"Dharwad\",\"Gadag\",\"Gulbarga\",\"Hassan\",\"Haveri\",\"Kodagu\",\"Kolar\",\"Koppal\",\"Mandya\",\"Mysore\",\"Raichur\",\"Ramanagara\",\"Shimoga\",\"Tumkur\",\"Udupi\",\"Uttara Kannada\",\"Yadgir\"];
\tvar Kerala = [\"Alappuzha\",\"Ernakulam\",\"Idukki\",\"Kannur\",\"Kasaragod\",\"Kollam\",\"Kottayam\",\"Kozhikode\",\"Malappuram\",\"Palakkad\",\"Pathanamthitta\",\"Thiruvananthapuram\",\"Thrissur\",\"Wayanad\"];
\tvar MadhyaPradesh = [\"Agar Malwa\",\"Alirajpur\",\"Anuppur\",\"Ashoknagar\",\"Balaghat\",\"Barwani\",\"Betul\",\"Bhind\",\"Bhopal\",\"Burhanpur\",\"Chhatarpur\",\"Chhindwara\",\"Damoh\",\"Datia\",\"Dewas\",\"Dhar\",\"Dindori\",\"Guna\",\"Gwalior\",\"Harda\",\"Hoshangabad\",\"Indore\",\"Jabalpur\",\"Jhabua\",\"Katni\",\"Khandwa\",\"Khargone\",\"Mandla\",\"Mandsaur\",\"Morena\",\"Narsinghpur\",\"Neemuch\",\"Panna\",\"Raisen\",\"Rajgarh\",\"Ratlam\",\"Rewa\",\"Sagar\",\"Satna\",
\t\t\t\t\t\t \"Sehore\",\"Seoni\",\"Shahdol\",\"Shajapur\",\"Sheopur\",\"Shivpuri\",\"Sidhi\",\"Singrauli\",\"Tikamgarh\",\"Ujjain\",\"Umaria\",\"Vidisha\"];
\tvar Maharashtra = [\"Ahmednagar\",\"Akola\",\"Amravati\",\"Aurangabad\",\"Beed\",\"Bhandara\",\"Buldhana\",\"Chandrapur\",\"Dhule\",\"Gadchiroli\",\"Gondia\",\"Hingoli\",\"Jalgaon\",\"Jalna\",\"Kolhapur\",\"Latur\",\"Mumbai City\",\"Mumbai Suburban\",\"Nagpur\",\"Nanded\",\"Nandurbar\",\"Nashik\",\"Osmanabad\",\"Palghar\",\"Parbhani\",\"Pune\",\"Raigad\",\"Ratnagiri\",\"Sangli\",\"Satara\",\"Sindhudurg\",\"Solapur\",\"Thane\",\"Wardha\",\"Washim\",\"Yavatmal\"];
\tvar Manipur = [\"Bishnupur\",\"Chandel\",\"Churachandpur\",\"Imphal East\",\"Imphal West\",\"Jiribam\",\"Kakching\",\"Kamjong\",\"Kangpokpi\",\"Noney\",\"Pherzawl\",\"Senapati\",\"Tamenglong\",\"Tengnoupal\",\"Thoubal\",\"Ukhrul\"];
\tvar Meghalaya = [\"East Garo Hills\",\"East Jaintia Hills\",\"East Khasi Hills\",\"North Garo Hills\",\"Ri Bhoi\",\"South Garo Hills\",\"South West Garo Hills\",\"South West Khasi Hills\",\"West Garo Hills\",\"West Jaintia Hills\",\"West Khasi Hills\"];
\tvar Mizoram = [\"Aizawl\",\"Champhai\",\"Kolasib\",\"Lawngtlai\",\"Lunglei\",\"Mamit\",\"Saiha\",\"Serchhip\",\"Aizawl\",\"Champhai\",\"Kolasib\",\"Lawngtlai\",\"Lunglei\",\"Mamit\",\"Saiha\",\"Serchhip\"];
\tvar Nagaland = [\"Dimapur\",\"Kiphire\",\"Kohima\",\"Longleng\",\"Mokokchung\",\"Mon\",\"Peren\",\"Phek\",\"Tuensang\",\"Wokha\",\"Zunheboto\"];
\tvar Odisha = [\"Angul\",\"Balangir\",\"Balasore\",\"Bargarh\",\"Bhadrak\",\"Boudh\",\"Cuttack\",\"Debagarh\",\"Dhenkanal\",\"Gajapati\",\"Ganjam\",\"Jagatsinghpur\",\"Jajpur\",\"Jharsuguda\",\"Kalahandi\",\"Kandhamal\",\"Kendrapara\",\"Kendujhar\",\"Khordha\",\"Koraput\",\"Malkangiri\",\"Mayurbhanj\",\"Nabarangpur\",\"Nayagarh\",\"Nuapada\",\"Puri\",\"Rayagada\",\"Sambalpur\",\"Subarnapur\",\"Sundergarh\"];
\tvar Punjab = [\"Amritsar\",\"Barnala\",\"Bathinda\",\"Faridkot\",\"Fatehgarh Sahib\",\"Fazilka\",\"Firozpur\",\"Gurdaspur\",\"Hoshiarpur\",\"Jalandhar\",\"Kapurthala\",\"Ludhiana\",\"Mansa\",\"Moga\",\"Mohali\",\"Muktsar\",\"Pathankot\",\"Patiala\",\"Rupnagar\",\"Sangrur\",\"Shaheed Bhagat Singh Nagar\",\"Tarn Taran\"];
\tvar Rajasthan = [\"Ajmer\",\"Alwar\",\"Banswara\",\"Baran\",\"Barmer\",\"Bharatpur\",\"Bhilwara\",\"Bikaner\",\"Bundi\",\"Chittorgarh\",\"Churu\",\"Dausa\",\"Dholpur\",\"Dungarpur\",\"Ganganagar\",\"Hanumangarh\",\"Jaipur\",\"Jaisalmer\",\"Jalore\",\"Jhalawar\",\"Jhunjhunu\",\"Jodhpur\",\"Karauli\",\"Kota\",\"Nagaur\",\"Pali\",\"Pratapgarh\",\"Rajsamand\",\"Sawai Madhopur\",\"Sikar\",\"Sirohi\",\"Tonk\",\"Udaipur\"];
\tvar Sikkim = [\"East Sikkim\",\"North Sikkim\",\"South Sikkim\",\"West Sikkim\"];
\tvar TamilNadu = [\"Ariyalur\",\"Chennai\",\"Coimbatore\",\"Cuddalore\",\"Dharmapuri\",\"Dindigul\",\"Erode\",\"Kanchipuram\",\"Kanyakumari\",\"Karur\",\"Krishnagiri\",\"Madurai\",\"Nagapattinam\",\"Namakkal\",\"Nilgiris\",\"Perambalur\",\"Pudukkottai\",\"Ramanathapuram\",\"Salem\",\"Sivaganga\",\"Thanjavur\",\"Theni\",\"Thoothukudi\",\"Tiruchirappalli\",\"Tirunelveli\",\"Tiruppur\",\"Tiruvallur\",\"Tiruvannamalai\",\"Tiruvarur\",\"Vellore\",\"Viluppuram\",\"Virudhunagar\"];
\tvar Telangana = [\"Adilabad\",\"Bhadradri Kothagudem\",\"Hyderabad\",\"Jagtial\",\"Jangaon\",\"Jayashankar\",\"Jogulamba\",\"Kamareddy\",\"Karimnagar\",\"Khammam\",\"Komaram Bheem\",\"Mahabubabad\",\"Mahbubnagar\",\"Mancherial\",\"Medak\",\"Medchal\",\"Nagarkurnool\",\"Nalgonda\",\"Nirmal\",\"Nizamabad\",\"Peddapalli\",\"Rajanna Sircilla\",\"Ranga Reddy\",\"Sangareddy\",\"Siddipet\",\"Suryapet\",\"Vikarabad\",\"Wanaparthy\",\"Warangal Rural\",\"Warangal Urban\",\"Yadadri Bhuvanagiri\"];
\tvar Tripura = [\"Dhalai\",\"Gomati\",\"Khowai\",\"North Tripura\",\"Sepahijala\",\"South Tripura\",\"Unakoti\",\"West Tripura\"];
\tvar UttarPradesh = [\"Agra\",\"Aligarh\",\"Allahabad\",\"Ambedkar Nagar\",\"Amethi\",\"Amroha\",\"Auraiya\",\"Azamgarh\",\"Baghpat\",\"Bahraich\",\"Ballia\",\"Balrampur\",\"Banda\",\"Barabanki\",\"Bareilly\",\"Basti\",\"Bhadohi\",\"Bijnor\",\"Budaun\",\"Bulandshahr\",\"Chandauli\",\"Chitrakoot\",\"Deoria\",\"Etah\",\"Etawah\",\"Faizabad\",\"Farrukhabad\",\"Fatehpur\",\"Firozabad\",\"Gautam Buddha Nagar\",\"Ghaziabad\",\"Ghazipur\",\"Gonda\",\"Gorakhpur\",\"Hamirpur\",\"Hapur\",\"Hardoi\",\"Hathras\",\"Jalaun\",\"Jaunpur\",\"Jhansi\",\"Kannauj\",\"Kanpur Dehat\",\"Kanpur Nagar\",\"Kasganj\",\"Kaushambi\",\"Kheri\",\"Kushinagar\",\"Lalitpur\",\"Lucknow\",\"Maharajganj\",\"Mahoba\",\"Mainpuri\",\"Mathura\",\"Mau\",\"Meerut\",\"Mirzapur\",\"Moradabad\",\"Muzaffarnagar\",\"Pilibhit\",\"Pratapgarh\",\"Raebareli\",\"Rampur\",\"Saharanpur\",\"Sambhal\",\"Sant Kabir Nagar\",\"Shahjahanpur\",\"Shamli\",\"Shravasti\",\"Siddharthnagar\",\"Sitapur\",\"Sonbhadra\",\"Sultanpur\",\"Unnao\",\"Varanasi\"];
\tvar Uttarakhand  = [\"Almora\",\"Bageshwar\",\"Chamoli\",\"Champawat\",\"Dehradun\",\"Haridwar\",\"Nainital\",\"Pauri\",\"Pithoragarh\",\"Rudraprayag\",\"Tehri\",\"Udham Singh Nagar\",\"Uttarkashi\"];
\tvar WestBengal = [\"Alipurduar\",\"Bankura\",\"Birbhum\",\"Cooch Behar\",\"Dakshin Dinajpur\",\"Darjeeling\",\"Hooghly\",\"Howrah\",\"Jalpaiguri\",\"Jhargram\",\"Kalimpong\",\"Kolkata\",\"Malda\",\"Murshidabad\",\"Nadia\",\"North 24 Parganas\",\"Paschim Bardhaman\",\"Paschim Medinipur\",\"Purba Bardhaman\",\"Purba Medinipur\",\"Purulia\",\"South 24 Parganas\",\"Uttar Dinajpur\"];
\tvar AndamanNicobar = [\"Nicobar\",\"North Middle Andaman\",\"South Andaman\"];
\tvar Chandigarh = [\"Chandigarh\"];
\tvar DadraHaveli = [\"Dadra Nagar Haveli\"];
\tvar DamanDiu = [\"Daman\",\"Diu\"];
\tvar Delhi = [\"Central Delhi\",\"East Delhi\",\"New Delhi\",\"North Delhi\",\"North East Delhi\",\"North West Delhi\",\"Shahdara\",\"South Delhi\",\"South East Delhi\",\"South West Delhi\",\"West Delhi\"];
\tvar Lakshadweep = [\"Lakshadweep\"];
\tvar Puducherry = [\"Karaikal\",\"Mahe\",\"Puducherry\",\"Yanam\"];


\t\$(\"#inputState\").change(function(){
\t\tvar StateSelected = \$(this).val();
\t\tvar optionsList;
\t\tvar htmlString = \"\";

\t\tswitch (StateSelected) {
\t\t\tcase \"Andra Pradesh\":
\t\t\t\toptionsList = AndraPradesh;
\t\t\t\tbreak;
\t\t\tcase \"Arunachal Pradesh\":
\t\t\t\toptionsList = ArunachalPradesh;
\t\t\t\tbreak;
\t\t\tcase \"Assam\":
\t\t\t\toptionsList = Assam;
\t\t\t\tbreak;
\t\t\tcase \"Bihar\":
\t\t\t\toptionsList = Bihar;
\t\t\t\tbreak;
\t\t\tcase \"Chhattisgarh\":
\t\t\t\toptionsList = Chhattisgarh;
\t\t\t\tbreak;
\t\t\tcase \"Goa\":
\t\t\t\toptionsList = Goa;
\t\t\t\tbreak;
\t\t\tcase  \"Gujarat\":
\t\t\t\toptionsList = Gujarat;
\t\t\t\tbreak;
\t\t\tcase \"Haryana\":
\t\t\t\toptionsList = Haryana;
\t\t\t\tbreak;
\t\t\tcase \"Himachal Pradesh\":
\t\t\t\toptionsList = HimachalPradesh;
\t\t\t\tbreak;
\t\t\tcase \"Jammu and Kashmir\":
\t\t\t\toptionsList = JammuKashmir;
\t\t\t\tbreak;
\t\t\tcase \"Jharkhand\":
\t\t\t\toptionsList = Jharkhand;
\t\t\t\tbreak;
\t\t\tcase  \"Karnataka\":
\t\t\t\toptionsList = Karnataka;
\t\t\t\tbreak;
\t\t\tcase \"Kerala\":
\t\t\t\toptionsList = Kerala;
\t\t\t\tbreak;
\t\t\tcase  \"Madya Pradesh\":
\t\t\t\toptionsList = MadhyaPradesh;
\t\t\t\tbreak;
\t\t\tcase \"Maharashtra\":
\t\t\t\toptionsList = Maharashtra;
\t\t\t\tbreak;
\t\t\tcase  \"Manipur\":
\t\t\t\toptionsList = Manipur;
\t\t\t\tbreak;
\t\t\tcase \"Meghalaya\":
\t\t\t\toptionsList = Meghalaya ;
\t\t\t\tbreak;
\t\t\tcase  \"Mizoram\":
\t\t\t\toptionsList = Mizoram;
\t\t\t\tbreak;
\t\t\tcase \"Nagaland\":
\t\t\t\toptionsList = Nagaland;
\t\t\t\tbreak;
\t\t\tcase  \"Orissa\":
\t\t\t\toptionsList = Orissa;
\t\t\t\tbreak;
\t\t\tcase \"Punjab\":
\t\t\t\toptionsList = Punjab;
\t\t\t\tbreak;
\t\t\tcase  \"Rajasthan\":
\t\t\t\toptionsList = Rajasthan;
\t\t\t\tbreak;
\t\t\tcase \"Sikkim\":
\t\t\t\toptionsList = Sikkim;
\t\t\t\tbreak;
\t\t\tcase  \"Tamil Nadu\":
\t\t\t\toptionsList = TamilNadu;
\t\t\t\tbreak;
\t\t\tcase  \"Telangana\":
\t\t\t\toptionsList = Telangana;
\t\t\t\tbreak;
\t\t\tcase \"Tripura\":
\t\t\t\toptionsList = Tripura ;
\t\t\t\tbreak;
\t\t\tcase  \"Uttaranchal\":
\t\t\t\toptionsList = Uttaranchal;
\t\t\t\tbreak;
\t\t\tcase  \"Uttar Pradesh\":
\t\t\t\toptionsList = UttarPradesh;
\t\t\t\tbreak;
\t\t\tcase \"West Bengal\":
\t\t\t\toptionsList = WestBengal;
\t\t\t\tbreak;
\t\t\tcase  \"Andaman and Nicobar Islands\":
\t\t\t\toptionsList = AndamanNicobar;
\t\t\t\tbreak;
\t\t\tcase \"Chandigarh\":
\t\t\t\toptionsList = Chandigarh;
\t\t\t\tbreak;
\t\t\tcase  \"Dadar and Nagar Haveli\":
\t\t\t\toptionsList = DadraHaveli;
\t\t\t\tbreak;
\t\t\tcase \"Daman and Diu\":
\t\t\t\toptionsList = DamanDiu;
\t\t\t\tbreak;
\t\t\tcase  \"Delhi\":
\t\t\t\toptionsList = Delhi;
\t\t\t\tbreak;
\t\t\tcase \"Lakshadeep\":
\t\t\t\toptionsList = Lakshadeep ;
\t\t\t\tbreak;
\t\t\tcase  \"Pondicherry\":
\t\t\t\toptionsList = Pondicherry;
\t\t\t\tbreak;
\t\t}


\t\tfor(var i = 0; i < optionsList.length; i++){
\t\t\thtmlString = htmlString+\"<option value='\"+ optionsList[i] +\"'>\"+ optionsList[i] +\"</option>\";
\t\t}
\t\t\$(\"#inputDistrict\").html(htmlString);

\t});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var AndraPradesh = [\"Anantapur\", \"Chittoor\", \"East Godavari\", \"Guntur\", \"Kadapa\", \"Krishna\", \"Kurnool\", \"Prakasam\", \"Nellore\", \"Srikakulam\", \"Visakhapatnam\", \"Vizianagaram\", \"West Godavari\"];
  // Rest of the states and districts go here...

  // Example usage: populate a dropdown with options
  var stateDropdown = document.getElementById('state-dropdown');
  var districtDropdown = document.getElementById('district-dropdown');

  stateDropdown.addEventListener('change', function() {
    var selectedState = stateDropdown.value;
    var districts = [];

    switch (selectedState) {
      case 'AndraPradesh':
        districts = AndraPradesh;
        break;
      // Add cases for other states...

      default:
        // Handle default case if needed
        break;
    }

    // Clear previous options
    districtDropdown.innerHTML = '';

    // Populate district dropdown with options
    districts.forEach(function(district) {
      var option = document.createElement('option');
      option.value = district;
      option.text = district;
      districtDropdown.appendChild(option);
    });
  });
});

</script>

<!-- Data Counter Js -->
<script>
\$(document).ready(function() {
  var a = 0;

  var \$counterBox = \$(\"#counter-box\");
  var oTop = \$counterBox.offset().top - window.innerHeight;

  \$(window).scroll(function() {
    if (a === 0 && \$(window).scrollTop() > oTop) {
      \$(\".counter\").each(function() {
        var \$this = \$(this);
        var countTo = \$this.attr(\"data-number\");
        \$({
          countNum: \$this.text()
        }).animate(
          {
            countNum: countTo
          },
          {
            duration: 5000,
            easing: \"swing\",
            step: function() {
              \$this.text(Math.ceil(this.countNum).toLocaleString(\"en\"));
            },
            complete: function() {
              \$this.text(Math.ceil(this.countNum).toLocaleString(\"en\"));
            }
          }
        );
      });
      a = 1;
    }
  });
});
</script>

<script>
\twindow.addEventListener('scroll', function() {
\t\tvar header = document.querySelector('header.header'); // Replace 'header' with the appropriate selector for your header element

\t\tif (window.pageYOffset > 10) {
\t\t\theader.classList.add('active');
\t\t} else {
\t\t\theader.classList.remove('active');
\t\t}
\t});

</script>

<script>
\t// Main Button Js Start
\t// JavaScript code
\twindow.addEventListener('DOMContentLoaded', function() {
\t\t// Find the element(s) with the specified class name
\t\tvar elements = document.getElementsByClassName('fusion_btn');
\t\t// Loop through each found element
\t\tfor (var i = 0; i < elements.length; i++) {
\t\t\t// Create a new span element for each iteration
\t\t\tvar span = document.createElement('span');

\t\t\t// Append the empty span element to the current element in the loop
\t\t\telements[i].appendChild(span);
\t\t}
\t});

\t\$(function () {
\t\t\$('.fusion_btn').
\t\ton('mouseenter', function (e) {
\t\t\tvar parentOffset = \$(this).offset(),
\t\t\t\trelX = e.pageX - parentOffset.left,
\t\t\t\trelY = e.pageY - parentOffset.top;
\t\t\t\$(this).find('span').css({ top: relY, left: relX });
\t\t}).
\t\ton('mouseout', function (e) {
\t\t\tvar parentOffset = \$(this).offset(),
\t\t\t\trelX = e.pageX - parentOffset.left,
\t\t\t\trelY = e.pageY - parentOffset.top;
\t\t\t\$(this).find('span').css({ top: relY, left: relX });
\t\t});
\t});
\t// Main Button Js End
</script>
  <script>
    window.addEventListener('scroll', function () {
      var scrollToTopBtn = document.getElementById('scrollToTopBtn');
      if (window.pageYOffset > 300) {
        scrollToTopBtn.classList.add('show');
      } else {
        scrollToTopBtn.classList.remove('show');
      }
    });

    document.getElementById('scrollToTopBtn').addEventListener('click', function () {
      smoothScrollToTop(1000);
    });

    function smoothScrollToTop(duration) {
      var start = window.pageYOffset;
      var distance = -start;
      var startTime = performance.now();

      function animation(currentTime) {
        var timeElapsed = currentTime - startTime;
        var scrollY = ease(timeElapsed, start, distance, duration);
        window.scrollTo(0, scrollY);
        if (timeElapsed < duration) requestAnimationFrame(animation);
      }

      function ease(t, b, c, d) {
        t /= d;
        t--;
        return c * (t * t * t * t * t + 1) + b;
      }

      requestAnimationFrame(animation);
    }
  </script>", "themes/custom/breeze/templates/footer.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\breeze\\Templates\\footer.html.twig");
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
