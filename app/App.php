<?php
namespace TJM\Bundle\StandardEditionBundle\Component\App;

/*
Class: App
Replaces __NAMESPACE__ . '\App'.  Can override anything in __NAMESPACE__ . '\AppBase'.  It is recommended to overload the following
	getDefaultOptions: Returns array of configuration options for use by
	initBundles: Return array of bundles to be loaded by `AppKernel`.  The parent method loads all standard edition bundles plus 'StandardEditionBundle'.  Override if you need to load more or a different set of bundles.
*/
class App extends AppBase{
	protected function getDefaultOptions(){
		$appPath = realpath(__DIR__);
		return Array(
			'paths'=> Array(
				//--cli paths
				'PHPCLI'=> '/usr/bin/php'
				//--symfony paths
				,'app'=> $appPath
				,'src'=> $appPath . '/../src'
				,'vendor'=> constant(__NAMESPACE__ . '\VENDOR_DIR')
			)
			//--See [Symfony's docs on "Setting up Permissions"](http://symfony.com/doc/current/book/installation.html#configuration-and-setup).  Uncomment the following line if you can't use ACL's
			// ,'umask'=> 0
		);
	}
	protected function initBundles(){
		return array_merge(parent::initBundles(), Array(
			new \TJM\Bundle\BaseBundle\TJMBaseBundle()
			,new \TJM\SiteBundle\TJMSiteBundle()
		));
	}
}
