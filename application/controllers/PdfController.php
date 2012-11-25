<?php




class PdfController extends Zend_Controller_Action
{


	public function init ()
	{
		/* Initialize action controller here */
	}


	public function indexAction ()
	{
		require_once 'linkedin.php';
	}

	public function testAction ()
	{
	}
}
