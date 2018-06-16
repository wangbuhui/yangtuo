<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="content-wrapper">
    <div class="content">
        <div class="xbox">
            <div class="xlist">
                <article class="xarticle-box x-w-padding" itemscope itemtype="http://schema.org/BlogPosting">
                    <div class="post-content xbc" itemprop="articleBody">
                        <?php $this->content(); ?>
                    </div>
                </article>
            </div>
        </div>

          <?php $this->need('comments.php'); ?>

    </div>

    <?php $this->need('footer.php'); ?>

</div>

</body>

</html>