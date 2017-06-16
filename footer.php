<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BonnJoel
 */

?>

	</div><!-- #content -->

	<?php get_template_part('template-parts/content', 'newsletter'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="ui four column stackable grid padded">
			<div class="column">
				<div class="site-footer-branding">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" alt="">
					</a>
				</div><!-- .site-footer-branding -->
			</div>
			<div class="column">
				<div class="footer-menu">
					<ul>
						<li><a href="#">Booking Conditions</a></li>
						<li><a href="#">Luxury Travel</a></li>
						<li><a href="#">SitemaP</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">FAQS</a></li>
					</ul>
				</div><!-- .site-info -->
			</div>
			<div class="column">
				<div class="footer-social-media">
					<a href="#"><i class="facebook f icon"></i></a>
					<a href="#"><i class="twitter icon"></i></a>
					<a href="#"><i class="instagram icon"></i></a>
					<a href="#"><i class="google plus icon"></i></a>
				</div><!-- .site-info -->
			</div>
			<div class="column">
				<div class="footer-partner">
					<p>Working in partnership with ITC Luxury Travel<br>
					Book with confidence</p>
					<div class="partner-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/atol.png" alt="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/abta.png" alt="">
					</div>
					<p class="copyright">© 2016 INFINITY & BEYOND TRAVEL. ALL RIGHTS RESERVED.</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<nav id="mobile-menu" class="mobile-menu" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(function() {
			FastClick.attach(document.body);
		});

		$("#mobile-menu").mmenu({
			"extensions": [
			"pagedim-black",
			"theme-dark"
			],
			"navbar": {
				"add": true
			},
			"navbars": [
			{
				"position": "top"

			},
			{
				"position": "bottom",
				"content": [
				"<a class='fa fa-facebook' href='#/' title='Follow Our Facebook'></a>",
				"<a class='fa fa-twitter' href='#/' title='Follow Our Twitter'></a>",
				"<a class='fa fa-instagram' href='#/' title='Follow Our Instagram'></a>"
				]
			}
			]
		});

		var API = $("#mobile-menu").data( "mmenu" );

		$(".menu-toggle").click(function() {
			API.open();
			$('.mm-panels>.mm-panel').niceScroll({
				zindex : 999999,
				cursorwidth : 10,
				cursorborder : "1px solid #000",
				cursoropacitymax : .7,
				cursorminheight: 5
			});
		});
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
