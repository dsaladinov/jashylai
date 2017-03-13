<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    'css/bootstrap.min.css',
    'css/normalize.min.css',
    'css/font-awesome.min.css',
    'css/animate.css',
    'css/templatemo_misc.css',
    'css/templatemo_style.css',
    ];
    public $js = [
        'js/vendor/jquery-1.10.1.min.js',
        'js/jquery.easing-1.3.js',
        'js/bootstrap.js',
        'js/plugins.js',
        'js/main.js',
        'http://maps.google.com/maps/api/js?sensor=true',
        'js/vendor/jquery.gmap3.min.js',
        'js/scripts.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_END
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
