<?php
/**
 * 
 * Modded by www.evilripper.net -> sarebbe meglio mettere la mondezza javascript all'inizio essendo Async
 * sarebbe meglio metterli nell'header subito dopo il tag body
 *
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a> 
			and child theme Twentytwelve <a href="Permalink: http://www.evilripper.net/2012/10/05/con-twenty-twelve-wordpress-diventa-molto-responsive‎">EvilTheme</a> power by <a target="_blank" href="http://www.evilripper.net" rel="generator">evilripper</a>  &copy; 2012
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<div id="fb-root"></div>
<script>

function isMobileUser(){
  return (/iphone|ipod|ipad|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  
}

if(!isMobileUser())
{

	(function(d, s, id)
	{
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); 
		js.id = id;
		//asynchronous is the way
		js.async=true;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=136020206497020";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
}

if(!isMobileUser())
{
	(function() 
	{
		var po = document.createElement('script'); po.type = 'text/javascript'; 
		//asynchronous is the way 
		po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
}

if(!isMobileUser())
{
	(function() 
	{
		var twitterScriptTag = document.createElement('script');
		twitterScriptTag.type = 'text/javascript';
		//asynchronous is the way
		twitterScriptTag.async = true;
		twitterScriptTag.src = 'http://platform.twitter.com/widgets.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(twitterScriptTag, s);
	})();
}
</script>


<!-- bye ;) -->
<!-- POWER BY TOPSERVER -->
</body>
</html>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1897599-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; 
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>