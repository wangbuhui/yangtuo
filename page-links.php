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
            
                    <div class="xlinks">
                         <?php $this->content(); ?>
                         <div class="xbc"></div>
                     </div>
               
            </div>
        </div>

    </div>

    <?php $this->need('footer.php'); ?>

</div>

</body>

</html>