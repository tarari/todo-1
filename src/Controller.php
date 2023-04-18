<?php

namespace App;
use App\Request;
use App\Services;
use App\Services\ConfigService;
use PSpell\Config;

abstract class Controller{
    protected Request $request;
    protected Container $services;


    function __construct(ConfigService $config){
        $this->services=new Container;
        $this->services->set('config',$config);
        
    }


}
