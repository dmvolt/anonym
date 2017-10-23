<?php

use app\modules\multicontent\models\Multicontent;

use yii\helpers\Html;
use yii\helpers\Url;

use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use app\modules\file\components\Img;
use app\components\redactorSetting;

use app\modules\multicontent\Module;

$script = <<< JS
    function deleteImage(imagesDirectory, contentId, fileName, fileId){
		if(confirm('Вы уверены, что хотите удалить это изображение?')){
			
			$.post(
				'/preadmin/delete-image',
				'imagesDirectory=' + imagesDirectory + '&contentId=' + contentId + '&fileName=' + fileName + '&fileId=' + fileId
			)
			.done(function(result){
				if(result == 'success'){
					$('#'+imagesDirectory+'_'+contentId+'_'+fileId+'_imageblock').hide();
				}
			});
		}
		return false;
	}
JS;
$this->registerJs($script, yii\web\View::POS_READY); // оборачивается вjQuery(document).ready()
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
		<label>Главная картинка(иконка)</label>
		<?php if($model->thumb):?>
			<div class="row">
				<div class="col-xs-12 col-md-12" id="<?= Module::getInstance()->imagesDirectory ?>_<?= $model->id ?>_<?= $model->thumb->id ?>_imageblock">
					<a onclick="deleteImage('<?= Module::getInstance()->imagesDirectory ?>', '<?= $model->id ?>', '<?= $model->thumb->filename ?>', '<?= $model->thumb->id ?>');" class="thumbnail" data-toggle="tooltip" data-placement="top" title="Удалить это изображение">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						<img src="<?= Img::_(Module::getInstance()->imagesDirectory, $model->id, 'thumbnail', $model->thumb->filename) ?>">
					</a>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<div class="col-xs-6 col-md-6">
		<?//= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Заголовок') ?>
		<?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'imageFile')->fileInput(['accept' => 'image/*']) ?>
	</div>
</div>
<?php ActiveForm::end(); ?>