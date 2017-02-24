<div id="lightbox-<?php the_ID(); ?>" class="coconut-lightbox">
	<div class="lightbox-center">
		<div class="lightbox-container">
			<h1 class="lightbox-close">x</h1>
			<h3 class="coconut-title">
				<?php the_title(); ?>
			</h3>
			<img src='<?php the_post_thumbnail_url( 'full' ); ?>'>
			<br/>
			<br/>
			<div>
				<?php
				$str = get_the_content();
				echo $str;
				?>
			</div>
		</div>
		<div class="bottomoflightbox">
		</div>
	</div>
</div>
