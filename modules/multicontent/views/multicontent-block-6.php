<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;
?>
<!-- Фотогалерея -->
<?php if ($multicontent): ?>
	<div class="row">
		<?php $i = 0; foreach($multicontent as $item): ?>
			
			<div class="col-xs-6 col-md-3">
				<?= Text::_edit($item->id, 'multicontent', true) ?> <!-- Ссылка на редактирование материала -->
			
				<?php if($item->thumb):?>
					<a class="fancybox thumbnail" rel="gallery1" href="<?= Img::_('multicontent', $item->id, 'extralarge', $item->thumb->filename) ?>">
						<img src="<?= Img::_('multicontent', $item->id, 'middle-square2', $item->thumb->filename) ?>">  <!-- 171Х180 -->
					</a>
				<?php endif; ?>
			</div>
			
			<?php  if($i<3): ?>
				<?php $i++; ?>
			<?php else: ?>
				<?php $i = 0; ?>
				</div><div class="row">
			<?php endif; ?>
			
		<?php endforeach; ?>
	</div>
<?php endif; ?>
<!-- Фотогалерея -->