<?php
/**
 * 友情链接模板
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="content-wrapper">
    <div class="content">
        <div class="xbox">
            <div class="xlist">
                <div class="xarticle-box x-w-padding">
                   <h3>友链</h3>
                     <?php $this->content(); ?>
                </div>
            </div>
        </div>

    </div>

    <?php $this->need('footer.php'); ?>

</div>

</body>

</html>