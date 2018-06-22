<?php
/**
 * 类 Weibo 响应式模板
 * 
 * @package Yangtuo 
 * @author 王不会
 * @version 1.0
 * @link http://3gjn.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


    <div class="content-wrapper">
        <div class="content">

            <div class="pure-g">

                <div class="pure-u-1 pure-u-md-8-24">
				    <?php $this->need('sidebar.php'); ?>
                </div>

                <div class="pure-u-1 pure-u-md-16-24">
                    <div class="xbox xbox-border-top">
                        <div class="xlist">
                        <div class="archive-title"><b><?php $this->archiveTitle(array(
                              'category'  =>  _t('分类 %s 下的文章'),
                              'search'    =>  _t('包含关键字 %s 的文章'),
                              'tag'       =>  _t('标签 %s 下的文章'),
                              'author'    =>  _t('%s 发布的文章')
                        ), '', ''); ?></b></div>
                         </div>
                    </div>
                    <?php while($this->next()): ?>
                    <div class="xbox xbox-border-top">
                        <div class="xlist">
                            <article class="xarticle-box">
                                <div class="xface xlf">
                                    <a href="<?php $this->author->permalink(); ?>">
								    	<?php $this->author->gravatar(50); ?> 
                                        </a>
                                </div>
                                <div class="x_detail">
                                    <div class="xarticle_title">
                                        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                                    </div>
                                    <div class="xarticle_f_title">
                                        <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                                    </div>
                                    <div class="xarticle-text">
                                        <p>
                                            <?php $this->excerpt(110, '...'); ?>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <div class="xbc"></div>
                        </div>
                        <table class="pure-table xtable-center">
                            <tbody>
                                <tr>
                                    <td>标签：
                                        <?php $this->tags(',', true, 'NONE'); ?>
                                    </td>
                                    <td>评论：
                                        <?php $this->commentsNum(); ?>
                                    </td>
                                    <td>
                                      <a href="<?php $this->categoryUrl(','); ?>"> <?php $this->category(','); ?></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <?php endwhile; ?>
                    <div class="xbox">
                       
							<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
							<div class="xbc"></div>
                    </div>
                </div>
            </div>
        </div>

   <?php $this->need('footer.php'); ?>
    </div>
    </body>
</html>