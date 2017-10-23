<?php

namespace app\modules\main\controllers;

use Yii;
use app\controllers\FrontendController;
use app\modules\main\models\forms\FormContact;
use app\components\helpers\Language;

/**
 * Default controller for the `main` module
 */
class DefaultController extends FrontendController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
		if (Yii::$app->request->get() && Yii::$app->request->get('lang_id')) 
		{
            return $this->redirect('/');
        }
		else
		{
			return $this->render('/index', ['lang_id' => $this->lang_id]);
		}
    }
	
	/***************************** Переадресация внешних ссылок **********************************/
	public function actionGo()
    {
		if($ref = Yii::$app->request->get('ref'))
		{
			return $this->redirect('http://'.$ref, 301)->send();
		}
    }
	
	/***************************** Отправка формы по AJAX **********************************/
	public function actionSendForm()
    {
		$form = new FormContact();
        if ($form->load(Yii::$app->request->post()) AND $form->contact($this->siteinfo->email)) 
		{
            echo 'success';
        } else {
			echo 'error';
		}
    }
}