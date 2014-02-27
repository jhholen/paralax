var App = {
	'nextURL' : '',
	'fetchingData': false,
	
};


jQuery(document).ready(function(){
	var gif = jQuery('.loader');

	
	



   

	jQuery('.loadmore').click(function(){
	 	load_images();
	});

	function load_images()
	{
		if (App.fetchingData)
		{
			return false;
		}

		App.fetchingData = true;

		var dataToPost = {
			'nextURL' : App.nextURL
		};


		var request = jQuery.ajax({
            url: "wp-content/themes/bootstrap/app.php",
            data: dataToPost,
            dataType: 'json',
            type: 'POST',
            beforeSend: function(xhr) {
                // gif.show();
            }
        })
        .error(function(){
        })
        .done(function(response){



        	var dataToPush = [];
        	jQuery.each(response.data, function(i, item) {
				if (item.caption !=null) {
					    if(item.caption.text != null) { 
					       var title = item.caption.text;
					    } 
					} else { 
					   var title = "";
				}        		


			
			    dataToPush.push(


			    	'<ul class="thumbs noscript"><li><a class="thumb" href="' 
			    	+ item.images.standard_resolution.url 
			    	+ '" data="'
			    	+ item.id  
			    	+ '"> <img src="' 
			    	+ item.images.low_resolution.url 
			    	+ '" data-id="' + item.id + '"/></a><div class="caption">'
			    	+ title 
			    	+ '</li></ul>');
			});

		    jQuery('#thumbs').append(dataToPush);
			
		    App.fetchingData = false;
			App.nextURL = response.next_url;
			gif.hide();

				

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				
				
				// Initialize Advanced Galleriffic Gallery
				
			jQuery(document).ready(function(jQuery) {
				// We only want these styles applied when javascript is enabled
				jQuery('div.navigation').css({'width' : '300px', 'float' : 'left'});
				jQuery('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				jQuery('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = jQuery('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 4,
					preloadAhead:              -1,
					enableTopPager:            false,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          false,
					renderNavControls:         false,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           false,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of jQuery('#thumbs')
						this.find('ul.thumbs','div.caption').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});

				
        });



	}



	var processing;

	if (jQuery('#instagram').length){
		load_images();
	}
});


jQuery('#orderSubmit').on('click', function(){

	 jQuery('#orderSubmit').addClass('loading');
	
	jQuery('.error').remove();
	
	
	var dataToPost = {
		'firstname': jQuery('input[name=firstname]').val(),
		'email': jQuery('input[name=email]').val(),
		'rapport': jQuery('input[name=rapport]').val(),
		'id': jQuery('input[name=id]').val(),
		'url': jQuery('input[name=url]').val()
	};

	var request = jQuery.ajax({
		url: "ajax/mailr.php",
		type: "POST",
		data: dataToPost,
		dataType: "json"
	});


});



// Sticky nav

jQuery(document).ready(function() {
	var stickyNavTop = jQuery('.navbar').offset().top;

	var stickyNav = function(){
	var scrollTop = jQuery(window).scrollTop();
	     
	if (scrollTop > stickyNavTop) { 

	    jQuery('.navbar').addClass('sticky');
	    jQuery('.logo').addClass('mt150');
	} else {
	    jQuery('.navbar').removeClass('sticky'); 
	     jQuery('.logo').removeClass('mt150'); 
	}
};

	stickyNav();

	jQuery(window).scroll(function() {
		stickyNav();
	});
});


jQuery(document).ready(function() {

  
	  (function(){
  var ua = navigator.userAgent,
    isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);

  if (isMobileWebkit) {
    jQuery('html').addClass('mobile');
  }

  jQuery(function(){
    var iScrollInstance;

    if (isMobileWebkit) {

      		iScrollInstance = new iScroll('wrapper');




      jQuery('#scroller').stellar({
        scrollProperty: 'transform',
        positionProperty: 'transform',
        horizontalScrolling: false,
        verticalOffset: 150
      });

            		setTimeout( function(){
                      iScrollInstance.refresh() ;
                    } , 500 ) ;

    } else {
      jQuery.stellar({
        horizontalScrolling: false,
        verticalOffset: 150
      });
    }
  });

})();



});





(function($) {
 


	// jQuery Selections
	var $html = $('html'),
			$container = $('#container'),
			$prompt = $('#prompt'),
			$toggle = $('#toggle'),
			$about = $('#about'),
			$scene = $('#scene');

	// Hide browser menu.
	(function() {
		setTimeout(function(){window.scrollTo(0,0);},0);
	})();

	// // Setup FastClick.
	// FastClick.attach(document.body);

	// // Add touch functionality.
	// if (Hammer.HAS_TOUCHEVENTS) {
	// 	$container.hammer({drag_lock_to_axis: true});
	// 	_.tap($html, 'a,button,[data-tap]');
	// }

	// // Add touch or mouse class to html element.
	// $html.addClass(Hammer.HAS_TOUCHEVENTS ? 'touch' : 'mouse');

	// Resize handler.
	(resize = function() {
		$scene[0].style.width = window.innerWidth + 'px';
		$scene[0].style.height = window.innerHeight + 'px';
		if (!$prompt.hasClass('hide')) {
			if (window.innerWidth < 600) {
				$toggle.addClass('hide');
			} else {
				$toggle.removeClass('hide');
			}
		}
	})();

	// // Attach window listeners.
	// window.onresize = _.debounce(resize, 200);
	// window.onscroll = _.debounce(resize, 200);

	// function showDetails() {
	// 	$about.removeClass('hide');
	// 	$toggle.removeClass('i');
	// }

	// function hideDetails() {
	// 	$about.addClass('hide');
	// 	$toggle.addClass('i');
	// }

	// // Listen for toggle click event.
	// $toggle.on('click', function(event) {
	// 	$toggle.hasClass('i') ? showDetails() : hideDetails();
	// });

	// // Pretty simple huh?
	// $scene.parallax();

	// Check for orientation support.
	setTimeout(function() {
		if ($scene.data('mode') === 'cursor') {
			$prompt.removeClass('hide');
			if (window.innerWidth < 600) $toggle.addClass('hide');
			$prompt.on('click', function(event) {
				$prompt.addClass('hide');
				if (window.innerWidth < 600) {
					setTimeout(function() {
						$toggle.removeClass('hide');
					},1200);
				}
			});
		}
	},1000);
  // Your jQuery code goes here. Use $ as normal.
})(jQuery);

	
