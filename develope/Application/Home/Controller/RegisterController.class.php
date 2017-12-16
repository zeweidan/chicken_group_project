<?php

namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function regist_check()
    {
			$sname=$_POST['sname'];
			$scode=$_POST['scode'];
			$password=$_POST['spassword'];
			$semail=$_POST['semail'];
			$orgname=$_POST['orgname'];		
			
			$student=D('student');//实例化学生表
			
			$stu_data=$student->where(array('student_id'=>$scode))->find();
			
			
			$cemail=$student->where(array('email'=>$semail))->find();//验证email是否已存在
			if($stu_data){
				$data['status'] = 0;							//验证学号是否已存在
				$data['content'] = "<div class='red_warning'><div class='cont_warn'>该学号已存在</div></div>";
				$this->ajaxReturn($data);
				exit();
			}
			else if($cemail){
				$data['status'] = 1;
				$data['content'] = "<div class='red_warning'><div class='cont_warn'>该邮箱已存在</div></div>";
				$this->ajaxReturn($data);
				exit();
			}else{
				
				//设置cookie
				cookie("student_id",$scode);
				$data['status'] = 2;
				$data['content'] = "<div class='red_warning'><div class='cont_warn'>注册成功</div></div>";
				
				//插入学生表
				$condition['stu_name']=$sname;
				$condition['student_id']=$scode;
				$condition['email']=$semail;
				$condition['password']=$password;
				$condition['org_id']='0';
				$indata=$student->add($condition);
				
				//插入组织表			
				$org_condition['orgname']=$orgname;
				$org=D('org');
				$org_data=$org->add($org_condition);
				
				
				$this->ajaxReturn($data);

			}
			
			

	}
}




