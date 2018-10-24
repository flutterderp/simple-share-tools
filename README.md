# Simple Share Tools
A simple widget for displaying a few common social media sharing buttons. Mainly aimed at usage in a [Joomla!](https://www.joomla.org/) template, but should be usable in other CMS templates or standalone.

### Sample usage
```php
include_once(__DIR__ . '/path/to/sharebuttons.php');
$sharetools = new Sharetools(0, 0, '', '', '', array('image' => 'https://placekitten.com/700/320'));
$link       = 'https://www.example.com';
$sharetools->setLinkText($link);

echo $sharetools->shareButtons();
```

### Suggested CSS styles
```css
.sharetools { clear: both; font-size: 0; margin: 1rem auto; }
.st-button { display: inline-block; margin-right: 0.625rem; line-height: normal; vertical-align: top; }
.st-button iframe { margin: 0; }
```

### JS scripts needed for the buttons
```html
<script src="https://apis.google.com/js/platform.js" async></script>
<script async>window.twttr = (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {}; if (d.getElementById(id)) return t; js = d.createElement(s); js.id = id; js.src = "https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); t._e = []; t.ready = function(f) { t._e.push(f); }; return t; }(document, "script", "twitter-wjs"));</script>
<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
<script src="https://platform.linkedin.com/in.js" type="text/javascript" async>lang: en_US</script>
<script src="https://assets.pinterest.com/js/pinit.js" async></script>
```
