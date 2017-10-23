<?php
namespace app\modules\infoblock\components;

use Yii;
use app\modules\infoblock\models\Infoblock;

class BlockText
{
	public static function _($blockId = '', $lang_id = 1, $block_type = 'text', $default_content = null)
	{
		$key = $blockId.'_'.$lang_id;
		// Пробуем извлечь $infoblock из кэша.
		$infoblock = Yii::$app->cache->get($key);

		if ($infoblock === false) {
			// $infoblock нет в кэше, вычисляем заново
			$infoblock = Infoblock::find()->where(['status' => 1, 'alias' => $blockId, 'lang_id' => $lang_id])->orderBy('weight')->one();
		
			if(!$infoblock)
			{
				// Если не найден блок с заданным ID, он создается
				$model = new Infoblock();
				
				if($block_type == 'text' && $default_content)
				{
					$model->title = $default_content; // Значение поля по умолчанию
				} 
				elseif($block_type == 'html' && $default_content)
				{
					$model->body = $default_content; // Значение поля по умолчанию
				}
				
				$model->alias = $blockId; // Значение поля по умолчанию
				$model->status = 1; // Значение поля по умолчанию
				$model->weight = 0; // Значение поля по умолчанию
				$model->lang_id = $lang_id; // Значение поля по умолчанию
				$model->save();
				
				$infoblock = Infoblock::find()->where(['status' => 1, 'alias' => $blockId, 'lang_id' => $lang_id])->orderBy('weight')->one();
			}

			// Сохраняем значение $infoblock в кэше. Данные можно получить в следующий раз.
			Yii::$app->cache->set($key, $infoblock);
		}
		return Yii::$app->view->renderFile('@app/modules/infoblock/views/page-block.php', ['block_type' => $block_type, 'block' => $infoblock]);
	}
}