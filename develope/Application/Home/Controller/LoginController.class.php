<?php


namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
    public function index(){
		
        $this->display();
		
    }
    public function checkit(){
        $stu_no = $_POST['stuno'];
        $password = $_POST['password'];
        $Student = M("student"); // 实例化student对象
        $condition['student_id'] = $stu_no;
        $condition['password'] = $password;

        $data = $Student->where($condition)->find();
        if($data){
            $ret_data['status'] = 0;
            $ret_data['content'] = "<div class='red_warning'><div class='cont_warn'>登陆成功</div></div>";//修改这里的跳转地址
            cookie("student_id",$stu_no);
        }
        else{
            $ret_data['status'] = 1;
            $ret_data['content'] = "<div class='red_warning'><div class='cont_warn'>学号或密码有误</div></div>";
        }
        $this->ajaxReturn($ret_data);
    }

}