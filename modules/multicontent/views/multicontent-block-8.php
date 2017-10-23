<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;
?>
<!-- Лиценции -->
<?php if ($multicontent): ?>
	<div class="licens slider-content">
		<div class="slide">
			<?php $i = 0; foreach($multicontent as $item): ?>
				<div style="position:relative; display:inline-block;">
				<?= Text::_edit($item->id, 'multicontent', true) ?> <!-- Ссылка на редактирование материала -->
						
				<?php if($item->thumb):?>
					<a class="fancybox" rel="gallery2" href="<?= Img::_('multicontent', $item->id, 'extralarge', $item->thumb->filename) ?>">
						<img src="<?= Img::_('multicontent', $item->id, 'middle2', $item->thumb->filename) ?>" class=""> <!-- .... X 355 -->
					</a>
				<?php endif; ?>
				</div>
				<?php  if($i<2): ?>
					<?php $i++; ?>
				<?php else: ?>
					<?php $i = 0; ?>
					</div><div class="slide">
				<?php endif; ?>
				
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>
<!-- Лиценции -->