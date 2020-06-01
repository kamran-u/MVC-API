<?php

use RickMorty\Repositories\Search;


//validation required
//parse_str($_SERVER['QUERY_STRING'], $queryStr);
$page 							   = $_GET['page'] 				  ?? null; 
$searchVars['searchString'] 	   = $_GET['searchString'] 		  ?? null;
$searchVars['characterAttributes'] = $_GET['characterAttributes'] ?? null;

$data               = Search::initialise($page, $searchVars)->searchCharacters();

$charactersCount    = $data['info']['count'] ?? null;
$pages              = $data['info']['pages'] ?? null;
$nextPage           = $data['info']['next']  ?? null;
$prevPage           = $data['info']['prev']  ?? null;
$results            = $data['results'] 		 ?? null;

$curPage            = $_GET['page'] ?? 1;

require dirname(__DIR__) . '/public/views/home.php'; 