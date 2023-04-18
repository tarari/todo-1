<?php

    function dd($args=[]){
        foreach($args as $arg){
            echo '<code>'.var_dump($arg).'</code>';
        }
        die;

    }