<?php
namespace app\components\helpers;

use Yii;
use app\components\helpers\ArrayHelper;

class Language
{
	public static function getLanguageName($type_id = 1, $field = 'name')
    {
		$lang_arr = self::getLanguages();
        return (isset($lang_arr[$type_id][$field]))? $lang_arr[$type_id][$field]: '';
    }
	
	public static function getLanguages()
    {
        return [
			1 => [
				'name' => 'Русский',
				'iso' => 'ru-RU',
			],
			2 => [
				'name' => 'English',
				'iso' => 'en-EN',
			],
			3 => [
				'name' => 'Japan',
				'iso' => 'ja-JP',
			],
			4 => [
				'name' => 'China',
				'iso' => 'zh-CN',
			],
        ];
    }
}