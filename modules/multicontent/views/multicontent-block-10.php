<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\modules\file\components\Img;
?>
<!-- Безопасность -->
<?php if ($multicontent): ?>
	<div class="row">
		<?php $i = 0; foreach($multicontent as $item): ?>
		
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="content-box style3">
				
					<?php if(Yii::$app->user->can('adminPanel')):?>
						<p class="edit-link">
							<a href="<?= Url::to(['/multicontent/backend/default/update-fast', 'id' => $item->id]) ?>" data-target="<?= Url::to(['/multicontent/backend/default/update-fast', 'id' => $item->id]) ?>" data-toggle="modal" title="Редактировать" class="btn_edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a href="<?= Url::to(['/multicontent/backend/default/delete-fast', 'id' => $item->id]) ?>" title="Удалить" class="btn_delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</p>
					<?php endif; ?>
					
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