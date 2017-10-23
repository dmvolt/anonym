<?php
namespace app\modules\multicontent\controllers;

use app\controllers\FrontendController;
use app\modules\multicontent\models\Multicontent;

use yii\web\NotFoundHttpException;
use yii\web\BadRequestHttpException;
use yii\base\InvalidParamException;

use Yii;

/**
 * Default controller for the `multicontent` module
 */
class DefaultController extends FrontendController
{
	/**
     * Renders the view for the module
     * @return string
     */
    public function actionView($alias = '')
    {
		$multicontent = Multicontent::find()->where(['status' => 1, 'alias' => $alias])->one();
		
		if ($multicontent) {
		
            $this->view->title = $multicontent->title;
			
			return $this->render('/multicontent', ['multicontent' => $multicontent]);
			
        } else {
            throw new NotFoundHttpException('404 Страница не найдена.');
        }
    }
	
    /**
     * Renders the index for the module
     * @return string
     */
    public function actionIndex()
    {
		$multicontents = Multicontent::find()->where(['status' => 1])->all();
		
		if ($multicontents) {
		
            $this->view->title = 'Материалы';
			
			return $this->render('/multicontents', ['multicontents' => $multicontents]);
			
        } else {
            throw new NotFoundHttpException('404 Страница не найдена.');
        }
    }
}
