<?php
/**
 * The template for displaying contact page.
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'contact' );


			endwhile; // End of the loop.
			?>

      <?php
        $location = get_field('google_map');
        if( !empty($location) ):
        ?>
        <div class="google-map">
        	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
    <?php endif; ?>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGE4v9pg9sLKZcSf4kSMJzc_itSZpeO2I"></script>
      <script type="text/javascript">
          (function($) {
              function new_map($el) {
                  var $markers = $el.find('.marker');
                  var args = {
                      zoom: 16,
                      center: new google.maps.LatLng(0, 0),
                      mapTypeId: google.maps.MapTypeId.ROADMAP,
                      styles: [{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]
                  };
                  var map = new google.maps.Map($el[0], args);
                  map.markers = [];
                  $markers.each(function() {
                      add_marker($(this), map);
                  });
                  center_map(map);
                  return map;
              }

              function add_marker($marker, map) {
                  var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
                  var marker = new google.maps.Marker({
                      position: latlng,
                      map: map
                  });
                  map.markers.push(marker);
                  if ($marker.html()) {
                      var infowindow = new google.maps.InfoWindow({
                          content: $marker.html()
                      });
                      google.maps.event.addListener(marker, 'click', function() {
                          infowindow.open(map, marker);
                      });
                  }
              }

              function center_map(map) {
                  var bounds = new google.maps.LatLngBounds();
                  $.each(map.markers, function(i, marker) {
                      var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
                      bounds.extend(latlng);
                  });
                  if (map.markers.length == 1) {
                      map.setCenter(bounds.getCenter());
                      map.setZoom(16);
                  } else {
                      map.fitBounds(bounds);
                  }
              }
              var map = null;
              $(document).ready(function() {
                  $('.google-map').each(function() {
                      map = new_map($(this));
                  });
              });
          })(jQuery);
      </script>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
