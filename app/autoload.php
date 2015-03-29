<?php
namespace TJM\Bundle\StandardEditionBundle\Component\App;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

define(__NAMESPACE__ . '\APP_DIR', realpath(__DIR__));
define(__NAMESPACE__ . '\VENDOR_DIR', realpath(__DIR__ . '/../vendor'));

/**
* @var ClassLoader $loader
*/
$loader = require(constant(__NAMESPACE__ . '\VENDOR_DIR') . '/autoload.php');
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

/*
Define configuration used by App singleton, such as paths.
*/
App::getSingleton(Array(
	'loader'=> $loader
	,'paths'=> Array(
		//--cli paths
		'PHPCLI'=> '/usr/bin/php'
		//--symfony paths
		,'app'=> constant(__NAMESPACE__ . '\APP_DIR')
		,'src'=> constant(__NAMESPACE__ . '\APP_DIR') . '/../src'
		,'var'=> constant(__NAMESPACE__ . '\APP_DIR') . '/../var'
		,'vendor'=> constant(__NAMESPACE__ . '\VENDOR_DIR')
	)
	//--See [Symfony's docs on "Setting up Permissions"](http://symfony.com/doc/current/book/installation.html#configuration-and-setup).  Uncomment the following line if you can't use ACL's
	// ,'umask'=> 0
));

return $loader;
