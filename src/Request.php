<?php

    namespace App;


    class Request {
        protected $action;
        protected $controller;
        protected $method;
        private $uri;

        
        function __construct(){
           $this->parserRoute();
           //calls controller
        }

        function parserRoute(){
                try{
                        $uri=explode('/',trim($_SERVER['REQUEST_URI']));
                        $uri[0]?'':array_shift($uri);
                        if($count=count($uri)>=2){
                                $this->controller=$uri[0];
                                $this->action=$uri[1];
              }elseif($count==0){
                $this->controller='index';
                $this->action='index';
              }elseif($count==1){
                $this->action='index';
                }
              else throw new \Exception('Route error');
            }catch(\Exception $e){
                return $this->redirect('/error.php');
            }
        }
        public function redirect(string $route,string $message=null){
                if ($message){
                        $_SESSION['error']=$message;
                }
                header('Location:'.$route);
        }
        
        /**
         * Get the value of action
         */ 
        public function getAction()
        {
                return $this->action;
        }

        /**
         * Get the value of controller
         */ 
        public function getController()
        {
                return $this->controller;
        }

        /**
         * Get the value of method
         */ 
        public function getMethod()
        {
                return $this->method;
        }
          }