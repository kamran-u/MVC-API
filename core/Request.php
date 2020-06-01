<?php
namespace Core;

class Request 
{
	public static function Uri()
	{
		
		$uri = $_SERVER['REQUEST_URI'];
		$parsed =  parse_url($uri);
		return trim($parsed['path'], '/');
	} 
}