<?php

namespace app\modules\multicontent;

use Yii;

/**
 * multicontent module definition class
 */
class Module extends \yii\base\Module
{
	/**
     * Директория картинок модуля (по умолчанию название модуля)
     */
    public $imagesDirectory = 'multicontent';
	
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\multicontent\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
		Yii::$app->i18n->translations['modules/multicontent/*'] =
            [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'forceTranslation' => true,
                'basePath' => '@app/modules/multicontent/messages',
                'fileMap' => [
                    'modules/multicontent/module' => 'module.php',
                ],
            ];
    }
	
	public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/multicontent/' . $category, $message, $params, $language);
    }
}
