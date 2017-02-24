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

$categories = get_the_category(); 
?>

<style type="text/css">

.nav-utility-bar.bottom { margin: 30px auto; }
.nav-utility-bar.bottom span { color: white; }
.nav-utility-bar.bottom a { margin-right: 15px; }
.nav-utility-bar.bottom a:last-child { margin-right: auto; }
.btn-app, .yikes-easy-mc-form .yikes-easy-mc-submit-button {
    color: #bdd63d !important;
    background: #000 !important;
    font-family: "Quicksand",sans-serif;
    font-weight: 400 !important;
    font-size: 18px !important;
    margin: 0 auto 10px;
	padding: 10px;
    text-align: center;
    text-transform: inherit;
    display: inline-block;
    vertical-align: inherit;
    transition: background-color 0.5s ease;
}
.yikes-easy-mc-form .yikes-easy-mc-submit-button {
    display: block;
    width: 50% !important;
    margin-top: .5em;
    min-height: 40px;
    padding: 10px;
    cursor: pointer;
    border-radius: 0px;
    border:none !important;
}
.yikes-easy-mc-form input[type="text"], .yikes-easy-mc-form input[type="email"] {font-family: "Quicksand",sans-serif !important; font-weight: 400 !important; font-size: 18px !important; height:50px !important; padding:0 0 0 15px !important;}
.yikes-easy-mc-form label {display: inline-block;margin-bottom: .10em !important; width: 100%; font-size: 18px !important; font-family: "Quicksand",sans-serif !important; font-weight: bold !important;}
.yikes-easy-mc-form {display: block;width: 100%;margin: 60px auto 0 !important;}
.yikes-easy-mc-form::before { content: "Subscribe";font-family: "Quicksand",sans-serif !important; font-weight: bold !important; font-size: 30px !important; width: 95%; text-align: center;position: absolute; top: 40px; }
.btn-app:hover { background: #bdd63d!important; color: black!important; }
.yikes-easy-mc-form .yikes-easy-mc-submit-button:hover { background: #bdd63d!important; color: black!important; }
.btn-app.invert-clr { background: #bdd63d; color: black; }
.subscribe-button { background: url("http://www.princetonpartnersdevelopment.com/iti/wp-content/themes/iTiTropicals-TBS/images/subscribe3.png");background-repeat: no-repeat;background-position:50% 65%;padding: 19px;margin:10px; }
.subscribe-button:hover { background: url("http://www.princetonpartnersdevelopment.com/iti/wp-content/themes/iTiTropicals-TBS/images/subscribe-gray2.png");background-repeat: no-repeat;background-position:50% 65%;padding: 19px;margin:10px; }
#subscribe_form input { border: none !important; }
#ruaname, #ruaemail { background: #eeeeee !important;color: #000000 !important;padding: 8px;height: 45px;font-size: 24px !important;font-family: "Quicksand",sans-serif; }
#ruaSubmit { color: #bdd63d !important; background-color: #000000 !important; transition: background-color 0.5s ease; }
#ruaSubmit:hover { color: #000 !important; background-color: #bdd63d !important; }
.modal-body { position: relative; overflow-y: auto; min-height: 400px; max-height: 750px; height: auto; padding: 15px; }

@media(max-width: 556px) { .nav-utility-bar.bottom .btn-app { width: 100%;}}
@media(max-width: 556px) { .col-xs-12 { padding-left: 0px !important;}}

</style>

<?php if ( esc_html( $categories[0]->name ) == 'Blog' ) : ?>
	<?php $isBlog = 1; ?>
	<?php $crumb_current = '<a href=" '.esc_url( home_url() ).'/blog">Blog</a> '; ?>
<?php else : ?>
	<?php $crumb_current = '<a href=" '.esc_url( home_url() ).'/news">News</a> '; ?>
<?php endif; ?>

 <!-- Header -->
<?php if ( !$isBlog ) : ?>

	<header style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/beach-front.png'); background-size: cover; background-position: 50% 50%; width: 100%;" class="cd-header">
	    <h1 class="row"><?php echo substr(the_title('', '', FALSE), 0, 200); ?></h1>
	</header>

<?php elseif ( $isBlog ) : ?>
	<?php if ( has_post_thumbnail() ) : $link = wp_get_attachment_url( get_post_thumbnail_id($post->ID) , 'large' ); ?>

		<?php echo '<header style="position: relative; overflow: hidden; height: 400px !important;  background: url('. $link .') 100% 10%; background-repeat: no-repeat; background-size: cover; opacity: 0.9;"></header>'; ?>

	<?php endif; ?> 
<?php endif; ?>

<main class="container clearfix">
	<div class="row">
		<div class="col-xs-12">

			<?php if ( $isBlog ) : ?>
				<div class="row" style="margin: 15px auto 5px;">
					<div class="col-xs-12 clearfix">
						<div class="social-btns pull-right">
							<a href="https://twitter.com/share?text=<?php echo urlencode(get_the_title()); ?>%0A&url=<?php echo $href; ?>" target="_blank">
								<span class="genericon genericon-twitter"></span>
							</a> 
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank">
								<span class="genericon genericon-linkedin-alt"></span>
							</a>
							<a href="#" data-toggle="modal" data-target=".subscribe">
								<!-- <img style="margin: 0 10px 0 10px;" src="<?php echo get_bloginfo('template_directory');?>/images/subscribe3.png" alt="<?php echo urlencode(get_the_title()); ?>" /> -->
								<span class="subscribe-button"></span>
							</a>
							<a href="<?php bloginfo('rdf_url'); ?>" target="_blank">
								<span class="genericon genericon-feed"></span>
							</a>
						</div>
					</div>
				</div>

				<!-- Subscribe Modal -->
				<div class="modal hide fade subscribe" tabindex="-1" role="dialog">
				  	<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				      		<div class="modal-body">
				        		<?php echo do_shortcode('[yikes-mailchimp form="1"]'); ?>
				        		<!-- <?php 
				        			//if ( is_active_sidebar( 'sidebar-contact-us' ) ) :
										//dynamic_sidebar( 'sidebar-contact-us' ); 
									//endif; 
								?> -->
					      	</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn-app" data-dismiss="modal">Close</button>
				      		</div>
				    	</div>
				  	</div>
				</div>

			<?php else : ?>

				<div class="row pull-right">
					<div class="col-xs-12 clearfix">
						<div class="social-btns pull-right">
							<a href="https://twitter.com/share?text=<?php echo urlencode(get_the_title()); ?>%0A&url=<?php echo $href; ?>" style="z-index:1;position:absolute; right:0px; top:15px;" target="_blank">
								<span class="genericon genericon-twitter"></span>
							</a>
							<!-- <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank">
								<span class="genericon genericon-linkedin-alt"></span>
							</a> -->
						</div>
					</div>
				</div>

			<?php endif; ?>	
				
				<div class="row">
				
				<?php if ( !$isBlog ) : ?>
					<!-- Main Content -->
					<div class="col-md-8 col-sm-8">
		            	<h5>Post Date: <?php echo get_the_date('m/d/Y'); ?></h5>

					  	<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
							// Include the page content template.
							get_template_part( 'content', 'singlepost' );
						// End the loop.
						endwhile; ?>
				  	</div>
				  	<!-- /Main Content -->

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
										$image = wp_get_attachment_url($image_id);
										echo '<a class="image-link" href="'.$image.'" />';
										echo '<img class="col-md-6 col-xs-6" style="border-radius:10px !important; padding:2px !important; float:none !important;" src="'.$img_src.'" />';
										echo '</a>';
										$count++;
										$imagetag = $imageslug.$count;
										$image_id = get_post_meta(get_the_ID(), $imagetag, true);
									}
								}
							?>
					  	</div>
				  		<?php get_sidebar(); ?>
					</div>

				<?php elseif ( $isBlog ) : ?>

					<style>
						img.alignright { float: right; margin: 5px 5px 20px 45px; display: inline; }
					</style>

					<div class="col-xs-12">
						<div id="post-<?php the_ID(); ?>">
							<div style="padding:20px 3% 20px 7%">
								<h4 style="margin-bottom:15px;font-size:24pt;line-height:110%;"><?php the_title();?></h4>
								<div class="entry-date" style="font-family: Quicksand,sans-serif!important; font-size:130%; margin-bottom:10px;"><?php echo get_the_date('m/d/Y'); ?></div>
							  	<span>By: <?php the_author(); ?></span>
								<div style="min-height:25vh">
									<?php the_content(); ?><br>
									<b>Tags:</b>&nbsp
									<?php
										$posttags = get_the_tags();
											if ($posttags) {
												foreach($posttags as $tag) {
													echo $tag->name . ' ';
												}
											} 
									?>
								</div>
								<nav class="nav-utility-bar bottom">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-12">
												<div class="app-navigation text-center">
													<?php next_post_link('%link', '<button class="btn-app btn-previous"><span>&laquo;</span> Newer</button>', get_the_category( $id = false ) ); ?>
													<a href="/iti/news/?filter=blog" class="btn-app invert-clr">Return to Blog</a>
													<a href="#" class="btn-app invert-clr" data-toggle="modal" data-target=".subscribe">Subscribe to our Blog</a>
													<?php previous_post_link('%link', '<button class="btn-app btn-next">Older <span>&raquo;</span></button>', get_the_category( $id = false ) ); ?>
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>

				<?php endif; ?>

			<!-- End of Blog -->
		</div>
    </div>
</main> <!-- cd-main-content -->

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

		jQuery('.image-link').magnificPopup({
		  type: 'image'
		});

		jQuery('.video-link').magnificPopup({
		  type: 'iframe'
		});
	}
</script>

<?php get_footer('bootstrap'); ?>
