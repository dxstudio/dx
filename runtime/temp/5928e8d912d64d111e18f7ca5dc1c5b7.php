<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"G:\php\wamp64\www\dx\public/../application/index\view\user\login.html";i:1505486790;s:71:"G:\php\wamp64\www\dx\public/../application/index\view\index\header.html";i:1505535032;s:71:"G:\php\wamp64\www\dx\public/../application/index\view\index\footer.html";i:1504882203;}*/ ?>
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
<style type="text/css">
.oauth{
	margin-left: 15px;
	margin-right: 15px;

}
.l-captcha{
	margin: 0 auto;
}
.oauth-area {
				position: absolute;
				bottom: 20px;
				left: 0px;
				text-align: center;
				width: 100%;
			}
.link-area {
				display: block;
				margin-top: 25px;
				text-align: center;
			}
</style>
	<!--主界面部分-->
	<div class="mui-inner-wrap">
		<header class="mui-bar mui-bar-nav">
			<a href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-left"></a>
			<h1 class="mui-title">点心工作室内部系统</h1>
			<a class="mui-icon mui-icon-person mui-pull-right" href="<?php echo url('user/user_list'); ?>"></a>
			
		</header>
		
		<div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
			<div class="mui-scroll">

				<div class="mui-content-padded">
					<!-- 主页内容 -->
					<form id='login-form' class="mui-input-group" action="" method="post">
						<div class="mui-input-row">
							<label>账号</label>
							<input id='account' type="text" class="mui-input-clear mui-input" placeholder="请输入手机号">
						</div>
						<div class="mui-input-row">
							<label>密码</label>
							<input id='password' type="password" class="mui-input-clear mui-input" placeholder="请输入密码">
						</div>
						<div class="captcha">
							<div class="l-captcha " data-site-key="84222c0c6df7a707786e113d17291e01" ></div>
						</div>
					</form>
					
					<button id='login' class="mui-btn mui-btn-block mui-btn-primary">登录</button>
					
					<div class="link-area">
						<a id='reg'>注册账号</a> <span class="spliter">|</span> <a id='forgetPassword'>忘记密码</a>
					</div>
				</div>
			</div>
			<div class="oauth-area">
					<div class="link-area">
						<a class="oauth" href="<?php echo url('user/oauthLogin?type=qq'); ?>"><img src="__STATIC__/img/qq.png" width="12%"></a>
						<span class="spliter">|</span> 
						<a class="oauth" href="<?php echo url('user/oauthLogin?type=yiban'); ?>"><img src="__STATIC__/img/yibanLogo.png" width="12%"></a>
						<span class="spliter">|</span> 
						<a class="oauth" href="<?php echo url('user/oauthLogin?type=github'); ?>"><img src="__STATIC__/img/github.png" width="12%"></a>
						<p class="oauth">初次加入请点击QQ登录</p>
					</div>
			</div>
		</div>
		<!-- off-canvas backdrop -->
		<div class="mui-off-canvas-backdrop"></div>
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