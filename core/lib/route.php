<?php
/**
 * Created by PhpStorm.
 * User: 29393
 * Date: 2018/7/2
 * Time: 9:07
 */
namespace  core\lib;
class route{
        public $ctrl;
        public $action;
        public  function __construct()
        {
            $url = $_SERVER['REQUEST_URI'];
            if($url&&$url!="/myFrame/"){
                $urlArray  = explode("/",trim($url,"/"));
                unset($urlArray[0]);
                if(isset($urlArray[1])){
                    $this->ctrl = $urlArray[1];
                    unset($urlArray[1]);
                }
                if(isset($urlArray[2])){
                    $this->action = $urlArray[2];
                    unset($urlArray[2]);
                }else{
                    $this->action = "index";
                }
                $flag = 3;
                $urlArraySize = count($urlArray)+3;
                while ($flag<$urlArraySize){
                    if(isset($urlArray[$flag+1])){
                        $_GET[$urlArray[$flag]]=$urlArray[$flag+1];
                    }
                    $flag = $flag+2;
                }
            }else{
                $this->ctrl="index";
                $this->action="index";
         }
    }
}