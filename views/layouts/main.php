<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\helpers\Text;

use app\assets\AppAsset;
use app\assets\EditAppAsset;

use app\modules\menu\components\BlockMenu;
use app\modules\main\components\BlockForm;
use app\modules\infoblock\components\BlockText;

use yii\bootstrap\Modal;

if(Yii::$app->user->can('adminPanel')){
	EditAppAsset::register($this);
	/* AppAsset::register($this); */
}
else{
	AppAsset::register($this);
}
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="<?= $this->params['meta_description'] ?>">
<meta name="keywords" content="<?= $this->params['meta_keywords'] ?>">

<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
	
<?php $this->head() ?>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			$("a.scrollto").click(function () {
				var elementClick = $(this).attr("href");
				var destination = $(elementClick).offset().top;
				jQuery("html:not(:animated),body:not(:animated)").animate({
					scrollTop: destination
				}, 800);
				return false;
			});
		});
	</script>
	<?php $this->beginBody() ?>
	<?= $this->params['siteinfo']->counter ?>
	
	<?= $content ?>
	
	<?//= BlockForm::_contact() ?>

	<?php if(Yii::$app->user->can('adminPanel')):?>
		<?php Modal::begin([
			'id' => 'modal_edit',
			'size' => 'modal-lg',
		]); ?>
		<div class="modal-body-content"></div>
		<?php Modal::end(); ?>
	<?php endif; ?>
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>