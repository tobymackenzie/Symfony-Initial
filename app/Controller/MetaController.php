<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use TJM\Bundle\BaseBundle\Controller\Controller;

class MetaController extends Controller{
	//-@ www.robotstxt.org/
	//-@ www.google.com/support/webmasters/bin/answer.py?hl=en&answer=156449
	public function robotsAction(Request $request, $_format = 'html', $data = []){
		if(!isset($data['agents'])){
			$data['agents'] = [
				'*'=> []
			];
		}
		return $this->renderPage('AppBundle:meta:robots.' . $request->getRequestFormat() . '.twig', $data);
	}
}
