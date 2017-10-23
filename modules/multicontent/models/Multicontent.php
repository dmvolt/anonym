<?php

namespace app\modules\multicontent\models;

use Yii;
use app\components\helpers\Text;
use yii\helpers\ArrayHelper;

/********** USE MODELS *********/
use app\modules\file\models\File;

use app\modules\multicontent\Module;

/**
 * This is the model class for table "{{%multicontent}}".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property integer $type_id
 * @property string $title
 * @property string $date
 * @property string $teaser
 * @property string $body
 * @property string $alias
 * @property integer $weight
 * @property integer $status
 */
class Multicontent extends \yii\db\ActiveRecord
{
	public $imageFile;	
	public $post;

    /**
     * TABLE NAME
     */
    public static function tableName()
    {
        return '{{%multicontent}}';
    }
	
	public function getTypeName()
    {
        return ArrayHelper::getValue(self::getTypeArray(), $this->type_id);
    }
	
	public static function getTypeNameToID($type_id = 0)
    {
        return ArrayHelper::getValue(self::getTypeArray(), $type_id);
    }
 
    public static function getTypeArray()
    {
        return [
			/* 0 => 'Достижения',
			1 => 'Услуги',
			2 => 'Мотивация(почему?)', */
			3 => 'Команда',
			4 => 'Гаранты',
			/* 5 => 'Советы',
			6 => 'Фотогалерея', */
			7 => 'Отзывы',
            /* 8 => 'Лицензии',
			9 => 'Акции', */
        ];
    }
	
    /**
     * THUMBNAIL IMAGE
     */
	public function getThumb($type = 1)
    {
        return $this->hasMany(File::className(), ['content_id' => 'id'])
			->where(['type' => $type, 'module' => 'multicontent'])
			->one();
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
		$this->post = Yii::$app->request->post('Multicontent');
        return [
            [['title', 'type_id', 'status'], 'required'],
            [['teaser', 'body', 'alias', 'date'], 'string'],
            [['weight', 'status', 'lang_id'], 'integer'],
			[['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => (1024*1024)*2],
            [['title'], 'string', 'max' => 255],
			[['weight'], 'default', 'value' => 0],
			[['lang_id'], 'default', 'value' => 1],
			[['alias'], 'default', 'value' => Text::transliterate($this->post['title'])],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Module::t('module', 'MULTICONTENT_BACK_FORM_ID'),
			'lang_id' => Module::t('module', 'MULTICONTENT_BACK_FORM_LANGID'),
			'type_id' => Module::t('module', 'MULTICONTENT_BACK_FORM_TYPEID'),
            'date' => Module::t('module', 'MULTICONTENT_BACK_FORM_DATE'),
			'title' => Module::t('module', 'MULTICONTENT_BACK_FORM_TITLE'),
            
			'imageFile' => Module::t('module', 'MULTICONTENT_BACK_FORM_FILE'),
            'teaser' => Module::t('module', 'MULTICONTENT_BACK_FORM_TEASER'),
            'body' => Module::t('module', 'MULTICONTENT_BACK_FORM_BODY'),
            'alias' => Module::t('module', 'MULTICONTENT_BACK_FORM_ALIAS'),
            'weight' => Module::t('module', 'MULTICONTENT_BACK_FORM_WEIGHT'),
            'status' => Module::t('module', 'MULTICONTENT_BACK_FORM_STATUS'),
        ];
    }
}