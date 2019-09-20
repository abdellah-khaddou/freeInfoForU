<?php
    include 'conect.php';

	// Routes

	$tpl 	= 'includes/templates/'; // Template Directory
	$lang 	= 'includes/languages/'; // Language Directory
	$func	= 'includes/functions/'; // Functions Directory
	$css 	= 'layout/css/'; // Css Directory
	$js 	= 'layout/js/'; // Js Directory
    $img    = 'layout/css/image/';
	// Include The Important Files

	include $func . 'functions.php';
    include $func . 'function.php';
    include $tpl . 'header.php';
    if(isset($navbar))include $tpl.'nav.php';
    
?>