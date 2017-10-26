<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use app\components\redactorSetting;

use app\modules\infoblock\Module;

?>
<?php $form = ActiveForm::begin(['id' => 'fast_update_'.Module::getInstance()->id.'_form_'.$model->id, 'options' => ['enctype' => 'multipart/form-data']]); ?>
<?= Html::hiddenInput('popup_edit_redirect', '/', ['id' => 'popup_edit_redirect']) ?>
<div class="row">
    <div class="col-xs-12 col-md-6">
        <h3>Редактирование блока</h3>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="form-group text-right margin-t-15">
            <?= Html::submitButton('Сохранить изменения', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-xs-12 col-md-8">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
