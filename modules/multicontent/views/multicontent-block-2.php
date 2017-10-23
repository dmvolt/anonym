<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;
?>
<!-- Мотивация(почему?) -->
<?php if ($multicontent): ?>
	<ul>
		<?php foreach($multicontent as $key => $item): ?>
			<li class="">
			
				<?= Text::_edit($item->id, 'multicontent', true) ?> <!-- Ссылка на редактирование материала -->
				
				<?php if($item->thumb):?>
					<img class="float-left" src="<?= Img::_('multicontent', $item->id, 'mini', $item->thumb->filename) ?>" alt=""> <!-- 100 -->
				<?php endif; ?>
				<div class="margin-left-item">	
					<div class="title"><?= $item->title ?></div>
					<?= $item->teaser ?>
					<?= $item->body ?>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>
<!-- Мотивация(почему?) -->