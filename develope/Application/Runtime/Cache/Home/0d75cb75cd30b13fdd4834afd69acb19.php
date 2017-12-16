<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>详情</title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<script type="text/javascript" src="/develope/Public/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="/develope/Public/js/detail.js"></script>
	<script type="javascript/text" src="/develope/Public/js/bootstrap.js"></script>
	<link href="/develope/Public/css/detail.css" rel="stylesheet"/>	
	
</head>
<body>
	
	<div class="container">
		    <div class="row">
		       <div class="col-xs-6  col-sm-3  first">
					<!--来源块-->
		       		<table class="source_name">
		       			<tr>
		       				<td class="one"><a href="/develope/index.php/Home/List/index?student_id='<?php echo ($student_id); ?>' &content_id='<?php echo ($content_id); ?>';"><</a></td>
		       				<td class="two">From <?php echo ($res1["teac_name"]); ?></td>
		       			</tr>
		       		</table>
		       </div>
		       <div class="col-xs-6 col-sm-3 second">
		       		
					<!--标题块-->
		       		<table class="title_table">
					
		       			<tr>	    																	
		       				<td class="checkbox_fin" id="checkbox_fin" rowspan="2">
								<!--复选框的按钮切换-->		
								<?php echo ($imgbtn); ?>
							</td>
							<script>
								$(document).ready(function(){
								  $("#btnimg").click(function(){
								  //取到checkbox的状态码
									var databtn=$("#btnimg").val();	
									$.post("/develope/index.php/home/Detail/checkbox",{'databtn':databtn,},
										function(data,status){
										if(status=="success"){
											var content=data.content;
											if(data.status==0){
												$("#btnimg").replaceWith(content);
											}else if(data.status==1){
												$("#btnimg").replaceWith(content);
											}
											else{
												alert('no  change');
											}
										}
									}
									);
									});
								  });
								
							</script>
		       				
		       				<td class="con_title" id="con_title"><h5><?php echo ($res["title"]); ?></h5></td> 
		       							
		       			</tr>
		       			<tr>
		       				<!--倒计时-->							
		       				<td class="backcount" id="backcount"><?php echo ($timediff); ?></td>
		       			</tr>						
		       		</table>
		       </div>
		       <div class="col-xs-6 col-sm-3 third">
			   <!--正文-->
		       		<div class="detail_content">
						<?php echo ($res["content"]); ?>
					</div>
		       </div>
		       
		    </div>
	   		
	</div>
</body>
</html>