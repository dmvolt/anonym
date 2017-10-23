<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\helpers\Text;
use app\modules\file\components\Img;
?>
<!-- Услуги -->
<?php if ($multicontent): ?>
	<div class="services">
		<ul id="services-tabs">
			<?php foreach($multicontent as $key => $item): ?>
				<li class="<?php if (!$key): ?>active<?php endif; ?>"><?= $item->title ?></li>
			<?php endforeach; ?>
		</ul>
		<div class="text-bl">
			<?php foreach($multicontent as $key => $item): ?>
				<div class="box" id="box_<?= $key+1 ?>" <?php if (!$key): ?>style="display:block;"<?php endif; ?>>
					
					<?= Text::_edit($item->id, 'multicontent', true) ?> <!-- Ссылка на редактирование материала -->
					
					<div class="head"><?= $item->title ?></div>
					
					<?php if($item->thumb):?>
						<img class="" src="<?= Img::_('multicontent', $item->id, 'large', $item->thumb->filename) ?>" alt=""> <!-- 500 -->
					<?php endif; ?>
					
					<?= $item->teaser ?>
					<?= $item->body ?>
					<div class="button"><a href="" class="consult">Проконсультироваться бесплатно</a></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>
<!-- Услуги -->