<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

require_once(__DIR__ . '/config/preload.php');

/**
* @var ClassLoader $loader
*/
$loader = require $tjmGlobals['paths']['vendor'].'/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
