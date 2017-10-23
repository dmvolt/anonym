<?php
/**
 * Created by PhpStorm.
 * User: ярд
 * Date: 17.08.2016
 * Time: 16:18
 */

namespace app\assets;

use yii\web\AssetBundle;

class EditAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		/* 'js/vendor/fancybox/jquery.fancybox.css', */
		
		'css/main.css',
		'css/font-awesome/css/font-awesome.min.css',
		'js/vendor/slick/slick.css',
		'js/vendor/slick/slick-theme.css',
		'css/jquery.pagepiling.css',
		'css/site.css',
    ];
	
    public $js = [
		'js/vendor/bootstrap.3.3.6.min.js',
		'js/vendor/slick/slick.min.js',
        'js/jquery.pagepiling.min.js',
		'js/main.js',
		'js/_main.js',
    ];
	
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}