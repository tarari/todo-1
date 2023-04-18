<?php

namespace App;

class View{
    const VIEW=__DIR__.'/tpl';

    static function show(string $tpl,array $data=null){
        
        if($data){
            extract($data,EXTR_OVERWRITE);
        }
        ob_start();
        require self::VIEW.'/'.$tpl.'.php';
        $output=ob_get_clean();
        echo (string)$output;

    }
}