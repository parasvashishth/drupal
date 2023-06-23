$(document).ready(function(){
    $(".banner_right").click(function(){
        $(".banner_video").fadeIn();
        $(".banner_content").fadeOut();
    });
});

//counter

$(window).scroll(function () {

$('.counting').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({ countNum: $this.text()}).animate({
        countNum: countTo
    },
                                         {
        duration: 3000,
        easing:'linear',
        step: function() {
            $this.text(Math.floor(this.countNum));
        },
        complete: function() {
            $this.text(this.countNum);
        }
    });
});

});

// brands owl

$(".brands_owl").owlCarousel({
    loop: false,
    nav: true,
    dots: true,
    smartSpeed: 1000,
    margin: 30,
    autoplayHoverPause: false,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
        0: {
            items: 2,
        },
        576: {
            items: 3,
        },
        768: {
            items: 4,
        },
        992: {
            items: 5,
        },
        1200: {
            items: 6,
        },
        1400: {
            items: 6,
        },
    },
});

//taxonomy brand owl


$(".brands_owlTax").owlCarousel({
    loop: false,
    nav: true,
    dots: true,
    smartSpeed: 1000,
    margin: 20,
    autoplayHoverPause: false,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
        0: {
            items: 2,
        },
        576: {
            items: 3,
        },
        768: {
            items: 4,
        },
        992: {
            items: 5,
        },
        1200: {
            items: 6,
        },
        1400: {
            items: 6,
        },
    },
});


//presence owl

$(".presence_owl").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    smartSpeed: 2000,
    margin: 30,
    autoplayHoverPause: false,
    autoplay: false,
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 1,
        },

    },
});


//single product image owl


$(".sProdPgImgs").owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    smartSpeed: 900,
    margin: 30,
    autoplayHoverPause: false,
    autoplay: false,
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 1,
        },

    },
});

//facilities owl

$(".facilities_owl").owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    smartSpeed: 900,
    margin: 30,
    autoplayHoverPause: false,
    autoplay: false,
    autoplayTimeout: 2000,
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 1,
        },

    },
});

//sticky nav

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 80) {
        $(".header").addClass("sticky_header");
    } else {
        $(".header").removeClass("sticky_header");
    }
});

// redirect tab to page
let urlString = window.location.href;
console.log(urlString);
let paramString = urlString.split('?')[1];
console.log(paramString);
let queryString = new URLSearchParams(paramString);
console.log(queryString);

for (var pair of queryString.entries()) {
    console.log("Key is: " + pair[0]);
    console.log("Value is: " + pair[1]);

}
if(pair[1] == "mission-vision"){
    if ( $(".nav-link").is("#mission-vision") ) {
        $("#mission-vision").addClass("active");
        $("#nav-home-tab").removeClass("active");
        $("#nav-profile").addClass("active");
        $("#nav-profile").addClass("show");
        $("#nav-home").removeClass("show");
        $("#nav-home").removeClass("active");
    }
}
    if(pair[1] == "core-values"){
    if ( $(".nav-link").is("#core-values") ) {
        $("#core-values").addClass("active");
        $("#nav-home-tab").removeClass("active");
        
        $("#nav-contact").addClass("active");
        $("#nav-contact").addClass("show");
        $("#nav-home").removeClass("show");
        $("#nav-home").removeClass("active");
    }
}	


//product image 


//taxonomy owl

