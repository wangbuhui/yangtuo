<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" />
    <title>
    <?php _e('页面没有找到-'); ?><?php $this->options->title(); ?>
    </title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/css/pure-min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/css/grids-responsive-min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/css/yangtuo.css'); ?>">
    <!-- 设置 ICO -->
    <?php if ($this->options->IcoUrl): ?>
    <link rel="shortcut icon" href="<?php $this->options->IcoUrl() ?>" />
    <?php else: ?>
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('style/img/favicon.ico'); ?> />    
    <?php endif; ?>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<div class=" header ">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed ">
            <a href="<?php $this->options->siteUrl(); ?>" class="pure-menu-heading pure-menu-link">
    <?php $this->options->title() ?>
    </a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item">
            <a class="pure-menu-link" href="<?php $this->options->siteUrl(); ?>">
                <?php _e('首页'); ?>
            </a>
        </li>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <li class="pure-menu-item">
            <a class="pure-menu-link" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
                <?php $pages->title(); ?>
            </a>
        </li>
        <?php endwhile; ?>
    </ul>
    </div>
    </div>

    <div class="splash-container">
        <div class="splash">
            <div class="splash-img"></div>
            <h1 class="splash-head">
                404 错误
            </h1>
            <p class="splash-subhead">
                心，已被逼疯，感觉不会再爱了......
            </p>
        </div>
    </div>


    </body>

</html>