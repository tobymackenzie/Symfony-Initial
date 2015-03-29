<?php
use TJM\Bundle\StandardEditionBundle\Component\AppKernel as Base;

class AppKernel extends Base{
	public function registerBundles(){
		return array_merge(parent::registerBundles(), Array(
			new \TJM\Bundle\BaseBundle\TJMBaseBundle()
			,new \AppBundle\AppBundle()
		));
	}
}
