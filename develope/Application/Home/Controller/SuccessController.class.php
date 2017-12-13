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
        $msg = "<html>
                    <head>
                    <title>DDL小助手提醒</title>
                    </head>
                    <body>
                        <div style='width:96%;margin:0 auto;'>
                            <div style='width:100%;height:60px;padding-top:10px;text-indent:10px;background-color:#87ceeb;font:35px Microsoft YaHei;font-weight:bold;color:#FFF;'>DDL小助手提醒您</div>
                            <div style='width:100%'>
                                <p>亲爱的Min:</p>
                                <p>收到了一份来自产品组发来的[xxx]提醒。</p>
                                <p>详情请<a href='http://www.baidu.com' style='color:#49d51e'>点击此处</a>查看。</p>
                                <p style='text-align:right;'>吃鸡团队</p>
                            </div>
                        </div>
                    </body>
                 </html>
                ";

        sendmail('zewei.dan@foxmail.com','DDL小助手提醒您',$msg);
    }
}