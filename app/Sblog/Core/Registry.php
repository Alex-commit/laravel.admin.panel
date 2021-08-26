<?php

namespace App\Sblog\Core;

class Registry
{
    use TSingletone;
    protected static $properties = [];
    //эмулируем паттерн хранения состояния
    public function setProperty($name, $value){
        self::$properties[$name] = $value;
    }

    public function getProperty($name){
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    //далее метод получающий все свойства
    public function getProperties(): array
    {
        return self::$properties;
    }
}
