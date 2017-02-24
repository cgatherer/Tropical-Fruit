<?php 
	global $post;
	
	$attachments = get_post_meta( $post->ID, '_ebor_image_list', true );
	$count = count($attachments);
	
	if ( $attachments ) : 
?>

	<div class="flexslider">
		<ul class="slides">
		
		    <?php 
		    	$i = 0;
		    	foreach( $attachments as $attachment ) : 
		    	$i++;
		    ?>
		    
		      <li>
		        <div class="images">
		        
		          <div class="overlay2"></div>
		          
		          <img src="<?php echo $attachment; ?>" alt="<?php echo $post->title; ?>" />
		          
		          <div class="caption">
		            <p><?php echo $i; ?> <span>of</span> <?php echo $count; ?></p>
		          </div>
		          
		        </div>
		      </li>
		      
		    <?php 
		    	endforeach; 
		    ?>
		  
		</ul>
	</div>

<?php 
	endif;