<?php

namespace App\Sblog\Core;

trait TSingletone
{
    //use TSingletone;

    private static $instance;

    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

}
