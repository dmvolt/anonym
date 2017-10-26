<?php
/**
 * Created by PhpStorm.
 * User: ярд
 * Date: 17.08.2016
 * Time: 16:18
 */

namespace app\assets;

use yii\web\AssetBundle;

class EditPageAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,800&subset=latin,cyrillic',
		'css/main.css',
		'css/style.css',
		'css/font-awesome/css/font-awesome.min.css',
		'js/vendor/slick/slick.css',
		'js/vendor/slick/slick-theme.css',
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