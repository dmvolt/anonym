<?php
namespace app\components\helpers;

use Yii;
use app\components\helpers\ArrayHelper;

class Language
{
	public static function getLanguageName($lang_id = 1, $field = 'name')
    {
		$lang_arr = self::getLanguages();
        return (isset($lang_arr[$lang_id][$field]))? $lang_arr[$lang_id][$field]: '';
    }
	
	public static function getLanguages()
    {
        return [
			1 => [
				'name' => 'Rus',
				'iso' => 'ru-RU',
			],
			2 => [
				'name' => 'Eng',
				'iso' => 'en-EN',
			],
			3 => [
				'name' => 'Jp',
				'iso' => 'ja-JP',
			],
			4 => [
				'name' => 'Zh',
				'iso' => 'zh-CN',
			],
        ];
    }
}