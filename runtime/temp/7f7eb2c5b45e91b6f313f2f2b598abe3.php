<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"G:\php\wamp64\www\dx\public/../application/index\view\user\index.html";i:1505487361;s:71:"G:\php\wamp64\www\dx\public/../application/index\view\index\header.html";i:1505535032;s:71:"G:\php\wamp64\www\dx\public/../application/index\view\index\footer.html";i:1504882203;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>点心网络文化工作室</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="Shortcut Icon" href="__STATIC__/img/logo.png" />
		<script src="__STATIC__/mui/js/mui.min.js"></script>
		<link rel="stylesheet" href="__STATIC__/mui/css/mui.min.css">
		<script src="__STATIC__/js/jquery-3.2.1.min.js"></script>
		<style>
			html,
			body {
				background-color: #efeff4;
			}
			p {
				text-indent: 22px;
			}
			span.mui-icon {
				font-size: 14px;
				color: #007aff;
				margin-left: -15px;
				padding-right: 10px;
			}
			.mui-off-canvas-left {
				color: #fff;
			}
			.title {
				margin: 35px 15px 10px;
			}
			.title .content {
				margin: 10px 15px 35px;
				color: #bbb;
				text-indent: 1em;
				font-size: 14px;
				line-height: 24px;
			}
			input {
				color: #000;
			}
		</style>
		
	</head>

	<body>
		<div id="offCanvasWrapper" class="mui-off-canvas-wrap mui-scalable">
			<!--侧滑菜单部分-->
			<aside id="offCanvasSide" class="mui-off-canvas-left">
				<div id="offCanvasSideScroll" class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<div class="title"><img src="__STATIC__/img/logo.png" width="30%"></div>
						<div class="content" style="margin-bottom: 25px;color: #959090;">
							一个旨在提高实战开发经验的平台
						</div>
						
						<ul class="mui-table-view mui-table-view-chevron mui-table-view-inverted">
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right" href="<?php echo url('index/index'); ?>">
									首页
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right" href="<?php echo url('user/index'); ?>">
									我的信息
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right" href="<?php echo url('index/aboutus'); ?>">
									关于我们
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right" href="<?php echo url('user/user_list'); ?>">
									联系我们
								</a>
							</li>
						</ul>
						<div class="title" style="margin-bottom: 25px;color: #959090;">
						点心网络文化工作室<br></hr>Copyright&nbsp;&copy;2017-forever.<br>陕ICP备16017712号-1
						</div>
					</div>
				</div>
			</aside>
<link href="__STATIC__/mui/css/mui.picker.css" rel="stylesheet" />
<link href="__STATIC__/mui/css/mui.poppicker.css" rel="stylesheet" />
<script src="__STATIC__/mui/js/mui.picker.js"></script>
<script src="__STATIC__/mui/js/mui.poppicker.js"></script>
<style type="text/css">
	.help_info {
				/*margin-top: 5px;*/
				text-align: center;
				left: 0px;
			}
	.resume_operation{
		position: absolute;
		text-align: center;
		width: 100%;
		left: 0px;
		margin: 0 auto;
	}
	.mui-popover {
	height:300px;
	width: 200px;
	font-size: 8px;
	
}
.mui-control-content {
				
				min-height: 215px;
			}
