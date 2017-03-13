window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>');


jQuery(function ($) {
	$.supersized({

                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                    {
                    	image: 'images/templatemo-slide-1.jpg'
                    }, {
                    	image: 'images/templatemo-slide-2.jpg'
                    }, {
                    	image: 'images/templatemo-slide-3.jpg'
                    }, {
                    	image: 'images/templatemo-slide-4.jpg'
                    }
                    ]

                });
});

function templatemo_map() {
	$('.google-map').gmap3({
		marker:{
			address: '16.8496189,96.1288854' 
		},
		map:{
			options:{
				zoom: 15,
				scrollwheel: false,
				streetViewControl : true
			}
		}
	});
}