<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;
?>
<!-- Отзывы -->
<?php if ($multicontent): ?>
	<?php foreach($multicontent as $key => $item): ?>

		<div class="column hd-4 md-6 lg-6 sm-6 xs-12">
			<div class="section4-response__box">
				<?= Text::_edit($item->id, 'multicontent', true) ?> <!-- Ссылка на редактирование материала -->
				<div class="image"><span>Г</span></div>
				<div class="text">
					<div class="name"><?= $item->title ?></div>
					<div class="section4-response__text">
						<div class="rating"><img src="/img/icon-rating.gif" alt=""></div>
						<?= $item->teaser ?>
					</div>
					<div class="more"><a href="#">Подробнее на GooglePlay</a></div>
				</div>
			</div>
		</div>

	<?php endforeach; ?>
<?php endif; ?>
<!-- Отзывы -->