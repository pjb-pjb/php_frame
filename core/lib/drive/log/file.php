<?php
/**
 * Created by PhpStorm.
 * User: 29393
 * Date: 2018/7/3
 * Time: 9:56
 */
namespace core\lib\drive\log;

class file{
    public $path;
    public function __construct()
    {
        $this->path  = \core\lib\conf::get("option","log");
    }

    /**
     * @param $message
     * @param string $file
     * @return bool|int
     */
     public function log($message, $file = "log"){
         $path = $this->path.date("YmdH");
        if(!is_dir($path)){
            mkdir($path,0777,true);
        }
        $message = json_encode($message,JSON_UNESCAPED_UNICODE).'    '.date("Y-m-d H:i:s").PHP_EOL;
        return file_put_contents($path.'/'.$file.".txt",$message,FILE_APPEND);
    }
}