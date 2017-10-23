<?php

namespace app\modules\page\models;

use Yii;
use app\components\helpers\Text;

/********** USE MODELS *********/
use app\modules\seo\models\Seo;
use app\modules\file\models\File;

use app\modules\page\Module;

/**
 * This is the model class for table "{{%page}}".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property string $title
 * @property string $teaser
 * @property string $body
 * @property string $alias
 * @property integer $weight
 * @property integer $status
 */
class Page extends \yii\db\ActiveRecord
{
	public $imageFile;	
	public $post;

    /**
     * TABLE NAME
     */
    public static function tableName()
    {
        return '{{%page}}';
    }

    /**
     * SEO
     */
    public function getSeo()
    {
        return $this->hasOne(Seo::className(), ['content_id' => 'id'])
            ->where(['module' => 'page'])
            ->one();
    }

    /**
     * THUMBNAIL IMAGE
     */
	public function getThumb($type = 1)
    {
        return $this->hasMany(File::className(), ['content_id' => 'id'])
			->where(['type' => $type, 'module' => 'page'])
			->one();
    }

    /**
     * RULES
     */
    public function rules()
    {
		$this->post = Yii::$app->request->post('Page');
        return [
            [['title', 'status'], 'required'],
            [['teaser', 'body', 'alias'], 'string'],
            [['weight', 'status', 'lang_id'], 'integer'],
			[['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => (1024*1024)*2],
            [['title'], 'string', 'max' => 255],
			[['weight'], 'default', 'value' => 0],
			[['lang_id'], 'default', 'value' => 1],
			[['alias'], 'default', 'value' => Text::transliterate($this->post['title'])],
        ];
    }

    /**
     * LABELS
     */
    public function attributeLabels()
    {
        return [
            'id' => Module::t('module', 'PAGE_BACK_FORM_ID'),
			'lang_id' => Module::t('module', 'PAGE_BACK_FORM_LANGID'),
            'title' => Module::t('module', 'PAGE_BACK_FORM_TITLE'),
			'imageFile' => Module::t('module', 'PAGE_BACK_FORM_FILE'),
            'teaser' => Module::t('module', 'PAGE_BACK_FORM_TEASER'),
            'body' => Module::t('module', 'PAGE_BACK_FORM_BODY'),
            'alias' => Module::t('module', 'PAGE_BACK_FORM_ALIAS'),
            'weight' => Module::t('module', 'PAGE_BACK_FORM_WEIGHT'),
            'status' => Module::t('module', 'PAGE_BACK_FORM_STATUS'),
        ];
    }
}
