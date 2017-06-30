<?php
/**
 * Bonn Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BonnJoel
 */

function bonnjoel_addmore_scripts() {
	/*
	 * Enqueue custom scripts and styles
	 */

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//code.jquery.com/jquery-3.1.1.min.js', false, '3.1.1');
		wp_enqueue_script('jquery');
	}

	wp_enqueue_style( 'bonnjoel_semantic-css', get_template_directory_uri() . '/semantic/dist/semantic.min.css' );
	wp_enqueue_style( 'bonnjoel_mmenu-css', get_template_directory_uri() . '/css/mmenu.css' );
	wp_enqueue_style( 'bonnjoel_lightbox-css', get_template_directory_uri() . '/css/lightbox.css' );
	wp_enqueue_style( 'bonnjoel_ralewayfont', '//fonts.googleapis.com/css?family=Raleway:100,500&amp;subset=latin-ext' );
	wp_enqueue_style( 'bonnjoel-slick', get_template_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'bonnjoel-slick-theme', get_template_directory_uri() . '/slick/slick-theme.css' );
	wp_enqueue_style( 'bonnjoel-style', get_stylesheet_uri() );
	wp_register_style( 'bonnjoel_jsscocials_style', '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css' );
	wp_register_style( 'bonnjoel_jsscocials_style_flat', '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css' );

	wp_register_script( 'bonnjoel_mmenu-js', get_template_directory_uri() . '/js/mmenu.min.js', array('jquery'), 'v5.6.5', true );
	wp_enqueue_script( 'bonnjoel_slickjs', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), false, true );
	wp_register_script( 'bonnjoel_lightbox-js', get_template_directory_uri() . '/js/lightbox.js', 'jquery', 'v2.8.2', true );
	wp_register_script( 'bonnjoel_fastclick', get_template_directory_uri() . '/js/fastclick.js', '', '1.0.6' );
	wp_register_script( 'bonnjoel_jssocials', '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js', array('jquery'), '1.4.0', false );

	wp_enqueue_script( 'bonnjoel_semantic-js', get_template_directory_uri() . '/semantic/dist/semantic.min.js', array('jquery'), '2.2.10', true );

	wp_enqueue_script( 'bonnjoel_fastclick' );
	wp_enqueue_script( 'bonnjoel_mmenu-js' );
	wp_enqueue_script( 'bonnjoel_tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.4.0', true );
	wp_enqueue_script( 'bonnjoel_theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery','bonnjoel_mmenu-js', 'bonnjoel_slickjs', 'bonnjoel_semantic-js'), false, true );
	wp_localize_script( 'bonnjoel_theme-js', 'URL', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
			'api_nonce' => wp_create_nonce( 'wp_rest' ),
      'api_url'   => site_url('/wp-json/wp/v2/')
		) );
}

add_action( 'wp_enqueue_scripts', 'bonnjoel_addmore_scripts' );

function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyAGE4v9pg9sLKZcSf4kSMJzc_itSZpeO2I');
}

add_action('acf/init', 'my_acf_init');


function featured_image_rest( $data, $post, $request ) {

	$_data = $data->data;
	$_data['fi_full'] = get_the_post_thumbnail_url( $post->ID, 'full' );
	$data->data = $_data;
	return $data;

}

add_filter( 'rest_prepare_post', 'featured_image_rest', 10, 3 );

function category_name_rest( $data, $post, $request ) {

	$_data = $data->data;
	$categories = get_the_category();
	$cat = array();
	foreach( $categories as $category ) {
  	$cat[] = $category->name;
	}

	$_data['category_names'] = $cat;
	$data->data = $_data;
	return $data;

}

add_filter( 'rest_prepare_post', 'category_name_rest', 10, 3 );

function breadcrumbs_fx( $tax ) {

	$terms = get_the_terms( get_the_ID(), $tax );

	if ( $terms && ! is_wp_error( $terms ) ) :

    foreach ( $terms as $term ) {
        echo '<a href="'.get_term_link($term->term_id).'" class="section">'.$term->name.'</a>';
    }

	else:
		echo '<a class="section" style="color: red;">No '.$tax.'</a>';
	endif;
}

