<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"G:\php\wamp64\www\tp\public/../application/index\view\user\user_list.html";i:1504938958;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>工作室成员索引</title>
		<link href="__STATIC__/mui/css/mui.min.css" rel="stylesheet" />
		<link href="__STATIC__/mui/css/mui.indexedlist.css" rel="stylesheet" />
		<style>
			html,
			body {
				height: 100%;
				overflow: hidden;
				background-color: #efeff4;
			}
			.mui-bar {
				-webkit-box-shadow: none;
				box-shadow: none;
			}
		</style>
		<style>
			.title{
				margin: 20px 15px 10px;
				color: #6d6d72;
				font-size: 15px;
			}
			 .oa-contact-cell.mui-table .mui-table-cell {
				padding: 11px 0;
				vertical-align: middle;
			}
			
			.oa-contact-cell {
				position: relative;
				margin: -11px 0;
			}
	
			.oa-contact-avatar {
				width: 75px;
			}
			.oa-contact-avatar img {
				border-radius: 50%;
			}
			.oa-contact-content {
				width: 100%;
			}
			.oa-contact-name {
				margin-right: 20px;
			}
			.oa-contact-name, oa-contact-position {
				float: left;
			}
		</style>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">工作室成员通讯录</h1>
			<!-- <a class="mui-icon mui-icon-person mui-pull-right" href="tel:10000"></a> -->
		</header>
		<div class="mui-content">
			<div id='list' class="mui-indexed-list">
				<div class="mui-indexed-list-search mui-input-row mui-search">
					<input type="search" class="mui-input-clear mui-indexed-list-search-input" placeholder="搜索">
				</div>
				<div class="mui-indexed-list-bar">
					<a>A</a>
					<a>B</a>
					<a>C</a>
					<a>D</a>
					<a>E</a>
					<a>F</a>
					<a>G</a>
					<a>H</a>
					<a>I</a>
					<a>J</a>
					<a>K</a>
					<a>L</a>
					<a>M</a>
					<a>N</a>
					<a>O</a>
					<a>P</a>
					<a>Q</a>
					<a>R</a>
					<a>S</a>
					<a>T</a>
					<a>U</a>
					<a>V</a>
					<a>W</a>
					<a>X</a>
					<a>Y</a>
					<a>Z</a>
				</div>
				<div class="mui-indexed-list-alert"></div>
				<div class="mui-indexed-list-inner">
					<div class="mui-indexed-list-empty-alert">没有数据</div>
					<ul class="mui-table-view">
						<li data-group="A" class="mui-table-view-divider mui-indexed-list-group">A&nbsp;&nbsp;&nbsp;&nbsp;<span>左划试试</span></li>
						<!-- 名片开始 -->
						<li data-value="AQ" data-tags="AnQi" class="mui-table-view-cell" >
							<div class="mui-slider-right mui-disabled">
								<a class="mui-btn mui-btn-grey mui-icon mui-icon-chatboxes" href="sms:<?php echo (isset($phone) && ($phone !== '')?$phone:'10086'); ?>"></a>
								<a class="mui-btn mui-btn-yellow mui-icon mui-icon-phone" href="tel:<?php echo (isset($phone) && ($phone !== '')?$phone:'10086'); ?>"></a>
								<a class="mui-btn mui-btn-red mui-icon mui-icon-email" href="mailto:<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>"></a>
							</div>
							<div class="mui-slider-handle">
								<div class="mui-slider-cell">
									<div class="oa-contact-cell mui-table mui-slider-handle">
										<div class="oa-contact-avatar mui-table-cell">
											<span class="mui-icon mui-icon-person"></span>
										</div>
										<div class="oa-contact-content mui-table-cell">
											<div class="mui-clearfix">
												<h4 class="oa-contact-name"><?php echo (isset($name) && ($name !== '')?$name:'张三'); ?></h4>
												<span class="oa-contact-position mui-h6"><?php echo (isset($position) && ($position !== '')?$position:'PM'); ?></span>
											</div>
											<p class="oa-contact-email mui-h6">
												<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<!-- 名片结束 -->
						<!-- <li data-group="B" class="mui-table-view-divider mui-indexed-list-group">B</li> -->
						<li data-group="C" class="mui-table-view-divider mui-indexed-list-group">C</li>
						<!-- 名片开始 -->
						<li data-value="CYN" data-tags="ChengYaNi" class="mui-table-view-cell" >
							<div class="mui-slider-right mui-disabled">
								<a class="mui-btn mui-btn-grey mui-icon mui-icon-person" ></a>
								<a class="mui-btn mui-btn-yellow mui-icon mui-icon-phone" href="tel:<?php echo (isset($phone) && ($phone !== '')?$phone:'10086'); ?>"></a>
								<a class="mui-btn mui-btn-red mui-icon mui-icon-email" href="mailto:<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>"></a>
							</div>
							<div class="mui-slider-handle">
								<div class="mui-slider-cell">
									<div class="oa-contact-cell mui-table mui-slider-handle">
										<div class="oa-contact-avatar mui-table-cell">
											<span class="mui-icon mui-icon-person"></span>
										</div>
										<div class="oa-contact-content mui-table-cell">
											<div class="mui-clearfix">
												<h4 class="oa-contact-name"><?php echo (isset($name) && ($name !== '')?$name:'张三'); ?></h4>
												<span class="oa-contact-position mui-h6"><?php echo (isset($position) && ($position !== '')?$position:'PM'); ?></span>
											</div>
											<p class="oa-contact-email mui-h6">
												<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<!-- 名片结束 -->
						<!-- <li data-group="D" class="mui-table-view-divider mui-indexed-list-group">D</li>
						
						<li data-group="E" class="mui-table-view-divider mui-indexed-list-group">E</li>
						
						<li data-group="F" class="mui-table-view-divider mui-indexed-list-group">F</li>
						
						<li data-group="G" class="mui-table-view-divider mui-indexed-list-group">G</li> -->
						
						<li data-group="H" class="mui-table-view-divider mui-indexed-list-group">H</li>
						<li data-value="HLMZ" data-tags="HongLuMinZi" class="mui-table-view-cell" >
							<div class="mui-slider-right mui-disabled">
								<a class="mui-btn mui-btn-grey mui-icon mui-icon-person" ></a>
								<a class="mui-btn mui-btn-yellow mui-icon mui-icon-phone" href="tel:<?php echo (isset($phone) && ($phone !== '')?$phone:'10086'); ?>"></a>
								<a class="mui-btn mui-btn-red mui-icon mui-icon-email" href="mailto:<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>"></a>
							</div>
							<div class="mui-slider-handle">
								<div class="mui-slider-cell">
									<div class="oa-contact-cell mui-table mui-slider-handle">
										<div class="oa-contact-avatar mui-table-cell">
											<span class="mui-icon mui-icon-person"></span>
										</div>
										<div class="oa-contact-content mui-table-cell">
											<div class="mui-clearfix">
												<h4 class="oa-contact-name"><?php echo (isset($name) && ($name !== '')?$name:'张三'); ?></h4>
												<span class="oa-contact-position mui-h6"><?php echo (isset($position) && ($position !== '')?$position:'PM'); ?></span>
											</div>
											<p class="oa-contact-email mui-h6">
												<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<!-- <li data-group="H" class="mui-table-view-divider mui-indexed-list-group">H</li>

						<li data-group="I" class="mui-table-view-divider mui-indexed-list-group">I/li>

						<li data-group="J" class="mui-table-view-divider mui-indexed-list-group">J</li>

						<li data-group="K" class="mui-table-view-divider mui-indexed-list-group">H</li>

						<li data-group="L" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="M" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="N" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="O" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="P" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="Q" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="R" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="S" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="T" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="U" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="V" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="W" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="X" class="mui-table-view-divider mui-indexed-list-group">H</li>	
						<li data-group="Y" class="mui-table-view-divider mui-indexed-list-group">H</li>	 -->
						<li data-group="Z" class="mui-table-view-divider mui-indexed-list-group">Z</li>	
						<li data-value="ZLY" data-tags="ZhangLuYing" class="mui-table-view-cell" >
							<div class="mui-slider-right mui-disabled">
								<a class="mui-btn mui-btn-grey mui-icon mui-icon-person" ></a>
								<a class="mui-btn mui-btn-yellow mui-icon mui-icon-phone" href="tel:<?php echo (isset($phone) && ($phone !== '')?$phone:'10086'); ?>"></a>
								<a class="mui-btn mui-btn-red mui-icon mui-icon-email" href="mailto:<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>"></a>
							</div>
							<div class="mui-slider-handle">
								<div class="mui-slider-cell">
									<div class="oa-contact-cell mui-table mui-slider-handle">
										<div class="oa-contact-avatar mui-table-cell">
											<span class="mui-icon mui-icon-person"></span>
										</div>
										<div class="oa-contact-content mui-table-cell">
											<div class="mui-clearfix">
												<h4 class="oa-contact-name"><?php echo (isset($name) && ($name !== '')?$name:'张三'); ?></h4>
												<span class="oa-contact-position mui-h6"><?php echo (isset($position) && ($position !== '')?$position:'PM'); ?></span>
											</div>
											<p class="oa-contact-email mui-h6">
												<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li data-value="ZCL" data-tags="ZhaoChuanLu" class="mui-table-view-cell" >
							<div class="mui-slider-right mui-disabled">
								<a class="mui-btn mui-btn-grey mui-icon mui-icon-person" ></a>
								<a class="mui-btn mui-btn-yellow mui-icon mui-icon-phone" href="tel:<?php echo (isset($phone) && ($phone !== '')?$phone:'10086'); ?>"></a>
								<a class="mui-btn mui-btn-red mui-icon mui-icon-email" href="mailto:<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>"></a>
							</div>
							<div class="mui-slider-handle">
								<div class="mui-slider-cell">
									<div class="oa-contact-cell mui-table mui-slider-handle">
										<div class="oa-contact-avatar mui-table-cell">
											<span class="mui-icon mui-icon-person"></span>
										</div>
										<div class="oa-contact-content mui-table-cell">
											<div class="mui-clearfix">
												<h4 class="oa-contact-name"><?php echo (isset($name) && ($name !== '')?$name:'张三'); ?></h4>
												<span class="oa-contact-position mui-h6"><?php echo (isset($position) && ($position !== '')?$position:'PM'); ?></span>
											</div>
											<p class="oa-contact-email mui-h6">
												<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li data-value="CYN" data-tags="ChengYaNi" class="mui-table-view-cell" >
							<div class="mui-slider-right mui-disabled">
								<a class="mui-btn mui-btn-grey mui-icon mui-icon-person" ></a>
								<a class="mui-btn mui-btn-yellow mui-icon mui-icon-phone" href="tel:<?php echo (isset($phone) && ($phone !== '')?$phone:'10086'); ?>"></a>
								<a class="mui-btn mui-btn-red mui-icon mui-icon-email" href="mailto:<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>"></a>
							</div>
							<div class="mui-slider-handle">
								<div class="mui-slider-cell">
									<div class="oa-contact-cell mui-table mui-slider-handle">
										<div class="oa-contact-avatar mui-table-cell">
											<span class="mui-icon mui-icon-person"></span>
										</div>
										<div class="oa-contact-content mui-table-cell">
											<div class="mui-clearfix">
												<h4 class="oa-contact-name"><?php echo (isset($name) && ($name !== '')?$name:'张三'); ?></h4>
												<span class="oa-contact-position mui-h6"><?php echo (isset($position) && ($position !== '')?$position:'PM'); ?></span>
											</div>
											<p class="oa-contact-email mui-h6">
												<?php echo (isset($mail) && ($mail !== '')?$mail:'admin@dxstudio.cc'); ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<script src="__STATIC__/mui/js/mui.min.js"></script>
		<script src="__STATIC__/mui/js/mui.indexedlist.js"></script>
		<script type="text/javascript" charset="utf-8">
			mui.init();
			mui.ready(function() {
				var header = document.querySelector('header.mui-bar');
				var list = document.getElementById('list');
				//calc hieght
				list.style.height = (document.body.offsetHeight - header.offsetHeight) + 'px';
				//create
				window.indexedList = new mui.IndexedList(list);
			});
		</script>
	</body>

</html>