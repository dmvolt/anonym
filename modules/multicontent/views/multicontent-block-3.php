<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;
?>
<!-- Команда -->
<?php if ($multicontent): ?>
	<?php foreach($multicontent as $key => $item): ?>
		<div class="column hd-3">
			<div class="section8-team__box">
				<?= Text::_edit($item->id, 'multicontent', true) ?> <!-- Ссылка на редактирование материала -->
				<?php if($item->thumb):?>
					<div class="section8-team__image">
						<img src="<?= Img::_('multicontent', $item->id, 'middle-square', $item->thumb->filename) ?>" alt=""> <!-- 216X230 -->
					</div>
				<?php endif; ?>
				<div class="section8-team__person">
					<span class="name"><?= $item->title ?></span>
					<span class="second-name"><?= $item->title ?></span>
					<span class="position"><?= $item->teaser ?></span>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
<?php endif; ?>
<!-- Команда -->