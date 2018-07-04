<?php
/**
 * Created by PhpStorm.
 * User: 29393
 * Date: 2018/6/30
 * Time: 11:26
 */
namespace  core;
use core\lib\log;
class myFrame{

    public $assign = array();
    static public function  run(){
        log::init();
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action  = $route->action;
        $ctrlFile = "app/ctrl/".$ctrlClass."Ctrl.php";
        $ctrlClass = "\\".MODULE."\\ctrl\\".$ctrlClass."Ctrl";
        if(is_file($ctrlFile)){
            include $ctrlFile;
            $ctrl = new $ctrlClass();
            if(method_exists($ctrl,$action)){
                $message = "调用控制器CTRL:".$route->ctrl.'   '."ACTION:".$route->action;
                log::log($message);
                $ctrl->$action();
            }else{
                throw new \Exception("找不到方法".$action);
            }
        }else{
            throw new \Exception("找不到控制器".$ctrlClass);
        }
    }
    static public function load($calss){
           $class = str_replace("\\","/",$calss);
           if(is_file(DIR.'/'.$class.'.php')){
               include DIR.'/'.$class.'.php';
           }else{
               return false;
           }
    }
    public function  assign($name,$value){
        $this->assign[$name] = $value;
    }
    public function  display($fileName){
        $templatePath = $fileName;
        $fileName = App."\\views\\".$fileName;
        if(is_file($fileName)){
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(App.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => DIR."/log/twig",
                'debug' => DEBUG
            ));
            $template = $twig->load($templatePath);
            $template->display(!empty($this->assign)?$this->assign:array());
        }
    }
}
