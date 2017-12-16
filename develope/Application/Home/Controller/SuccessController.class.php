<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 12/12/17
 * Time: 01:44
 */

namespace Home\Controller;
use Think\Controller;

class SuccessController extends Controller
{
    public function index(){
        $this->display();
    }

    public function sendEmail() {
        $User = M("student");
        $stu_id = $_COOKIE['student_id'];
        $data=$User->where(array('student_id'=>$stu_id))->find();

        $msg = "<html>
                    <head>
                    <title>DDL小助手提醒</title>
                    </head>
                    <body>
                        <div style='width:96%;margin:0 auto;'>
                            <div style='width:100%;height:60px;padding-top:10px;text-indent:10px;background-color:#87ceeb;font:35px Microsoft YaHei;font-weight:bold;color:#FFF;'>DDL小助手提醒您</div>
                            <div style='width:100%'>
                                <p>亲爱的同学:</p>
                                <p>恭喜你注册成功！以后你在学校里的各种ddl就交给我们来整理和提醒吧～</p>
                                <p>有了DDL小助手，“妈妈再也不用担心我的学习啦～“！</p>
                                <p><a href='http://www.sevenorth.top/develope' style='color:#49d51e'>点击此处</a>查看你的待办事项吧 :)</p>
                                <p style='text-align:right;'>DDL小助手团队</p>
                            </div>
                        </div>
                    </body>
                 </html>
                ";

        sendmail($data["email"],'DDL小助手提醒您',$msg);
    }
}