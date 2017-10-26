$(document).ready(function() {

	// fancybox
	//$('.fancybox').fancybox();
	
	// Маска поля формы (телефон)
	//$('.phone').mask('+79999999999');
	
	/***************************** Отправка формы по AJAX **********************************/
	$('#contact_form').on('beforeSubmit', function () {
		// Вызывается после удачной валидации всех полей и до того как форма отправляется на сервер.
		// Тут можно отправить форму через AJAX. Не забудьте вернуть false для того, чтобы форма не отправлялась как обычно.
		var form = $(this);
		$.post(
			'/main/default/send-form', //form.attr('action'),
			form.serialize()
		)
		.done(function(result){
			if(result == 'success'){
				$(form).trigger('reset'); // Сбрасываем поля формы

				//Открываем попап благодарности
				$('.popup-order').fadeOut('fast');
				$('.popup-wrap').fadeIn('fast');	
				$('.popup-success').fadeIn('fast');	
			}
		});
		return false;
	});
});