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
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/font-awesome.min.css',
//        'css/normalize.css',
//        'css/grid.css',
//        'css/owl.carousel.css',
//        'css/flexslider.css',
//        'css/magnific-popup.css',
//        'css/superslides.css',
        'css/style.css',
//        --=============== ie styles  ===============-
//        'css/ie8.css'
    ];
    
    public $js = [
        'js/jquery.min.js',
        'js/jpreloader.min.js',
        'js/smoothscroll.js',
        'js/jquery.easing.1.3.js',
//        'js/superslides.js',
//        'js/mixitup.js',
//        'js/jquery.flexslider.js',
//        'js/jquery.parallax-1.1.3.js',
//        'js/jquery.scrollTo-1.4.2-min.js',
//        'js/owl.carousel.min.js',
//        'js/jquery.nav.js',
//        'js/fitvids.js',
//        'js/zoom.js',
//        'js/jquery.hammer.min.js',
//        'js/jquery.magnific-popup.min.js',
        'js/jquery.sticky.js',
        'js/scripts.js'
    ];

    public $depends = [

    ];
}
