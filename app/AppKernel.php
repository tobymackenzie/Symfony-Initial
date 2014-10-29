<?php
use TJM\Bundle\StandardEditionBundle\Component\AppKernel as BaseKernel;

class AppKernel extends BaseKernel{
	public function registerBundles(){
		$bundles = array_merge(
			parent::registerBundles()
			,Array(
				new \TJM\Bundle\BaseBundle\TJMBaseBundle()
				,new \TJM\SiteBundle\TJMSiteBundle()
			)
		);
		return $bundles;
	}
}
