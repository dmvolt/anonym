<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\helpers\ArrayHelper;

use yii\widgets\ActiveForm;
use yii\bootstrap\Collapse;
use vova07\imperavi\Widget;
use app\components\redactorSetting;

use app\modules\infoblock\Module;
use app\components\helpers\Language;

?>

<div class="infoblock-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	
	<?= $form->field($model, 'lang_id')->dropDownList(ArrayHelper::map2(Language::getLanguages(), null, 'name')) ?>
	<?= $form->field($model, 'status')->checkbox() ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'body')->textarea(['rows' => 6])->widget(Widget::className(), [
		'settings' => redactorSetting::_($model->id, Module::getInstance()->imagesDirectory)
	]); ?>
	
    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
    
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'BUTTON_SAVE'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>