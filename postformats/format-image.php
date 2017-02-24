<?php 

global $post;

if( get_post_type() == 'post' ){
	
	echo '<div class="images">';
	the_post_thumbnail('large');
	echo '</div>';
	
} else {
	
	$attachments = get_post_meta( $post->ID, '_ebor_image_list', true );	
	
	if( $attachments ) :
	foreach( $attachments as $attachment ) : 
?>

	 <img src="<?php echo $attachment; ?>" alt="<?php echo $post->title; ?>" />
	 <div class="clear"></div>

<?php 
	endforeach; 
	endif;
}