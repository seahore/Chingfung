<?php
/**
 * 长沙郡无事茶社 通用主题
 * 
 * @package 清风徐来
 * @author 谭安农
 * @version 1.0.1
 * @link http://wushicafe.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
<div class="col-8" role="main">
    <?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
            <ul class="post-meta">
                <li itemprop="author" itemscope itemtype="http://schema.org/Person"><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
                <li><a href="#"><?php $this->category(','); ?></a></li>
                <li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
                <li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
            </ul>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content('&#8659; 继续阅读'); ?>
            </div>
        </article>
    <?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php $this->need('footer.php'); ?>
