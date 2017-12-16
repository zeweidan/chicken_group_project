<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8" />
		<script type="text/javascript" src="/develope/Public/js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="/develope/Public/js/register.js"></script>		
		<title>注册</title>
	</head>
	<style type="text/css">
		*{margin:0;padding:0;}
		.main{width:100%;}
		/*红色警告*/
		.red_warning{width:100%;background-color:#ff0000;height:1.3rem;font-size:0.8em;text-align:center;}
		/*警告的内容*/
		.cont_warn{padding: 0.1rem 0 0 0;}
		/*输入框部分*/
		/*placeholder的文字颜色更改*/
		input::-webkit-input-placeholder{color:#ff0000;font-size:1.3em;}
		/*输入框的统一样式*/
		input{width:70%;height:3.2rem;}
		/*输入框部分的边距*/
		.input_form{margin:5% 0 0 0;}
		/*登录按钮样式,记得换成图片*/
		#loginbtn{height:3rem;margin:1rem 0 0 0;}
		/*已有账号*/
		.havatips{margin-top:2rem; text-align:center;}
		/*背景色*/
		body{background:url("/develope/Public/icon/bg.png"); background-size:100% 50%;background-repeat:no-repeat; }
		/*LOGO*/
		img{margin-top:15%;}
		
	</style>
	<script type="text/javascript">
			
	</script>
	<body>
		<div class="main container-fluid">
			<!--红色警告-->
			<div id="warning_part"></div>	
			<center>
			<img src="/develope/Public/icon/logo.png" alt="" />
			</center>
			<!--输入框-->
			<center>
			<div class="input_form">
				<form id="form-reg" action="" method="post" >
						<div><input type="text" placeholder="姓名" class="sname" id="sname" name="sname"/></div>
						<div><input type="text" placeholder="学号" class="scode" id="scode" name="scode"/></div>
						<div><input type="password" placeholder="密码" class="spwd" id="password" name="password"/></div>
						<div><input type="text" placeholder="接收邮箱" class="semail" id="semail" name="semail"/></div>
						<div><input type="text" placeholder="组织" class="sorg" id="orgname" name="orgname"/></div>				
						<div><input type="submit" value="注册" id="loginbtn" /></div>
				</form>
			</div>
			<div class="havatips">已有账号？<a href="/develope/index.php/home/Login/index.html">立即登录</a></div>
			</center>
		</div>
	
	</body>
</html>