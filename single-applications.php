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

get_header('bootstrap'); 

	$counter = 0; // count panels; increment in foreach loop 		
	$repeatable_field_values = simple_fields_values("app_i_title, app_p_title, app_p_content, app_p_image");
	foreach ($repeatable_field_values as $values) {
		$cover[] 		= $values["app_p_image"]["url"];
        $cover_title[] 	= $values["app_i_title"];
        $cover_title2[] = $values["app_p_title"];
        $cover_styles[] = $values["app_p_content"];
		$counter++;
	}
?>

<style type="text/css">

.single-applications .landing-header-title h1 {top: 0px !important;}
.single-applications .landing-header-title h3 {top: 0px !important;}
h1 {line-height: 100%;}
.app_content {line-height:2rem;font-size:16pt;margin:0 10%;text-align:center;font-weight:250!important;font-family:Quicksand,sans-serif !important;}
header.cd-header-banner{position:relative;overflow:hidden;height:450px!important;background-repeat:no-repeat;background-size:cover}
.entry-content h3 {font-size:18pt;text-align:center; padding-top:15px;}
.entry-content,.entry-summary {padding:9% 5%!important}
header.cd-header-banner {height:330px!important}}
.landing-title1,.landing-title2 {text-transform:capitalize!important;max-width:100%}
.contactForm p:hover {opacity: 0.95; color: #999;}
.wine-image {min-height:500px!important;height:100%!important;}
.applications_subhead {font-size:0.7em; text-transform:uppercase}
.nextApp {float:right; padding-top: 15%; padding-right: 75px; font-weight:bold;} /* position: relative; top: 10px;*/ 

.banner-overlay { position: absolute; top:0px; float: left; width: 100%; height:100%; background: #fff; opacity:0.50 !important; box-shadow: inset 0px 0px 50px 0px #000000; }
.landing-header-title h3 {max-width:40%; position:relatve !important;}  /*margin: 0 25% !important;*/
.landing-header-title p, .landing-header-title h3, .cd-header-banner.wineBanner h1{margin: 0 auto;}
.landing-header-title h1 {padding: 3% 0 !important; letter-spacing: 1px; font-weight:500; /*text-shadow: 0px 1px;*/}
.btn-app {
	display: inline-block;
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
}
.btn-app:hover{opacity: 0.95;color: #999;}
.nav-utility-bar.top {padding: 12px 0;background: #DCE8A0;font-family: Quicksand, sans-serif !important;font-size: 1.25em;line-height: 1.25em;}
.nav-utility-bar .app-navigation a {color: black;}
.nav-utility-bar.top .breadcrumbs {font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;}
.nav-utility-bar.top .breadcrumbs .delimiter {font-weight: bold;color: white;}
.nav-utility-bar.top .app-navigation span {color: #78A22D;}
.nav-utility-bar.bottom span {color: white;}

@media (min-width:1001px){.cd-header-banner img,header.cd-header-banner{height:375px!important} .cd-header-banner img, header.cd-header-banner {height: 500px!important;}}
@media(max-width: 767px) {.nav-utility-bar.top .breadcrumbs,.nav-utility-bar.top .app-navigation {text-align: center;}.nav-utility-bar.top .app-navigation {margin-top: 7px;}}
@media (max-width:400px){.cd-header-banner img,header.cd-header-banner{height:250px!important}}
@media (min-width:971px) and (max-width:979px){.cd-header-banner.wineBanner{margin-top:-5px !important}}
@media(max-width:767px){.landing-title1 {max-width: 35em;}}
@media (min-width:768px){.nextApp{top: 65px!important;}.landing-header-title h3 {max-width: 20em; font-size: 1.75em!important; padding: 5px !important;}}
@media (max-width:430px){.nextApp {text-align: center; font-size: 1em; display: block; float: inherit; top:75px} .landing-header-title h3 {max-width: 35%;} }
@media (max-width:550px){.landing-header-title h3{max-width:100% !important; font-size: 1.5em !important;margin-top: 0.5em;margin-bottom: 0.5em;} #full-width-slider {min-width: inherit !important;} .app_content{margin:0 1%;}}
@media (min-width: 1200px){.landing-header-title h3 {top:75px !important; /*max-width: 15em;*/} .landing-header-title p{top:100px !important;} .cd-header-banner img, header.cd-header-banner {height: 550px!important;} .landing-header-title h1 {top: 70px !important;}}
@media (min-width: 992px){.landing-header-title h1 {font-size: 2.5em; padding: 5.5% 0 1% 0 !important; line-height: 130%;} .landing-header-title{font-size: 135%;}}
@media (min-width: 801px) and (max-width: 1000px){.wine-image {min-height: 450px!important;}}
@media (min-width: 601px) and (max-width: 800px){.wine-image {min-height: 350px!important;}}
@media (max-width: 600px){.wine-image {min-height: 275px!important;}}
</style>

<header class="wine-image" style="background: url('<?php echo $cover[0]; ?>') center center; background-repeat:no-repeat; background-size: cover;">
	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row-fluid">
			<div class="rsContent" style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">
				<div class="landing-header-title">
					<?php if ( is_single('2492') ) { ?>
						<h1 style="max-width: 100% !important;"><?php echo $cover_title[0] ='Soups and Salsas and'; ?><br><?php echo $cover_title2[0]; ?></h1>
						<a class="contactForm" href="./contact-iti-tropicals/"><p>REQUEST A SAMPLE</p></a>
					<?php /*$cover_title[0] = 'Savory';*/ } else if  ( is_single('2490') ) { ?>
						<h1 style="max-width: 100% !important;"><?php echo $cover_title[0] = 'Moo goes the Cow,'; ?><br><?php echo $cover_title2[0]; ?></h1> 
						<a class="contactForm" href="./contact-iti-tropicals/"><p>REQUEST A SAMPLE</p></a>
					<?php /*$cover_title[0] = 'Sweet';*/ } else if  ( is_single('2494') ) { ?>
						<h1 style="max-width: 100% !important;"><?php echo $cover_title[0] = 'Tropical Fruits are'; ?><br><?php echo $cover_title2[0]; ?></h1>
						<a class="contactForm" href="./contact-iti-tropicals/"><p>REQUEST A SAMPLE</p></a>
					<?php /* $cover_title[0] = 'Dessert';*/ }  else { ?>
						<h1 style="max-width: 100% !important;"><?php echo $cover_title[0]; ?><br/><span class="applications_subhead">APPLICATIONS</span></h1> 
						<h3><?php echo $cover_title2[0]; ?></h3>
						<a class="contactForm" href="./contact-iti-tropicals/"><p>REQUEST A SAMPLE</p></a>
					<?php } ?>
				</div>
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
					<?php next_post_link('%link <span style="font-weight: bold;">|</span>', '<span>&laquo;</span> Previous'); ?>
					<?php previous_post_link('%link ', 'Next <span>&raquo;</span>'); ?> 
				</div>
			</div>
		</div>
	</div>
</nav>
<main>

	
<article class="cd-main-content">
	<?php
	
 	// Start the loop.
 	while ( have_posts() ) : the_post();
	 	echo '<section data-speed="2" data-type="background">'; // wine-main
			echo '<div class="container">';
				echo '<div class="row-fluid">';
					$nextApp = next_post_link('%link', '<p class="nxtApp" style="display:none;">NEXT APPLICATION</p>');
				?>
				
				<?php $twittertext = simple_fields_value('twit_description'); ?>

					<a href="https://twitter.com/share?text=<?php echo urlencode($twittertext); ?>%0A&url=na" style="position:absolute; right:20px; top:20px;" target="_blank">
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

	
		//Simple fields: app_panels
 		$field_value = simple_fields_values("app_i_title", null, "enable_extended_return_values=1");
    	$field_value2 = simple_fields_values("app_p_title", null, "enable_extended_return_values=1");
    	$field_value3 = simple_fields_values("app_p_content", null, "enable_extended_return_values=1");
		$file_info = simple_fields_values("app_p_image");
		$field_value4_bg = simple_fields_values("app_bg_position", null, "enable_extended_return_values=1");
		$field_value5_bg = simple_fields_values("app_bg_size", null, "enable_extended_return_values=1");		
		$count=1; // start at 1 since image #0 is now the featured cover image since we are using the featured field as the thumb on /applications
		$panel_title = 1;
		$landing_query = new WP_Query('posts_per_page=10');		
        while ( $landing_query->have_posts() && $field_value && $count < $counter): 
		$landing_query->the_post();

		if (!$field_value4_bg[$count]){$field_value4_bg[$count] = 'background-position: 100% 0';}else{}
		if (!$field_value5_bg[$count]){$field_value5_bg[$count] = 'cover';}

            echo '<section class="wine-image" style="background: url('.$file_info[$count]['url'].') center center; '.$field_value4_bg[$count].'; background-repeat:no-repeat; background-size:cover;">';
				echo '<div class="container">';
					echo '<div class="row-fluid">';
					
						if (is_single('2490') && $field_value[$count]=='Be More Cultured with Tropical Yogurts'){
							echo '<h2 class="landing-title1" style="transform: scaleX(-1);">';
						 } else if (is_single('2474') && $field_value[$count]=='Jazz Up Refreshments with Acerola'){
							echo '<h2 class="landing-title1" style="transform: scaleX(-1);">'; 
						} else {
							echo '<h2 class="landing-title'.$panel_title.'">';						
						}
							
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
			echo '<section>'; 
				echo '<div class="container">';
					echo '<div class="row-fluid">';
							echo '<div class="entry-content">';
								echo $field_value3[$count];
							echo '</div>';
						//}
					echo '</div">';
				echo '</div">';
			echo '</section>';
			$count++;
		endwhile;
		wp_reset_postdata();

					echo '</div">';
				echo '</div">';
			echo '</section>'; 
 	?>
	</article>
	<br> 
	<nav class="nav-utility-bar bottom">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="app-navigation text-center">
						<?php next_post_link('%link', '<button class="btn-app" style="margin-right: 15px;"><span>&laquo;</span> Previous</button>'); ?>
						<?php previous_post_link('%link', '<button class="btn-app">Next <span>&raquo;</span></button>'); ?> 
					</div>
				</div>
			</div>
		</div>
	</nav>
	
</main> <!-- cd-main-content -->

<script>
var width = jQuery(window).width();
jQuery(window).resize(function(){
   if(jQuery(this).width() != width){
      width = jQuery(this).width();
       console.log(width);
   }
});
</script>

<?php get_footer('bootstrap'); ?>