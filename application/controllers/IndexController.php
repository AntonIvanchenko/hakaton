<?php




class IndexController extends Zend_Controller_Action
{


	public function init ()
	{
		/* Initialize action controller here */
	}


	public function indexAction ()
	{
		/*
		 * @todo если уже залогинен, показывать какую-то другую картинку
		 */
		Zend_Session::destroy();
	}


	public function step2Action ()
	{
	}

	public function step3Action ()
	{
	}


	function returnAction ()
	{
		$this->noRenderer ();

		$linked = new Application_LinkedIn ();
		if ($linked->conclude ($this->_getParam ('oauth_verifier')))
		{
			$this->_helper->redirector ('step2');
		}
	}


	public function loginAction ()
	{
		$this->noRenderer ();

		$linked = new Application_LinkedIn ();
		if ($linked->isLoggedIn ())
		{
			$this->_helper->redirector ('step2');
		}
		else
		{
			$linked->initiate ($this->_request, '/index/return');
		}
	}


	public function testAction ()
	{
	}


	protected function noRenderer ()
	{
		$this->_helper->viewRenderer->setNoRender ();
		$this->_helper->layout ()
			->disableLayout ();
	}


	protected function auth ()
	{
		$options = array (
			'version' => '1.0',
			'localUrl' => 'http://localhost/Projets/API/oauth.php',
			'callbackUrl' => 'http://localhost/Projets/API/oauth.php',
			'requestTokenUrl' => 'https://api.linkedin.com/uas/oauth/requestToken',
			'userAuthorisationUrl' => 'https://api.linkedin.com/uas/oauth/authorize',
			'accessTokenUrl' => 'https://api.linkedin.com/uas/oauth/accessToken',
			'callbackUrl' => 'http://h.mts1.akond.dev/index/return',
			'siteUrl' => 'http://h.mts1.akond.dev/index',
			'consumerKey' => 'kxz7cmohvzra',
			'consumerSecret' => 'Q0nBJ8lrkw3Eg0HM'
		);

		return new Zend_Oauth_Consumer ($options);
	}
}
