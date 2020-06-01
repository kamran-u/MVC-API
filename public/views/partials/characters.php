<?php

if( is_array($results) && count($results) ) 
{
 
    //$uri = trim($_SERVER['REQUEST_URI'], '/') == '' ? '$page=' : $_SERVER['REQUEST_URI'];

    echo '<div class="box">';
    foreach ($results as $key => $character) 
    {
        $id           = $character['name'];
        $name         = $character['name'];
        $status       = $character['status'];
        $species      = $character['species'];
        $type         = $character['type'];
        $gender       = $character['gender'];
        $origin       = $character['origin'];
        $originName   = $origin['name'];
        $originUrl    = $origin['url'];
        $location     = $character['location'];
        $locationName = $location['name'];
        $locationUrl  = $location['url'];
        $image        = $character['image'];
        $url          = $character['url'];
        $created      = $character['created'];
        $episodes     = $character['episode'];

        echo '<div>
                <img src="'. $image .'" class="character-img">
                  <div class="text">
                    Name: ' . $name . '<br/>
                    Species: ' . $species . '<br/>
                    Origin: ' . $originName . '<br/>
                    Episodes: ' . count($episodes) . '
                </div></div>';
    }
        echo '</div>';

        include 'pagination.php';
}

else

{
    echo "Service down. Please try again by refreshing page.";
}