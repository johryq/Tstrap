<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <h3><?php $this->title() ?>	</h3>
		  <p>
          </p>
          <div class="jumbotron">
		     <?php $this->content(); ?>
          </div>
          
		  <h4>评论</h4>
		  <div class="well">
        
         <?php $this->need('comments.php'); ?>
        
      </div>
		  
        </div><!--/.col-xs-12.col-sm-9-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>