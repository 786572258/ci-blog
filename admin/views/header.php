<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>后台管理</title>
<base href="<?php echo base_url().'admin/views/'; ?>;"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="//cdn.bootcss.com/jquery/2.2.1/jquery.js"></script>
<link rel="stylesheet" href="css/jquery.webui-popover.css">
<script type="text/javascript" src="js/jquery.webui-popover.min.js"></script>	
<script language="javascript" type="text/javascript">
$(function (){
$('.tags').webuiPopover({trigger:'hover', width:'30%',placement:'right'});
$('.cate').webuiPopover({trigger:'hover', width:'auto',placement:'right'});
$('.tips').webuiPopover({trigger:'hover', width:'auto',placement:'top'});
});
</script>
</head>
<body>
<div class="topbar">
<a class="logo" href="<?php echo site_url('home/index');?>"><i class="iconfont">&#xe613;</i></a>
<a class="name">管理控制台</a>
<a class="login-out" href="<?php echo site_url('login/login_out');?>"><i class="iconfont">&#xe76c;</i></a>
<a class="user">Hi,<?php echo $this->session->username;?></a>
</div>
<div class="view-body">
<div class="sidebar">
<div class="menus"><i class="iconfont">&#xe692;</i></div>
<ul>
<li class="cate" data-content="栏目管理"><a <?php if($this->uri->segment(1)=='categoryes'){echo "class='on'";}?> href="<?php echo site_url('categoryes');?>"><i class="iconfont">&#xe692;</i></a></li>
<li class="cate" data-content="文章管理"><a <?php if($this->uri->segment(1)=='article'){echo "class='on'";}?>  href="<?php echo site_url('article/index');?>"><i class="iconfont">&#xe7c4;</i></a></li>
<li class="cate" data-content="会员设置"><a <?php if($this->uri->segment(1)=='admin'){echo "class='on'";}?> href="<?php echo site_url('admin');?>"><i class="iconfont">&#xe613;</i></a></li>
<li class="cate" data-content="网站设置"><a <?php if($this->uri->segment(1)=='setting'){echo "class='on'";}?> href="<?php echo site_url('setting');?>"><i class="iconfont">&#xf0015;</i></a></li>
</ul>
</div>