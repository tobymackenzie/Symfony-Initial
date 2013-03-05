<?php
use Doctrine\Common\Annotations\AnnotationRegistry;

require_once(__DIR__ . '/config/preload.php');

$loader = require $tjmGlobals['paths']['vendor'].'/autoload.php';

//==intl
if (!function_exists('intl_get_error_code')) {
	require_once $tjmGlobals['paths']['vendor'].'/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';

	$loader->add('', $tjmGlobals['paths']['vendor'].'/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs');
}

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
