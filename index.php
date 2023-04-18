<?php
	ini_set('display_errors','On');
	session_start();
	require __DIR__.'/vendor/autoload.php';
	require __DIR__.'/bootstrap.php';
	
	use App\App;
	
	new App();