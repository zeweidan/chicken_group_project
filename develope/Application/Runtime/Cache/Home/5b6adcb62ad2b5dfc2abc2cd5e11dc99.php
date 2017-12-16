<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登录</title>
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<script src="/develope/Public/js/login.js"></script>

</head>
<style type="text/css">
	*{margin:0;padding:0;}
	/*红色警告*/
	.red_warning{width:100%;background-color:#ff0000;height:1.6rem;font-size:1.4em;text-align:center;}
	/*警告的内容*/
	.cont_warn{padding: 0.1rem 0 0 0;}
	/*输入框的样式*/
	
	
	/*学号的输入框样式*/
	.sno{width:60%;height:2rem;border:1px solid;}
	/*密码的输入框样式*/
	.scode{width:60%;height:2rem;border:1px solid;}
	/*placeholder的文字颜色更改*/
	input::-webkit-input-placeholder{color:#ff0000;}	
	/*输入密码模块的样式*/
	.input_form{text-align:center;margin:2rem 0 0  0; }
	/*登录按钮的样式*/
	.btn{width:55%;height:2.4rem;margin:2rem 0 0 0;font-size:1em;}
	 body{background:url("/develope/Public/icon/bg.png");background-size: 100% 65%;background-repeat:no-repeat;}
	.link_item{margin-top:2rem; font-size:1em;}
</style>


<body>

<div class="main container-fluid">
	<!--红色警告-->
	<div id="warning_part"></div>
    
	
	</div>
	<div id="action-messages"></div>
	<div class=" container-fluid" >
		<p style="text-align: center;font-size: 2em;color: #EEEEEE;margin-top: 2em">DDL Killer</p>

		<p style="text-align: center;font-size:1em;margin-top:1.2em;color:#ffffff">登录</p>
	</div>
	<!--输入框-->
	<div class=" input_form">
		<form id="login-form">
				<div><input type="text" placeholder="学号" class="sno" name="stu_no" id="stu_no" /></div>
				<div><input type="password" placeholder="密码" class="scode" name="password" id="password"/></div>
				<div><input type="submit" value="登录" class="btn" id="btn" /></div>				
		</form>
	</div>
	<center>
	<div class="link_item">没有账号？<a href="/develope/index.php/home/Register/index.html" >点击注册</a></div>
	</center>
</div>
</body>
</html>