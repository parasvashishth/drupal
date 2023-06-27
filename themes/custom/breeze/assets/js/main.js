jQuery(function(jQuery) {
	var path = window.location.href;
	jQuery('.nav-menu > li > a').each(function() {
		if (this.href === path) {
			jQuery(this).addClass('active');
		}
	});
});


window.addEventListener('scroll', function() {
	var header = document.querySelector('header.header'); // Replace 'header' with the appropriate selector for your header element

	if (window.pageYOffset > 10) {
		header.classList.add('active');
	} else {
		header.classList.remove('active');
	}
});


$(".similar_lg").owlCarousel({
	loop: false,
	nav: false,
	dots: true,
	smartSpeed: 800,
	margin: 30,
	autoplayHoverPause: false,
	autoplay: true,
	responsive: {
		0: {
			items: 1,
		},
		576: {
			items: 1,
		},
		768: {
			items: 2,
		},
		992: {
			items: 2,
		},
		1200: {
			items: 3,
		},
		1400: {
			items: 3,
		},
	},
});

// 

// Home Page Carousel Testimonial start
$(".testi_lg").owlCarousel({
	loop: false,
	nav: false,
	dots: false,
	smartSpeed: 800,
	margin: 30,
	autoplayHoverPause: false,
	autoplay: true,
	responsive: {
		0: {
			items: 1,
		},
		576: {
			items: 1,
		},
		768: {
			items: 1,
		},
		992: {
			items: 1,
		},
		1200: {
			items: 1,
		},
		1400: {
			items: 1,
		},
	},
});
// Home Page Carousel Testimonial end

// Navbar Search Input Js Start
let searchInput = document.getElementById('searchinput');

searchInput.addEventListener('keyup', function(event) {
	let searchQuery = event.target.value.toLowerCase();
	console.log(searchQuery);

	let allNamesDOMCollection = document.getElementsByClassName('name'); // can also use getElementByTagName('li')

	for (let i = 0; i < allNamesDOMCollection.length; i++) {
		const currentName = allNamesDOMCollection[i].textContent.toLowerCase();

		if (currentName.includes(searchQuery)) {
			console.log(currentName);
			allNamesDOMCollection[i].style.display = 'block';
		} else {
			allNamesDOMCollection[i].style.display = 'none';
		}
	}
});
// Navbar Search Input Js End



// Home Page Youtude Video JS Start
// This function will get the video ID
function get_video_id(url){
	var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
	var match = url.match(regExp);
	return (match&&match[7].length==11)? match[7] : false;
}

// Start Appending the elements to the dom
$(document).ready(function(){

	// Append the video thumbnail on load
	$('.youtube_item').is(function(){
		var id = get_video_id($(this).data('url')) // Video ID
		$(this).append( '<img class="video-thump" src="https://img.youtube.com/vi/'+ id +'/0.jpg" alt="" />' ); // Append the image
	});

	// Append the video iframe on user's click on the thumbnail
	$('.youtube_item').click(function(){
		var id = get_video_id($(this).data('url')) // Get the ID
		$(this).append(
			'<iframe src="https://www.youtube.com/embed/' + id + '?showinfo=0&iv_load_policy=3&modestbranding=1&autoplay=1&rel=0"></iframe>'); // Appending the iframe
		$(this).find('.dark-layer').fadeOut() // Remove the dark layer
		$(this).find('.video-thump').fadeOut() // Remove the video thumbnail
	});

});
// Home Page Youtude Video JS End


// Collection Page Js Start
function modalOpen() {
	var x = document.getElementById("Collection_modal");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

function modalClose(){
	let close_box = document.getElementById("Collection_modal").style.display = "none";
}
// Collection Page Js End

