<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rick and Morty</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
        <link rel="stylesheet" href="/assets/css/style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    <body>

    <div class="container">
    	<div class="row">
	    	<div class="text-left col">            
        		<h2>Rick and Morty Encyclopedia</h2>
    		</div>

	    	<div class="col">
	        	<?php include 'searchBar.php' ?>
	    	</div>
		</div>
    
		<hr/>
        
        <?php preg_match_all('/\/(\w+)\?/', $_SERVER['REQUEST_URI'], $path)[1][0];?>
        <a href="/">Home</a> <?= count($path[1]) ? ' | '.ucfirst($path[1][0]) : ''  ?>
