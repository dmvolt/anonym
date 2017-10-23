<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;
?>
<!-- Безопасность -->
<?php if ($multicontent): ?>
	<div class="row">
		<?php $i = 0; foreach($multicontent as $item): ?>
		
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="content-box style3">
				
					<?= Text::_edit($item->id, 'multicontent', true) ?> <!-- Ссылка на редактирование материала -->
					
					<?php if($item->thumb):?>
						<div class="icon">
							<?php if($item->alias AND !empty($item->alias)):?>
								<a href="/<?= $item->alias ?>"><img class="" src="<?= Img::_('multicontent', $item->id, 'mini-square', $item->thumb->filename) ?>" alt=""></a>
							<?php else: ?>
								<img class="" src="<?= Img::_('multicontent', $item->id, 'mini-square', $item->thumb->filename) ?>" alt="">
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<?php if($item->alias AND !empty($item->alias)):?>
						<h3><a href="/<?= $item->alias ?>"><?= $item->title ?></a></h3>
					<?php else: ?>
						<h3><?= $item->title ?></h3>
					<?php endif; ?>
				</div>
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
<!-- Безопасность -->