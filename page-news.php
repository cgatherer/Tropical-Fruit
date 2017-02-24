<?php
/**
 * Template Name: News Page
 *
 * This is the news template page for iTi Tropicals
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('bootstrap'); ?>

<style>
	@media(max-width: 556px) { .newscategory { display:inline-block;width:100%;}}
</style>

	<header style="background-image: url('<?php echo the_post_thumbnail_url(); ?>'); background-size: cover; background-position: 50% 50%; width: 100%;" class="cd-header">
	    <h1 class="row"><?php echo substr(the_title('', '', FALSE), 0, 200); ?></h1>
	</header>


	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">

			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<div align="center">
			<section class="newsSection" style="display:none;">
				<div class="container nofloat" style="padding:20px 0px;">
					<div class="newsselector">    
		                <!-- Filters -->    
						<div class="container center-text">
						   <div class="col-md-10 col-md-offset-2 col-sm-12 col-xs-12">
							   <div class="newscategory" data-filter=".recent, .press, .archives">
								   <p><span style="text-transform: uppercase; font-weight:300; font-size: 16px;">Filter By:</span></p>
							   </div>
							   
							   <div class="newscategory" data-filter=".blog">
								   <p<?php if (! $_GET['filter'] == 'blog' ) { echo ' class="selected"'; }; ?>><span class="news-title" onClick="window.location='./news/?filter=blog'">Blog<span style="color:#bcd63c;">.</span></span></p>
							   </div>
							   
							   <div class="newscategory" data-filter=".recent, .press, .archives, .white, .twitter">
								   <p<?php if ($_GET['filter'] == 'news') { echo ' class="selected"'; }; ?>><span class="news-title" onClick="window.location='./news/?filter=news'">News<span style="color:#bcd63c;">.</span></span></p>
							   </div>

							   <div class="newscategory" data-filter=".twitter">
								   <p<?php if ($_GET['filter'] == 'twitter' ) { echo ' class="selected"'; }; ?>><span class="news-title" onClick="window.location='./news/?filter=twitter'">Twitter Feed<span style="color:#bcd63c;">.</span></span></p>
							   </div>

							   <div class="newscategory" data-filter=".white">
								   <p<?php if ( $_GET['filter'] == 'white' ) { echo ' class="selected"';}; ?>><span class="news-title" onClick="window.location='./news/?filter=white'">Coconut Water White Papers<span style="color:#bcd63c;">.</span></span></p>
							   </div>
						   </div>
						</div>
						<!-- /.Filters --> 
						
				  	</div>
				</div>
				<div class="container-fluid" style="background: #DCE8A0 none repeat scroll 0 0;">
					<div class="container">
						<div id="newsisotope">
						  		<?php
								//Get the Posts
								$postargs = array( "numberposts" => 44 );
						  		$posts = get_posts($postargs);
						  		foreach ($posts as $post) :
						  		setup_postdata( $post );
									//Setup Post data
									$haystack = get_the_category($post->ID);
									$i = count($haystack);
									$string = "";
									for ($j=0; $j < $i; $j++) {
										$string .= " ";
										$string .= $haystack[$j]->slug;
									}
									$link = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'large', false );
									$pdf = get_post_meta($post->ID);
									//print_r($pdf);
									if($pdf[_simple_fields_fieldGroupID_2_fieldID_1_numInSet_0][0]){
										$href = $pdf[_simple_fields_fieldGroupID_2_fieldID_1_numInSet_0][0];
									} else {
										$href = get_the_permalink();
									}
									$theCat = wp_get_post_categories( $post->ID );
									if ($theCat[0] == '27'){
										$isBlog = 1; $theCols = 'col-md-6'; 
										$cardHeight='height:auto; min-height: 375px;';
										$cardWidth='max-width:100%;';
										$cardMargin='min-height:200px;';
									} else {
										$theCols = 'col-xs-12'; 
										$cardHeight='height: 230px;';
										$cardMargin = 'margin-right:80px;';
									}
								?>
									<div class="<?php echo $theCols; ?> apost<?php echo $string; ?>" style="margin-bottom:20px; max-width:1200px;">
										<article id="post-<?php the_ID(); ?>" style="<?php echo $cardHeight; ?><?php echo $cardWidth; ?>position:relative;border-radius:0px;background-color:#fff;cursor:pointer;" onClick="window.location='<?php echo $href; ?>'">
												<div class="thumbnail" style="padding:0px;border:0px;">
													<div class="rect-div-image" style='background-image:url("<?php echo $link[0]; ?>");'>
													</div>
													<header class="rect-div">
														<a href="https://twitter.com/share?text=<?php echo urlencode(get_the_title()); ?>%0A&url=<?php echo $href; ?>" style="position:absolute; right:0px; top:5px;" target="_blank">

															<span class="genericon genericon-twitter"></span>
														</a>
														<?php
														$post_title = get_the_title();
														$post_title = explode(' ', $post_title);
														$title = '';
														for ($i=0; $i < 5 ; $i++) {
															$title.=$post_title[$i];
															$title.= ($i ==4) ? "..." : " ";
														}
														?>
														<h3 class="fulltitle" style="margin:5px 0px;"><?php echo the_title();	?></h3>
														<h3 class="parttitle" style="margin:5px 0px;"><?php echo $title;	?></h3>
														<h4 style="margin:0px 10px 0px 0px;display:inline-block;"><span class="genericon genericon-month"></span> Post Date: <?php echo get_the_date('m/d/Y'); ?></h4>
														<div class="rect-content">
															<hr>
															<?php if ($theCat[0] == '27'){
																	echo 'By: '; the_author(); 
																	echo '<div align="center" style="margin-top:10px;"><img src="'. $link[0] .'" style="width:100%; height: auto;" /></div> <br />';
																}?> 

															<!-- <?php if ( $isBlog ) : ?>
																
															<?php else : ?>
																
															<?php endif; ?>	 -->
															
															<div style="<?php echo $cardMargin;?>">
																<?php
																if ($isBlog){ $str=substr(get_the_excerpt(), 0,255); } else {$str = get_the_excerpt();}
																$n = strpos($str, '<a');
																if ($n > 0){
																	$rest = substr($str, 0, $n);
																	echo $rest;
																} else {
																	echo $str;
																}
																
																?>..
															</div>
														</div>
													</header>
												</div>
												<a class="read-more" href="<?php echo $href; ?>">Read More</a>
										</article>
									<!-- </div> -->
								</div>

					  		<?php endforeach;
					  		wp_reset_postdata();
							include_once('includes/twitter.php');
					  		?>
						</div>
					</div>
				</div>
			</section> <!-- cd-gallery -->
		</div>
		<div align="center" class="cd-filter-trigger">

			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			  <a href="<?php echo esc_url( home_url() ); ?>" > iTi Tropicals</a><span> > </span><a href="<?php echo get_permalink(); ?>">News</a>
	    	</div>
	    </div>

	</main> <!-- cd-main-content -->

<script type="text/javascript">
	var filterValue;
	var hide = true;
	var count = 0;
	var c_filter = '<?php echo $_GET['filter']; ?>';
	var value = '.twitter';
		
	window.onload = function(){

		jQuery( ".newsSection" ).fadeIn( 10 );
		jQuery( ".newsSection" ).addClass( 'load' );

		// Isotope Initialization
		jQuery('.newsselector').isotope({
		  itemSelector: '.newscategory',
		  layoutMode: 'packery',
		  filter: '*'
		});

		jQuery('#newsisotope').isotope({
		  itemSelector: '.apost',
		  layoutMode: 'packery',
		  filter: '.blog'
		});
		
		// Check for filter (w/ get method)
		if (c_filter != 'null') {
			filterValue = c_filter;
			  jQuery('#newsisotope').isotope({ filter: '.' + c_filter }); // filter: 
			  // jQuery('.newsselector').isotope({ filter: '.' + c_filter });
			  // console.log (c_filter);
		}		
	};

	// White Paper Lightbox
	jQuery('a.white').on('click', function(e){
		  if(parseInt(window.innerWidth) > 700 && !document.getElementById('whitepdf')){
			  e.preventDefault();
			  var overlay = document.createElement('div');
			  overlay.id ="pdfOverlay";
			  var iframe = document.createElement("iframe");
			  iframe.frameBorder=0;
			  iframe.height=(window.innerHeight - 100) +'px';
			  iframe.id="whitepdf";
			  iframe.setAttribute("src", this.getAttribute("href"));
			  document.getElementsByTagName("body")[0].appendChild(iframe);
			  overlay.addEventListener('click', function(){
				  document.getElementsByTagName("body")[0].removeChild(iframe);
				  document.getElementsByTagName("body")[0].removeChild(overlay);
			  });
			  document.getElementsByTagName("body")[0].appendChild(overlay);
		}
	});
	
	function isotopethepage(){
		jQuery('#newsisotope').isotope({ filter: filterValue });
		if (count < 1){
			setTimeout(isotopethepage, 100);
		}
		count++;
	}
</script>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>

<?php get_footer('bootstrap'); ?>
