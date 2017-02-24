
<?php
	// Category
	$haystack = get_post_class();
	$i = count($haystack) - 1;
	$string = "";
	for ($j=0; $j < $i + 1; $j++) { 
		if (strpos($haystack[$j], "category") !== false){
			$string .= " " . $haystack[$j];
		}
	}
	
	$link = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'large', false );
?>
<div align="center">
	<div style="max-width: 1400px;">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 apost <?php the_ID(); ?>" style="margin-bottom:20px;">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<a class="" href="<?php the_permalink(); ?>">
					<div class="square-div thumbnail" style='background: url("<?php echo $link[0]; ?>") no-repeat center center;background-size:cover;'>	
						<header class="entry-header">
								<?php //print_r($link);
									if ( is_single() ) :
										the_title( '<h3>', '</h3>' );
									else :
										the_title( sprintf( '<h3>', esc_url( get_permalink() ) ), '</h3>' );
									endif;
								?>					
						</header>
					</div>
				</a>
			</article>
		</div>
	</div>
</div>

