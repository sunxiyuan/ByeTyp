<?php
/**
 * 数据导出到WXR文件
 *
 * @package ByeTyp
 * @author sunxiyuan
 * @version 1.3
 * @link https://www.ibadboy.net
 */
class ByeTyp_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Helper::addAction('typexport', 'ByeTyp_Action');
        Helper::addPanel(1, 'ByeTyp/panel.php', _t('数据导出'), _t('数据导出'), 'administrator');

        return _t('插件已经激活，请设置插件以正常使用！');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
        Helper::removeAction('typexport');
        Helper::removePanel(1, 'ByeTyp/panel.php');
    }

    /**
     * 获取插件配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){}

    /**
     * 个人用户的配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
}
