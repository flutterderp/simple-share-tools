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
		
		$page_url		= $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$tweet_text	= 'Check out this site!';
	?>
	<!-- JS script URLs -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<!-- Render the buttons. -->
	<div class="g-plusone" data-size="medium" data-href="<?php echo $page_url; ?>"></div>
	
	<a href="https://twitter.com/share" class="twitter-share-button"{count} data-text="<?php echo htmlspecialchars($tweet_text); ?>"></a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>