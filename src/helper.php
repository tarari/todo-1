<?php

    function dd($var){
        printf("<code>%s</code>",print_r($var));
        die;

    }