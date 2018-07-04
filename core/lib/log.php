<?php
/**
 * Created by PhpStorm.
 * User: 29393
 * Date: 2018/7/3
 * Time: 9:54
 */

namespace core\lib;
use core\lib\conf;

class log
{
    static public $class;
    static public function init(){
        $drive  = conf::get("type","log");
        $class = "\core\lib\drive\log\\".$drive;
        self::$class  = new $class;
    }
    static public function log($message,$file = "log"){
        self::$class->log($message,$file);
    }

}