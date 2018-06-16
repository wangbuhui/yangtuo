<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $IcoUrl = new Typecho_Widget_Helper_Form_Element_Text('IcoUrl', NULL, NULL, _t('站点ICO图标地址'), _t('在这里填入一个图片 URL 地址'));
    $form->addInput($IcoUrl);
    
    $Github = new Typecho_Widget_Helper_Form_Element_Text('Github', NULL, NULL, _t('设置关注我URL'), _t('在这里填入Github地址或其他'));
    $form->addInput($Github);  

}



