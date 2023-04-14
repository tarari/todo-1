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
              $uri=explode('/',trim($_SERVER['REQUEST_URI']));
              $uri[0]?"":array_shift($uri);
              if(count($uri)>=2){
                $this->controller=$uri[0];
                $this->action=$uri[1];
              }
              else throw new \Exception('Route error');
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