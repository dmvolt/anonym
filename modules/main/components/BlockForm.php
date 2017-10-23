<?php

namespace app\modules\main\components;

use Yii;
use app\modules\main\models\forms\FormContact;

class BlockForm
{
	public static function _contact()
	{
		$form = new FormContact();
		return Yii::$app->view->renderFile('@app/modules/main/views/block-form-contact.php', ['contact_form' => $form]);
	}
}