<?php

require dirname(__DIR__) . "/core/bootstrap.php";

use Core\Router;
use Core\Request;

try {

	$routesFile = dirname(__DIR__) . '/web/routes.php';
	
	require Router::load( $routesFile )
				->direct( Request::Uri() );

} catch(\Exception $e) {

	echo $e->getMessage();
}