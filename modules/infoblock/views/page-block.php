<?php
use yii\helpers\Html;
use app\components\helpers\Text;
?>
<?php if ($block): ?>
	<?= Text::_edit($block->id, 'infoblock') ?> <!-- Ссылка на редактирование материала -->
	<?php if($block_type == 'text'):?>
		<?= $block->title ?>
	<?php elseif($block_type == 'html'):?>
		<?= $block->body ?>
	<?php endif; ?>
<?php endif; ?>