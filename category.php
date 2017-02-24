<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('bootstrap'); ?>

	<header class="cd-header">
	    <h1><?php echo substr(the_title('', '', FALSE), 0, 50); ?></h1>
		<?php the_post_thumbnail(); ?>
	</header>

	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<div align="center">
		<section class="cd-gallery">
			
			<div class="row rowCorrection">

			  <div class="col-md-8 col-sm-8"><!-- Main Content -->
			  	<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'singlepost' );

				// End the loop.
				endwhile;
				?>
			  </div><!-- /Main Content -->

			  <div class="col-md-4 col-sm-4 sidebarContainer">
				<div style="margin-bottom:10px !important;">
					<?php
						$imageslug = "_simple_fields_fieldGroupID_1_fieldID_1_numInSet_";
						$count = 0;
						$imagetag = $imageslug.$count;
						$image_id = get_post_meta(get_the_ID(), $imagetag, true);
						if($image_id){
							// echo "<div class='royalSlider productslider'>";
							while($image_id){
								$img_src = wp_get_attachment_thumb_url($image_id);
								echo '<img class="col-md-6 col-xs-6" style="border-radius:10px !important; padding:2px !important; float:none !important;" src='.$img_src.' />';
								$count++;
								$imagetag = $imageslug.$count;
								$image_id = get_post_meta(get_the_ID(), $imagetag, true);
							}
							// echo "</div>";
						}
						
					?>
			  	</div>
			  	<?php get_sidebar(); ?>

			  </div>


		</section> <!-- cd-gallery -->
		</div>

		<div align="center" class="cd-filter-trigger">

			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			  <?php 
			      if(function_exists('bcn_display')) {
			        bcn_display();
			      }
			  ?>
	        </div>

	</main> <!-- cd-main-content -->

<script src="/wp-content/themes/iTiTropicals-TBS/js/jquery.mixitup.min.js"></script>
<script src="/wp-content/themes/iTiTropicals-TBS/js/main.js"></script>

<script type="text/javascript">
	window.onload = function(){
		jQuery(".royalSlider").royalSlider({
			keyboardNavEnabled: true,
			imageAlignCenter: true,
			controlNavigation:'none',
			autoPlay: { enabled: true, pauseOnHover: true, delay: 9000 },
			autoScaleSlider:true,
			arrowsNav:true,
			loop:true
		});
	}
</script>

<?php get_footer('bootstrap'); ?>
