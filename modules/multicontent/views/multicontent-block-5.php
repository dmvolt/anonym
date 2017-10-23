<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;
?>
<!-- Советы -->
<?php if ($multicontent): ?>
	<div class="text-simple">
		<ul class="list-1">
			<?php $i = 0; foreach($multicontent as $key => $item): ?>
				<li class="l-5 <?php if ($key > 4): ?>hiddd<?php endif; ?>">
				
					<?= Text::_edit($item->id, 'multicontent', true) ?> <!-- Ссылка на редактирование материала -->
					
					<?php if($item->thumb):?>
						<?php if($item->alias AND !empty($item->alias)):?>
							<a href="/<?= $item->alias ?>"><img class="" src="<?= Img::_('multicontent', $item->id, 'mini-square', $item->thumb->filename) ?>" alt=""></a>
						<?php else: ?>
							<img class="" src="<?= Img::_('multicontent', $item->id, 'mini-square', $item->thumb->filename) ?>" alt="">
						<?php endif; ?>
					<?php endif; ?>
						
					<p><?= $key+1 ?>. <?= $item->teaser ?></p>
				</li>	
			<?php endforeach; ?>
		</ul>
		<?php if (count($multicontent) > 5): ?>
			<div class="more-link"><a href="">Показать еще советы</a></div>
		<?php endif; ?>
	</div>
<?php endif; ?>
<!-- Советы -->