<?php
/**
 * Template Name: Products Page
 *
 * This is the product template page for iTi Tropicals
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('bootstrap'); ?>

<style>

iframe:not(.twitter-tweet), .thumbnail{
	position: absolute !important;
	top: 0;
}

</style>

	<header style="background-image: url('<?php echo the_post_thumbnail_url(); ?>'); background-size: cover; background-position: 50% 50%; width: 100%;" class="cd-header">
	    <h1 class="row"><?php echo substr(the_title('', '', FALSE), 0, 200); ?></h1>
	</header>

	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter" style="overflow-y:visible;">
				
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<div align="center">
		<section class="cd-gallery">
			
			<?php 

				$args = array( 'post_type' => 'iti products', 'posts_per_page' => 40, 'orderby' => 'date', 'post__not_in' => array(3002));
				$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					
					  //echo '<div class="entry-content">';
					  get_template_part( 'content', 'productstile' );
					  //echo '</div>';

					endwhile; ?>

		</section> <!-- cd-gallery -->
		</div>

		<div align="center" class="cd-filter-trigger">

			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			  <a href="<?php echo esc_url( home_url() ); ?>" > iTi Tropicals</a><span> > </span><a href="<?php echo esc_url( home_url() ); ?>/?page_id=45">Products</a>
	        </div>
	    </div>

	</main> <!-- cd-main-content -->

<script type="text/javascript">
	/*var filterValue;

	jQuery(document).ready(function(){
		jQuery(".cd-filters").slideToggle();
	    jQuery("#button").click(function(){
		   jQuery(".cd-filters").slideToggle();
		}); 
	});

	window.onload = function(){
		// Isotope Container Sizing for isHorizontal
		// jQuery('#main').style.height = window.innerHeight - 48;

		// Isotope Initialization
		jQuery('.cd-gallery').isotope({
		  itemSelector: '.apost',
		  layoutMode: 'packery',
		  filter: '*'
		});

		// Isotope Filtering
		jQuery('.cd-filters').on( 'click', 'li', function() {
		  filterValue = jQuery(this).attr('data-filter');
		  jQuery('.cd-gallery').isotope({ filter: filterValue });
		  jQuery('.cd-gallery').isotope({ filter: filterValue });
		  jQuery('.filter').css("background-color", "rgba(0, 0, 0, 0.24)");
		  jQuery(this).css("background", "#41307c");
		  //setInterval(function(){offsetMargin();},10);
		});
	};*/

</script>

<?php get_footer('bootstrap'); ?>
