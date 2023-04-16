<?php

namespace App;

class View{
    const VIEW=__DIR__.'/tpl';

    static function show(string $tpl,array $data=null){
        ob_clean();
        if($data){
            extract($data,EXTR_OVERWRITE);
        }
        $output=require self::VIEW.'/'.$tpl.'.php';
        echo $output;
    }
}