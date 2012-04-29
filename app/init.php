<?php
if(!isset($tjmGlobals)) $tjmGlobals = Array();
if(!array_key_exists('pathApp', $tjmGlobals)){
	$tjmGlobals['pathApp'] = __DIR__;
}
if(!array_key_exists('pathSrc', $tjmGlobals)){
	$tjmGlobals['pathSrc'] = __DIR__."/../src";
}
if(!array_key_exists('pathVendor', $tjmGlobals)){
	$tjmGlobals['pathVendor'] = __DIR__."/../vendor";
}
include_once("{$tjmGlobals['pathVendor']}/bundles/TJM/Shared/app/init.php");
