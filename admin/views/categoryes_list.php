<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header');?>

<div class="contents">
<h1>栏目管理  <a class="tips" data-content="添加栏目" href="<?php echo site_url('categoryes/create')?>"><i class="iconfont">&#xe67d;</i></a></h1>
 <div class="section">
   <table class="table">
   <thead>
      <tr>
	     <th class="wp75">栏目分类</th>
		 <th >操作</th>
	  </tr>
   </thead>
   
   <tbody>
   <?php foreach ($categoryes as $item): ?>
     <tr><td><?php echo $item['cname']; ?></td>
	 <td class="set">
	 <a class="tips" data-content="编辑" href="<?php echo site_url('categoryes/edit/'.$item['cid'])?>"><i class="iconfont edit">&#xe601;</i></a>|
	 <a class="tips" data-content="删除" href="<?php echo site_url('categoryes/delete/'.$item['cid'])?>"><i class="iconfont">&#xe636;</i></a>
	 </td></tr>

  <?php endforeach; ?>
   </tbody>
   
   </table>
 
 </div>

</div>


<?php $this->load->view('footer');?>