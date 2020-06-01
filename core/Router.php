<?php
namespace Core;

class Router 
{
	protected $routes;

	public function define($routes)
	{
		$this->routes = $routes;
	}

	public static function load($file)
	{
		$router = new static;
		require $file;
		return $router;

	}
	
	public function direct($uri)
	{
		if(array_key_exists($uri, $this->routes)) {
			return dirname(__DIR__) . '/' . $this->routes[$uri];
		}

		throw new \Exception('No route defined for this URI');
	}
}