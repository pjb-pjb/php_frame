<?php
define("DIR",realpath(dirname(__FILE__).'/'));
define("CORE",DIR.'/core');
define("App",DIR.'/app');
define("DEBUG",true);
define("MODULE","app");

require __DIR__."/vendor/autoload.php";
if(DEBUG){
    $whoops = new \Whoops\Run;
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle("框架出错了");
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error', 'on');
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}
include  CORE.'/common/function.php';
include  CORE.'/myFrame.php';
spl_autoload_register(  '\core\myFrame::load');
\core\myFrame::run();
