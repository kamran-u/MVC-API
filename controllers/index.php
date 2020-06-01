<?php

use RickMorty\Repositories\Characters;
$characters = new Characters();

//validation required
$page = $_GET['page'] ?? null;

$data               = $characters->getCharacters($page);

$charactersCount    = $data['info']['count'] ?? null;
$pages              = $data['info']['pages'] ?? null;
$nextPage           = $data['info']['next']  ?? null;
$prevPage           = $data['info']['prev']  ?? null;
$results            = $data['results'] 		 ?? null;

$curPage            = $_GET['page'] ?? 1;


require dirname(__DIR__) . '/public/views/home.php'; 