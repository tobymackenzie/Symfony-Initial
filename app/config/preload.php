<?php
if(!isset($tjmGlobals)) $tjmGlobals = Array();
if(!isset($tjmGlobals['paths'])) $tjmGlobals['paths'] = Array();

/*==cli paths */
if(!isset($tjmGlobals['paths']['PHPCLI'])){
	$tjmGlobals['paths']['PHPCLI'] = '/usr/bin/php';
}

/*==symfony paths */
if(!isset($tjmGlobals['paths']['app'])){
	$tjmGlobals['paths']['app'] = __DIR__ . '/..';
}
if(!isset($tjmGlobals['paths']['src'])){
	$tjmGlobals['paths']['src'] = $tjmGlobals['paths']['app'].'/../src';
}
if(!isset($tjmGlobals['paths']['vendor'])){
	$tjmGlobals['paths']['vendor'] = $tjmGlobals['paths']['app'].'/../vendor';
}
