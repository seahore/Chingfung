<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html class="no-js" lang="zh-CN">

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <title><?php $this->archiveTitle(array(
                    'category'  =>  _t('分类 %s 下的文章'),
                    'search'    =>  _t('包含关键字 %s 的文章'),
                    'tag'       =>  _t('标签 %s 下的文章'),
                    'author'    =>  _t('%s 发布的文章')
                ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">
    <meta name="theme-color" content="#649bb9">
    <?php $this->header(); ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 left-sidebar" <?php if (!empty($this->options->nav) && in_array('Sticky', $this->options->nav)): ?> style="position: sticky; top: 20px;" <?php endif; ?> >
                <div class="row">
                    <nav class="col-12">
                    <?php if ($this->options->logoUrl): ?>
                        <a id="logo-img" href="<?php $this->options->siteUrl(); ?>">
                            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() + ' Logo'?>" <?php if (!empty($this->options->nav) && in_array('LogoFillWidth', $this->options->nav)): ?> style="width: 100%;" <?php endif; ?> />
                        </a>
                    <?php else: ?>
                        <a id="logo-img" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                        <p class="description"><?php $this->options->description() ?></p>
                    <?php endif; ?>
                        <ul>
                            <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                            <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                        <?php endwhile; ?>
                        </ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">
                        <form id="main-searchbox" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                            <label for="s" class="sr-only">搜索关键字</label>
                            <button type="submit" class="submit">搜索</button>
                            <input type="text" id="s" name="s" class="text" placeholder="搜索">
                        </form>
                    </div>
                </div>

                <?php $this->need('widgets.php'); ?>

                <div class="row">
                    <footer class="col-12">
                        <hr class="footer-separator">
                        <p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a><br>Powered by <a href="http://www.typecho.org">Typecho</a>.</p>
                        <p><a href="http://beian.miit.gov.cn/" target="_blank"><?php $this->options->icpNum(); ?></a></p>
                    </footer>
                </div>
            </div>