<?php
 
    namespace App;

    use App\Request;

    class App{
        protected Request $request;

        function __construct(){
           $this->request=new Request();
            $controller=$this->request->getController();
            $action=$this->request->getAction();
            $controller=new App\Controllers\$controller;
           //dispatch controller


        }
    }