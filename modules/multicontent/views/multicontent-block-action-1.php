<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;

use yii\bootstrap\ActiveForm;

if ($multicontent)
{
	$script1 = <<< JS
	$('#action_form_$multicontent->id').on('beforeSubmit', function () {
		var form = $(this);
		$.post(
			'/main/default/send-form', //form.attr('action'),
			form.serialize()
		)
		.done(function(result){
			if(result == 'success'){
				$(form).trigger('reset');

				$('.popup-order').fadeOut('fast');
				$('.popup-wrap').fadeIn('fast');	
				$('.popup-success').fadeIn('fast');	
			}
		});
		return false;
	});
JS;

	$script2 = <<< JS
	/* Таймер обратного отсчёта */
	$(function(){
		var note = $('#note_$multicontent->id'),
			ts = new Date(2014, 1, 21),
			newYear = true;

		if((new Date()) > ts){
			// Задаем точку отсчета для примера. Пусть будет очередной Новый год или дата через 10 дней.
			// Обратите внимание на *1000 в конце - время должно задаваться в миллисекундах
			ts = (new Date()).getTime() + $multicontent->date*60*60*1000;
			newYear = false;
		}
		$('#note_$multicontent->id').countdown({
			timestamp	: ts,
			callback	: function(days, hours, minutes, seconds){
				var message = "";
				message += "<span class='box days'>" + days + " <span class='lab'>дней</span></span>";
				message += "<span class='box'>" + hours + " <span class='lab'>час.</span></span>";
				message += "<span class='box'>" + minutes + " <span class='lab'>мин.</span></span>";
				message += "<span class='box seconds'>" + seconds + " <span class='lab'>сек.</span></span>";
				// if(newYear){
				// 	message += "осталось до Нового года!";
				// }
				// else {
				// 	message += "осталось до момента через 10 дней!";
				// }
				note.html(message);
			}
		});
	});
JS;
	Yii::$app->view->registerJs($script1, yii\web\View::POS_READY);
	Yii::$app->view->registerJs($script2, yii\web\View::POS_READY);
}
?>
<!-- Безопасность -->
<?php if ($multicontent): ?>
	<div class="action-block">
	
		<?= Text::_edit($multicontent->id, 'multicontent') ?> <!-- Ссылка на редактирование материала -->
		
		<div class="desc">
			<div class="head"><?= $multicontent->title ?></div>
			<?= $multicontent->body ?>
		</div>
		
		<?php $form = ActiveForm::begin([
			'id' => 'action_form_'.$multicontent->id,
			'method' => 'post',
			'fieldConfig' => [
				'template' => '{input}',
				'errorOptions' => ['class' => 'error'],
			],
			'errorCssClass' => 'error',
		]); ?>
		
		<div class="form">
		
		<?= $form->field($contact_form, 'name')
					->textInput(['class' => 'text name', 'placeholder' => 'Ваше имя'])
					->label('')
					->error(['tag' => 'label']) ?>
					
		<?= $form->field($contact_form, 'phone')
					->textInput(['class' => 'text phone', 'placeholder' => 'Ваш телефон'])
					->label('')
					->error(['tag' => 'label']) ?>
		</div>			
		
		<div class="option-row">
			<?php if($multicontent->date && !empty($multicontent->date)):?>
				<div class="timer">
					<div class="title">До конца акции осталось:</div>
					<div id="note_<?= $multicontent->id ?>" class="note"></div>
				</div>
			<?php endif; ?>
			<div class="button"><?= Html::submitButton('Записаться на прием', ['class' => 'submit']) ?></div>
		</div>
		<?php ActiveForm::end(); ?>
		
		<div class="partners">
			<?= $multicontent->teaser ?>
		</div>
	</div>
<?php endif; ?>
<!-- Безопасность -->