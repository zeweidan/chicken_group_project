<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 12/14/17
 * Time: 23:01
 */

namespace Home\Controller;
use Think\Controller;

class TeacherController extends Controller
{
    public function index(){

        $stu = M('student');
        $stu_info = $stu->select();
        $info = "";
        foreach ($stu_info as $key=>$value){
            $id = $value["id"];
            $idd = 'ts'.$id;
            $info .= "<tr class='info' id='$id'>
                                    <td>{$value["id"]}</td>
                                    <td id='$idd'>{$value["stu_name"]}</td>
                                    <td>{$value["student_id"]}</td>
                                    <td>{$value["email"]}</td>
                                    <td>{$value["password"]}</td>
                                    <td><button class='btn btn-danger btn-small btn-sc' type='button' data-id='$id'>删除</button></td>
                                    <td><button class='btn btn-primary btn-small btn-ts' data-toggle='modal' data-target='#myModal' data-id='$id'>推送</button></td>
                        </tr>";
        }

        $this->assign("stu_info",$info);
        $this->display();
    }

    public function delete(){

        $id = $_POST["id"];
        $stu = M('student');
        $de = $stu->where("id= $id")->delete();

        if($de)
            $data["status"] = 0;
        else
            $data["status"] = 1;

        $this->ajaxReturn($data);

    }

    public function post_contents(){
            $get_title=$_POST['post_title'];		//标题
            $get_name=$_POST['post_name'];			//发送人
            $get_content=$_POST['post_content'];	//内容
            $get_stu_id=$_POST['post_stu_id']; //学生在表中id最前面主键

            //日期
            $get_year=$_POST['post_year'];
            $get_month=$_POST['post_month'];
            $get_day=$_POST['post_day'];

        $get_deadline=$get_year."-".$get_month."-".$get_day;	//截止日期拼接

        /*******//****实例化表****//////*****/
        $Content=D('content');      		//实例化content内容表
        $Student=D('student');				//实例化student学生表
        $Link_content=D('link_content');  	//实例化内容连接表
        $Teacher=D('teacher');				//实例化发送人表

        //使用$teach作为数组先将发送人的名称插入teacher表
        $teach['teac_name']=$get_name;		//名称字段
        $teach['password']='123456';		//密码字段默认了

        $teac_data_add=$Teacher->add($teach);	//插入发送人
        //add()的返回值即刚刚插入的ID号
        if($teac_data_add){
            $teac_id=$teac_data_add;
        }

        //使用$condition做为数组插入content内容表
        $condition['title']=$get_title;			//标题
        $condition['content']=$get_content;		//内容
        $condition['teacher_id']=$teac_id;		//发送人ID
        $condition['deadline']=$get_deadline;	//截止日期
        //插入信息
        $content_insert=$Content->add($condition);
        //插入成功后的返回值即消息ID
        if($content_insert){
            $content_id=$content_insert;     	//内容ID
        }

        if($get_stu_id){
            //推给指定学生 根据主键
            $stu = $Student->where('id='.$get_stu_id)->find();
            $stu_id = $stu["student_id"];

            $link_con['content_id'] = $content_id;    //信息ID
            $link_con['status'] = 0;                    //状态默认0

            $link_con['student_id']=$stu_id;		//学生ID
            $link_con['content_id'] = $content_id;    //信息ID
            $link_con['status'] = 0;                    //状态默认0
            $linkcontent = $Link_content->add($link_con);

            //发送邮件
            $this->sendEmail($stu_id, $get_title, $get_name);

        }
        else {
            ////*****推给所有学生*******/////
            //信息链接表
            //ID  学生ID  信息ID  状态(默认0)
            //流程	：搜集所有的学生ID
            $stu = $Student->field('student_id')->select();
            //遍历ID循环插入连接表
            foreach ($stu as $stu_id => $link_con) {

                //用link_con作为数组条件
                //$link_con['student_id']=$value;		//学生ID
                $link_con['content_id'] = $content_id;    //信息ID
                $link_con['status'] = 0;                    //状态默认0
                //插入数据
                $linkcontent = $Link_content->add($link_con);
                $this->sendEmail($stu_id, $get_title, $get_name);

            }
        }

        if($linkcontent){
            $data["status"] = 0;
        }
        else
            $data["status"] = 1;

        $this->ajaxReturn($data);
    }

    public function sendEmail($stu_id, $title, $teacher) {
        $User = M("student");
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
                                <p>你接收到一封来自'$teacher'的关于[$title]消息推送, <a href='http://www.sevenorth.top/develope' style='color:#49d51e'>点击此处</a>查看你的待办事项吧 :)</p>
                                <p style='text-align:right;'>DDL小助手团队</p>
                            </div>
                        </div>
                    </body>
                 </html>
                    ";

        sendmail($data["email"],'DDL小助手提醒您',$msg);
    }
}
