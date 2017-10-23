<?php
namespace app\components;

use yii\helpers\Url;

class redactorSetting
{
	public static function _($Id, $imagesDirectory)
	{
		return [
			'lang' => 'ru',
			'minHeight' => 200,
			'replaceDivs' => false,
			'paragraphize' => false,
			'formattingAdd' => [
				0 => [
					'title' => 'Темный блок',
					'type' => 'block',
					'tag' => 'p',
					'class' => 'text-mark1',
					'clear' => 'remove',
				],
				1 => [
					'title' => 'Серый блок',
					'type' => 'block',
					'tag' => 'p',
					'class' => 'text-mark2',
					'clear' => 'remove',
				],
				2 => [
					'title' => 'Правый текстовый блок',
					'type' => 'block',
					'tag' => 'p',
					'class' => 'text-right',
					'clear' => 'remove',
				],
				3 => [
					'title' => 'Левый текстовый блок',
					'type' => 'block',
					'tag' => 'p',
					'class' => 'text-left',
					'clear' => 'remove',
				]
			],
			'imageManagerJson' => Url::to(['/backend/images-get', 'id' => $Id, 'imagesDirectory' => $imagesDirectory]),
			'imageUpload' => Url::to(['/backend/image-upload', 'id' => $Id, 'imagesDirectory' => $imagesDirectory]),
			'fileManagerJson' => Url::to(['/backend/files-get', 'id' => $Id, 'imagesDirectory' => $imagesDirectory]),
			'fileUpload' => Url::to(['/backend/file-upload', 'id' => $Id, 'imagesDirectory' => $imagesDirectory]),
			'plugins' => [
				'imagemanager',
				'filemanager',
				'video',
				'table',
				'definedlinks',
				'fullscreen'
			]
		];
	}
}