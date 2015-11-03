jQuery(document).ready(function(){
    jQuery( '.widget' ).prepend( '<div class="dash dash-dark dash-medium"></div>' );

	jQuery('.fancybox').fancybox({
    //set the next and previous effects so that they make sense
    //the elastic method is confusing to the user
    nextEffect: 'fade',
    prevEffect: 'fade',
 
    //set the position of the title
    helpers : {
      title: {
        // title position options:
        // 'float', 'inside', 'outside' or 'over'
        type: 'inside'
      }
    },
 
    beforeShow: function () {
 
        //add pinterest button for title
        this.title = '<div class="gallery-social"><div class="social social-facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(this.href)+'"><span class="fa fa-facebook"></span></a>'+
					'</div><div class="social social-pinterest"><a target="_blank" href="http://pinterest.com/pin/create/button/?url='+
            encodeURIComponent(document.location.href)+
            '&media='+encodeURIComponent(this.href)+'" target="_blank"><span class="fa fa-pinterest"></span></a></div></div>';
 
    }
  });
    var html = '<a href="#" class="archive-toggle pull-right"><span class="fa fa-plus"></span></a>';

    jQuery('.widget_archive .widgettitle,.widget_categories .widgettitle').append(html);

    jQuery(document).on('click','.archive-toggle',function(e)
    {
        e.preventDefault();
        jQuery(this).closest('div').find('ul').slideToggle();
    });
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        console.log(MyScript.latitude+MyScript.image+MyScript.longitude);
        var myLatlng = new google.maps.LatLng(MyScript.latitude, MyScript.longitude);
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(MyScript.latitude, MyScript.longitude), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        var image = 'http://localhost/marinas/wp-content/themes/marinas/library/images/pin-marinas.png';
        var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Hello World!',
              icon: MyScript.image
          });
    }

    // ADD SOCIAL
  jQuery( ".single-content img" ).each(function( index ) {  
    var url = 'http://'+document.location.hostname + window.location.pathname;
    var src = jQuery(this).attr('src');
  jQuery(this).wrap('<div class="holder">');
  jQuery(this).parent().append('<div class="single-social">'+
                                   '<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(src)+'"><span class="fa fa-facebook fa-2x"></span></a>'+
                                    '<a target="_blank" href="http://pinterest.com/pin/create/button/?url='+
            encodeURIComponent(url)+
            '&media='+encodeURIComponent(src)+'"><span class="fa fa-pinterest fa-2x"></span></a>'+
                                '</div>');
  
  });


});