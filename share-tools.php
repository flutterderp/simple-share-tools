<div class="sharetools">
	<?php
		/*
		 * Best practice for obtaining the current URL:
		 * http://stackoverflow.com/questions/4788306/getting-the-actual-url-best-practices-for-this-case
		 */
		if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['PORT'] == 443)
			$protocol = 'https://';
		else
			$protocol = 'http://';

		$page_url   = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$tweet_text = 'Check out this site!';
	?>
	<!-- JS script URLs -->
	<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Render the buttons. -->
	<div class="fb-like st-button" data-href="<?php echo $page_url; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
	<?php /*<div class="fb-share-button st-button" data-href="<?php echo $page_url; ?>" data-layout="button" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page_url; ?>">Share</a></div>*/ ?>

	<div class="st-button"><a href="https://twitter.com/share" class="twitter-share-button"{count} data-text="<?php echo htmlspecialchars($tweet_text); ?>"></a></div>

	<?php /*<div class="st-button">
		<a data-pin-do="buttonBookmark" data-pin-url="<?php echo $page_url; ?>" data-pin-count="beside"
			data-pin-color="white" href="https://www.pinterest.com/pin/create/button/">
			<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_white_20.png" />
		</a>
	</div>*/ ?>

	<div class="st-button">
		<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
		<script type="IN/Share" data-counter="right"></script>
	</div>
</div>
<style type="text/css">
	div.sharetools { font-size: 0; }
	div.sharetools > .st-button { display: inline-block; float: none; margin: 0 10px 0 0; vertical-align: top; }
</style>
