<?php




class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{


	function run ()
	{
		if (get_magic_quotes_gpc ())
		{
			array_walk_recursive ($_GET, array (
				$this,
				'stripSlashes'
			));
			array_walk_recursive ($_POST, array (
				$this,
				'stripSlashes'
			));
			array_walk_recursive ($_COOKIE, array (
				$this,
				'stripSlashes'
			));
		}

		parent::run ();
	}


	protected function stripSlashes (&$value, $key)
	{
		$value = stripslashes ($value);
	}


	protected function _initView ()
	{
		$result = new Zend_View (array (
			'basePath' => APPLICATION_PATH . '/views'
		));
		$result->doctype ('XHTML1_STRICT');
		$result->doctype ('XHTML1_TRANSITIONAL');
		$result->setEncoding ('UTF-8');

		return $result;
	}


	protected function _initViewRenderer ()
	{
		// Указываем расширение для скриптов представлений.
		{
			$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper ('viewRenderer');
			$viewRenderer->setViewSuffix ('php');
		}
	}


	protected function _initConfig ()
	{
		$config = new Zend_Config ($this->getOptions (), true);
		Zend_Registry::set ('config', $config);
	}
}
