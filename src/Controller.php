<?php

namespace App;
use App\View;
use App\Request;



abstract class Controller{
    protected Request $request;
    protected Container $container;
    protected View $view;

    function __construct(Request $request){
       $this->request=$request;    
    }



}
