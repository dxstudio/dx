<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"G:\php\wamp64\www\tp\public/../application/index\view\index\index.html";i:1505075591;s:71:"G:\php\wamp64\www\tp\public/../application/index\view\index\header.html";i:1505059853;s:71:"G:\php\wamp64\www\tp\public/../application/index\view\index\footer.html";i:1504882203;}*/ ?>
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
								<a class="mui-navigate-right" href="<?php echo url('user/my_resume'); ?>">
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

	<!--主界面部分-->
	<div class="mui-inner-wrap">
		<header class="mui-bar mui-bar-nav">
			<a href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-left"></a>
			<h1 class="mui-title">主页</h1>
			<a class="mui-icon mui-icon-upload mui-pull-right" href="<?php echo url('user/logout'); ?>"></a>
		</header>
		
		<div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
			<div class="mui-scroll">
				<!-- 主页内容 -->
				<div id="slider" class="mui-slider">
					<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
						<a class="mui-control-item" href="#item1mobile" activited="activited">最新动态</a>
						<a class="mui-control-item" href="#item2mobile">他山之石</a>
					</div>
				</div>
				<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4"></div>
				<div class="mui-slider-group">
					<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
						<div class="mui-card" style="margin-bottom: 35px;">
							<ul class="mui-table-view">
								<li class="mui-table-view-cell mui-media">
									<a href="https://mp.weixin.qq.com/s?__biz=MzI1ODc5NTc5Nw==&mid=2247483706&idx=1&sn=dcc9329dca5e212cf85accac8db4090b&chksm=ea03f140dd747856ab912dc73f5effd750e6fb38cb006bc013e655bb465d9e38d06f97b57937&mpshare=1&scene=1&srcid=09097llL14y14S2gwnmIY89I&pass_ticket=JSbB6Fgjx8yhSMFAcZcuYSXp13V%2Ba3PzehQbkF3wzqfWWjeX4oSjZoMn7%2Fn9dm%2FN#rd">
										<img class="mui-media-object mui-pull-left" src="__STATIC__/img/title.jpg">
										<div class="mui-media-body">
											&nbsp;&nbsp;&nbsp;&nbsp;工作室招募
											<p class='mui-ellipsis'>无论你是互联网爱好者还是拥有创意的思想者</p>
										</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media">
									<a href="https://mp.weixin.qq.com/s?__biz=MzI1ODc5NTc5Nw==&mid=2247483703&idx=2&sn=6d65aa87903cfabb589ef4921bee7381&chksm=ea03f14ddd74785bcffa24468032918f2cd02e96c12bb371e81466bb2210a19666ea99ec4d0a&mpshare=1&scene=1&srcid=0909zM3MCK7OfpffCTrB2s6y&pass_ticket=JSbB6Fgjx8yhSMFAcZcuYSXp13V%2Ba3PzehQbkF3wzqfWWjeX4oSjZoMn7%2Fn9dm%2FN#rd">
										<img class="mui-media-object mui-pull-right" src="__STATIC__/img/title.jpg">
										<div class="mui-media-body">
											&nbsp;&nbsp;&nbsp;&nbsp;学生干部竞聘大会圆满召开
											<p class='mui-ellipsis'>本次大会由张瑜同学主持，指导老师张露颖及工作室全体成员参加了此次会议。</p>
										</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media">
									<a href="https://mp.weixin.qq.com/s?__biz=MzI1ODc5NTc5Nw==&mid=2247483703&idx=3&sn=edde92a04d416055aa45ea0957f48233&chksm=ea03f14ddd74785b7feb47adbfc2d433d2193fa1ba2f3a3badc24ccf5d80529579d604c0e009&mpshare=1&scene=1&srcid=09090J6VwtlGxPcjVtkQTE50&pass_ticket=JSbB6Fgjx8yhSMFAcZcuYSXp13V%2Ba3PzehQbkF3wzqfWWjeX4oSjZoMn7%2Fn9dm%2FN#rd">
										<img class="mui-media-object mui-pull-left" src="__STATIC__/img/title.jpg">
										<div class="mui-media-body">
											&nbsp;&nbsp;&nbsp;&nbsp;麻麻，工作室撩我（一）
											<p class='mui-ellipsis'>这期叙事向，准备好鲜花与掌声哦！</p>
										</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media">
									<a href="https://mp.weixin.qq.com/s?__biz=MzIzNjA1NTIxOQ==&mid=2655675343&idx=1&sn=4ff9c591e4e1c3f43cf4a4cf301d7eab&chksm=f3637c13c414f50592f4a69440d570a7598ba657d1f8a8cd8bcba157b233214da02c4080ad2f&mpshare=1&scene=1&srcid=0909QZCNdcipYDeG1fHc0ZpI&pass_ticket=JSbB6Fgjx8yhSMFAcZcuYSXp13V%2Ba3PzehQbkF3wzqfWWjeX4oSjZoMn7%2Fn9dm%2FN#rd">
										<img class="mui-media-object mui-pull-right" src="__STATIC__/img/title.jpg">
										<div class="mui-media-body">
											&nbsp;&nbsp;&nbsp;&nbsp;喜讯 | 我校学生团队作品...
											<p class='mui-ellipsis'>由张诚，高宇挺,韩兴达，王景峰</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div id="item2mobile" class="mui-slider-item mui-control-content">
						<div class="mui-card" style="margin-bottom: 35px;">
							<ul class="mui-table-view">
								<li class="mui-table-view-cell mui-media">
									<a href="">
										<img class="mui-media-object mui-pull-right" src="__STATIC__/img/title.jpg">
										<div class="mui-media-body">
											&nbsp;&nbsp;&nbsp;&nbsp;马化腾：腾讯也有烦恼，也会被排斥
											<p class='mui-ellipsis'>“我大概只听懂不到30%，感觉就是不明觉厉，所以是很厉害，”</p>
										</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media">
									<a href="">
										<img class="mui-media-object mui-pull-left" src="__STATIC__/img/title.jpg">
										<div class="mui-media-body">
											&nbsp;&nbsp;&nbsp;&nbsp;探索微信社交和内容边界
											<p class='mui-ellipsis'>这是微信公号新世相推出的一款线上活动“48小时交换”。</p>
										</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media">
									<a href="javascript:;">
										<img class="mui-media-object mui-pull-right" src="__STATIC__/img/title.jpg">
										<div class="mui-media-body">
											&nbsp;&nbsp;&nbsp;&nbsp;媚俗的创业者
											<p class='mui-ellipsis'>很早以前，创业者们喜欢给员工画大饼，谈情怀</p>
										</div>
									</a>
								</li>
								<li class="mui-table-view-cell mui-media">
									<a href="javascript:;">
										<img class="mui-media-object mui-pull-left" src="__STATIC__/img/title.jpg">
										<div class="mui-media-body">
											&nbsp;&nbsp;&nbsp;&nbsp;阿里18周年年会，马云化身迈克尔·杰克逊登台
											<p class='mui-ellipsis'>说的就是今天阿里巴巴举办的18周年年会！</p>
										</div>
									</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="mui-card ">
					<div class="mui-card-header">学习通知</div>
					<div class="mui-card-content " >
						<div class="mui-card-content-inner">
							请尽快加入<a href="https://github.com/orgs/dxstudio/">工作室github</a>并提交自己的网站
						</div>
					</div>
					<div class="mui-card-footer">
						<a class="mui-card-link">回复</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- off-canvas backdrop -->
		<div class="mui-off-canvas-backdrop"></div>

	</div>

</div>

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