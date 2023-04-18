<?php
 
    namespace App;

    use App\Request;

    class App{
        protected Request $request;
        protected Container $container;

        function __construct(){
           $this->request=new Request();
          
           try {
           
            $controller=$this->request->getController();
            $action=$this->request->getAction(); 
            $invokableController="App\Controllers\\".ucfirst($controller).'Controller';
            $controller= new $invokableController($this->request);
            $reflectionAction= (new \ReflectionClass($controller))->getMethod($action);
            $reflectionAction->setAccessible(true);
            $reflectionAction->invoke($controller);
           }
           catch(\Exception $e){
            return $this->request->redirect('/');
        }
           
           


        }
    }