<?php

    namespace App\Controllers;
    use App\Controller;
    use App\View;
    use App\DB;

    class TaskController extends Controller{
        
        function index(){
            $config=$this->services->get('App\Config');
            $pdo=$this->services->get('App\DB');
            dd($pdo);
             View::show('task');
        }

    }