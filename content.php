<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php 
// Filtering Homepage post content by category
$haystack = get_post_class();
$i = count($haystack) - 1;
$string = "";
for ($j=0; $j < $i + 1; $j++) { 
	if (strpos($haystack[$j], "category") !== false){
		$string .= " " . $haystack[$j];
	}
}

if (strpos($haystack[$i], "featured") == false and is_home()) {
	if (strpos($haystack[$i], "media") == false) {
?>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 apost <?php echo $string; ?>" style="padding-bottom:30px">
<?php 
	} else { 
?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 apost <?php echo $string; ?>" style="padding-bottom:30px">
<?php 
	} 
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
		// Post thumbnail.
			//twentyfifteen_post_thumbnail();
		// Squre Div
		if (is_home()) { 
			if (strpos($haystack[$i], "media") == false) {
				if (get_post_format() == "video") {
					$link = get_the_excerpt();
					$youtube = getYoutube($link, 'video');
					$thumbnail = getYoutube($link, 'thumbnail');
?>
				<a class="test-popup-link" href="<?php echo $youtube; ?>" >
					<div class="square-div thumbnail" style='background-image:url("<?php echo $thumbnail; ?>");background-size:cover;'>
					<div class="youtubeLogo" style="position:absolute;top:0;bottom:0;left:0;right:0;background-image:url('http://www.princetonpartnersdevelopment.com/iti/wp-content/themes/iTiTropicals-TBS/images/youtube.png');background-size:cover;margin:40%;">
					</div>	
<?php			} else {
					$link = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
				<a class="" href="<?php the_permalink(); ?>">
					<div class="square-div thumbnail" style='background-image:url("<?php echo $link; ?>");background-size:cover;'>	
						<header class="entry-header">
<?php						if ( is_single() ) :
								the_title( '<h3>', '</h3>' );
							else :
								the_title( sprintf( '<h3>', esc_url( get_permalink() ) ), '</h3>' );
							endif;
?>
						</header>
<?php			} ?>
					</div>
				</a>
<?php
			} else { 
?>

<?php 		$featured = new WP_Query( 'cat=13&post_per_page=1' );
				if ( $featured->have_posts() ) : while ( $featured->have_posts() ) : $featured->the_post(); 
				$featureImage = wp_get_attachment_url( get_post_thumbnail_id() ); ?>  
					<div class="square-div thumbnail" style='background-image:url("<?php echo $featureImage; ?>");background-size:cover;'>
						<!-- <article style="border:solid 3px #ddd; height:100%; border-radius:5px;"> -->
							<div class="content-material">
<?php 							the_title( sprintf( '<h2><a href="'.esc_url( get_permalink() ) ).'">', '</a></h2>' );?>
							</div>
						<!-- </article> -->
					</div>
<?php 				endwhile;
				endif;
?>

<?php
			}
		} else {
?>

		<header class="entry-header">
<?php			if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				endif;
?>
		</header><!-- .entry-header -->

		<div class="entry-content">
<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s', 'twentyfifteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php twentyfifteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->

<?php 
		}
?>

	</article kk><!-- #post-## -->

<?php
		// End Bootstrap Div
		if (is_home()) { 
?>
		</div>
<?php 
		}
}
?>

