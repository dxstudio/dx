<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"G:\php\wamp64\www\dx\public/../application/index\view\user\edit_resume.html";i:1505476484;}*/ ?>
<!DOCTYPE html>
<html class="ui-page-login">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>点心网络文化工作室</title>
		<link rel="Shortcut Icon" href="__STATIC__/img/logo.png" />
		<link href="__STATIC__/mui/css/mui.min.css" rel="stylesheet" />
		<script src="__STATIC__/mui/js/mui.min.js"></script>
		
		<link href="__STATIC__/mui/css/mui.picker.css" rel="stylesheet" />
		<link href="__STATIC__/mui/css/mui.poppicker.css" rel="stylesheet" />
		<script src="__STATIC__/mui/js/mui.picker.js"></script>
		<script src="__STATIC__/mui/js/mui.poppicker.js"></script>
		<style>

			.help_info {
				/*margin-top: 5px;*/
				text-align: center;
				left: 0px;
			}
			.area {
				margin: 20px auto 0px auto;
			}
			.mui-input-row label {
				width: 34%;
			}
			
			.mui-input-row label~input,
			.mui-input-row label~select {
				width: 62%;
			}
			#deploy_input{
				width: 98%;
			}
			#deploy_show{
				width: 42%;
			}
			#inline-range_1,#inline-range{
				width: 55%;
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
			<a class=" mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo url('user/my_resume'); ?>"></a>
			<h1 class="mui-title">完善简历</h1>
		</header>
		<div class="mui-content">
			<form class="">
				<p class="help_info">应聘信息</p>
				<div class="mui-card">
					<div class="mui-input-row" >
						<label for="position">方向:</label>
						<input id='position' type="text" class="mui-input-clear mui-input" name="position" placeholder="请选择" value="<?php echo (isset($user_resume['position']) && ($user_resume['position'] !== '')?$user_resume['position']:''); ?>">
					</div>             	
	                
					<div class="mui-input-row" id="deploy_input">
						<label for="deploy" id="deploy_show"></label>
						<div class="mui-switch mui-active">
							<div class="mui-switch-handle" id="deploy"></div>
							<input type="text" name="deploy" style="display:none;" id="is_deploy" value="">
						</div>
					</div>

				</div>	
				<p class="help_info">活动经历</p>
				<div class="mui-card">
					<div class="mui-input-row">
						<label for="intership">实践经历</label>
						<input id='intership' type="text" class="mui-input-clear mui-input" placeholder="包括但不限于兼职志愿等" value="<?php echo (isset($user_resume['intership']) && ($user_resume['intership'] !== '')?$user_resume['intership']:''); ?>">
					</div>             	
	                
					<div class="mui-input-row">
						<label for="contest">比赛经历</label>
						<input id='contest' type="text" class="mui-input-clear mui-input" placeholder="" value="<?php echo (isset($user_resume['contest']) && ($user_resume['contest'] !== '')?$user_resume['contest']:''); ?>">
					</div>
					<div class="mui-input-row">
						<label for="hobby">我热衷于</label>
						<input id='hobby' type="text" class="mui-input-clear mui-input" placeholder="总有一种兴趣值得追求" value="<?php echo (isset($user_resume['hobby']) && ($user_resume['hobby'] !== '')?$user_resume['hobby']:''); ?>">
					</div>
				</div>
				<p class="help_info">专业技能</p>
				<div class="mui-card">
					<div class="mui-card-header">请根据熟练度评估（%）</div>
					<div class="mui-input-row mui-input-range">
			            <label >Office(<s>WPS</s>)：</label>
			
			            <input type="range" id='inline-range_1' value="<?php echo (isset($user_resume['Office']) && ($user_resume['Office'] !== '')?$user_resume['Office']:'20'); ?>" min="0" max="100" name="Office">
			        </div>             	
	                
					<div class="mui-input-row mui-input-range">
			            <label id="deploy_show">Ps(<s>美图</s>)：</label>
			            <input type="range" id='inline-range' value="<?php echo (isset($user_resume['Ps']) && ($user_resume['Ps'] !== '')?$user_resume['Ps']:'20'); ?>" min="0" max="100" name="Ps">
			        </div> 
			        <div class="mui-input-row">
						<label for="skills_certificates">我擅长于：</label>
						<input id='skills_certificates' type="text" class="mui-input-clear mui-input" placeholder="可列举证书或技能" name="skills_certificates" value="<?php echo (isset($user_resume['skills_certificates']) && ($user_resume['skills_certificates'] !== '')?$user_resume['skills_certificates']:''); ?>">
					</div>
				</div>
				<p class="help_info">开放性问题</p>
				<div class="mui-input-row" >
					<textarea id="academic_field" rows="5"  placeholder="1.请介绍一项你最热爱或最新了解的专业领域，并且介绍你在这个领域的学习经历和未来的学习规划。(40%)" value="<?php echo (isset($user_resume['academic_field']) && ($user_resume['academic_field'] !== '')?$user_resume['academic_field']:''); ?>" name="academic_field"></textarea>
				</div>
				<div class="mui-input-row" >
					<textarea id="project" rows="5"  placeholder="2、请介绍你参与的印象最深刻的一个事情，为什么？并且介绍你在其中的角色和发挥的作用。(40%)" value="<?php echo (isset($user_resume['project']) && ($user_resume['project'] !== '')?$user_resume['project']:''); ?>" name="project" ></textarea>
				</div>
				<div class="mui-input-row" >
					<textarea id="reasion" rows="5"  placeholder="3.请介绍下你对应聘部门的认识和让我们留下你的原因。(20%)" value="<?php echo (isset($user_resume['reasion']) && ($user_resume['reasion'] !== '')?$user_resume['reasion']:''); ?>" name="reasion"></textarea>
				</div>
				<button id='send' class="mui-btn mui-btn-block mui-btn-primary mui-icon mui-icon-paperplane" type="button">投递</button>
			</form>
			
		
		</div>
		<script type="text/javascript">
			(function($, doc) {
				$.init();
				$.ready(function() {
					//普通示例
					var userPicker = new $.PopPicker({
						layer: 2
					});
					userPicker.setData([{
						value: '开发类',
						text: '开发类',
						children: [{
							value: "前端",
							text: "前端"
						}, {
							value: "后端",
							text: "后端"
						},{
							value: "全栈",
							text: "全栈"
						}]
					}, {
						value: '设计类',
						text: '设计类',
						children: [{
							value: "UI交互",
							text: "UI交互"
						},{
							value: "视觉设计",
							text: "视觉设计"
						}]
					},{
						value: '研发类',
						text: '研发类',
						children: [{
							value: "数据挖掘",
							text: "数据挖掘"
						},{
							value: "其他",
							text: "其他"
						}]
					}]);
					
					var showPickerButton = doc.getElementById('position');
					showPickerButton.addEventListener('tap', function(event) {
						userPicker.show(function(items) {
							showPickerButton.value =items[0].text + items[1].text;
							//返回 false 可以阻止选择框的关闭
							//return false;
						});
					}, false);
				});
			})(mui, document);

		</script> 
		<script>
			mui.init({
				swipeBack:true //启用右滑关闭功能
			});
			var showPickerButton = document.getElementById('is_deploy');
			mui('.mui-input-row .mui-switch').each(function() { 
				this.parentNode.querySelector('label').innerText = (this.classList.contains('mui-active') ? '同意' : '不同意')+'调剂';
				showPickerButton.value =this.parentNode.querySelector('label').innerText;
				this.addEventListener('toggle', function(event) {
					//event.detail.isActive 可直接获取当前状态
					this.parentNode.querySelector('label').innerText = (event.detail.isActive ? '同意' : '不同意')+'调剂';
					
					showPickerButton.value =this.parentNode.querySelector('label').innerText;

				});

				
			});
		</script> 
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
		            position:{
		                required: true
		            },
		            intership:{
		                required: true
		            },
		            contest:{
		            	required:true
		            },
		            hobby:{
		            	required:true
		            }
		            academic_field:{
		            	required:true
		            },
		            project:{
		            	required:true
		            },
		            reasion:{
		            	required:true
		            	
		            }
		        },
		        messages:{
		            position:{
		                required: "方向不能为空"
		            },
		            intership:{
		                required: "实践经历不能为空"
		            },
		            contest:{
		                required: "比赛经历不能为空"
		            },
		            hobby:{
		            	required: "总有你喜欢的事情吧"
		            }
		            academic_field:{
		                required: "问题1不能为空"
		            },
		            project:{
		                required: "问题2不能为空"
		            },
		            reasion:{
		                required: "问题3不能为空"
		            },
		        }
		    });
		});
		</script>
		<script type="text/javascript">
			mui.init();
			document.getElementById("send").addEventListener('tap', function() {
				var position=document.getElementById("position").value;  
				var deploy=document.getElementById("is_deploy").value;
				var intership=document.getElementById("intership").value;
				var contest=document.getElementById("contest").value;
				var Office=document.getElementById("inline-range_1").value;
				var Ps=document.getElementById("inline-range").value;
				var skills_certificates=document.getElementById("skills_certificates").value;
				var hobby=document.getElementById("hobby").value;
				var academic_field=document.getElementById("academic_field").value; 
				var project=document.getElementById("project").value; 
				var reasion=document.getElementById("reasion").value; 
				var btnArray = ['否', '是'];
				mui.confirm('确认投递吗','点心网络文化工作室', btnArray, function(e) {
					if (e.index == 1) {
						var method='update';
						$.ajax({
							url:"do_resume",
							data:{'position':position,'deploy':deploy,'intership':intership,'contest':contest,
							'Office':Office,'Ps':Ps,'skills_certificates':skills_certificates,'hobby':hobby,'academic_field':academic_field,'project':project,'reasion':reasion},
							type:"POST",
							dataType:"json", 
						});
						location='my_resume';
					} else {
						
					}
				})
			});
		</script>
	</body>
</html>