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
        "web/public/css/bootstrap.min.css",
        "web/public/css/plugins.css",
        "web/public/css/prettify.css",
        "web/public/css/style.css",
        "web/public/css/color/green.css",
        "http://fonts.googleapis.com/css?family=Raleway:400,800,700,600,500,300' rel='stylesheet' type='text/css'",
        "http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'",
        "web/public/type/fontello.css",
        "web/public/type/budicons.css"
    ];
    public $js = [
        "web/public/js/jquery.min.js",
        "web/public/js/bootstrap.min.js",
        "web/public/js/jquery.themepunch.tools.min.js",
        "web/public/js/classie.js",
        "web/public/js/plugins.js",
        "web/public/js/scripts.js",
//          $.backstretch(["style/images/art/bg1.jpg"]);
//        </script>
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
