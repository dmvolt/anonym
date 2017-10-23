<?php

use app\modules\multicontent\models\Multicontent;

use yii\helpers\Html;
use yii\helpers\Url;

use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use app\modules\file\components\Img;
use app\components\redactorSetting;

use app\modules\multicontent\Module;

?>
<?php $form = ActiveForm::begin(['id' => 'fast_update_'.Module::getInstance()->id.'_form_'.$model->id, 'options' => ['enctype' => 'multipart/form-data']]); ?>
<div class="row">
	<div class="col-xs-12 col-md-6">
		<h4>Редактирование блока</h4>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group margin-t-15">
			<?= $form->field($model, 'status')->checkbox() ?>
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="form-group text-right margin-t-15">
			<?= Html::submitButton('Сохранить изменения', ['class' => 'btn btn-primary']) ?>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-xs-6 col-md-6">
		<?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Заголовок') ?>
	</div>
	<div class="col-xs-6 col-md-6">
		<?= $form->field($model, 'date')->textInput(['maxlength' => true])->label('До конца акции осталось (часов)') ?>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12">
		<?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Содержание блока 1')->widget(Widget::className(), [
			'settings' => redactorSetting::_($model->id, Module::getInstance()->imagesDirectory)
		]); ?>
	</div>
	<div class="col-xs-12 col-md-12">
		<?= $form->field($model, 'teaser')->textarea(['rows' => 6])->label('Содержание блока 2')->widget(Widget::className(), [
			'settings' => redactorSetting::_($model->id, Module::getInstance()->imagesDirectory)
		]); ?>
	</div>
</div>
<?php ActiveForm::end(); ?>