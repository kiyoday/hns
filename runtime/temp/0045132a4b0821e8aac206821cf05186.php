<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\xampp\htdocs\hns\public/../application/admin\view\admin\index.html";i:1522326366;s:61:"D:\xampp\htdocs\hns\application\admin\view\public\header.html";i:1522073436;s:61:"D:\xampp\htdocs\hns\application\admin\view\public\footer.html";i:1521971807;}*/ ?>
<!--包含头部文件-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/hns/public/static/admin/hui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/hns/public/static/admin/hui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/hns/public/static/admin/hui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/hns/public/static/admin/hui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/hns/public/static/admin/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/hns/public/static/admin/hui/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/hns/public/static/admin/css/common.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台管理系统</title>
<meta name="keywords" content="后台管理系统">
<meta name="description" content="开心果">
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a class="btn btn-primary radius" onClick="o2o_s_edit('添加管理员','<?php echo url('admin/add'); ?>','','300')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r"></span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">名字</th>
					<th width="30">类型</th>
					<th width="150">新增时间</th>
					<th width="60"></th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($admins) || $admins instanceof \think\Collection || $admins instanceof \think\Paginator): $i = 0; $__LIST__ = $admins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td><?php echo $vo['id']; ?></td>
					<td><?php echo $vo['name']; ?></td>
					<td class="text-c"><?php echo $vo['type']; ?></td>
					<td><?php echo $vo['create_time']; ?></td>
					<td class="td-status"><a href="" title="点击修改状态"></a></td>
					<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="o2o_s_edit()"  href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="o2o_s_edit()" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>
<div class="cl pd-5 bg-1 bk-gray mt-20 pagn-1"></div>
<!--包含头部文件-->
<script type="text/javascript" src="/hns/public/static/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/hns/public/static/admin/js/common.js"></script>
<script type="text/javascript" src="/hns/public/static/admin/hui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/hns/public/static/admin/hui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/hns/public/static/admin/hui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="/hns/public/static/admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/hns/public/static/admin/hui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>  
<script type="text/javascript" src="/hns/public/static/admin/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/hns/public/static/admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>


