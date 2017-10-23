<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>
<div class="popup-order">
	<span class="close"></span>
	<?php $form = ActiveForm::begin([
		'id' => 'contact_form',
		'method' => 'post',
		'options' => ['class' => 'form'],
		'fieldConfig' => [
			'template' => '{input}',
			'errorOptions' => ['class' => 'error'],
		],
		'errorCssClass' => 'error',
	]); ?>
	
	<?= $form->field($contact_form, 'name')
				->textInput(['class' => 'text name', 'placeholder' => 'Ваше имя'])
				->label('')
				->error(['tag' => 'label']) ?>
				
	<?= $form->field($contact_form, 'phone')
				->textInput(['class' => 'text phone', 'placeholder' => 'Ваш телефон'])
				->label('')
				->error(['tag' => 'label']) ?>
				
	<?= Html::submitButton('Оставить заявку', ['class' => 'submit']) ?>
	
	<?php ActiveForm::end(); ?>
</div>
<div class="popup-success"> 
	<span class="close"></span>
	<p>Ваша заявка отправлена.</p>
</div>
<div class="popup-wrap"></div>