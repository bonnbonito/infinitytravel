jQuery(document).ready(function($) {

	$(function() {
		$('a[href*="#"]:not([href="#"]):not(.mm-next)').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});


	$('.entry-content').imagesLoaded().progress( function( instance ) {
		$('.entry-content img').each( function(){
				// Create new offscreen image to test
				$(this).addClass('img-fluid');
			});
	});

	function enableScroll() {
		if ($( window ).width() < 991) {
			$('body').niceScroll({
				zindex : 999999,
				cursorwidth : 10,
				cursorborder : "1px solid #000",
				cursoropacitymax : .7,
				cursorminheight: 5
			});
		} else {
			$('body').getNiceScroll().remove();
		}
	}

	enableScroll();


	$( window ).resize(function(event) {
		/* Act on the event */
		enableScroll();
	});

	$('.main.menu  .ui.dropdown').dropdown({
		on: 'hover'
	});

	$('.main-navigation .dir-recommend')
	.popup({
		popup : $('.mega-menu'),
		movePopup : false,
		hoverable  : true,
		on    : 'hover',
		lastResort: 'bottom center',
		offset: '1',
		delay: {
			hide: 12800
		}
	});

	$('.front-search .ui.search')
	.search({
		minCharacters : 2,
		apiSettings   : {
			onResponse: function(searchResponse) {
				var	response = {
					results : []
				};

				$.each(searchResponse, function(index, item) {

					response.results.push({
						title       : item.title['rendered'],
						url         : item.link,
						description : item.excerpt['rendered'],
						image       : 'image'
					});
				});
				return response;
			},
			url: URL.api_url + 'posts?search={query}'
		}
	});

	var s = $(".main-navigation");
	var pos = s.position();
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= pos.top && $(window).width() > 991) {
			$('.site-header').addClass("fixed");
		} else {
			$('.site-header').removeClass("fixed");
		}
	});

});