function get_city_name() {
	$terms = get_the_terms( get_the_ID(), 'city' );

	if ( $terms && ! is_wp_error( $terms ) ) :

    foreach ( $terms as $term ) {
        return $term->name;
    }

	endif;
}

function continent_name_rest( $data, $post, $request ) {

	$_data = $data->data;
	$categories = get_the_terms( $post->ID, 'continent' );
	$cat = array();
	foreach( $categories as $category ) {
  	$cat[] = $category->name;
	}

	if ($cat) {
		$_data['continent_name'] = $cat;
	} else {
		$_date['continent_name'] = 'None';
	}

	$data->data = $_data;
	return $data;

}

function city_name_rest( $data, $post, $request ) {

	$_data = $data->data;
	$categories = get_the_terms( $post->ID, 'city' );

	$cat = array();
	foreach( $categories as $category ) {
  	$cat[] = $category->name;
	}

	if ($cat) {
		$_data['city_name'] = $cat;
	} else {
		$_date['city_name'] = 'None';
	}

	$data->data = $_data;
	return $data;

}

function country_name_rest( $data, $post, $request ) {

	$_data = $data->data;
	$categories = get_the_terms( $post->ID, 'country' );
	$cat = array();
	if ($categories) {
		foreach( $categories as $category ) {
	  	$cat[] = $category->name;
		}
	}

	if ($cat) {
		$_data['country_name'] = $cat;
	} else {
		$_date['country_name'] = 'None';
	}

	$data->data = $_data;
	return $data;

}

add_filter( 'rest_prepare_hotel', 'country_name_rest', 10, 3 );
add_filter( 'rest_prepare_hotel', 'city_name_rest', 10, 3 );
add_filter( 'rest_prepare_hotel', 'continent_name_rest', 10, 3 );
add_filter( 'rest_prepare_city', 'country_name_rest', 10, 3 );
add_filter( 'rest_prepare_city', 'continent_name_rest', 10, 3 );
add_filter( 'rest_prepare_country', 'continent_name_rest', 10, 3 );


add_action( 'rest_api_init', function () {
  register_rest_route( 'wp/v2', '/hotel/country/(?P<country>\S+)', array(
    'methods' => 'GET',
    'callback' => 'get_post_countries',
  ) );
} );

function get_post_countries( $data ) {
  $posts = get_posts( array(
		'post_type' => 'hotel',
		'tax_query' => array(
			array(
				'taxonomy' => 'country',
				'field' => 'slug',
				'terms' => $data['country'],
				'operator' => 'IN',
			)
		)
  ));

  if ( empty( $posts ) ) {
    return null;
  }

	$add_featured_image = function( $post ) {
    $image_id = get_post_thumbnail_id( $post );
    $post->thumbnail = wp_get_attachment_url( $image_id, 'full' );
    return $post;
	};

	$posts = array_map( $add_featured_image, $posts );

  return $posts;
}

add_action( 'wp_ajax_search_hotels', 'search_hotels' );
add_action( 'wp_ajax_nopriv_search_hotels', 'search_hotels' );

function search_hotels() {

	$args = array(
		'post_type' => 'hotel'
	);

	if (!empty($_POST['from'])) {
		$args['tax_query'][] = array(
			'taxonomy' => 'continent',
			'field'	=>	'slug',
			'terms'	=> $_POST['from']
		);
	}

	$args['meta_query'] = array( 'relation'=>'AND' );

	if (!empty($_POST['bedrooms'])) {
		$args['meta_query'][] = array(
			'key'	 	=> 'bedrooms',
			'value'	  	=> $_POST['bedrooms'],
			'compare' 	=> '=',
			);
	}

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) : ?>
	<div class="ui cards hotel-results-grid">
	<?php while ( $query->have_posts() ) : $query->the_post();
		get_template_part( 'template-parts/content', 'hotel-card' );
	endwhile; ?>
</div>
<?php else: ?>
	<div class="hotel-results-grid">
	<div class="ui tertiary inverted red segment center aligned">
		<p><i class="warning sign icon"></i> No hotels found...</p>
	</div>
</div>
<?php
	endif;
	die();
}
