<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"G:\php\wamp64\www\dx\public/../application/index\view\user\edit_info.html";i:1505067204;}*/ ?>
<!DOCTYPE html>
<html class="ui-page-login">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>点心网络文化工作室</title>
		<link rel="Shortcut Icon" href="__STATIC__/img/logo.png" />
		<link href="__STATIC__/mui/css/mui.min.css" rel="stylesheet" />
		<style>
			.area {
				margin: 20px auto 0px auto;
			}
			.mui-input-group:first-child {
				margin-top: 20px;
			}
			.mui-input-group label {
				width: 22%;
			}
			#phone,#mail{
				width: 48%;
			}
			#send_code,#check_mail{
				width: 30%;
			}
			.mui-input-row label~input,
			.mui-input-row label~select,
			.mui-input-row label~textarea {
				width: 78%;
			}
			.mui-content-padded {
				margin-top: 25px;
			}
			.mui-btn {
				padding: 10px;
			}
			.mui-input-row label~input, .mui-input-row label~select, .mui-input-row label~textarea{
				margin-top: 1px;
			}
		</style>
	</head>
	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo url('index/index'); ?>"></a>
			<h1 class="mui-title">绑定信息</h1>
		</header>
		<div class="mui-content">
			<form class="mui-input-group" id="regForm" name="regForm">
				
				<div class="mui-input-row">
					<label for="schoolid">学号</label>
					<input id='schoolid' type="text" name="schoolid" class="mui-input-clear mui-input" placeholder="请输入12位完整学号" value="<?php echo (isset($user_info['schoolid']) && ($user_info['schoolid'] !== '')?$user_info['schoolid']:''); ?>" onblur="matche()" >
				</div>             	
                
				<div class="mui-input-row">
					<label for="phone">手机</label>
					<!-- <input type="button" class="mui-btn mui-btn-success" name="send_code" id="send_code" onclick="sendCode()" value="获取验证码"> -->
					<button type="button" class="mui-btn mui-btn-primary" name="send_code" id="send_code" onclick="sendCode()" ><span style="color: white;" id="button">获取验证码</span></button>
					<input id='phone' type="text" name="phone" class="mui-input " placeholder=""   value="<?php echo (isset($user_info['phone']) && ($user_info['phone'] !== '')?$user_info['phone']:''); ?>">				
				</div>

				<div class="mui-input-row">
					<label for="check_code">验证</label>
					<input id='check_code' type="text" name="check_code" class="mui-input-clear mui-input" placeholder="6位验证码" onblur="checkCode()" required="required">
				</div>
				<div class="mui-input-row">
					<label for="qq">qq:</label>
					<input id='qq' type="text" name="qq" class="mui-input-clear mui-input" placeholder="每一天，乐在沟通" required="required">
				</div>
				<div class="mui-input-row">
					<label for="mail">邮箱</label>
					<button type="button" class="mui-btn mui-btn-primary" id="check_mail" onclick="checkMail()" >发验证邮件</button>
					<input id='mail' type="text" name="mail" class="mui-input" placeholder="" value="<?php echo (isset($user_info['mail']) && ($user_info['mail'] !== '')?$user_info['mail']:''); ?>" required="required">				
				</div>
					
				<div class="mui-content-padded">
					<button id='send' class="mui-btn mui-btn-block mui-btn-primary">提交</button>
				</div>
			</form>
			
		</div>
		<script src="__STATIC__/mui/js/mui.min.js"></script>
		<script src="__STATIC__/js/jquery-3.2.1.min.js"></script>
		<script src="__STATIC__/js/jquery.validate.min.js"></script>
		<script type="text/javascript">
			$.validator.setDefaults({
		    	errorPlacement:function(error,element) {  
					error.appendTo(element.parent("td").next("td"));
					 mui.toast(error.html());
					
	   			}
		    });
		   
			$(document).ready(function(){
		    $("#regForm").validate({
		        rules: {
		            schoolid:{
		                required: true,
		                minlength: 12,
		                maxlength: 12
		            },
		            phone:{
		                required: true,
		                minlength: 11,
		                maxlength: 11
		            },
		            check_code:{
		            	required:true,
		            	minlength:6,
		            	maxlength:6
		            },
		            qq:{
		                required: true,
		     
		            },
		            mail:{
		                required: true,
		                email:true
		            }

		        },
		        messages:{
		            schoolid:{
		                required: "用户名不能为空",
		                minlength: "用户名的最小长度为2"
		            },

		            phone:{
		                required: "手机号不能为空",
		                minlength: "手机号格式错误",
		                maxlength: "手机号格式错误"
		            },
		            check_code:{
		            	required:"验证码不能为空",
		            	minlength: "验证码格式错误",
		                maxlength: "验证码格式错误"
		            },
		            qq:{
		            	required:"QQ不能为空"
		            }
		            mail:{
		                required: "邮箱不能为空",
		                email: "邮箱格式不正确"
		            }
		        }
		    });
		});
		</script>
		<script>  
		  function sendCode(){  
		    var phone=document.getElementById("phone").value;  
		    var send_code=document.getElementById("send_code").value; 
		      $.ajax({  
		      url:'send_sms',  
		      data:{'phone':phone},//传入后台参数  
		      type:"POST", 
		      dataType:"Json",  
		      success:function(data){  
		      // var dataObj=JSON.parse(data);//对字符串形式的json解析为对象  
		      // console.log(dataObj.result); 

		       }  
		      });
		   	  countButton(60);
		      mui.toast('验证码已发送');  
		  }  
		  function countButton(t){
		  	if(t>0){
		   			//document.getElementById('send_code').value=t+'s后重新获取';
		   			$('#send_code').attr('disabled',"true");
		   			document.getElementById("button").innerHTML=t+'s后重新获取';
		   			t--
		   			setTimeout(function(){countButton(t);},1000);
		   		}
		   		else {
		   			$('#send_code').removeAttr("disabled");
		   			//document.getElementById('send_code').value='获取验证码';
		   			document.getElementById("button").innerHTML='获取验证码';
		   		}
		  }
		   function checkCode(){  
		   var inputVertiCode=document.getElementById("check_code").value;  
		   mui.init();
		   $.ajax({  
		      url:'check_code',  
		      data:{"inputVertiCode":inputVertiCode},//传入后台参数  
		      type:"POST", 
		      dataType:"json",  	 
		      success:function(data){ 
	      		
		      	if(data.result=="validate!")
		      	{
					mui.toast('验证正确');
		      	}  
		        else{
		      		mui.alert('请重新获取', '验证码错误', function() {
					});
		      	}  
		       }  
		      });  
		   } 
		   function checkMail(){
				var mail=document.getElementById("mail").value;
				mui.init();
			   $.ajax({  
			      url:'send_mail',  
			      data:{"mail":mail},//传入后台参数  
			      type:"POST", 
			      dataType:"json",  	 
			      success:function(data){ 
			       }  	
			      }); 
			      mui.toast('邮件已发送，请提交后记得激活'); 
			}
		</script>  
		<script type="text/javascript">
			var realname;
			var classname;
			function matche(){  
			    var schoolid=document.getElementById("schoolid").value; 
			    var method='matche'; 
	     	 		$.ajax({ 

			      		url:'do_basic',  
			      		data:{'schoolid':schoolid,'method':method},//传入后台参数  
			      		type:"POST", 
			      		complete :function(){},
			      		dataType:"json",  
			      		success:function(result){	
			      			realname=result.name;
			      			classname=result.class;
					    }
			      });  
		  }  
			mui.init();
			document.getElementById("send").addEventListener('tap', function() {
				var phone=document.getElementById("phone").value;  
				var mail=document.getElementById("mail").value;
				var schoolid=document.getElementById("schoolid").value; 
				var qq=document.getElementById("qq").value; 
				var btnArray = ['否', '是'];
				mui.confirm('确认信息正确吗',classname+':'+realname , btnArray, function(e) {
					if (e.index == 1) {
						var method='update';
						$.ajax({
							url:"do_basic",
							data:{'schoolid':schoolid,'phone':phone,'qq':qq,'mail':mail,'method':method},
							type:"POST",
							dataType:"json", 
						});
						location='edit_resume';
					} else {
						
					}
				})
			});
		
			
		</script>
	</body>
</html>