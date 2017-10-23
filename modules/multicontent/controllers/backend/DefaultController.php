<?php

namespace app\modules\multicontent\controllers\backend;

use Yii;

/********** USE MODELS *********/
use app\modules\file\models\File;
use app\modules\multicontent\models\Multicontent;
use app\modules\multicontent\models\MulticontentSearch;

use app\controllers\BackendController;
use yii\web\NotFoundHttpException;

use app\modules\multicontent\Module;

/**
 * MulticontentController implements the CRUD actions for Multicontent model.
 */
class DefaultController extends BackendController
{
    /**
     * Lists all Multicontent models.
     * @return mixed
     */
    public function actionIndex()
    {
		$newModel = new Multicontent();
        $searchModel = new MulticontentSearch();
		
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
        return $this->render('/backend/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'newModel' => $newModel,
        ]);
    }
	
    /**
     * Displays a single Multicontent model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('/backend/view', [
            'model' => $this->findModel($id),
        ]);
    }
	
    /**
     * Creates a new Multicontent model.
     * If creation is successful, the browser will be redirected to the 'view' multicontent.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Multicontent();
		
		$model->type_id = 0; // Значение поля по умолчанию
		$model->status = 1; // Значение поля по умолчанию
		$model->weight = 0; // Значение поля по умолчанию
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) 
		{
            $this->post = Yii::$app->request->post();

            /*** Редактирование (добавление) картинки миниатюры ***/
            $fileModel = new File();
            $fileModel->updateThumb($this->post, $model, $model->id, Module::getInstance()->id, Module::getInstance()->imagesDirectory);
			
			return $this->redirect(['index', 'MulticontentSearch' => ['type_id' => $model->type_id]]);
        } 
		else 
		{
            return $this->render('/backend/create', [
                'model' => $model,
            ]);
        }
    }
	
	public function actionCreateFast($type_id = 0)
    {
        $model = new Multicontent();
		
		$model->type_id = $type_id; // Значение поля по умолчанию
		$model->status = 1; // Значение поля по умолчанию
		$model->weight = 0; // Значение поля по умолчанию
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) 
		{
			$this->post = Yii::$app->request->post();
			
            /*** Редактирование (добавление) картинки миниатюры ***/
            $fileModel = new File();
            $fileModel->updateThumb($this->post, $model, $model->id, Module::getInstance()->id, Module::getInstance()->imagesDirectory);
			
			return $this->redirect(['index', 'MulticontentSearch' => ['type_id' => $model->type_id]]);
			//return $this->redirect(['/']);
        } 
		else 
		{
            return $this->renderAjax('/backend/create-fast-'.$type_id, [
                'model' => $model,
            ]);
        }
    }
	
    /**
     * Updates an existing Multicontent model.
     * If update is successful, the browser will be redirected to the 'view' multicontent.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) 
		{
            $this->post = Yii::$app->request->post();

            /*** Редактирование (добавление) картинки миниатюры ***/
            $fileModel = new File();
            $fileModel->updateThumb($this->post, $model, $model->id, Module::getInstance()->id, Module::getInstance()->imagesDirectory);
			
			return $this->redirect(['index', 'MulticontentSearch' => ['type_id' => $model->type_id]]);
        } 
		else 
		{
            return $this->render('/backend/update', [
                'model' => $model,
            ]);
        }
    }
	
	/**
     * Updates an existing Multicontent model.
     * If update is successful, the browser will be redirected to the 'view' multicontent.
     * @param string $id
     * @return mixed
     */
    public function actionUpdateFast($id)
    {
        $model = $this->findModel($id);
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) 
		{
            $this->post = Yii::$app->request->post();

            /*** Редактирование (добавление) картинки миниатюры ***/
            $fileModel = new File();
            $fileModel->updateThumb($this->post, $model, $model->id, Module::getInstance()->id, Module::getInstance()->imagesDirectory);
			
			return $this->redirect(['/']);
        } 
		else 
		{
            return $this->renderAjax('/backend/update-fast-'.$model->type_id, [
                'model' => $model,
            ]);
        }
    }
	
    /**
     * Deletes an existing Multicontent model.
     * If deletion is successful, the browser will be redirected to the 'index' multicontent.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        /*** Удаляем сам материал ***/
        $model->delete();

        /*** Удаляем файлы и записи из таблицы file ***/
        $fileModel = new File();
        $fileModel->deleteFiles($id, Module::getInstance()->id, Module::getInstance()->imagesDirectory);
		
        return $this->redirect(['index']);
    }
	
	/**
     * Deletes an existing Multicontent model.
     * If deletion is successful, the browser will be redirected to the 'index' multicontent.
     * @param string $id
     * @return mixed
     */
    public function actionDeleteFast($id)
    {
        $model = $this->findModel($id);
        /*** Удаляем сам материал ***/
        $model->delete();

        /*** Удаляем файлы и записи из таблицы file ***/
        $fileModel = new File();
        $fileModel->deleteFiles($id, Module::getInstance()->id, Module::getInstance()->imagesDirectory);
		
        return $this->redirect(['/']);
    }
	
	/**
     * MULTIDELETE Массовое удаление материалов
     * MULTIUPDATE Массовое редактирование материалов
     */
    public function actionMultiAction()
    {
        if($arrKey = Yii::$app->request->post('selection'))
        {
            if($arrKey AND is_array($arrKey) AND count($arrKey)>0)
            {
                $fileModel = new File();

                foreach($arrKey as $id)
                {
                    /*** Удаляем сам материал ***/
                    $this->findModel($id)->delete();

                    /*** Удаляем файлы и записи из таблицы file ***/
                    $fileModel->deleteFiles($id, Module::getInstance()->id, Module::getInstance()->imagesDirectory);
                }
            }
        }

        if($multiedit = Yii::$app->request->post('multiedit'))
        {
            if($multiedit AND is_array($multiedit) AND count($multiedit)>0)
            {
                foreach($multiedit as $id => $field)
                {
                    if($model = $this->findModelForMultiAction($id))
                    {
                        foreach($field as $key => $value)
                        {
                            if(isset($field[$key]))
                            {
                                $model->{$key} = $value;
                            }
                        }
                        $model->save();
                    }
                }
            }
        }
        return $this->redirect(['index']);
    }
	
    /**
     * Finds the Multicontent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Multicontent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Multicontent::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested multicontent does not exist.');
        }
    }
	
	protected function findModelForMultiAction($id)
    {
        if (($model = Multicontent::findOne($id)) !== null) {
            return $model;
        } else {
            return false;
        }
    }
}