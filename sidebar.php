<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="col-xs-6 col-sm-3 sidebar-offcanvas hidden-xs" id="sidebar">
		<h4>最新文章</h4>
          <div class="list-group">
    <?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')
               ->parse('<a href="{permalink}" class="list-group-item">{title}</a>'); ?>
          </div>
        </div><!--/.sidebar-offcanvas-->
	
<div class="col-xs-6 col-sm-3 sidebar-offcanvas hidden-xs" id="sidebar">
		<h4>最新评论</h4>
          <div class="list-group">
          	<?php $this->widget('Widget_Comments_Recent','pageSize=4')->to($comments); ?>
    <?php while($comments->next()): ?>
            <a href="<?php $comments->permalink(); ?>" class="list-group-item"><?php $comments->author(false); ?>：<?php $comments->excerpt(15, '...'); ?></a>
    <?php endwhile; ?>
          </div>
        </div><!--/.sidebar-offcanvas-->
