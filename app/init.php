<?php
if(!isset($tjmGlobals)) $tjmGlobals = Array();
if(!array_key_exists('pathApp', $tjmGlobals)){
	$tjmGlobals['pathApp'] = __DIR__;
}
include("../vendor/_bundles/TJM/Shared/app/init.php");
