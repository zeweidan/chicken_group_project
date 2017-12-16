	
	
	$(document).ready(function(){
	$('#form-reg').submit(function(e){
			
			var sname=$('#sname').val();
			var scode=$('#scode').val();
			var spassword=$('#password').val();
			var semail=$('#semail').val();
			var orgname=$('#orgname').val();
			
			if(checkreg()) {
				e.preventDefault();
				$.post('/develope/index.php/Home/Register/regist_check',
					{
						sname: sname,
						scode: scode,
						spassword: spassword,
						semail: semail,
						orgname: orgname

					},
					function (data, status) {
						if (status == 'success') {
							var content = data.content;
							//返回状态码0 表示学号已存在
							if (data.status == 0) {
								$('.red_warning').remove();
								$('#warning_part').append(content);

							}
							//返回状态码1，表示邮箱已存在
							else if (data.status == 1) {
								$('.red_warning').remove();
								$('#warning_part').append(content);

							}
							else if (data.status == 2) {
								$('#warning_part').append(content);
								window.location.href = "/develope/index.php/home/Success/index.html";
							}
							else {

							}
						}
					});
			}
		});
	})

     function checkreg(){
		var div1="<div class='red_warning'><div class='cont_warn'>姓名不能为空</div></div>";
		var div2="<div class='red_warning'><div class='cont_warn'>学号不能为空</div></div>";
		var div3="<div class='red_warning'><div class='cont_warn'>密码不能为空</div></div>";
		var div4="<div class='red_warning'><div class='cont_warn'>邮箱不能为空</div></div>";
		var div5="<div class='red_warning'><div class='cont_warn'>组织不能为空</div></div>";
		var div6="<div class='red_warning'><div class='cont_warn'>密码不能少于6位</div></div>";
		var div7="<div class='red_warning'><div class='cont_warn'>邮箱格式错误</div></div>";
			var sname=$('#sname').val();
			var scode=$('#scode').val();
			var password=$('#password').val();
			var semail=$('#semail').val();
			var orgname=$('#orgname').val();
			
				function add(div){					
				if($("div.red_warning").length==0){		    
						$("div#warning_part").append(div);
					}
				}			
				function drop(){
					$(".red_warning").remove();
				}
				
				
				//判断验证
				if(!sname || sname==""){
				    add(div1);					
					return false;
				}
				if(!scode || scode==""){
					drop();
					add(div2);
					return false;
				}
				if(!password || password==""){
					drop();
					add(div3);
					return false;
				}
				if(!semail || semail==""){
					drop();
					add(div4);
					return false;
				}
				if(!orgname || orgname==""){
					drop();
					add(div5);
					return false;
				}
				//验证email
				function EmailRes(str){
					var reg= /([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})/;
					return reg.test(str);
				}
				var emailreg= EmailRes(semail);
				
				if(!emailreg || emailreg==false){
					drop();
					add(div7);
					return false;
				}
				if(password.length<6){
				    drop();
					add(div6);
					return false;
				}
				if(sname && scode && password  &&  semail &&  orgname){drop();}
				return true;
	}	