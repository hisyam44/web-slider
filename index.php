<?php
	spl_autoload_register(function($class){
		include("Classes/".$class.".php");
	});
	$route = explode("/", substr($_SERVER['REQUEST_URI'],7));
	$view = new View();
	$view->header();
	$view->footer();
	
?>