<?php

    namespace App\Controllers;

use App\Container;
use App\Controller;
    use App\View;
    use App\DB;
use App\Request;

    class IndexController extends Controller{
        function __construct(Request $request)
        {
            parent::__construct($request);
        }

        function index(){
            
            
             View::show('index');
        }

    }