.mui-popover p{
	font-size: 10px;
}
.mui-input-group label {
				width: 32%;
}
#position{
	width: 48%;
}
#send{
	width: 20%;
}
</style>
	<!--主界面部分-->
	<div class="mui-inner-wrap">
		<header class="mui-bar mui-bar-nav">
			<a href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-left"></a>
			<h1 class="mui-title">我的简历</h1>
			<a class="mui-icon mui-icon-upload mui-pull-right" href="<?php echo url('user/logout'); ?>"></a>
		</header>
		
		<div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
			<div class="mui-scroll ">
				<!-- 主页内容 -->
				<p class="help_info">基础信息</p>
				<div class="mui-card">
					<div class="mui-card-header mui-card-media">
						<img src="<?php echo (isset($head) && ($head !== '')?$head:'__STATIC__/img/logo.png'); ?>" />
						<div class="mui-media-body">
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (isset($user_info['name']) && ($user_info['name'] !== '')?$user_info['name']:'name'); ?> &nbsp;&nbsp;<?php echo (isset($user_info['sex']) && ($user_info['sex'] !== '')?$user_info['sex']:'♂'); ?></span>
							<p><?php echo (isset($user_info['schoolid']) && ($user_info['schoolid'] !== '')?$user_info['schoolid']:'201706010000'); ?></p>
						</div>
					</div>
					<div class="mui-card-content" >
					<div class="mui-card-content-inner">
						<span class="mui-badge mui-badge-primary"><?php echo (isset($user_info['class']) && ($user_info['class'] !== '')?$user_info['class']:'计算机xx班'); ?></span>
						<span class="mui-badge mui-badge-success"><?php echo (isset($user_info['major']) && ($user_info['major'] !== '')?$user_info['major']:'xx专业'); ?></span>
				        <span class="mui-badge mui-badge-warning"><?php echo (isset($user_info['academy']) && ($user_info['academy'] !== '')?$user_info['academy']:'xx学院'); ?></span>
				        <span class="mui-badge mui-badge-danger"><?php echo (isset($user_info['phone']) && ($user_info['phone'] !== '')?$user_info['phone']:'10086'); ?></span>
				        <span class="mui-badge mui-badge-royal"><?php echo (isset($user_info['mail']) && ($user_info['mail'] !== '')?$user_info['mail']:'admin@dxstudio.cc'); ?></span>
				        <span class="mui-badge mui-badge-primary"><?php echo (isset($user_info['location']) && ($user_info['location'] !== '')?$user_info['location']:'陕西西安'); ?></span>
				        <span class="mui-badge mui-badge-success"><?php echo (isset($user_info['nation']) && ($user_info['nation'] !== '')?$user_info['nation']:'汉族'); ?></span>
				        <span class="mui-badge mui-badge-success"><?php echo (isset($user_info['birthyear']) && ($user_info['birthyear'] !== '')?$user_info['birthyear']:'x'); ?>岁</span>
						</div>
					</div>
					<div class="mui-card-footer">
						<?php echo (isset($end_time) && ($end_time !== '')?$end_time:'2017-9-17 18:00:00'); ?>前可修改
						<a class="mui-navigate-right" href="<?php echo url('user/edit_info'); ?>">去完善</a>
					</div>
				</div>

				<div class="mui-input-group">
					<div class="mui-input-row" >
						<label for="position">我的方向</label>
						<button type="button" class="mui-btn mui-btn-primary" name="send" id="send"><span style="color: white;" id="button">提交</span></button>
						<input id='position' type="text" name="position" class="mui-input " placeholder=""   value="<?php echo (isset($user_resume['position']) && ($user_resume['position'] !== '')?$user_resume['position']:''); ?>">			
					</div>             	
				</div>	
				<p class="help_info">发展方向</p>
				<div id="slider" class="mui-slider ">
					<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
						<a class="mui-control-item" href="#item1mobile">开发类</a>
						<a class="mui-control-item" href="#item2mobile">研发类</a>
						<a class="mui-control-item" href="#item3mobile">设计类</a>
					</div>
					<div id="item1mobile" class="mui-control-content mui-active">
						<ul class="mui-table-view">
							<li class="mui-table-view-cell mui-collapse">
								<a class="mui-navigate-right" href="#">前端</a>
								<div class="mui-collapse-content">
									<p>
										要求：<br>
										<ol style="font-size: 15px">
										<li>掌握Html/css/Javascript基础知识，</li>
										<li>至少熟悉使用一种UI框架，</li>
										<li>了解一种js库</li></ol>
									</p>
									<p>	
										职责：<br>
										<ol style="font-size: 15px">
										<li>负责Web View中的交互和业务开发</li>
										<li>随时分享所学心得，培训新同学</li></ol>
									</p>
								</div>
							</li>
							<li class="mui-table-view-cell mui-collapse">
								<a class="mui-navigate-right" href="#">后端</a>
								<div class="mui-collapse-content">
									<p>
										要求：<br>
										<ol style="font-size: 15px">
										<li>掌握Java/PHP/Python其中一门语言</li>
										<li>了解MYSQL及SQL语言、编程</li></ol>
									</p>
									<p>	
										职责：<br>
										<ol style="font-size: 15px">
										<li>负责产品服务后台的架构设计、开发、优化及运营</li>
										<li>随时分享所学心得，培训新同学</li></ol>
									</p>
								</div>
							</li>
							<li class="mui-table-view-cell mui-collapse">
								<a class="mui-navigate-right" href="#">全栈</a>
								<div class="mui-collapse-content">
									<p>
										要求：<br>
										<ol style="font-size: 15px">
										<li>熟悉以上前后端知识，能够独立开发完整项目</li>
										<li>悟性高，耐力好</li></ol>
									</p>
									<p>	
										职责：<br>
										<ol style="font-size: 15px">
										<li>负责领导业务开发,撰写开发草案</li>
										<li>随时分享所学心得，培训新同学</li></ol>
									</p>
								</div>
							</li>
						</ul>
					</div>
					<div id="item2mobile" class="mui-slider-item mui-control-content">
						<ul class="mui-table-view">
							<li class="mui-table-view-cell mui-collapse">
								<a class="mui-navigate-right" href="#">数据挖掘</a>
								<div class="mui-collapse-content">
									<p>
										要求：<br>
										<ol style="font-size: 15px">
										<li>高数,概率论，线性代数要好，英语阅读能力强
