<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="xbox">
    <table class="pure-table xtable-center ">
        <tbody>
            <tr>
                <td><b> <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                <?php echo $stat->PublishedPostsNum ?></b></td>
                <td><b><?php echo $stat->PublishedCommentsNum ?></b></td>
                <td><b><?php echo $stat->categoriesNum ?></b></td>
            </tr>
            <tr>
                <td>文章</td>
                <td>评论</td>
                <td>分类</td>
            </tr>

        </tbody>
    </table>
</div>

<div class="xbox x-sm-display">
    <div class="xlist">
        <b>个人资料</b>
    </div>
    <div class="xlist">

        昵称 : <?php $this->author() ?>
    </div>
    <div class="xlist">
        电子邮箱 : <?php $this->author('mail'); ?> 
    </div>
    <div class="xlist">
        介绍 : <?php $this->options->description() ?>
    </div>
    <div class="xlist">
        个性域名 ：<a href="<?php $this->author('url'); ?>"><?php $this->author('url'); ?></a>
    </div>
    <div class="xlist">
        <b> 查看更多</b>
    </div>
</div>