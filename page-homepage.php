<?php
/**
 * Template Name: Home Page
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

<style type="text/css">

.wine-image {opacity:0;}

@media (min-width: 427px) and (max-width: 620px){.wine-image {min-height: 300px!important;}}
@media (min-width: 320px) and (max-width: 426px){.wine-image {min-height: 220px!important;}}

</style>

<header class="wine-image" style="background: url('http://www.ititropicals.com/wp-content/uploads/Old-Banner-New-Logo-v5-web.jpg') center center; background-repeat:no-repeat; background-size: cover;">
	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row-fluid">
			<div class="rsContent" style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">
				<div class="landing-header-title">
					
				</div>
			</div>

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
	                <p>Come stop by our office to see where the magic happens or <a href="<?php echo get_page_link(119); ?>" style="text-decoration:underline; color:#000;">request a sample</a> of any of our fruit concentrates, purees or oils today!</p>
	             </div>
		</div>

	<!-- </main> < ! - - cd-main-content -->

<script type="text/javascript">

// Banner Fade In
jQuery(window).load(function(){
    jQuery(".wine-image").animate({"opacity": "1"}, 500);
});

</script>

<script type="text/javascript">
	var filterValue;

	window.onload = function(){

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
	    autoScaleSliderWidth: 1400,
	    autoScaleSliderHeight: 275,
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
	    imgWidth: 1500,
	    imgHeight: 375
	  });
	});
</script>

<?php get_footer('bootstrap'); ?>
