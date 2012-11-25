<?php




class IndexController extends Zend_Controller_Action
{


	public function init ()
	{
		/* Initialize action controller here */
	}


	public function indexAction ()
	{
	}


	public function step2Action ()
	{
	}


	public function step3Action ()
	{
	}




	public function loginAction ()
	{
		$this->_helper->viewRenderer->setNoRender();

		$linked = new Application_LinkedIn ();
		$linked->initiate ($this->_request);
	}


	public function testAction ()
	{
	}
}
