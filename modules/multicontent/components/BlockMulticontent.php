<?php
namespace app\modules\multicontent\components;

use Yii;
use app\modules\multicontent\models\Multicontent;
use app\modules\main\models\forms\FormContact;

class BlockMulticontent
{
	public static function _($type_id = 0, $lang_id = 1, $title = '', $num = 100)
	{
		$multicontent = Multicontent::find()->where(['status' => 1, 'type_id' => $type_id, 'lang_id' => $lang_id])->orderBy('weight')->limit($num)->all();
		return Yii::$app->view->renderFile('@app/modules/multicontent/views/multicontent-block-'.$type_id.'.php', ['multicontent' => $multicontent, 'title' => $title]);
	}
	
	public static function _action($id = 'action1', $lang_id = 1, $type_id = 9, $template = 1)
	{
		$form = new FormContact();
		$multicontent = Multicontent::find()->where(['status' => 1, 'type_id' => $type_id, 'alias' => $id, 'lang_id' => $lang_id])->one();
		return Yii::$app->view->renderFile('@app/modules/multicontent/views/multicontent-block-action-'.$template.'.php', ['multicontent' => $multicontent, 'contact_form' => $form]);
	}
}