<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="content-wrapper">
    <div class="content">
        <div class="xbox">
            <div class="xlist">
                <article class="xarticle-box x-w-padding" itemscope itemtype="http://schema.org/BlogPosting">
                    <h1 class="x-w-title" itemprop="name headline">
                        <a itemprop="url" href="<?php $this->permalink() ?>">
                            <?php $this->title() ?>
                        </a>
                    </h1>
                    <div class="x-w-authorinfo ">
                        <span class="x-w-face xlf">
                            <a href="<?php $this->author->permalink(); ?>">
                                <?php $this->author->gravatar(30); ?> </a>
                            </a>
                        </span>
                        <div class="xarticle_f_title">
                            <a href="<?php $this->author->permalink(); ?>">
                                <?php $this->author(); ?>
                            </a> | 发布于：
                            <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
                                <?php $this->date(); ?>
                            </time> |
                            <a href="<?php $this->categoryUrl(','); ?>">
                                <?php $this->category(','); ?>
                            </a>
                        </div>
                    </div>

                    <div class="post-content xbc" itemprop="articleBody">
                        <?php $this->content(); ?>
                    </div>
                    <p itemprop="keywords" class="tags">
                        <?php _e('标签: '); ?>
                        <?php $this->tags(', ', true, 'none'); ?>
                    </p>
                </article>
            </div>
        </div>

        <?php $this->need('comments.php'); ?>

    </div>

    <?php $this->need('footer.php'); ?>

</div>

</body>

</html>