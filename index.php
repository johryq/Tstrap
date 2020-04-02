<?php
/**
 * 基于Bootstrap的Typecho简约主题
 * 
 * @package Tstrap 简约博客主题
 * @author Breeze
 * @version 1.1.0
 * @link https://www.gzk.ink
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');

 ?>
 

   <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
      	
      
        <div class="col-xs-12 col-sm-9">

          <div class="row">
          	
        
        
  <div class="col-xs-12">
  	<h3>文章列表</h3>
     <div class="list-group">
     	<?php while($this->next()): ?>
		<a href="<?php $this->permalink() ?>" class="list-group-item"><span class="badge"><?php $this->commentsNum('%d'); ?></span>
    		<?php $this->date('F j'); ?> · <b><?php $this->title(15) ?></b>
		</a>
		<?php endwhile; ?>
	</div>

   </div>
       
    

<center>
<nav  aria-label="Page navigation ">
        <?php $this->pageNav('«', '»', 1, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination', 'itemTag' => 'li',  'textTag' => 'a', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next',)); ?>
</nav>
</center>




          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->




<?php $this->need('sidebar.php'); ?>
 <?php $this->need('footer.php'); ?>
