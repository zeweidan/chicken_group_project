<?php
	namespace Home\Controller;
	use Think\Controller;
	class DetailController extends Controller
	{
		public function index(){

			$Content_id=$_GET["content_id"];	//接收的文章ID
			$Student_id=$_GET['student_id'];	//接收学生的ID

			//获取时间差
			$content=D('content');
			$res=$content->where(array('content_id'=>$Content_id))->find();
			$this->assign('res',$res);
			$time1=strtotime($res['post_time']);//发送时间
			$time2=strtotime($res['deadline']);//截止时间
			//时间差
			$time3=ceil(($time2-time())/60/60/24);
			$time4=abs($time3);
			//判断时间然后输出文字
			if($time3<0){$timetips="已过期".$time4."天";}
			else{$timetips="还剩".$time3."天";}
			$this->assign('timediff',$timetips);

			//获取教师信息
			$teacher = D('teacher');
			$res1=$teacher->join('stu_content ON stu_teacher.teacher_id = stu_content.content_id')->where(array('stu_content.content_id'=>$Content_id))->find();
			$this->assign('res1',$res1);

			//根据前端传来的状态码，获取一个status			
			$link_content=D('link_content');
			$ret=$link_content->where(array('content_id'=>$Content_id,'student_id'=>$Student_id))->find();
			//获取状态码
			$sta=$ret['status'];
			//根据状态码更改图片
			//0 -> 未完成   1 -> 已完成
			$imgbtn1="<input type='image' id='btnimg' src='/develope/Public/icon/xz.jpg' alt='已' value='yi' />";
			$imgbtn2="<input type='image' id='btnimg' src='/develope/Public/icon/wx.png' alt='未' value='wei'/>";
			if($sta==1){
				$imgbtn=$imgbtn1;
			}
			else{
				$imgbtn=$imgbtn2;
			}
			//根据状态码，显示前端按钮
			$this->assign('imgbtn',$imgbtn); 
			$this->display();
			
		}
		public function checkbox(){
			//通过反馈回来的数据，更改数据库状态
			$Content_id="1";					//接收的文章ID
			$Student_id="201601";				//接收学生的ID
			$imgbtn0=$_POST['databtn'];			//前台传来的数据
			$link_content=D('link_content');
			$condition['setudent_id']=$Student_id;
			$condition['content_id']=$Content_id;
			//0 -> 未完成   1 -> 已完成
			if($imgbtn0=='wei'){
				$data['status']='1';
				$get_data=$link_content->where($condition)->save($data);
				if($get_data){				
					$data['status']  = 0;
					$data['content']="<input type='image' id='btnimg' src='/develope/Public/icon/xz.jpg' alt='已' value='yi' />";
				}				
				else{
					$data['status']  = 1;
					$data['content']="<input type='image' id='btnimg' src='/develope/Public/icon/wx.png' alt='未' value='wei'/>";
				}
					$this->ajaxReturn($data);
				
			}
			else if($imgbtn0=='yi'){
				$data['status']='0';				
				$get_data=$link_content->where($condition)->save($data);
					if($get_data){
					//修改成功
					$data['status']  = 0;
					$data['content']="<input type='image' id='btnimg' src='/develope/Public/icon/wx.png' alt='未' value='wei'/>";
					}			
					else{
						$data['status']  = 1;
						$data['content']="<input type='image' id='btnimg' src='/develope/Public/icon/xz.jpg' alt='已' value='yi' />";
					}
						$this->ajaxReturn($data);
					
			}
			
			
		}
		
	}
	
?>