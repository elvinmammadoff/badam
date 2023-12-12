"use strict";

$(document).ready(function() {

    // Portfolio filter
	$(document).on('click', '.filter-button', function(){

		$(".filter-button").closest('li').removeClass("active")
		$(this).closest('li').addClass("active");

        var value = $(this).attr('data-filter');
        
        if(value === "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

	// Team Carousel
    $('#team .members').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        arrows: false,
        dots: true,
         responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 567,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });

    // Partners Carousel
    $('#partners .items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    }
    );

    // Hide search panel
    function hideNavbarSearch() {
        $('#navbar_content').fadeIn();
        $('#navbar_search').fadeOut();
    }

    // Show search panel
    $(document).on('click', '#search', function () {
        $('#navbar_content').fadeOut();
        $('#navbar_search').fadeIn();
        $('#navbar_search input').focus();
    });

    // Trigger hideNavbarSearch() when click close button on search panel
    $(document).on('click', '#search_close', function () {
        hideNavbarSearch()
    })

    // Trigger hideNavbarSearch() when press ESC
    $( document ).on( 'keydown', function ( e ) {
        if ( e.keyCode === 27 ) { // ESC
            hideNavbarSearch()
        }
    });

    // Init AOS Animate On Scroll Library
    AOS.init({
        duration: 1200,
        startEvent: 'DOMContentLoaded',
        once: true,
    });

    // Add swipe mod to bootstrap carousel
    $(".carousel").swipe({

      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

        if (direction === 'left') $(this).carousel('next');
        if (direction === 'right') $(this).carousel('prev');

      },
      allowPageScroll:"vertical"

    });

});

  // Init Yandex map
  ymaps.ready(init);
  var myMap, 
      myPlacemark;

  var iconBase = 'src/assets/img/map-marker.png';
  
  function init(){ 
      myMap = new ymaps.Map("googleMap", {
          center: [40.372488, 49.954121],
          zoom: 13,
  });
  
  myPlacemark = new ymaps.Placemark([40.372488, 49.954121], { 
      // hintContent: 'Moscow!', 
      // balloonContent: 'Capital of Russia'
  },{
      iconLayout: 'default#image',
      iconImageHref: 'src/assets/img/map-marker.png',
      iconImageSize: [26, 40],
  });
      
      myMap.geoObjects.add(myPlacemark);
      // myMap.controls.remove('zoomControl');
      myMap.controls.remove('rulerControl');
      myMap.controls.remove('geolocationControl');
      myMap.controls.remove('searchControl');
      myMap.controls.remove('trafficControl');
      myMap.controls.remove('typeSelector');
      myMap.controls.remove('fullscreenControl');
      myMap.behaviors.disable('scrollZoom');
  }