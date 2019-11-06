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
.st-button { display: inline-block; font-family: sans-serif; font-size: 0.75rem; margin-right: 0.625rem; line-height: normal; vertical-align: middle; }
.st-button iframe { margin: 0; }
.st-button a.mail { background: #f4f4f4; border: 0; border-radius: 0.1875rem; color: #0a0a0a; padding: 0.25rem 0.75rem; text-decoration: none;
  transition: background-color 0.4s; }
.st-button a.mail:focus, .st-button a.mail:hover { background: #eaeaea; }
```

### JS scripts needed for the buttons
```html
<!-- Facebook root element: place near beginning of body -->
<div id="fb-root"></div>
<!-- End Facebook root element -->

<script>window.twttr = (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {}; if (d.getElementById(id)) return t; js = d.createElement(s); js.id = id; js.src = "https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); t._e = []; t.ready = function(f) { t._e.push(f); }; return t; }(document, "script", "twitter-wjs"));</script>
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0" async defer crossorigin="anonymous"></script>
<script src="https://platform.linkedin.com/in.js" async defer>lang: en_US</script>
<script src="https://assets.pinterest.com/js/pinit.js" async defer></script>
```
