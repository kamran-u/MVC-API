<?php

$parse_url  = parse_url($_SERVER['REQUEST_URI']);
$path  		= isset($parse_url['path']) ? trim($parse_url['path'], '/') : '';
$query 		= $parse_url['$path'] ?? '';


if(!empty($path)) {
	$query = preg_replace('/(&page=\d+)/', '', $parse_url['query']);
	$paginationLink = $path . '?' . $query . '&page=';

} else {

	$paginationLink = '?page=';

}

echo '<div class="row">&nbsp;</div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">';

    for($i=1; $i<=$pages; $i++) {

        $active = $curPage == $i ? "active" : "";
        
        echo '<li class="page-item '. $active .'">
                	<a class="page-link" href="' . $paginationLink . $i . '">'.$i.'</a>

            </li>';
    }

echo '</ul></nav>';