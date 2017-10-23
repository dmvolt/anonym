<?php

use yii\helpers\Html;
use app\components\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\components\helpers\Language;

?>
<hr>
<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sx-12 col-md-3">
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <?= $form->field($model, 'status')->checkbox() ?>
        </div>
        <div class="col-xs-6 col-md-6">

        </div>
    </div>

    <div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3">
            <?= $form->field($model, 'lang_id')->dropDownList(ArrayHelper::map2(Language::getLanguages(), null, 'name')) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map($parentItems, 'id', 'title'), ['prompt' => '.. нет ..', 'options' => [$model->parent_id => ['class' => 'selected']]]) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
            <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9">
            <?//= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
