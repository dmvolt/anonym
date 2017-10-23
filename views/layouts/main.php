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
	/* EditAppAsset::register($this); */
	AppAsset::register($this);
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
	<?php $this->beginBody() ?>
	<?= $this->params['siteinfo']->counter ?>
	
	<div class="fixed-top__menu">
		<?//= Text::_edit($this->params['siteinfo']->id, 'main') ?> <!-- Ссылка на редактирование материала -->
		<div class="column hd-2"><a href="<?= Yii::$app->homeUrl ?>" class="logo-main"></a></div>
		<div class="column hd-7">
			<ul class="main-top__menu">
				<li><a href="<?= Yii::t('app', 'FRONT_MAIN_MENU_LINK_1') ?>"><?= Yii::t('app', 'FRONT_MAIN_MENU_TEXT_1') ?></a></li>
				<li><a href="<?= Yii::t('app', 'FRONT_MAIN_MENU_LINK_2') ?>"><?= Yii::t('app', 'FRONT_MAIN_MENU_TEXT_2') ?></a></li>
				<li><a href="<?= Yii::t('app', 'FRONT_MAIN_MENU_LINK_3') ?>"><?= Yii::t('app', 'FRONT_MAIN_MENU_TEXT_3') ?></a></li>
				<li><a href="<?= Yii::t('app', 'FRONT_MAIN_MENU_LINK_4') ?>"><?= Yii::t('app', 'FRONT_MAIN_MENU_TEXT_4') ?></a></li>
				
				<?php if(Yii::$app->user->can('adminPanel')):?>
					<li><a href="<?= Url::to(['/main/backend/default/index']) ?>" target="_blank" class="menunav">В Админку</a></li>
					<li><a href="<?= Url::to(['/user/default/logout']) ?>" data-method="post" class="menunav">Выйти</a></li>
				<?php elseif(!Yii::$app->user->isGuest):?>
					<li><a href="<?= Url::to(['/user/default/logout']) ?>" data-method="post" class="menunav">Выйти</a></li>
				<?php endif; ?>
			</ul>
		</div>
					
		<div class="column hd-2"><a href="#" class="btn">Whitepaper</a></div>
		<div class="column hd-1 text-right">
			<a href="/?lang_id=1" class="btn-lang">Rus</a>
			<a href="/?lang_id=2" class="btn-lang">Eng</a>
		</div>
	</div>

	<a href="#" class="icon-share"><i class="fa fa-share-alt"></i></a>
	<a href="#" class="icon-step"><i class="fa fa-long-arrow-down"></i></a>

	<div id="fullPage">
		<?= $content ?>
	</div>

	<?= BlockForm::_contact() ?>

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
