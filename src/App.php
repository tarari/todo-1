<?php
 
    namespace App;

    use App\Request;

    class App{
        protected Request $request;

        function __construct(){
           $this->request=new Request();
           try {

            $controller=$this->request->getController()??'index';
            $action=$this->request->getAction()??'index';
            $invokableController="App\Controllers\\".ucfirst($controller).'Controller';
            $controller= new $invokableController();
            $reflectionAction= (new \ReflectionClass($controller))->getMethod($action);
            $reflectionAction->setAccessible(true);
            $reflectionAction->invoke($controller);
           }
           catch(\Exception $e){
            die($e->getMessage());
        }
           
           


        }
    }