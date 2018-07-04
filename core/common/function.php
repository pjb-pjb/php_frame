<?php
/**
 * Created by PhpStorm.
 * User: 29393
 * Date: 2018/6/30
 * Time: 11:26
 */

//输出方式的分装
function p($var)
{
    if (is_bool($var)) {
        var_dump($var);
    } else if (is_null($var)) {
        var_dump(NULL);
    } else {
        echo "<pre style='line-height: 30px;opacity: 0.9;background: #f3f3f3;font-weight: bold;border: 2px solid #ccc;width: 90%;margin: 20px auto;padding: 10px 10px;border-radius: 5px;font-size: 20px;'>" . print_r($var, true) . "</pre>";
    }
}

//POST参数封装
function post($key, $default = false, $filter = false)
{
    if (isset($_POST[$key])) {
        if ($filter) {
            switch ($filter) {
                case 'init':
                    if (is_numeric($_POST[$key])) {
                        return $_POST[$key];
                    } else {
                        return $default;
                    }
                    break;
                    $default;
            }
        } else {
            return $_POST[$key];
        }
    } else {
        return $default;
    }
}

//GET数据分装
function get($key,$default = false,$filter = false){
    if(isset($_GET[$key])){
        if($filter){
            switch ($filter){
                case 'int':
                    if(is_numeric($_GET[$key])){
                        return $_GET[$key];
                    }else{
                        return $default;
                    }
                    break;
                default:
                    return $default;
            }
        }else{
            return $_GET[$key];
        }
    }else{
        return $default;
    }
}

//重定向
function jump($url)
{
    header("Location:" . $url);
    exit();
}

//得到中国标准时间
function getTime($time = "false"){
    if (date_default_timezone_get() != "1Asia/Shanghai")
        date_default_timezone_set("Asia/Shanghai");
    if($time === "false"){
        return date("Y-m-d H:i:s");
    }else{
        return date("Y-m-d H:i:s",$time);
    }
}