<?php
    
    $dotenv=Dotenv\Dotenv::createMutable(__DIR__);
	$dotenv->load();
    $config=require 'config.php';