<?php
/**
 * Created by PhpStorm.
 * User: 29393
 * Date: 2018/7/2
 * Time: 13:21
 */

namespace app\ctrl;

use app\model\sign;

class indexCtrl extends \core\myFrame
{
    //返回留言列表页面
    public function index()
    {
        $db = new sign();
        $res = $db->sel("guestbook");
        parent::assign("data", $res);
        parent::display("index.html");
    }

    //返回添加留言页面
    public function add()
    {
        parent::display("add.html");
    }

    //保存留言
    public function save()
    {
        $data['title'] = post('title');
        $data['content'] = post('content');
        $data['createtime'] = getTime();
        $db = new sign();
        $res = $db->insert("guestbook", $data);
        if ($res) {
            jump("/myFrame");
        } else {
            jump("/myFrame/index/add");
        }
    }

    //删除页面
    public function del()
    {
        $id = get('id', 0, 'int');
        if ($id) {
            $db = new sign();
            $res = $db->del("guestbook", array('id' => $id));
            if ($res == 1) {
                jump("/myFrame");
            } else {
                exit("删除失败");
            }
        } else {
            exit("参数有误");
        }
    }
}