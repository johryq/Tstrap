<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

 <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <h3><?php $this->title() ?>	</h3>
		  <p>
		  	<span class="label label-success">分类：<?php $this->category(','); ?></span> 
			<span class="label label-primary">日期：<?php $this->date('Y-m-d'); ?></span> 
			<span class="label label-warning">作者：<?php $this->author(); ?></span> 
			<span class="label label-danger">浏览：<?php get_post_view($this) ?></span>
          </p>
          <div class="jumbotron">
		     <?php $this->content(); ?>
          </div>
          
		  <h4>评论 <?php $this->commentsNum(_t('（暂无评论）'), _t('（仅有一条评论）'), _t('（已有 %d 条评论）')); ?></h4>
		  <div class="well">
        
         <?php $this->need('comments.php'); ?>
        
      </div>
		  
        </div><!--/.col-xs-12.col-sm-9-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>