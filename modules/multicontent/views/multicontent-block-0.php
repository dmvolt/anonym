<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;
?>
<!-- Достижения -->
<?php if ($multicontent): ?>
	<div class="row stat-info">
		<?php $i = 0; foreach($multicontent as $item): ?>
			
			<div class="col-md-6">
				<?= Text::_edit($item->id, 'multicontent', true) ?> <!-- Ссылка на редактирование материала -->
				
				<?php if($item->thumb):?>
					<img class="" src="<?= Img::_('multicontent', $item->id, 'middle-square', $item->thumb->filename) ?>" alt="">
				<?php endif; ?>
				<span class="big-number"><?= $item->teaser ?></span>
				<?= $item->title ?><br>
				<?= $item->body ?>
			</div>
			
			<?php  if($i<1): ?>
				<?php $i++; ?>
			<?php else: ?>
				<?php $i = 0; ?>
				</div><div class="row stat-info">
			<?php endif; ?>
			
		<?php endforeach; ?>
	</div>
<?php endif; ?>
<!-- Достижения -->