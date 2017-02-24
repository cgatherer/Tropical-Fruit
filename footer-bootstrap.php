<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

</div><!-- .site-content -->

 <footer style="padding:0px;" role="contentinfo" id="colophon" class="site-footer">
    <div class="">
      <div class="">
        <div style="background:black;padding:20px;" class="col-md-8 col-lg-8">
          <p>© Copyright 2015 - <a href="http://www.ititropicals.com/" title="iTi Tropicals" rel="home">iTi Tropicals</a></p>
        </div>
        <!-- <div class="col-md-6 col-lg-6">
                            <nav role="navigation">
                              </nav>
                    </div> -->
        <div style="text-align:right;background:black;padding:20px;" class="col-md-4 col-lg-4">
          <div style="display:inline-block;padding-left:10px;">
            <p><a href="/?page_id=129" rel="home">Contact Us</a></p>        
          </div>
          <div style="display:inline-block;padding-left:10px;">
            <p><a href="/?page_id=131" rel="home">Site Map</a></p>        
          </div>  
          <div style="display:inline-block;padding-left:10px;">
            <p><a href="/?page_id=126" rel="home">Terms and Conditions</a></p>
          </div>
        </div>
  </div>
    </div>
</footer>

</div><!-- .site -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25272782-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php wp_footer(); ?>

</body>
</html>
