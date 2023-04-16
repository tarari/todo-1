<?php

namespace App;
use App\Request;
use App\Services;

abstract class Controller{
    protected Request $request;
    protected Container $services;


    function __construct(){
        $this->services=new Container;
        
    }


}
