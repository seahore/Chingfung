<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {

    $nav = new Typecho_Widget_Helper_Form_Element_Checkbox('nav',
    array('Sticky' => _t('页面滚动时固定在顶部'),
    'LogoFillWidth' => _t('LOGO 宽度占满导航栏')),
    array('Sticky', 'LogoFillWidth'), _t('导航栏'));
    $form->addInput($nav->multiMode());

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    $form->addInput($sidebarBlock->multiMode());
    
    $icpNum = new Typecho_Widget_Helper_Form_Element_Text('icpNum', NULL, NULL, _t('ICP 备案号'), _t('输入该站点在中国大陆的 ICP 备案号，如“湘ICP备20004660号-3”, 它将显示在站点页脚中，并链接至信息产业部备案管理系统网址'));
    $form->addInput($icpNum);
}
