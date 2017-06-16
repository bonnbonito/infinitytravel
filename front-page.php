<?php
/**
 * The template for displaying front.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

get_header(); ?>

	<div class="mega-menu ui fluid basic popup top left transition hidden">
		<div class="ui seven column divided center aligned grid">
			<div class="column m-item">
				<h3><a href="#">AFRICA</a></h3>
				<div class="ui link list">
					<a class="item" href="#">Botswana</a>
					<a class="item" href="#">Kenya</a>
					<a class="item" href="#">Morroco</a>
					<a class="item" href="#">Mozambique</a>
					<a class="item" href="#">Namibia</a>
					<a class="item" href="#">South Africa</a>
					<a class="item" href="#">Tanzania</a>
					<a class="item" href="#">Zambia</a>
					<a class="item" href="#">Zanibar</a>
				</div>					
			</div>
			<div class="column m-item">
				<h3><a href="#">ARABIAN GULF</a></h3>
				<div class="ui link list">
					<a class="item" href="#">Abu Dhabi</a>
					<a class="item" href="#">Bahrain</a>
					<a class="item" href="#">Dubai</a>
					<a class="item" href="#">Oman</a>
					<a class="item" href="#">Ras Al Khaimah</a>					
				</div>					
			</div>
			<div class="column m-item">
				<h3><a href="#">ASIA</a></h3>
				<div class="ui link list">
					<a class="item" href="#">Bhutan</a>	
					<a class="item" href="#">Borneo</a>	
					<a class="item" href="#">Burma(Myanmmar)</a>	
					<a class="item" href="#">Cambodia</a>	
					<a class="item" href="#">China</a>	
					<a class="item" href="#">Hong Kong</a>	
					<a class="item" href="#">India</a>	
					<a class="item" href="#">Indonesia</a>	
					<a class="item" href="#">Laos</a>	
					<a class="item" href="#">Malaysia</a>	
					<a class="item" href="#">Philippines</a>	
					<a class="item" href="#">Singapore</a>	
					<a class="item" href="#">Sri Lanka</a>	
					<a class="item" href="#">Thailand</a>	
					<a class="item" href="#">Vietnam</a>			
				</div>					
			</div>
			<div class="column m-item">
				<h3><a href="#">AUSTRALIA</a></h3>
				<div class="ui link list">
					<a class="item" href="#">Australia</a>	
					<a class="item" href="#">French Polynesia</a>	
					<a class="item" href="#">New Zealand</a>						
				</div>					
			</div>
			<div class="column m-item">
				<h3><a href="#">AUSTRALIA</a></h3>
				<div class="ui link list">
					<a class="item" href="#">Angulla</a>
					<a class="item" href="#">Antigua</a>
					<a class="item" href="#">Barbados</a></a>
					<a class="item" href="#">Bermuda</a>
					<a class="item" href="#">Dominican</a>
					<a class="item" href="#">Republic</a>
					<a class="item" href="#">Grenada</a>
					<a class="item" href="#">Jamaica</a>
					<a class="item" href="#">Puerto RIco</a>
					<a class="item" href="#">St. Barths</a>
					<a class="item" href="#">StKitts & Nevis</a>
					<a class="item" href="#">St. Lucia</a>
					<a class="item" href="#">St. Vincent & The Grenadines</a>
					<a class="item" href="#">The Bahamas</a>
					<a class="item" href="#">The British </a>
					<a class="item" href="#">Virgin Islands</a>
					<a class="item" href="#">Trks & Caicos</a>								
				</div>					
			</div>
			<div class="column m-item">
				<h3><a href="#">EUROPE</a></h3>
				<div class="ui link list">
					<a class="item" href="#">Andorra</a>
					<a class="item" href="#">Austria</a>
					<a class="item" href="#">Canary Islands</a>
					<a class="item" href="#">Croatia</a>
					<a class="item" href="#">Cyprus</a>
					<a class="item" href="#">France</a>
					<a class="item" href="#">Greece</a>
					<a class="item" href="#">Ireland</a>
					<a class="item" href="#">Italy</a>
					<a class="item" href="#">Monaco</a>
					<a class="item" href="#">Montenegro</a>
					<a class="item" href="#">Portugal</a>
					<a class="item" href="#">Spain</a>
					<a class="item" href="#">Switzerland</a>
					<a class="item" href="#">United Kingdom</a>			
				</div>					
			</div>
			<div class="column m-item">
				<h3><a href="#">NORTH AMERICA</a></h3>
				<div class="ui link list">
					<a class="item" href="#">Canada</a>
					<a class="item" href="#">Mexico</a>
					<a class="item" href="#">United States of America</a>						
				</div>	
				<h3><a href="#">SOUTH AMERICA</a></h3>
				<div class="ui link list">
					<a class="item" href="#">Argentina</a>
					<a class="item" href="#">Brazil</a>
					<a class="item" href="#">Chile</a>
					<a class="item" href="#">Ecuador</a>
					<a class="item" href="#">Peru</a>											
				</div>
			</div>
		</div>
	</div>
	
	<div class="front-banner">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home.jpg" alt="">
	</div>

	<div class="front-search">
		<div class="ui middle aligned center aligned grid">
			<div class="column">
				<form class="ui form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					<div class="inline fields">
						<div class="sixteen wide field">
							<label for="s-hotels">Search</label>
							<div class="ui fluid search">
								<div class="ui icon input">
									<input class="prompt" type="text" placeholder="Search Hotels" name="s" id="s-hotels">
									<i class="search icon"></i>
									<input type="submit" class="s-submit">
								</div>
								<div class="results"></div>
							</div>
						</div>						
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="primary" class="content-area front-area">
		<main id="main" class="site-main" role="main">

			<div class="ui container center aligned">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );				

			endwhile; // End of the loop.
			?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
