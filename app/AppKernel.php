<?php
use \TJM\Shared\Component\AppKernel as BaseKernel;

class AppKernel extends BaseKernel{
	public function registerBundles(){
		$bundles = parent::registerBundles();
		$bundles[] = new \TJM\Bundle\BaseBundle\TJMBaseBundle();
		$bundles[] = new \TJM\SiteBundle\TJMSiteBundle();
		return $bundles;
	}
}
