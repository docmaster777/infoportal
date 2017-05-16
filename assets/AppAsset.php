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
        'css/style.css',
        'css/slick.css',
        'css/slick-theme.css',
        'css/slider.css',

    ];
    public $js = [
//        '/web/js/jquery.min.js',
        'js/slick.min.js',
        'js/js.js',

    ];
//    public $sourcePath =
//        '/web/fonts/slick.ttf';
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
