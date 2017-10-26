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
		'css/main.css',
		'css/font-awesome/css/font-awesome.min.css',
		'js/vendor/slick/slick.css',
		'js/vendor/slick/slick-theme.css',
		'css/jquery.pagepiling.css',
		'css/style.css',
		'css/site.css',
    ];
	
    public $js = [
		'js/vendor/slick/slick.min.js',
        'js/jquery.pagepiling.min.js',
		'js/main.js',
		'js/_main.js',
    ];
	
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
