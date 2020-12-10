<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="col-xs-6 col-sm-3 sidebar-offcanvas hidden-xs" id="sidebar">
        <h4>笔记</h4>
        <div class="list-group">
                <ul>
                        <?php 
                        $this->widget('Widget_Archive@sidebar', 'type=category', 'mid=92')->to($categoryPosts);
                        while($categoryPosts->next()):?>
                                <li><a href="<?php $categoryPosts->permalink();?>"> <?php $categoryPosts->title();?> </a></li>
                        <?php
                        endwhile;
                         ?>

                        <!-- <?php #$this->widget('Widget_Metas_Category_List', 'type=category', 'software')->to($categoryPosts); ?>
                        <?php#$categoryPosts->parse('<li><a href="{permalink}">{name}</a> ({count})</li>') ?>
                        <?php #$this->widget($categoryPosts)->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?> -->
                </ul>
        </div>
</div>
<!--/.sidebar-offcanvas-->

<div class="col-xs-6 col-sm-3 sidebar-offcanvas hidden-xs" id="sidebar">
        <h4>最新评论</h4>
        <div class="list-group">
                <?php $this->widget('Widget_Comments_Recent', 'pageSize=4')->to($comments); ?>
                <?php while ($comments->next()) : ?>
                        <a href="<?php $comments->permalink(); ?>" class="list-group-item"><?php $comments->author(false); ?>：<?php $comments->excerpt(15, '...'); ?></a>
                <?php endwhile; ?>
        </div>
</div>
<!--/.sidebar-offcanvas-->