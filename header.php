<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">
  <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
          ), '', ' - '); ?><?php $this->options->title(); ?></title>
  <!-- Bootstrap core CSS -->
  <link href="/usr/themes/Tstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/usr/themes/Tstrap/css/style.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- 通过自有函数输出HTML头部信息 -->
  <?php $this->header(); ?>
  <script type="text/javascript">
    (function() {
      window.TypechoComment = {
        dom: function(id) {
          return document.getElementById(id);
        },

        create: function(tag, attr) {
          var el = document.createElement(tag);

          for (var key in attr) {
            el.setAttribute(key, attr[key]);
          }

          return el;
        },

        reply: function(cid, coid) {
          var comment = this.dom(cid),
            parent = comment.parentNode,
            response = this.dom('respond-post-33'),
            input = this.dom('comment-parent'),
            form = 'form' == response.tagName ? response : response.getElementsByTagName('form')[0],
            textarea = response.getElementsByTagName('textarea')[0];

          if (null == input) {
            input = this.create('input', {
              'type': 'hidden',
              'name': 'parent',
              'id': 'comment-parent'
            });

            form.appendChild(input);
          }

          input.setAttribute('value', coid);

          if (null == this.dom('comment-form-place-holder')) {
            var holder = this.create('div', {
              'id': 'comment-form-place-holder'
            });

            response.parentNode.insertBefore(holder, response);
          }

          comment.appendChild(response);
          this.dom('cancel-comment-reply-link').style.display = '';

          if (null != textarea && 'text' == textarea.name) {
            textarea.focus();
          }

          return false;
        },

        cancelReply: function() {
          var response = this.dom('respond-post-33'),
            holder = this.dom('comment-form-place-holder'),
            input = this.dom('comment-parent');

          if (null != input) {
            input.parentNode.removeChild(input);
          }

          if (null == holder) {
            return true;
          }

          this.dom('cancel-comment-reply-link').style.display = 'none';
          holder.parentNode.insertBefore(response, holder);
          return false;
        }
      };
    })();
  </script>
</head>

<body>
  </br>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="<?php $this->options->siteUrl(); ?>"></a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <!-- 下拉列表 -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="">电影</a></li>
                <li role="separator" class="divider"></li>
                <!-- 自定义页面 -->
                <?php $this->widget('Widget_Contents_Page_List')
                  ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
              </ul>
            </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  </div>