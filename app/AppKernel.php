<?php
use TJM\Shared\app\AppKernel as BaseKernel;

class AppKernel extends BaseKernel{
	public $pathApp = __DIR__;

	public function registerBundles(){
		$bundles = parent::registerBundles();
		$bundles[] = new TJM\Bundle\BaseBundle\TJMBaseBundle();
		$bundles[] = new Acme\BlogBundle\AcmeBlogBundle();
		return $bundles;
	}
}

