<?php
namespace TJM\SiteBundle\Controller;

use TJM\Bundle\BaseBundle\Controller\Controller;

class DefaultController extends Controller{
	public function indexAction(){
		$data = Array();
		return $this->renderPage(
			'TJMSiteBundle:default:index.html.twig'
			,$data
		);
	}
	public function simplePageAction($name){
		return $this->renderPage(
			"TJMSiteBundle:default:{$name}.html.twig"
		);
	}
	public function testAction($parameters){
	}
}

