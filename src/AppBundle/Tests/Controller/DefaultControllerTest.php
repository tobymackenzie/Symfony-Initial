<?php
namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase{
	public function testIndexAction(){
		$client = static::createClient();
		$crawler = $client->request('GET', '/');
		$this->assertTrue($client->getResponse()->isSuccessful(), 'Response should be successful.');
		$this->assertContains('</html>', $client->getResponse()->getContent());
	}
	public function testRemoveTrailingSlashAction(){
		$paths = Array(
			'/foo/bar/'=> '/foo/bar'
			,'/foo/bar/?bar=biz'=> '/foo/bar?bar=biz'
		);
		foreach($paths as $path=> $desiredUrl){
			$client = static::createClient(); //-# must be here because multiple subsequent requests seem to be able to affect each other if done with the same client
			$crawler = $client->request('GET', $path);
			$this->assertEquals(301, $client->getResponse()->getStatusCode(), 'Status code should be 301, indicating a permanent redirect');
			$this->assertTrue($client->getResponse()->isRedirect($desiredUrl), "'{$path}' should be redirected to '{$desiredUrl}', was instead '{$client->getResponse()->headers->get('Location')}'");
		}
	}
	public function testNoRemoveTrailingSlashAction(){
		//-! uncomment to run test.  left commented by default because it takes a lot of time and memory.
		// $paths = Array(
		// 	'/foo/bar'
		// );
		// foreach($paths as $path){
		// 	$client = static::createClient(); //-# must be here because multiple subsequent requests seem to be able to affect each other if done with the same client
		// 	$crawler = $client->request('GET', $path);
		// 	$this->assertEquals(404, $client->getResponse()->getStatusCode(), 'Status code should be 404, indicating that no route was found and no redirection occurred.');
		// 	$this->assertFalse($client->getResponse()->isRedirection(), "{$path} should not cause trailing slash redirection");
		// }
	}
	public function testSimplePageAction(){
		$client = static::createClient();
		$crawler = $client->request('GET', '/simple');
		$this->assertTrue($client->getResponse()->isSuccessful(), 'Response should be successful.');
		$this->assertContains('</html>', $client->getResponse()->getContent());
	}
	public function testTestAction(){
		//-! uncomment to run test.  left commented by default because it takes a lot of time and memory.
		// $client = static::createClient();
		// $crawler = $client->request('GET', '/test/foo');
		// $this->assertFalse($client->getResponse()->isSuccessful(), 'Response shouldn\'t be successful.');
	}
}
