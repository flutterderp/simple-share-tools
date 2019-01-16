<?php
defined('_JEXEC') or die;

class Sharetools
{
	protected $id    = 0;
	protected $catid = 0;
	protected $link  = '';
	protected $option;
	protected $root;
	protected $slug;
	protected $view;

	function __construct(int $id = 0, int $catid = 0, string $option = '', string $view = '', string $slug = '', array $params = [])
	{
		if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['PORT'] == 443)
		{
			$scheme = 'https://';
		}
		else
		{
			$scheme = 'http://';
		}

		$this->id     = $id;
		$this->catid  = $catid;
		$this->option = $option;
		$this->params = (array) $params;
		$this->root   = $scheme . $_SERVER['HTTP_HOST'];
		$this->slug   = $slug;
		$this->view   = $view;
	}

	/**
	 * Set the fully qualified link if we already have one built
	 * @param link string
	 */
	function setLinkText($link = '')
	{
		if(!empty($link))
		{
			$this->link = trim($link);
		}
	}

	/**
	 * Build the URL to use for the share buttons
	 * @return uri string
	 */
	protected function buildUri()
	{
		$qstring   = array();
		$uri_query = '';

		$qstring['option'] = $this->option;
		$qstring['view']   = $this->view;
		$qstring['id']     = $this->slug;
		$uri_query         = http_build_query($qstring);

		$uri = JRoute::_($this->root . '/index.php?' . $uri_query);

		return $uri;
	}

	/**
	 * Outputs social media buttons
	 * @return buttons string
	 */
	function shareButtons()
	{
		$this->uri = !empty($this->link) ? $this->root . $this->link : $this->buildUri();

		// Facebook
		// $fb = '<div class="fb-like st-button" data-href="'.$this->uri.'" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>';
		$fb = '<div class="fb-share-button st-button" data-href="'.$this->uri.'" data-layout="button_count" data-action="like"></div>';

		// Twitter
		$tw = '<div class="st-button"><a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$this->uri.'" data-text="Check out this site!"></a></div>';

		// LinkedIn
		$ln = '<div class="st-button"><script type="IN/Share" data-counter="right" data-url="'.$this->uri.'"></script></div>';

		// Pinterest
		$pt = '<div class="st-button"><a data-pin-do="buttonBookmark" data-pin-url="'.$this->uri.'" data-pin-count="beside" ';
		$pt .= (isset($this->params['image']) && !empty($this->params['image'])) ? ' data-pin-media="'.$this->params['image'].'"' : '';
		$pt .= 'data-pin-color="white" href="https://www.pinterest.com/pin/create/button/"></a></div>';

		$buttons = '<div class="sharetools">' . $fb . $tw . $pt . $ln . '</div>';

		return $buttons;
	}

}
