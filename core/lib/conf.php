<?php
/**
 * Created by PhpStorm.
 * User: 29393
 * Date: 2018/7/2
 * Time: 16:35
 */
namespace core\lib;
use core\myFrame;

class conf{
    static public $conf = array();
    static public function get($name,$file){
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }else {
            $path = DIR . "/core/config/" . $file . ".php";
            if (is_file($path)) {
                $conf = include $path;
                if (isset($conf[$name])) {
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                } else {
                    throw new \Exception("找不到配置项" . $name);
                }

            } else {
                throw new \Exception("找不到配置文件" . $file);
            }
        }
    }
    static public function all($file){
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }else {
            $path = DIR . "/core/config/" . $file . ".php";
            if (is_file($path)) {
                $conf = include $path;
                self::$conf[$file]=$conf;
                return $conf;
            } else {
                throw new \Exception("找不到配置文件" . $file);
            }
        }
    }
}