$(document).ready(function(){
    
	//Homepage Slider
    var options = {
        nextButton: false,
        prevButton: false,
        pagination: true,
        animateStartingFrameIn: true,
        autoPlay: true,
        autoPlayDelay: 3000,
        preloader: true
    };
    
    var mySequence = $("#sequence").sequence(options).data("sequence");

    //Main menu Initialization
    mainMenu.init();

	//Products slider
	var produxtsSlider = $('.products-slider').bxSlider({
		slideWidth: $('.products-slider .shop-item').outerWidth()-20, //Gets slide width
		responsive: true,
		minSlides: 1,
		maxSlides: 4,
		slideMargin: 20,
		auto: true,
		autoHover: true,
		speed: 800,
		pager: true,
		controls: false
	});

	//Make Videos Responsive
	$(".video-wrapper").fitVids();

	//Initialize tooltips
	$('.show-tooltip').tooltip();

	//Contact Us Map
	/*
	if($('#contact-us-map').length > 0){ //Checks if there is a map element
		var map = L.map('contact-us-map').setView([51.505, -0.09], 13);
		var map = L.map('contact-us-map', {
			center: [41.497477, 2.108437],
			scrollWheelZoom: false,
			zoom: 10
		});
		L.tileLayer('http://api.tiles.mapbox.com/v4/ipinyol.k15076lb/0/0/0.png?access_token=pk.eyJ1IjoiaXBpbnlvbCIsImEiOiJNME1nNXNvIn0.Xl0LMBccMvl47VLyrZmuuQ', {
		    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);
		L.marker([51.505, -0.09]).addTo(map).bindPopup("<b>iMath Research S.L.</b><br/>Edifici Eureka, Campus UAB<br/>08193 - Bellaterrna (Barcelona)</br>Spain").openPopup();
	}*/

	$( window ).resize(function() {
		$('.col-footer:eq(0), .col-footer:eq(1)').css('height', '');
		var footerColHeight = Math.max($('.col-footer:eq(0)').height(), $('.col-footer:eq(1)').height()) + 'px';
		$('.col-footer:eq(0), .col-footer:eq(1)').css('height', footerColHeight);
	});
	$( window ).resize();

});