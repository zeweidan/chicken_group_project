$(document).ready(function(){
		
		$("#btn").click(function(e){			
			
			e.preventDefault();
			var stuno=$("#stu_no").val();
			var password=$("#password").val();
			var div1="<div class='red_warning'><div class='cont_warn'>学号不能为空</div></div>";
			var div2="<div class='red_warning'><div class='cont_warn'>密码不能为空</div></div>";
			if(stuno==""){
				$("#warning_part").html(div1);
			}
			else if(password==""){
				$("#warning_part").html(div2);
			}
			else{			
				$.post("/develope/index.php/Home/Login/checkit",
				{	
					stuno:stuno,
					password:password,
				},
				function(data,status){
					if(status=="success"){
						var content=data.content;
						if(data.status==0){
							$("#warning_part").html(content);
							window.location.href = "/develope/index.php/home/List/index.html";
						}else{
							$("#warning_part").html(content);
						}
					}
				});
			}
		});
	});
	
