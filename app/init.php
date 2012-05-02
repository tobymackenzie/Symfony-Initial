<?php
/*=====
==set up local configuration
=====*/
if(!isset($tjmGlobals)) $tjmGlobals = Array();
/*==cli paths
==*/
if(!array_key_exists('pathPHPCLI', $tjmGlobals)){
	$tjmGlobals['pathPHPCLI'] = '/usr/bin/php';
}
/*==web paths
==*/
if(!array_key_exists('pathApp', $tjmGlobals)){
	$tjmGlobals['pathApp'] = __DIR__;
}
if(!array_key_exists('pathSrc', $tjmGlobals)){
	$tjmGlobals['pathSrc'] = __DIR__."/../src";
}
if(!array_key_exists('pathVendor', $tjmGlobals)){
	$tjmGlobals['pathVendor'] = __DIR__."/../vendor";
}

/*=====
==include shared
=====*/
include_once("{$tjmGlobals['pathVendor']}/bundles/TJM/Shared/app/init.php");
