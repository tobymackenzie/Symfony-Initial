<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;
use TJM\Shared\Component\InitConfig;

require_once(__DIR__ . '/config/InitConfig.php');

/**
* @var ClassLoader $loader
*/
$loader = require InitConfig::getPath('vendor') . '/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
