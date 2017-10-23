<?php

namespace app\modules\menu\models;

use Yii;
use app\modules\menu\models\Menu;
use app\modules\menu\Module;

/**
 * This is the model class for table "{{%menu}}".
 *
 * @property integer $id
 * @property integer $lang_id
 * @property integer $parent_id
 * @property string $title
 * @property string $url
 * @property string $icon
 * @property integer $weight
 * @property integer $status
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * TABLE NAME
     */
    public static function tableName()
    {
        return '{{%menu}}';
    }
	
	/**
     * PARENT Р РѕРґРёС‚РµР»СЊСЃРєРёР№ РјР°С‚РµСЂРёР°Р»
     */
    public function getParent()
    {
        return $this->hasOne(Menu::className(), ['id' => 'parent_id']);
    }

    /**
     * CHILDREN Р”РѕС‡РµСЂРЅРёРµ РјР°С‚РµСЂРёР°Р»С‹
     */
    public function getChildren()
    {
        return $this->hasMany(Menu::className(), ['parent_id' => 'id']);
    }

    /**
     * RULES
     */
    public function rules()
    {
        return [
            [['title', 'url', 'status'], 'required'],
            [['weight', 'status', 'parent_id', 'lang_id'], 'integer'],
			[['weight', 'parent_id'], 'default', 'value' => 0],
			[['lang_id'], 'default', 'value' => 1],
            [['title', 'url', 'icon'], 'string', 'max' => 255]
        ];
    }

    /**
     * LABELS
     */
    public function attributeLabels()
    {
        return [
            'id' => Module::t('module', 'MENU_BACK_FORM_ID'),
			'lang_id' => Module::t('module', 'MENU_BACK_FORM_LANGID'),
            'parent_id' => Module::t('module', 'MENU_BACK_FORM_PID'),
            'title' => Module::t('module', 'MENU_BACK_FORM_TITLE'),
            'url' => Module::t('module', 'MENU_BACK_FORM_URL'),
            'icon' => Module::t('module', 'MENU_BACK_FORM_ICON'),
            'weight' => Module::t('module', 'MENU_BACK_FORM_WEIGHT'),
            'status' => Module::t('module', 'MENU_BACK_FORM_STATUS'),
        ];
    }
}