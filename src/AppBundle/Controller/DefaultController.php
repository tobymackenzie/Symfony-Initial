<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use TJM\Bundle\BaseBundle\Controller\Controller;

class DefaultController extends Controller{
	public function indexAction(){
		$data = Array();
		return $this->renderPage(
			'AppBundle:default:index.html.twig'
			,$data
		);
	}
	/*
	Action: removeTrailingSlashAction
	Redirect any otherwise unmatched routes with a trailing slash to the same route without the trailing slash.
	-@ http://symfony.com/doc/current/cookbook/routing/redirect_trailing_slash.html
	*/
	public function removeTrailingSlashAction(Request $request){
		$pathInfo = $request->getPathInfo();
		$requestUri = $request->getRequestUri();
		$url = str_replace($pathInfo, rtrim($pathInfo, ' /'), $requestUri);
		return $this->redirect($url, ($this->get('kernel')->getEnvironment() === 'dev') ? 302 : 302);
	}
	public function simplePageAction($name){
		return $this->renderPage(
			"AppBundle:default:{$name}.html.twig"
		);
	}
	public function testAction($parameters){
	}
}

