<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	public function run()
	{
		Zend_Registry::set('config', new Zend_Config($this->getOptions()));
		parent::run();
	}

	protected function _initSession()
	{
		$session = new Zend_Session_Namespace('projetZF', true);
		return $session;
	}
}
