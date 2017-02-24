<?php 
	global $post;
	
	if ( get_post_meta( $post->ID, "_ebor_the_video_1", true ) ) : 
?>

	<div class="video-container">
	  <?php echo wp_oembed_get( esc_url( get_post_meta( $post->ID, "_ebor_the_video_1", true ) ) ); ?>
	</div>
			
<?php 
	endif;