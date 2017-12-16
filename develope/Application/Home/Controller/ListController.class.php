<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 12/11/17
 * Time: 10:09
 */

namespace Home\Controller;
use Think\Controller;

class ListController extends Controller
{
    public function index(){
        //从登录或注册成共获取的学生id
        if (Cookie("student_id")) {
            $stu_id = Cookie("student_id");

            $User = M("link_content");
            $Content = M("content");
            $data = $User->where("student_id=$stu_id")->select();
            $out = ""; //输出内容

            if (count($data)) {
                for ($i = 0; $i < count($data); $i++) {
                    $con_id = $data[$i]['content_id'];
                    $con = $Content->where("content_id=$con_id")->find();
                    if ($con["deadline"] == date("Y-m-d", strtotime("1 day"))) {
                        $date = "明天";
                    } else if ($con["deadline"] == date("Y-m-d", strtotime("-1 day"))) {
                        $date = "昨天";
                    } else if ($con["deadline"] == date("Y-m-d")) {
                        $date = "今天";
                    } else {
                        $date = $con["deadline"];
                    }

                    if ($data[$i]['status'] == 1) {
                        $out .= "<li class='list-group-item clearfix'><a class='tiao finish-check' data-studentid=$stu_id data-contentid=$con_id></a><div class='content list-finish fl'><div class='list-group-item-heading'>" . $con["title"] . "</div><p class='list-group-item-text'>"
                            . $date . "</p></div><div class='link fr' data-studentid=$stu_id data-contentid=$con_id></div></li>";
                    } else if ($con["deadline"] < date("Y-m-d")) {
                        $out .= "<li class='list-group-item clearfix'><a class='tiao overdate-check' data-studentid=$stu_id data-contentid=$con_id></a><div class='content list-over fl'><div class='list-group-item-heading'>" . $con["title"] . "</div><p class='list-group-item-text'>"
                            . $date . "</p></div><div class='link fr' data-studentid=$stu_id data-contentid=$con_id></div></li>";
                    } else if ($con["deadline"] >= date("Y-m-d")) {
                        $out .= "<li class='list-group-item clearfix'><a class='tiao ddl-check' data-studentid=$stu_id data-contentid=$con_id></a><div class='content list-on fl'><div class='list-group-item-heading'>" . $con["title"] . "</div><p class='list-group-item-text'>"
                            . $date . "</p></div><div class='link fr' data-studentid=$stu_id data-contentid=$con_id></div></li>";
                    }
                }
            }

            // 用户名输出
            $User = M("student");
            $data = $User->where("student_id=$stu_id")->find();
            $stu_name = $data["stu_name"];

            $this->assign("name", $stu_name);
            $this->assign("user", $out);
            $this->display();
        }
        else
            $this->redirect("Login/index");
    }

    public function change() {
        $stu_id = $_POST['student_id'];
        $content_id = $_POST['content_id'];
        //var_dump($stu_id);

        $User = M("link_content");
        $condition['stu_id'] = $stu_id;
        $condition['content_id'] = $content_id;
        $data['status'] = 1;
        $User->where($condition)->save($data);
    }

    public function stu_exit() {
        if ($_POST['exit_msg'] == "exit"){
            $condition["status"] = 0;
            cookie("student_id",null);
        }
        else {
            $condition["status"] = 1;
        }

        $this->ajaxReturn($condition);

    }
}