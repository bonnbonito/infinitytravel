jQuery(document).ready(function($) {

  $(function() {
    $('a[href*="#"]:not([href="#"]):not(.mm-next)').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  $('.main-navigation .menu  .ui.dropdown').dropdown({
    on: 'hover'
  });

  $('.main-navigation .dir-recommend')
    .popup({
      popup: $('.mega-menu'),
      movePopup: false,
      hoverable: true,
      on: 'hover',
      lastResort: 'bottom center',
      offset: '1',
      delay: {
        hide: 800
      },
      transition: 'slide down'
    });

  $('.row-search .ui.search')
    .search({
      type: 'category',
      minCharacters: 2,
      apiSettings: {
        onResponse: function(searchResponse) {
          var response = {
            results: {}
          };

          $.each(searchResponse, function(index, item) {

            var country = item.country_name || 'Unknown';

            if (response.results.country === undefined) {
              response.results.country = {
                name: country,
                results: []
              };
            }

            response.results.country.results.push({
              title: item.title.rendered,
              url: item.link,
            });

            // response.results.push({
            // 	title       : item.title['rendered'],
            // 	url         : item.link,
            // });
          });
          return response;
        },
        url: URL.api_url + 'hotel?search={query}'
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

  $('.slide-banner').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    fade: true,
    cssEase: 'linear'
  });

  $('.slide-banner').show();

  $('.hotel-banner').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    fade: true,
    cssEase: 'linear'
  });

  $('.hotel-banner').show();

  $('.otherhotel-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: true,
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  $('.otherhotel-slide').show();

  $(".thumbnail-slider img").click(function(e) {
    e.preventDefault();
    slideIndex = $(this).index();
    $('.hotel-banner').slick('slickGoTo', parseInt(slideIndex));
  });

  $('.ui.checkbox').checkbox();

  $('.hotel-tab .item').tab();

  $('.ui.accordion').accordion();

  $('.inspire-form').on('submit', function(event) {
    event.preventDefault();
    $('.hotel-results-grid').prepend('<div class="ui active dimmer"><div class="ui text loader">Loading</div></div>');
    $('.submit-btn-search').html('SEARCHING <i class="loading spinner icon"></i>');

    var formData = $(this).serialize();

    $.ajax({
			url: URL.ajaxurl,
			data: formData,
			type: 'POST',
			cache: false
		}).done( function(data){
      $('.submit-btn-search').html('SEARCH');
      $('.hotel-results-container').html(data);
    });
  });

});
