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

	<header style="background-image: url('<?php echo the_post_thumbnail_url(); ?>'); background-size: cover; background-position: 50% 50%; width: 100%;" class="cd-header">
	    <h1 class="row"><?php echo substr(the_title('', '', FALSE), 0, 200); ?></h1>
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

				  <a href="https://twitter.com/share?text=<?php echo urlencode(get_the_title()); ?>%0A&url=<?php echo $href; ?>" style="position:absolute; right:0px; top:5px;" target="_blank">
  					    <span class="genericon genericon-twitter"></span>
  				    </a>

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

<script type="text/javascript">
	var filterValue;

	window.onload = function(){
		// Isotope Container Sizing for isHorizontal
		// jQuery('#main').style.height = window.innerHeight - 48;

		// Isotope Initialization
		jQuery('#main').isotope({
		  itemSelector: '.apost',
		  layoutMode: 'packery',
		  filter: '*'
		});

		// Isotope Filtering
		jQuery('.filters').on( 'click', 'button', function() {
		  filterValue = jQuery(this).attr('data-filter');
		  jQuery('#main').isotope({ filter: filterValue });
		  jQuery('#main').isotope({ filter: filterValue });
		  //setInterval(function(){offsetMargin();},10);
		});

		jQuery('.video-link').magnificPopup({
		  type: 'iframe'
		});

	};

</script>

<script>
	//This will check if the check box is clicked
	jQuery("input[type='checkbox'][name='hearInternet[]']").click(function () {

	  //if checkbox is clicked then make the textbox required
	  if (jQuery("input:checkbox[name='hearInternet[]']").prop('checked'))
	  {
	    jQuery("input:checkbox[name='internetSearch']").prop('required',true);

	  } else {
	    //else do not make the textbox required
	    jQuery("input:checkbox[name='internetSearch']").prop('required',false);

	  }

	});
</script>

<?php get_footer('bootstrap'); ?>
