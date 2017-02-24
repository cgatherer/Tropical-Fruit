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

<style type="text/css">

.single-applications .landing-header-title h1 {top: 0px !important;}
.single-applications .landing-header-title h3 {top: 0px !important;}
h1 {line-height: 100%;}
.app_content {line-height:2rem;font-size:16pt;margin:0 10%;text-align:center;font-weight:250!important;font-family:"Quicksand",sans-serif !important;}
header.cd-header-banner{position:relative;overflow:hidden;height:450px!important;background-repeat:no-repeat;background-size:cover}
.entry-content h3 {font-size:18pt;text-align:center; padding-top:15px;}
.entry-content h5, .entry-content h6 {text-transform: initial !important; margin-bottom: 40px;}
.entry-content h6 {font-size: 14pt;}
.entry-content h6.first_sentence {margin-bottom: 20px;}
.entry-content p {text-align: justify;word-break: keep-all;word-wrap: normal;-moz-hyphens: none;-ms-hyphens: none;-webkit-hyphens: none; hyphens: none;}
header.cd-header-banner {height:330px!important;}
.landing-title1,.landing-title2 {text-transform:capitalize!important;max-width:100%}
.wine-image {min-height:500px!important;height:100%!important;}
.applications_subhead {font-size:0.7em; text-transform:uppercase}
.nextApp {float:right; padding-top: 15%; padding-right: 75px; font-weight:bold;}
.banner-overlay { position: absolute; top:0px; float: left; width: 100%; height:100%; background: #fff; opacity:0.50 !important; box-shadow: inset 0px 0px 50px 0px #000000; }
.landing-header-title h3 {max-width:40%; position: relative !important;}
.landing-header-title p, .landing-header-title h3, .cd-header-banner.wineBanner h1{ margin: 0 auto; }
.landing-header-title h1 { padding: 3% 0 !important; letter-spacing: 1px; font-weight:500; }
.landing-header-title h1 {
    max-width: 425px;
    width: 100%;
    margin: 0px auto;
    color: #000;
    font-family: "Quicksand",sans-serif;
    font-weight: 400;
    font-size: 24px;
    position: relative;
    top: 25px;
    padding: 20px 10px;
    background: none repeat scroll 0% 0%;
    text-align: center;
}
.landing-header-title p {
    max-width: 200px;
    margin: 0px auto;
    color: #bdd63d;
    background: #000 !important;
    font-family: "Quicksand",sans-serif;
    font-weight: 400 !important;
    font-size: 18px !important;
    position: relative;
    top: 138px;
    padding: 10px 10px;
    background: none repeat scroll 0% 0%;
    text-align: center;
    transition: background-color 0.5s ease;
}
@media(max-width: 767px) {
	.landing-header-title p { top: 100px; }
}
.landing-header-title p:hover { background:#bdd63d !important;color: #000; }
.btn-app {
	display: inline-block;
    color: #bdd63d;
    background: #000 !important;
    font-family: "Quicksand",sans-serif;
    font-weight: 400 !important;
    font-size: 18px !important;
    margin: 0 auto;
    margin-bottom: 8px;
	padding: 10px;
    max-width: 200px;
    text-align: center;
    transition: background-color 0.5s ease;
}
.btn-app.invert-clr { background:#bdd63d;color: black;transition: background-color 0.5s ease;position: relative;top: -1px; }
.btn-app.invert-clr span:hover { color: #000 !important; }
.btn-app:hover { background:#bdd63d !important;color: #000; }
.nav-utility-bar.top { padding: 12px 0;background: #DCE8A0;font-family: "Quicksand", sans-serif !important;font-size: 1.25em;line-height: 1.25em; }
.nav-utility-bar .app-navigation a { color: black; }
.nav-utility-bar.top .breadcrumbs { font-weight: bold; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }
.nav-utility-bar.top .breadcrumbs .delimiter { font-weight: bold;color: white; }
.nav-utility-bar.bottom {margin: 4vh auto;}
.nav-utility-bar.bottom span {color:#B1D63D !important;}
.nav-utility-bar.bottom a {margin-right: 15px;}
.nav-utility-bar.bottom a:last-child {margin-right: auto;}
.cd-main-content { position: relative;min-height: 85vh;}
.social-share {width:100%;max-width:1200px;margin:0 auto;height:75px;}
.download-print {width:100%;max-width:1200px;margin:0 auto;height:75px; border-bottom:solid 3px #bdd63d;}
.share .genericon-twitter  {font-size: 40px !important;margin: 25px 45px 0 0;}
.share .genericon-linkedin-alt {font-size: 40px !important;margin: 25px 5px 0 0;}
.download img {margin: 10px 50px 0 0;}
.print img {margin: 10px 0 0 0;}

@media(max-width: 767px) {
	.nav-utility-bar.top .breadcrumbs,
	.nav-utility-bar.top .app-navigation { text-align: center; }
	.nav-utility-bar.top .app-navigation { margin-top: 7px; }
	.nav-utility-bar.bottom {margin: 12vh auto; min-height: 15vh;}
}
.nav-utility-bar.top .app-navigation span { color: #78A22D; }
.nav-utility-bar.bottom span { color: white; }
.mfp-close {
    width: 44px;
    height: 44px;
    line-height: 44px;
    position: absolute;
    right: 0px;
    top: 0px;
    text-decoration: none;
    text-align: center;
    opacity: 0.65;
    filter: alpha(opacity=65);
    padding: 0 0 18px 10px;
    color: #FFF;
    font-style: normal;
    font-size: 30px !important;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.iti-product-table {border: none !important; width:100%; max-width: 600px;}
.iti-product-table td {border: none !important;}
.iti-product-table .table-heading td {background-color:#ED0F69; color: #fff; padding: 2px 0 2px 15px; border-bottom: solid 2px #fff !important;}
.iti-product-table .table-row td { padding: 7px 0 7px 15px; border-bottom: solid 2px #fff !important;}
.iti-product-table .table-heading td p {margin: 0px; font-size: 12px; font-weight:bold; }
.iti-product-table .table-row td p {margin: 0px; font-size: 12px; }
.iti-product-table .table-heading .first  { width:40%; }
.iti-product-table .table-heading .second { width:15%; }
.iti-product-table .table-heading .third  { width:35%; }

@media(min-width: 557px) {
	.iti-product-table { margin: 20px 10% 20px; }
}
@media(max-width: 556px) {
	.iti-product-table { margin: 20px 0 20px; }
}
.applications-link {text-align: center;background: #bdd63d;margin:50px 0!important;transition: background-color 0.5s ease;}
.applications-link a {color: #000 !important;padding: 10px 0; width: 100%;display: block;font-size: 18px;}
.applications-link:hover {background: #000;}
.applications-link a:hover {color: #fff !important;}

@media (min-width:1001px){.cd-header-banner img,header.cd-header-banner{height:375px!important} .cd-header-banner img, header.cd-header-banner {height: 500px!important;}}
@media (max-width:400px){.cd-header-banner img,header.cd-header-banner{height:250px!important}}
@media (min-width:971px) and (max-width:979px){.cd-header-banner.wineBanner{margin-top:-5px !important}}
@media (max-width:767px){.landing-title1 {max-width: 35em;}}
@media (min-width:768px){.nextApp{top: 65px!important;}.landing-header-title h3 {max-width: 20em; font-size: 1.75em!important; padding: 5px !important;}}
@media (max-width:430px){.nextApp {text-align: center; font-size: 1em; display: block; float: inherit; top:75px} .landing-header-title h3 {max-width: 35%;} }
@media (max-width:550px){.landing-header-title h3{max-width:100% !important; font-size: 1.5em !important;margin-top: 0.5em;margin-bottom: 0.5em;} #full-width-slider {min-width: inherit !important;} .app_content{margin:0 1%;}}
@media (min-width: 1200px){.landing-header-title h3 {top:75px !important;} .landing-header-title p {top: 8vh;} .cd-header-banner img, header.cd-header-banner {height: 550px!important;} .landing-header-title h1 {top: 70px !important;}}
@media (min-width: 992px){.landing-header-title h1 {font-size: 2.5em; padding: 5.5% 0 0 0 !important; line-height: 130%; height: 200px;} .landing-header-title{font-size: 135%;}}
@media (min-width: 801px) and (max-width: 1000px){.wine-image {min-height: 450px!important;}}
@media (min-width: 601px) and (max-width: 800px){.wine-image {min-height: 350px!important;}}
@media (max-width: 600px){.wine-image {min-height: 275px!important;}}

</style>

<?php $banner_image = get_field('banner_image'); ?>

<?php if ( !empty($banner_image) ){ ?>
	<header class="wine-image" style="background: url('<?php echo $banner_image; ?>') center center; background-repeat:no-repeat; background-size: cover;">
<?php } else { ?>
	<header class="wine-image" style="background: url('<?php echo the_post_thumbnail_url(); ?>') center center; background-repeat:no-repeat; background-size: cover;">
<?php } ?>

	<div class="banner-overlay"></div>
	<div class="container">
		<div class="row-fluid">
			<div class="rsContent" style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">
				<div class="landing-header-title">
					<?php if ( is_single('464') ) { ?>
						<h1 class="row" style="width: 100%;max-width: 1000px;"><?php echo substr(the_title('', '', FALSE), 0, 200); ?></h1>
						<a href="./contact-iti-tropicals/"><p>REQUEST A SAMPLE</p></a>
					<?php }  else { ?>
						<h1 class="row"><?php echo substr(the_title('', '', FALSE), 0, 200); ?></h1>
						<a href="./contact-iti-tropicals/"><p>REQUEST A SAMPLE</p></a>
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
					<?php $excluded_terms = '55'; ?>
					<?php next_post_link('%link <span style="font-weight: bold;">|</span>', '<span>&laquo;</span> Previous', false, $excluded_terms); ?>
					<?php previous_post_link('%link ', 'Next <span>&raquo;</span>', false, $excluded_terms); ?>
				</div>
			</div>
		</div>
	</div>
</nav>

<div class="social-share">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<a class="share" href="https://twitter.com/share?text=<?php echo urlencode(get_the_title()); ?>%0A&url=<?php echo $href; ?>" style="position:absolute; right:0px; top:5px;" target="_blank">
		    	<span class="genericon genericon-twitter"></span>
		    </a>
		    <a class="share" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo urlencode(get_the_title()); ?>" style="position:absolute; right:0px; top:5px;" target="_blank">
		    	<span class="genericon genericon-linkedin-alt"></span>
		    </a>
		</div>
	</div>
</div>

<main class="cd-main-content">

	<div class="container">

		<div class="col-md-8 col-sm-8">

			<!-- Main Content -->
			<div style="margin-bottom:75px !important;">
				<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						//Include the page content template.
						get_template_part( 'content', 'singlepost' );
					//End the loop.
					endwhile;

					// if($id == "78") {
					// 	echo "<div style='border-bottom:solid 2px #bcd63c; margin:0 auto; width:100%; max-width:800px; margin-bottom:50px;'>";
					// 	  	echo "<h3 style='font-weight:400;margin:0;font-size:24px !important;'>Contact us for a sample and more about Virgin Coconut Oil!</h5>";
					//   	echo "</div>";
		   			//		require('includes/contact_form_vco.php');
					// }
				?>
			</div>

			<!-- Product Table -->
			<div style="margin-bottom:10px !important;">
				<?php if($id == "464") {?>
					<!-- Do Nothing -->
				<?php } else { ?>
					<table class="iti-product-table">
						<tbody>
							<tr class="table-heading">
								<td class="first"><p>Product</p></td>
								<td class="second"><p>Brix</p></td>
								<td class="third"><p>Packaging</p></td>
							</tr>
					<?php if( have_rows('iti_product_table') ):
						    while ( have_rows('iti_product_table') ) : the_row();?>
						        <?php if( get_row_layout() == 'types_of_products' ):?>
						        		<tr class="table-row" style="background-color:<?php the_sub_field('background_color');?>;">
											<td class="first"><p><?php the_sub_field('product_application');?></p></td>
											<td class="second"><br><p><?php the_sub_field('brix');?></p></td>
											<td class="third"><br><p><?php the_sub_field('packaging');?></p></td>
										</tr>
						        <?php endif;?>
						    <?php endwhile;
						else :
						    // no layouts found
						endif;?>
						</tbody>
					</table>
				<?php } ?>
			</div>

		</div>

		<div class="col-md-4 col-sm-4 sidebarContainer">

			<!-- Featured Fruit -->
			<div style="margin-bottom:10px !important;">
				<?php $fruit_image = get_field('featured_fruit');
						if( !empty($fruit_image) ): ?>
					<img src="<?php echo $fruit_image['url']; ?>" alt="<?php echo $fruit_image['alt']; ?>" />
				<?php endif; ?>
			</div>

			<!-- Product Images -->
			<div class="popup-gallery" style="margin-bottom:10px !important;">
				<?php
					$imageslug = "_simple_fields_fieldGroupID_1_fieldID_1_numInSet_";
					$count = 0;
					$imagetag = $imageslug.$count;
					$image_id = get_post_meta(get_the_ID(), $imagetag, true);
					if($image_id){
						// echo "<div class='royalSlider productslider'>";
						while($image_id){
							$img_src = wp_get_attachment_thumb_url($image_id);
							$image = wp_get_attachment_url($image_id);
								echo '<a class="image-link" href="'.$image.'" />';
									echo '<img class="col-md-6 col-xs-6" style="padding:5px !important; float:none !important;" src="'.$img_src.'" />';
								echo '</a>';
							$count++;
							$imagetag = $imageslug.$count;
							$image_id = get_post_meta(get_the_ID(), $imagetag, true);
						}
					}
				?>
			</div>

			<div class="applications-link">
				<?php $applications_link = get_field('product_application');
					if( $applications_link ): ?>
						<?php foreach( $applications_link as $a ): // variable must NOT be called $post (IMPORTANT) ?>
						    <a href="<?php echo get_permalink($a); ?>"><?php echo get_the_title(); ?> Applications</a>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<!-- Product Map -->
			<div style="margin-bottom:50px !important;">
				<?php $map_image = get_field('product_map');
					if( !empty($map_image) ): ?>
						<img src="<?php echo $map_image['url']; ?>" alt="<?php echo $map_image['alt']; ?>" />
				<?php endif; ?>
			</div>

		</div>
	</div>

</main> <!-- cd-main-content -->

<div class="download-print">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<?php $product_PDF = get_field('prouct_page_pdf');
					if( !empty($product_PDF) ): ?>
					<a class="download" href="<?php echo $product_PDF; ?>" style="position:absolute; right:0px; top:5px;" download>
		    			<img src="/wp-content/themes/iTiTropicals-TBS/images/download.png" width="35" />
		    		</a>
		    		<a class="print" href="<?php echo $product_PDF; ?>" style="position:absolute; right:0px; top:5px;" target="_blank">
		    			<img src="/wp-content/themes/iTiTropicals-TBS/images/print.png" width="35" />
		    		</a>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php if($id == "76") : ?>
<div style="padding: 50px 0 200px 0;">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="coconut-faqs" style="width: 100%;">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<a class="video-link" href="https://www.youtube.com/watch?v=4FuStszml9k">
						<img class="size-full wp-image-2297" src="/wp-content/uploads/summit.png" alt="summit" />
					</a>
					<p style="font-size: 13px; font-family: 'Quicksand', sans-serif; font-weight: bold; width: 119px;">View our Coconut Presentation.</p>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<a href="./coconut-water-faqs/">
						<img class="size-full wp-image-2294" src="/wp-content/uploads/coconut-water-1.png" alt="coconut-water" />
					</a>
					<p style="font-size: 13px; font-family: 'Quicksand', sans-serif; font-weight: bold; width: 119px;">Read our Coconut FAQS.</p>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<a href="./the-power-of-coconut-water/">
						<img class="size-full wp-image-2295" src="/wp-content/uploads/coco-banana.png" alt="coco-banana" />
					</a>
					<p style="font-size: 13px; font-family: 'Quicksand', sans-serif; font-weight: bold; width: 119px;">Learn about the power of Coconut Water.</p>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<a href="./innovative-coconut-blends/">
						<img class="size-full wp-image-2296" src="/wp-content/uploads/pomagranite.png" alt="pomagranite" />
					</a>
					<p style="font-size: 13px; font-family: 'Quicksand', sans-serif; font-weight: bold; width: 119px;">See our Innovative Coconut Blends.</p>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<a href="./wp-content/uploads/Coconut-Water-White-Papers.pdf" target="_blank">
						<img class="size-full wp-image-2296" src="/wp-content/uploads/Coconut.jpg" alt="whitepapers" width="119" />
					</a>
					<p style="font-size: 13px; font-family: 'Quicksand', sans-serif; font-weight: bold; width: 119px;">Coconut Water White Papers.</p>
				</div>
			</div>

		</div>
	</div>
</div>
<?php endif ?>

<nav class="nav-utility-bar bottom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="app-navigation text-center">
					<?php next_post_link('%link', '<button class="btn-app btn-previous"><span>&laquo;</span>Previous</button>'); ?>
					<a href="./contact-iti-tropicals/" class="btn-app invert-clr"><span>Request A Sample</span></a>
					<?php previous_post_link('%link', '<button class="btn-app btn-next">Next<span>&raquo;</span></button>'); ?>
				</div>
			</div>
		</div>
	</div>
</nav>

<script type="text/javascript">
	// Gallery Popup
	jQuery(document).ready(function() {
	    jQuery('.popup-gallery').magnificPopup({
	          	delegate: 'a',
	          	type: 'image',
	          	tLoading: 'Loading image #%curr%...',
	          	mainClass: 'my-mfp-zoom-in',
	          	gallery: {
	            	enabled: true,
	            	navigateByImgClick: true,
	            	preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	          	},
	          	image: {
	            	tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
	            	titleSrc: function(item) {
	              	return '<small>by Choose New Jersey</small>';
	            }
	        }
	    });

	    jQuery('.video-link').magnificPopup({
		  type: 'iframe'
		});
	});
</script>

<?php get_footer('bootstrap'); ?>