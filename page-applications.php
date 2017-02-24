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

<style type="text/css">

	iframe:not(.twitter-tweet), .thumbnail{ 
		position: absolute !important;
		top: 0;
	}

	header.apps_header{
		position: relative;
		overflow: hidden;
		/* height: 346px; */
		height: 450px !important;
		background: url('http://www.ititropicals.com/wp-content/uploads/shutterstock_204684250-1-1.jpg') 100% 10%;
		background-repeat: no-repeat;
		background-size: cover;
		opacity: 0.9;
		/* background-image: url('<?php the_post_thumbnail_url( 'full' ); ?> '); 
		background-repeat: no-repeat;
		background-size: 100% 100%; */
	}

	header.apps_header h1 {
		color: #ffffff;
		line-height: 346px;
		text-align: center;
		font-size: 2.5rem;
		font-weight: 300;
		text-shadow: 1px 1px 2px #000000;
	}

	@media (max-width:768px){
		header.apps_header{
			height: 250px !important;
		}
		header.apps_header h1 {
			line-height: 250px !important;
		}
	}
	
	@media (min-width:1200px){
		.apps_header{
			height: auto !important;
		}
		header.apps_header h1 {
			line-height: 450px !important;
		}
	}
	
	.square-div h3 {text-transform:capitalize !important;}	
</style>

	<header class="apps_header">
	    <h1 class="row"><?php echo substr(the_title('', '', FALSE), 0, 200); ?></h1>
	</header>

	<main class="cd-main-content">

		<div align="center container">
		<section class="cd-gallery">
			
			<?php 
				$args = array( 
					'post_type' => 'applications', 
					'posts_per_page' => 12, 
					'orderby' => 'menu order', 
					'order' => 'ASC'
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				$link = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'large', false );
				$app_slug = ucfirst($post->post_name);
				$app_title = str_replace( '-',' ', $app_slug ); 
				$app_title = str_replace( 'Acai','Açaí', $app_title ); 				
			?>

			<div align="center">
				<div style="max-width: 1400px;">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 apost" style="margin-bottom:20px;">
						<article id="post-60" class="post-60 itiproducts type-itiproducts status-publish has-post-thumbnail hentry">
							<a class="" href="<?php echo get_permalink(); ?>">
								<div class="square-div thumbnail" style="background: url(<?php echo $link[0]; ?>) no-repeat center center;background-size:cover;" title="<?php the_title(); ?>">	
									<header class="entry-header">
											<h3><?php echo $app_title; ?></h3>
									</header>
								</div>
							</a>
						</article>
					</div>
				</div>
			</div>

			<?php	
				endwhile;
			?>

			
		</section> <!-- cd-gallery -->
		</div>

	</main> <!-- cd-main-content -->

<?php get_footer('bootstrap'); ?>