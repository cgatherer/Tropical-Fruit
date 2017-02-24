<?php
/**
 * Template Name: Coconut Power Page
 *
 * This is the template that displays the true might and majesty of all that is Coconut.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('bootstrap'); ?>

<style type="text/css">

.homepage-header-title p {
	max-width: 200px;
	width: 100%;
	margin: 0 auto;
    color: #bdd63d;
    background: #000 !important;
    font-family: "Quicksand",sans-serif;
    font-weight: 400 !important;
    font-size: 18px !important;
    position: relative;
    top: 165px;
    padding: 10px 10px;
    background: none repeat scroll 0% 0%;
    text-align: center;
}
.homepage-header-title h1 {
	text-align: center;
}
.homepage-header-title h1 span {
	font-size: 2.25em;
}
#full-width-slider {
	min-width: inherit;
}
@media(max-width: 767px) {
	.homepage-header-title h1 {
		max-width: 55%;
	}
	.cd-header-banner.coconutBanner h1 {
	    top: 100px !important;
	}
	.homepage-header-title p {
		top: 140px;
	}
}
@media(max-width: 480px) {
	.homepage-header-title h1 {
		max-width: 70%;
	}
	.cd-header-banner.coconutBanner h1 {
	    top: 80px !important;
	}
	.homepage-header-title p {
		top: 120px;
	}
}
.cd-header-banner {
	background-size: cover !important;
}
.nav-utility-bar.bottom .btn-app {
    color: #bdd63d;
    background: #000 !important;
    font-family: "Quicksand",sans-serif;
    font-weight: 400 !important;
    font-size: 18px !important;
    margin: 0 auto;
    margin-bottom: 30px;
	padding: 10px;
    max-width: 200px;
    text-align: center;
    display: inline-block;
}
.nav-utility-bar.bottom .btn-app:hover{opacity: 0.95;color: #999;}
.nav-utility-bar.top {
	padding: 12px 0;
	background: #DCE8A0;
	font-family: Quicksand, sans-serif !important;
	font-size: 1.25em;
	line-height: 1.25em;
}
.nav-utility-bar .app-navigation a {
	color: black;
}
.nav-utility-bar.top .breadcrumbs {
	font-weight: bold;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.nav-utility-bar.top .breadcrumbs .delimiter {
	font-weight: bold;
	color: white;
}
@media(max-width: 767px) {
	.nav-utility-bar.top .breadcrumbs,
	.nav-utility-bar.top .app-navigation {
		text-align: center;
	}
	.nav-utility-bar.top .app-navigation {
		margin-top: 7px;
	}
}
.nav-utility-bar.top .app-navigation span {
	color: #78A22D;
}
.nav-utility-bar.bottom span {
	color: white;
}
</style>

<header class="cd-header-banner coconutBanner" style="background: url(<?php the_post_thumbnail_url( 'full' ); ?>) center">
	<!-- slider code start -->
	<div class="sliderContainer fullWidth clearfix">
	  <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
	    <div class="rsContent">

			<div class="homepage-header-title">
				<h1>THE POWER OF<br/><span>coconut water</span></h1>
				<a class="contactForm" href="./contact-iti-tropicals/"><p>REQUEST A SAMPLE</p></a>
			</div>

	    </div>
	</div>

</header>
<nav class="nav-utility-bar top clearfix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
				<div class="breadcrumbs-wrapper">
					<?php if ( function_exists('my_breadcrumbs') ) my_breadcrumbs(); ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
				<div class="app-navigation">
					<a href="<?php echo esc_url( get_permalink(2492) ); ?>"><span>&laquo;</span> Previous</a> <span style="font-weight: bold;">|</span> <a href="<?php echo esc_url( get_permalink(2494) ); ?>">Next <span>&raquo;</span></a>
				</div>
			</div>
		</div>
	</div>
</nav>
<main class="cd-main-content">
		<!-- <div class="cd-tab-filter-wrapper"> <div class="cd-tab-filter"> </div> </div> -->

		<?php
		// Start the loop.
		$args = array( 'category_name' => 'coconutpower', 'posts_per_page' => 9, 'orderby' => 'date', 'order' => 'ASC');
		$loop = new WP_Query( $args );
		    while ( $loop->have_posts() ) : $loop->the_post();

		    get_template_part( 'content', 'coconutlightbox' );

		// End the loop.
		endwhile;
		
		$twittertext="Coconut water has the power to transform your beverages. Learn the benefits of making this transformation and how: http://www.ititropicals.com/the-power-of-coconut-water/";
		
		?>
			<div class="row-fluid"><div class="container"><a href="https://twitter.com/share?text=<?php echo urlencode($twittertext); ?>%0A&url=na" style="float: right; margin-top:10px; display:inline-block;" target="_blank"><span class="genericon genericon-twitter"></span></a></div></div>

		<div align="center">				  
			<section class="cd-gallery" style="padding-bottom:0;">

				<div class="row rowCorrection">
				  <div class="col-md-12 col-sm-12">

				  <div style="padding: 0 50px;max-width:1200px;margin:auto;">
					  <div style="border-bottom:solid 2px #bcd63c;width:100%;margin-bottom:50px; max-width:1200px;" >
						  <h5 class="homepage-text" style="font-size:25px;font-weight:700;">Redesign your beverage with coconut water</h5>
					  </div>
				  </div>
					  <div style='overflow:hidden;max-width:1200px;margin:auto;'>
	                          <?php
	 				// Start the loop.
					$args = array( 'category_name' => 'coconutpower', 'posts_per_page' => 9, 'orderby' => 'date', 'order' => 'ASC');
					$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();

	 					get_template_part( 'content', 'coconutpost' );

	 				// End the loop.
	 				endwhile;
					wp_reset_postdata();
	 				?>
					</div>

				  </div><!-- /Main Content -->
			  </div>
			</section> <!-- cd-gallery -->
		</div>
		
		<nav class="nav-utility-bar bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="app-navigation text-center">
							<a class="btn-app" href="<?php echo esc_url( get_permalink(2492) ); ?>"><span>&laquo;</span> Previous</a> <span style="font-weight: bold;">|</span> <a class="btn-app" href="<?php echo esc_url( get_permalink(2494) ); ?>">Next <span>&raquo;</span></a>
						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- <div align="center" class="cd-filter-trigger">
			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			  <a href="<?php echo esc_url( home_url() ); ?>" > iTi Tropicals</a><span> > </span><a href="<?php echo esc_url( home_url() ); ?>/applications">Applications</a><span> > </span><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
	        </div>
	     </div>		-->	

</main><!-- cd-main-content -->

<script type="text/javascript">
	var filterValue;

	function openLightbox(id){
		var id = "#lightbox-"+id;
		jQuery(id).addClass("view");
	}

	function checkSize(){
		if(jQuery('.coconut-photo').width() > 295) {
			jQuery('.coconut-photo').addClass('sizecheck');
		}else{
			jQuery('.coconut-photo').removeClass('sizecheck');
		}
	}

	window.onresize = function(){
		checkSize();
	}

	window.onload = function(){

		jQuery('.lightbox-close').on("click", function(){
			jQuery(this).parent().parent().parent().removeClass("view");
		});
		// Isotope Container Sizing for isHorizontal
		// jQuery('#main').style.height = window.innerHeight - 48;
		checkSize();
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
	    autoScaleSliderHeight: 300,
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
	    imgWidth: 1300,
	    imgHeight: 800
	  });
	});
</script>

<?php get_footer('bootstrap'); ?>
