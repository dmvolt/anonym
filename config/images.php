<?php
//use app\modules\file\components\Thumbnailer;

// откуда будем резать тамб у картинки
/**
* 0 - Если картинка вертикальная - то миниатюра будет браться сверху, если горизонтальная - слева.
* (Имеет смысл только при типе "2", в других случаях миниатюра
* всегда будет полностью видима)
*/

/**
* 1 - Миниатюра будет взята с центра картинки
*/

/**
* 2 - Если картинка вертикальная - то миниатюра будет браться снизу, если горизонтальная - справа.
* (Имеет смысл только при типе "0", в других случаях миниатюра
* всегда будет полностью видима)
*/

// как будем резать тамб
/**
* 0 - Миниатюра будет строго указанного размера, если соотношения сторон исходного изображения и
* миниатюры не совпадают - то останутся полосы указанного цвета.
*/
 
/**
* 1 - Одна из сторон миниатюры будет строго заданного размера, а другая - меньше настолько,
* чтобы совпало соотношение сторон.
*/

/**
* 2 - Миниатюра будет строго указанного размера и на ней не будет полос, но если соотношения
* сторон миниатюры и исходного изображения не совпадут, то миниатюра будет содержать не всю
* картинку, а только её часть.
* (Какая часть будет содержаться в миниатюре указывается параметром Thumbnailer::THUMBNAIL_LOCATION_*)
*/

return [
    'versions' => [
		'full-width' => [
            'uploadDir' => 'full-width/',
            'width' => 1800,
            'height' => FALSE,
			'locationMode' => 1,// Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 1, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'extralarge' => [
            'uploadDir' => 'extralarge/', // Баннер, Фэнсибокс
            'width' => 980,
            'height' => FALSE, //473
			'locationMode' => 1,// Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 1, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'vertical-large' => [
            'uploadDir' => 'vertical-large/',
            'width' => FALSE,
            'height' => 1000,
			'locationMode' => 1,// Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 2, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'large' => [
            'uploadDir' => 'large/',
            'width' => 500,
            'height' => FALSE,
			'locationMode' => 1,// Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 1, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'big' => [
            'uploadDir' => 'big/',
            'width' => 530,
            'height' => FALSE,
			'locationMode' => 1,// Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 1, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'middle' => [
            'uploadDir' => 'middle/',
            'width' => 400,
            'height' => FALSE,
			'locationMode' => 1, //Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 1, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'middle2' => [
            'uploadDir' => 'middle2/',
            'width' => FALSE,
            'height' => 335,
			'locationMode' => 1, //Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 1, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'middle-square' => [
            'uploadDir' => 'middle-square/',
            'width' => 216,
            'height' => 230,
			'locationMode' => 0, //Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 2, //THUMBNAIL_TYPE_STRICT_SIZE
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'middle-square2' => [
            'uploadDir' => 'middle-square2/',  // Фотогалерея превью
            'width' => 215,
            'height' => 190,
			'locationMode' => 1, //Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 2, //THUMBNAIL_TYPE_STRICT_SIZE
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'mini-square' => [
            'uploadDir' => 'mini-square/',
            'width' => 160,
            'height' => 160,
			'locationMode' => 1, //Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 2, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'mini' => [
            'uploadDir' => 'mini/',
            'width' => 100,
            'height' => FALSE,
			'locationMode' => 1, //Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 1, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
		'thumbgall' => [
            'uploadDir' => 'thumbgall/',
            'width' => FALSE,
            'height' => 100,
			'locationMode' => 1, //Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 1, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => FALSE,
        ],
        'thumbnail' => [
            'uploadDir' => 'thumbnail/',
            'width' => 100,
            'height' => FALSE,
			'locationMode' => 1, //Thumbnailer::THUMBNAIL_LOCATION_CENTER,
			'typeMode' => 1, //Thumbnailer::THUMBNAIL_TYPE_AUTO_SIZE,
            'quality' => 80,
			'isDefault' => TRUE,
        ],
    ],
    'paths' => [
		'downloadDir' => '/files/',
        'uploadDir' => '@webroot/files/',
		'nophotoDir' => 'nophoto/',
		'nophotoFilename' => 'no_photo.jpg',
    ],
];