<?php
namespace TJM\Bundle\StandardEditionBundle\Component\App;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

define(__NAMESPACE__ . '\VENDOR_DIR', realpath(__DIR__ . '/../vendor'));

/**
* @var ClassLoader $loader
*/
$loader = require(constant(__NAMESPACE__ . '\VENDOR_DIR') . '/autoload.php');
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

require_once __DIR__ . '/App.php';
App::setLoader($loader);

return $loader;
