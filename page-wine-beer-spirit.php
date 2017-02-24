<?php
/**
 * Template Name: Wine, Beer, and Spirit Page
 *
 * This is the template that displays the Wine, Beer, and Spirit page.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('bootstrap'); ?>

<link rel="stylesheet" href="/wp-content/themes/iTiTropicals-TBS/css/wine-beer-spirit.css">
<style type="text/css">
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
	position: relative;
	z-index: 1;
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
.nav-utility-bar.bottom {
	background: white;
	position: relative;
	z-index: 1;
}
.nav-utility-bar.bottom span {
	color: white;
}
</style>
<header class="cd-header-banner wineBanner">
	<!-- slider code start -->
	<div class="sliderContainer fullWidth clearfix">
	  <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
	    <div class="rsContent">

			<div class="landing-header-title">
				<h1>Wine, Beer and Spirit<br/><span class="applications">Applications</span></h1>
				<h3>Redesign your alcoholic beverage with coconut water</h3>
				<a class="contactForm" href="./contact-iti-tropicals/"><p>REQUEST A SAMPLE</p></a>
			</div>

			<img class="rsImg" style="opacity: 0.5;" src="<?php the_post_thumbnail_url( 'full' ); ?>" title="Welocme to iTi Tropicals" alt="Welocme banner" />

	    </div>
	</div>
	<!-- End slider code start -->
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
					<a href="<?php echo esc_url( get_permalink(2475) ); ?>"><span>&laquo;</span> Previous</a> <span style="font-weight: bold;">|</span> <a href="<?php echo esc_url( get_permalink(2482) ); ?>">Next <span>&raquo;</span></a>
				</div>
			</div>
		</div>
	</div>
</nav>
<main class="cd-main-content">
		<!-- <div class="cd-tab-filter-wrapper"> <div class="cd-tab-filter"> </div> </div> -->
    <?php
 	// Start the loop.
 	while ( have_posts() ) : the_post();
	 	echo '<section class="wine-main" data-speed="2" data-type="background">';
			echo '<div class="container">';
				echo '<div class="row-fluid">';
				?>
				<?php $twittertext="iTi has products suited for use in beers, wines and spirits. Learn how to redesign your beverage with coconut water http://www.ititropicals.com/wine-beer-spirit/";?>
					<a href="https://twitter.com/share?text=<?php echo urlencode($twittertext); ?>%0A&url=na" style="position:absolute; right:10px; top:15px;" target="_blank">
	  					<span class="genericon genericon-twitter"></span>
	  				</a>
				<?php
					echo get_template_part( 'content', 'singlepost' );
					?>
					<?php
				echo '</div">';
			echo '</div">';
		echo '</section>';
 	// End the loop.
 	endwhile;
 	?>

 	<?php
//Simple fields: app_panels
$field_value = simple_fields_values("app_i_title", null, "enable_extended_return_values=1");
$field_value2 = simple_fields_values("app_p_title", null, "enable_extended_return_values=1");
$field_value3 = simple_fields_values("app_p_content", null, "enable_extended_return_values=1");
$file_info = simple_fields_values("app_p_image"); 
$field_value4_bg = simple_fields_values("app_bg_position", null, "enable_extended_return_values=1");
$field_value4_bg = isset($field_value4_bg) ? $field_value4_bg : '100% 0';
 
/* 		$field_value = simple_fields_values("imagetitle", null, "enable_extended_return_values=1");
    	$field_value2 = simple_fields_values("paneltitle", null, "enable_extended_return_values=1");
    	$field_value3 = simple_fields_values("panelcontent", null, "enable_extended_return_values=1");

		$file_info = simple_fields_values("panelimage");
*/
		$count=0;
		$panel_title = 1;
		$backgroundposition = 0;

 	    $landing_query = new WP_Query('posts_per_page=5');
        while ($landing_query->have_posts()): $landing_query->the_post();
	  	$backgroundposition = ($count > 4) ? '-80px' : 0 ;
            echo '<section class="wine-image" style="background: url('.$file_info[$count]['url'].') 50% '.$backgroundposition.'; background-repeat:none; background-size:cover;" data-speed="4" data-type="background">';
				echo '<div class="container">';
					echo '<div class="row-fluid">';
						echo '<h2 class="landing-title'.$panel_title.'">';
						if ($panel_title < 2) {
							$panel_title = 2;
						} else if ($panel_title > 1) {
							$panel_title = 1;
						}

							echo $field_value[$count];
						echo '</h2>';
					echo '</div">';
				echo '</div">';
			echo '</section>';
			echo '<section class="wine-main" data-speed="2" data-type="background">';
				echo '<div class="container">';
					echo '<div class="row-fluid">';
						if($count > 4){
							break;
						}else{
							echo '<div class="entry-content">';
								echo '<h2 class="panel-title">';
									echo $field_value2[$count];
								echo '</h2>';
								echo $field_value3[$count];
							echo '</div>';
						}
					echo '</div">';
				echo '</div">';
			echo '</section>';
			$count++;
		endwhile; 

		wp_reset_postdata();
			echo '</div">';
		echo '</section>'; ?>
		<nav class="nav-utility-bar bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="app-navigation text-center">
							<a class="btn-app" href="<?php echo esc_url( get_permalink(2475) ); ?>"><span>&laquo;</span> Previous</a> <span style="font-weight: bold;">|</span> <a class="btn-app" href="<?php echo esc_url( get_permalink(2482) ); ?>">Next <span>&raquo;</span></a>
						</div>
					</div>
				</div>
			</div>
		</nav>

</main> <!-- cd-main-content -->

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
	    /* size of all images */
	    imgWidth: 1000,
	    imgHeight: 550
	  });
	});
</script>

<script src="/wp-content/themes/iTiTropicals-TBS/js/init.js"></script>

<?php get_footer('bootstrap'); ?>
