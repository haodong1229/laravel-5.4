<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Neat Admin Template</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="admin/css/bootstrap.css">
<link rel="stylesheet" href="admin/css/bootstrap-responsive.css">
<link rel="stylesheet" href="admin/css/jquery.fancybox.css">
<link rel="stylesheet" href="admin/css/uniform.default.css">
<link rel="stylesheet" href="admin/css/bootstrap.datepicker.css">
<link rel="stylesheet" href="admin/css/jquery.cleditor.css">
<link rel="stylesheet" href="admin/css/jquery.plupload.queue.css">
<link rel="stylesheet" href="admin/css/jquery.tagsinput.css">
<link rel="stylesheet" href="admin/css/jquery.ui.plupload.css">
<link rel="stylesheet" href="admin/css/chosen.css">
<link rel="stylesheet" href="admin/css/jquery.jgrowl.css">
<link rel="stylesheet" href="admin/css/style.css">
</head>
<body>
				
<div class="style-switcher">
	<h3>Style-switcher</h3>
	<ul class='color'>
		<li>
			<a href="#" class='style'>Default</a>
		</li>
		<li>
			<a href="#" class='blue'>Blue</a>
		</li>
		<li>
			<a href="#" class='green'>Green</a>
		</li>
		<li>
			<a href="#" class='red'>Red</a>
		</li>
	</ul>
	<h3>Pattern-switcher</h3>
	<ul class='pattern'>
		<li>
			<a href="#" class='default'>Default</a>
		</li>
		<li>
			<a href="#" class='dark'>Dark wood</a>
		</li>
		<li><a href="#" class='light'>Light</a></li>
		<li><a href="#" class='wood'>Wood</a></li>
		<li><a href="#" class='retina-wood'>Retina-wood</a></li>
		<li><a href="#" class='linen'>Linen</a></li>
		<li><a href="#" class='paper'>Paper</a></li>
	</ul>
</div>
<div class="topbar clearfix">
	<div class="container-fluid">
		<a href="dashboard.html" class='company'>凡客后台</a>
		<ul class='mini'>
			<li>
				<a href="/logout">
					<img src="admin/img/icons/fugue/control-power.png" alt="">
					Logout
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container-fluid">
		<ul class="bread pull-left">
			<li>
				<a href="/index"><i class="icon-home icon-white"></i></a>
			</li>
		</ul>

	</div>
</div>
<div class="main">
	<div class="container-fluid">
	<div class="navi">
		<ul class='main-nav'>
			<li>
				<a href="/index" class='light'>
					<div class="ico"><i class="icon-home icon-white"></i></div>
					后台首页
				</a>
			</li>
			<li>
				<a href="forms.html" class='light'>
					<div class="ico"><i class="icon-list icon-white"></i></div>
					权限管理
				</a>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-th-large icon-white"></i></div>
					会员管理
				</a>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-tasks icon-white"></i></div>
					分类管理
					<img src="admin/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="buttons.html">
							查看分类
						</a>
					</li>
					<li>
						<a href="sliders.html">
							添加分类
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					商品管理
					<img src="admin/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="403.html">
							商品总览
						</a>
					</li>
					<li>
						<a href="404.html">
							添加商品
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-exclamation-sign icon-white"></i></div>
					公告管理
					<img src="admin/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="403.html">
							公告查看
						</a>
					</li>
					<li>
						<a href="404.html">
							添加公告
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					广告管理
					<img src="admin/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="403.html">
							公告查看
						</a>
					</li>
					<li>
						<a href="404.html">
							添加公告
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-resize-full icon-white"></i></div>
					轮播图管理
					<img src="admin/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="#" class='set-liquid'>
							查看轮播图
						</a>
					</li>
					<li>
						<a href="#" class='set-fixed'>
							添加轮播图
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-resize-full icon-white"></i></div>
					评价管理
				</a>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-resize-full icon-white"></i></div>
					订单管理
				</a>
			</li>		
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-resize-full icon-white"></i></div>
					积分管理
				</a>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-resize-full icon-white"></i></div>
					提问管理
				</a>
			</li>
			<li>
				<a href="/zhu" class='light'>
					<div class="ico"><i class="icon-resize-full icon-white"></i></div>
					添加管理员
				</a>
			</li>
		</ul>
	</div>
	<div class="content">
			<div class="row-fluid">
				@section('admin')
				@show
			</div>
		</div>	
	</div>
</div>	
<script src="admin/js/jquery.js"></script>
<script src="admin/js/less.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
<script src="admin/js/jquery.uniform.min.js"></script>
<script src="admin/js/bootstrap.timepicker.js"></script>
<script src="admin/js/bootstrap.datepicker.js"></script>
<script src="admin/js/chosen.jquery.min.js"></script>
<script src="admin/js/jquery.fancybox.js"></script>
<script src="admin/js/plupload/plupload.full.js"></script>
<script src="admin/js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="admin/js/jquery.cleditor.min.js"></script>
<script src="admin/js/jquery.inputmask.min.js"></script>
<script src="admin/js/jquery.tagsinput.min.js"></script>
<script src="admin/js/jquery.mousewheel.js"></script>
<script src="admin/js/jquery.textareaCounter.plugin.js"></script>
<script src="admin/js/ui.spinner.js"></script>
<script src="admin/js/jquery.jgrowl_minimized.js"></script>
<script src="admin/js/jquery.form.js"></script>
<script src="admin/js/jquery.validate.min.js"></script>
<script src="admin/js/bbq.js"></script>
<script src="admin/js/jquery-ui-1.8.22.custom.min.js"></script>
<script src="admin/js/jquery.form.wizard-min.js"></script>
<script src="admin/js/jquery.cookie.js"></script>
<script src="admin/js/jquery.metadata.js"></script>
<script src="admin/js/custom.js"></script><script src="admin/js/demo.js"></script>
</body>
</html>