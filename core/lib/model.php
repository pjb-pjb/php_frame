<?php
/**
 * Created by PhpStorm.
 * User: 29393
 * Date: 2018/7/2
 * Time: 14:51
 */
 namespace core\lib;
 use \core\lib\conf;
 use Medoo\Medoo;

 class model extends Medoo {
     public function  __construct()
     {
        $conf = conf::all("database");
        parent::__construct($conf);
     }
 }