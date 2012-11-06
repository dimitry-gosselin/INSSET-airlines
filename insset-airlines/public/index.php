<?php
defined('APPLICATION_PATH') || define('APPLICATION_PATH',
	realpath(dirname(__FILE__) . '/../application'));

defined('LIBRARY_PATH') || define('LIBRARY_PATH',
	realpath(dirname(__FILE__) . '/../library'));

define('APPLICATION_ENV', 
			(getenv('APPLICATION_ENV') ? getenv ('APPLICATION_ENV') : 'production'));

//On modifie l'include path de php
set_include_path(implode(PATH_SEPARATOR, array(realpath(LIBRARY_PATH), get_include_path())));

//On a besoin de zend app pour lancer l'application
require_once 'Zend/Application.php';

//On lance la session
require_once 'Zend/Session.php';
Zend_Session::start();

//On crée l'application, on lance le bootstrap et l'application
$application = new Zend_application(APPLICATION_ENV, APPLICATION_PATH . '/config/application.ini');
$application->bootstrap()->run();
