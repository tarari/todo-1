<?php

use App\Container;

    $dotenv=Dotenv\Dotenv::createMutable(__DIR__);
	$dotenv->load();
    $config=require 'config.php';
    $serviceContainer=new Container;
    $services=require 'services.php';
    
