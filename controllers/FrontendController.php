<?php

namespace app\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\BadRequestHttpException;
use app\components\helpers\Language;

/***** MODELS ******/
use app\modules\main\models\Siteinfo;

class FrontendController extends Controller
{
	protected $siteinfo;
	protected $session;
	protected $page_class = 'page-index';
	protected $lang_id = 1;
	
	public function behaviors()
    {
		$this->siteinfo = Siteinfo::find()->one();
		$this->view->params['siteinfo'] = $this->siteinfo;
		$this->view->params['page_class'] = $this->page_class;
		
		/***************************** SESSION ******************************/
		$this->session = Yii::$app->session;
		
		if (!$this->session->isActive){
			// открываем сессию
			$this->session->open();
		}
		/***************************** /SESSION *****************************/
		
		/***************************** LANGUAGE ******************************/
		$this->view->params['languages'] = Language::getLanguages();
		
		if (Yii::$app->request->get() && Yii::$app->request->get('lang_id')) 
		{
			$this->session->set('lang_id', Yii::$app->request->get('lang_id'));
			Yii::$app->language = Language::getLanguageName(Yii::$app->request->get('lang_id'), 'iso');
        }
		
		if ($this->session->has('lang_id')){
			$this->lang_id = $this->session->get('lang_id');
			Yii::$app->language = Language::getLanguageName($this->lang_id, 'iso');
		}
		
		$this->view->params['lang_id'] = $this->lang_id;
		/***************************** /LANGUAGE *****************************/
		
		/***************************** SEO ******************************/
        $this->view->params['meta_description'] = '';
        $this->view->params['meta_keywords'] = '';
		
        if($this->siteinfo->seo)
        {
            if (!empty($this->siteinfo->seo->meta_title))
            {
                $this->view->title = $this->siteinfo->seo->meta_title;
            }
            $this->view->params['meta_description'] = $this->siteinfo->seo->meta_desc;
            $this->view->params['meta_keywords'] = $this->siteinfo->seo->meta_key;
        }
		/***************************** /SEO *****************************/
		
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
 
    public function actions()
    {
        return [
			'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
}