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

    <header class="cd-header-banner">
		<!-- slider code start -->
		<div class="sliderContainer fullWidth clearfix">
		  <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
		    <div class="rsContent">

		    	<div class="homepage-header-title">
		    		<h1>Welcome to iTi Tropicals<span style="color:#bcd63c;">.</span></h1>
		    	</div>

		    	<img class="rsImg" src="/wp-content/uploads/iti-tropicals-homepage-banner.png" title="Welocme to iTi Tropica" alt="Welocme banner" />

		    	<!-- <div class="infoBlock rsABlock infoBlockLeftBlack" data-move-offset="100" data-move-effect="bottom" data-speed="200">
		      		<h1><?php echo get_the_title(); ?></h1>
		      	</div> -->
		    </div>
		</div>

	</header>

	<!-- <main> -->
            <div style="width:100%;" class="homepage-main-content">
                       <div class="container nofloat" style="padding-top:20px;">
                                 <?php
                              // Start the loop.
                              while ( have_posts() ) : the_post();

                                    // Include the page content template.
                                    get_template_part( 'content', 'homepage' );

                              // End the loop.
                              endwhile;
                              ?>
                       </div>
            </div>

            <div class="before-footer">
                  <!-- <div class="col-md-6 col-md-offset-3" style="padding-top:65px;">
                     <?php
                     $the_query = new WP_Query( array( 'category_name' => 'announcements' ) );
                        // The Loop
                        if ( $the_query->have_posts() ) {
                        	while ( $the_query->have_posts() ) {
                        		$the_query->the_post();
                                    ?>
                                          <a href="<?php echo get_the_permalink(); ?>" style="color:#000 !important;">
                                                <?php
                                    		          echo get_the_excerpt();
                                                ?>
                                          </a>
                                    <?php
                        	}
                        }
                      ?>
                  </div> -->
	             <div class="col-md-7 col-md-offset-5">
	                <h2 style="font-size:36px;">We look forward to meeting you<span style="color:#fff;">.</span></h2>
	                <p>Come stop by our office to see where the magic happens or <a href="/concentrated-fruit-juice-formulation-concepts/resource-for-tropical-products/" style="color:#000;">request a sample</a> of any of our fruit concentrates, purees or oils today!</p>
	             </div>
		</div>

	<!-- </main> < ! - - cd-main-content -->

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

		jQuery('.test-popup-link').magnificPopup({
		  type: 'iframe'
		});

	};

</script>

<script id="addJS">jQuery(document).ready(function($) {
    $('#full-width-slider').royalSlider({
	    arrowsNav: false,
	    loop: true,
	    keyboardNavEnabled: true,
	    controlsInside: false,
	    imageScaleMode: 'fill',
	    arrowsNavAutoHide: true,
	    autoScaleSlider: true,
	    autoScaleSliderWidth: 960,
	    autoScaleSliderHeight: 350,
	    controlNavigation: 'none',
	    thumbsFitInViewport: false,
	    navigateByClick: true,
	    startSlideId: 0,
	    autoPlay: {
	      enabled: true,
	      pauseOnHover: false,
	      stopAtAction: false,
	      delay: 4000
	    },
	    transitionType:'move',
	    globalCaption: false,
	    deeplinking: {
	      enabled: true,
	      change: false
	    },
	    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
	    imgWidth: 1000,
	    imgHeight: 350
	  });
	});
</script>

<?php get_footer('bootstrap'); ?>