</li>
										<li>已经有一定了解并热衷于机器学习前沿方向</li>
										<li>至少熟练掌握C/C++,Java,Python等一门编程语言</li></ol>
									</p>
									<p>	
										职责：<br>
										<ol style="font-size: 15px">
										<li>短期内以学习为主，利用成熟框架研究人物画像</li>
										<li>随时分享所学心得</li></ol>
									</p>
								</div>
							</li>
						</ul>
					</div>
					<div id="item3mobile" class="mui-slider-item mui-control-content">
						<ul class="mui-table-view">
							<li class="mui-table-view-cell mui-collapse">
								<a class="mui-navigate-right" href="#">UI交互</a>
								<div class="mui-collapse-content">
									<p>
										要求：<br>
										<ol style="font-size: 15px">
										<li>了解Web前端跨平台开发技术</li>
										<li>熟悉体验设计的基本流程，乐于尝试不同的产品
</li>

										<li>善于学习，有团队协作精神，较强的逻辑分析能力和沟通表达能力。</li></ol>
									</p>
									<p>	
										职责：<br>
										<ol style="font-size: 15px">
										<li>完成交互文档及设计规范，评估竞品案例</li>
										<li>经常性撰写应用体验报告，开辟推荐专栏</li>
										<li>随时分享所学心得，培训新同学</li></ol>
									</p>
							</li>
							<li class="mui-table-view-cell mui-collapse">
								<a class="mui-navigate-right" href="#">视觉设计</a>
								<div class="mui-collapse-content">
									<p>
										要求：<br>
										<ol style="font-size: 15px">
										<li>有一定的设计理论知识和对流行趋势敏锐的洞察力；</li>
										<li>能够熟练使用Photoshop、Illustrator等软件；
</li>

										<li>能够快速寻找或设计相应需求</li></ol>
									</p>
									<p>	
										职责：<br>
										<ol style="font-size: 15px">
										<li>参与产品前期界面整体视觉风格，完成所需图形，音视频</li>
										<li>随时分享所学心得，培训新同学</li></ol>
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		
		<!-- off-canvas backdrop -->
		<div class="mui-off-canvas-backdrop"></div>
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
						}]
					},{
						value: '暂不符合',
						text: '暂不符合',
						children: [{
							value: "继续学习",
							text: "继续学习"
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
<script type="text/javascript">
	mui.init({
				swipeBack: false
			});
			(function($) {
				$('.mui-scroll-wrapper').scroll({
					indicators: true //是否显示滚动条
				});
			})(mui);
</script>
<script type="text/javascript">
			mui.init();
			document.getElementById("send").addEventListener('tap', function() {
				var position=document.getElementById("position").value;  
				var btnArray = ['否', '是'];
				mui.confirm('确认选择吗','点心网络文化工作室', btnArray, function(e) {
					if (e.index == 1) {
						$.ajax({
							url:"do_resume",
							data:{'position':position},
							type:"POST",
							dataType:"json", 
						});
						location='../index/index';
					} else {
						
					}
				})
			});
		</script>
<!-- 放置资源文件 -->
<script type="text/javascript" src="//captcha.luosimao.com/static/js/api.js"></script>
		<script>
			mui.init();
			 //侧滑容器父节点
			
			 //主界面和侧滑菜单界面均支持区域滚动；
			mui('#offCanvasSideScroll').scroll();
			mui('#offCanvasContentScroll').scroll();
			 //实现ios平台原生侧滑关闭页面；
			if (mui.os.plus && mui.os.ios) {
				mui.plusReady(function() { //5+ iOS暂时无法屏蔽popGesture时传递touch事件，故该demo直接屏蔽popGesture功能
					plus.webview.currentWebview().setStyle({
						'popGesture': 'none'
					});
				});
			}
		</script>
	</body>
</html>