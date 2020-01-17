<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/libraries.css',
        'css/style.css?v=412345',
        'css/sweetalert.min.css',
    ];
    public $js = [
        // 'js/jquery-3.3.1.min.js',
        'js/plugins.js',
        'js/admin.js',
        'js/sweetalert.min.js',
        'js/main.js?v=412340',
        'js/jquery.ihavecookies.js'
    ];
    public $depends = [
        'yii\web\YiiAsset'
        /*'yii\bootstrap\BootstrapAsset',*/
    ];
}
