<div id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 coconut-post">
	<div class="coconut-photo" onclick="openLightbox(<?php the_ID(); ?>);" style="cursor:pointer;background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');">
	</div>
	<div class="coconut-content">
		<h3 class="coconut-title">
			<?php the_title(); ?>
		</h3>
		<div class="coconut-entry">
			<?php
			$str = get_the_excerpt();
			$n = strpos($str, '<a');
			if ($n > 0){
				$rest = substr($str, 0, 200, $n);
				$rest .= "...";
				echo $rest;
			} else {
				$str .= "...";
				echo $str;
			}
			?>
		</div>
	</div>
	<span class="coconut-button" onclick="openLightbox(<?php the_ID(); ?>);">
		READ MORE
	</span><!-- .entry-content -->

</div><!-- #post-## -->
