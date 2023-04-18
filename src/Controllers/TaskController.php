<?php

    namespace App\Controllers;
    use App\Controller;
    use App\View;
    use App\DB;

    class TaskController extends Controller{
        
        function index(){
            
             View::show('task');
        }

    }