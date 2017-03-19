<?php
// use Symfony\Component\ClassLoader\ApcClassLoader;
use TJM\Bundle\StandardEditionBundle\Component\App\App;

if(!isset($loader)){
	$loader = require(__DIR__ . '/../src/AppBundle/autoload.php');
}

if(App::getEnvironment() === 'dev'){
	// This check prevents access to debug front controllers that are deployed by accident to production servers.
	// Feel free to remove this, extend it, or make something more sophisticated.
	if(isset($_SERVER['HTTP_CLIENT_IP'])
		|| isset($_SERVER['HTTP_X_FORWARDED_FOR'])
		|| !in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'fe80::1', '::1'))
	){
		header('HTTP/1.0 403 Forbidden');
		exit('You are not allowed to access this file. Check ' . basename(__FILE__) . ' for more information.');
	}
}elseif(App::getEnvironment() === 'prod'){
	require_once __DIR__ . '/../var/bootstrap.php.cache';
	// Use APC for autoloading to improve performance.
	// Change 'sf2' to a unique prefix in order to prevent cache key conflicts
	// with other applications also using APC.
	/*
	$loader = new ApcClassLoader('sf2', $loader);
	$loader->register(true);
	*/
}

App::runWeb();
