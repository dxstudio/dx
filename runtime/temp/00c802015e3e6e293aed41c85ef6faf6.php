<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"G:\php\wamp64\www\tp\public/../application/index\view\user\resume.html";i:1504946068;s:71:"G:\php\wamp64\www\tp\public/../application/index\view\index\header.html";i:1504965128;s:71:"G:\php\wamp64\www\tp\public/../application/index\view\index\footer.html";i:1504882203;}*/ ?>
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
								<a class="mui-navigate-right" href="<?php echo url('user/resume'); ?>">
									我的简历
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right" href="<?php echo url('index/aboutus'); ?>">
									关于我们
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right" href="<?php echo url('user/user_list'); ?>">
									联系
								</a>
							</li>
						</ul>
						<div class="title" style="margin-bottom: 25px;color: #959090;">
						点心网络文化工作室<br></hr>Copyright&nbsp;&copy;2017-forever.<br>陕ICP备16017712号-1
						</div>
					</div>
				</div>
			</aside>
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
	height:400px;
	font-size: 8px;
}
.mui-popover p{
	font-size: 10px;
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
			<div class="mui-scroll">
				<!-- 主页内容 -->
				<p class="help_info">基础信息</p>
				<div class="mui-card">
					<div class="mui-card-header mui-card-media">
						<img src="<?php echo (isset($head) && ($head !== '')?$head:'__STATIC__/img/logo.png'); ?>" />
						<div class="mui-media-body">
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (isset($name) && ($name !== '')?$name:'name'); ?> &nbsp;&nbsp;<?php echo (isset($sex) && ($sex !== '')?$sex:'♂'); ?></span>
							<p><?php echo (isset($schoolid) && ($schoolid !== '')?$schoolid:'201706010000'); ?></p>
						</div>
					</div>
					<div class="mui-card-content" >
					<div class="mui-card-content-inner">
						<span class="mui-badge mui-badge-primary"><?php echo (isset($class) && ($class !== '')?$class:'计算机171班'); ?></span>
						<span class="mui-badge mui-badge-success"><?php echo (isset($major) && ($major !== '')?$major:'计算机科学与技术'); ?></span>
				        <span class="mui-badge mui-badge-warning"><?php echo (isset($major) && ($major !== '')?$major:'电信学院'); ?></span>
				        <span class="mui-badge mui-badge-danger"><?php echo (isset($phone) && ($phone !== '')?$phone:'10086'); ?></span>
				        <span class="mui-badge mui-badge-royal"><?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?></span>
				        <span class="mui-badge mui-badge-primary"><?php echo (isset($province) && ($province !== '')?$province:'陕西西安'); ?></span>
				        <span class="mui-badge mui-badge-success"><?php echo (isset($nation) && ($nation !== '')?$nation:'汉族'); ?></span>
						</div>
					</div>
					<div class="mui-card-footer">
						<?php echo (isset($end_time) && ($end_time !== '')?$end_time:'2017-10-8 12:00:00'); ?>前可修改
						<a class="mui-navigate-right" href="<?php echo url('user/basic_info'); ?>">去完善</a>
					</div>
				</div>
				<p class="help_info">简历信息</p>
				<div class="mui-card">
					<div class="mui-card-content">
						<div class="mui-card-content-inner">
							意向部门：<?php echo (isset($position) && ($position !== '')?$position:'技术部'); ?>&nbsp;&nbsp;&nbsp;&nbsp;
									  <?php echo (isset($deploy) && ($deploy !== '')?$deploy:'同意'); ?>调剂<hr>
							软件掌握：<?php echo (isset($software_use_1) && ($software_use_1 !== '')?$software_use_1:'不熟练'); ?>、<?php echo (isset($software_use_1) && ($software_use_1 !== '')?$software_use_1:''); ?>、<?php echo (isset($software_use_1) && ($software_use_1 !== '')?$software_use_1:''); ?><hr>
							技能证书：<?php echo (isset($skills_certificates) && ($skills_certificates !== '')?$skills_certificates:'无'); ?><hr>
							实践经历：<?php echo (isset($intership) && ($intership !== '')?$intership:'无'); ?><hr>
							比赛经历：<?php echo (isset($contest) && ($contest !== '')?$contest:'无'); ?>
						</div>
					</div>
					<div class="mui-card-footer">
						<?php echo (isset($end_time) && ($end_time !== '')?$end_time:'2017-10-8 12:00:00'); ?>前可修改
						<a class="mui-navigate-right" href="<?php echo url('user/edit_resume'); ?>">去完善</a>
					</div>
				</div>
				<div class="resume_operation">
					<a href="#middlePopover" class="mui-btn mui-btn-success " style="padding: 5px 20px;">预览简历表</a>
					<a href="" class="mui-btn mui-btn-primary " style="padding: 5px 20px;">下载简历表</a>
					
				</div>
				
				<p><br/><br/></p>

			</div>
		</div>
		
		<!-- off-canvas backdrop -->
		<div class="mui-off-canvas-backdrop"></div>
	</div>

</div>
<!-- 预览图 -->
<div id="middlePopover" class="mui-popover" >
	<div class="mui-popover-arrow"></div>
	<div class="mui-scroll-wrapper">
		<div class="mui-scroll">
			<p>点心网络文化工作室应聘表(ID:)</p>
			<table border="1" cellpadding="8">
			  <tr>
			    <th>姓名</th>
			    <th><?php echo (isset($name) && ($name !== '')?$name:'name'); ?></th>
			    <th>性别</th>
			    <th><?php echo (isset($sex) && ($sex !== '')?$sex:'♂'); ?></th>
			    <th>民族</th>
			    <th><?php echo (isset($nation) && ($nation !== '')?$nation:'汉族'); ?></th>
			  </tr>
			  <tr>
			    <td>学院专业</td>
			    <td colspan="5"><?php echo (isset($major) && ($major !== '')?$major:'电信学院'); ?>&nbsp;&nbsp;<?php echo (isset($major) && ($major !== '')?$major:'计算机科学与技术'); ?>&nbsp;<?php echo (isset($class) && ($class !== '')?$class:'计算机171班'); ?></td>
			  </tr>
			  <tr>
			    <td>学号</td>
			    <td colspan="2"><?php echo (isset($schoolid) && ($schoolid !== '')?$schoolid:'201706010000'); ?></td>
			    <td>爱好</td>
			    <td colspan="2"></td>
			  </tr>
			   <tr>
			    <td>邮箱</td>
			    <td colspan="2"></td>
			    <td>技术特长</td>
			    <td colspan="2"></td>
			  </tr>
			   <tr>
			    <td>QQ</td>
			    <td colspan="2"></td>
			    <td>联系电话</td>
			    <td colspan="2"></td>
			  </tr>
			  <tr>
			    <td>应聘职务</td>
			    <td>志愿1：</td>
			    <td colspan="2">志愿2:</td>
			    <td colspan="2">志愿3:</td>
			  </tr>
			  <tr>
			    <td rowspan="5">自<br>我<br>简<br>介</td>
			    <td rowspan="5" colspan="5"></td>
			  </tr>
			  <tr>
			    <td></td>
			  </tr>
			   <tr>
			    <td></td>
			  </tr>
			   <tr>
			    <td></td>
			  </tr>
			   <tr>
			    <td></td>
			  </tr>
			  <tr>
			    <td colspan="3">辅导员意见</td>
			    <td colspan="3">所在学院意见</td>
			  </tr>
			  <tr>
			    <td colspan="3" rowspan="5"></td>
			    <td colspan="3" rowspan="5"></td>
			  </tr>
			  <tr>
			    <td></td>
			  </tr>
			   <tr>
			    <td></td>
			  </tr>
			   <tr>
			    <td></td>
			  </tr>
			   <tr>
			    <td></td>
			  </tr>
			</table>
			<p>应聘须知：</p>
			<ol>
			<li>XXX</li>
			<li>XXX</li>
			</ol>
		</div>
	</div>
</div>	
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