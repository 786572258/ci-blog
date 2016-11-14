<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header');?>

<div class="contents">
<h1>欢迎来到后台首页！ 
<a href="<?php echo site_url('article/create')?>"><i class="iconfont">&#xe67d;</i>添加文章</a> 
 <a href="<?php echo site_url('categoryes/create')?>"><i class="iconfont">&#xe67d;</i>添加栏目</a>
<?php foreach ($categoryes as $item): ?>
/<a><?php echo $item['cname']; ?> </a>
  <?php endforeach; ?></h1>
<dl><dt>环境配置信息</dt>
<dd>PHP版本：<?php echo PHP_VERSION;?>       Mysql类型：<?php echo $this->db->platform();?> /<?php echo $this->db->version();?></dd>
<dd>服务器端信息：<?PHP echo $_SERVER['SERVER_SOFTWARE']; ?></dd>
<dd>服务器操作系统： <?PHP echo PHP_OS; ?></dd>
<dd>运行环境：<?php echo $_SERVER['SERVER_SOFTWARE'];?></dd>
<dd>上传限制：<?php $max_upload = ini_get("file_uploads") ? ini_get("upload_max_filesize") : "Disabled"; echo $max_upload;?></dd>
<dd>服务器时间：<?php echo date("Y-m-d H:i:s",time());?></dd>
</dl>

<div class="calendar">
<?php echo $this->calendar->generate();?>
</div>

<div style="clear:both;"></div>

<h1>便捷操作  
</h1>
<iframe name="weather_inc" src="http://i.tianqi.com/index.php?c=code&id=55" style="border:solid 1px #e1e6eb" width="255" height="294" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
</div>


<?php $this->load->view('footer');?>