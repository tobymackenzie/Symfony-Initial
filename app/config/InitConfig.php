<?php
namespace TJM\Shared\Component;

class InitConfig{
	/*
	Property: paths
	Collection of paths to be used in early lifecycle
	*/
	public static $paths = Array();
	public static function getPath($name){
		return (self::hasPath($name)) ? self::$paths[$name] : null;
	}
	public static function hasPath($name){
		return (isset(self::$paths[$name]));
	}
	public static function setPath($name, $value){
		self::$paths[$name] = $value;
	}
}

/*==cli paths */
if(!InitConfig::hasPath('PHPCLI')){
	InitConfig::setPath('PHPCLI', '/usr/bin/php');
}

/*==symfony paths */
if(!InitConfig::hasPath('app')){
	InitConfig::setPath('app', __DIR__ . '/..');
}
if(!InitConfig::hasPath('src')){
	InitConfig::setPath('src', InitConfig::getPath('app') . '/../src');
}
if(!InitConfig::hasPath('vendor')){
	InitConfig::setPath('vendor', InitConfig::getPath('app') . '/../vendor');
}
