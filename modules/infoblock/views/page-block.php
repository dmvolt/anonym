<?php
use yii\helpers\Html;
use app\components\helpers\Text;
?>
<?php if ($block): ?>
	<?php if(Yii::$app->user->can('adminPanel')):?>
		<span class="content-edit-wrap">
			<?= Text::_edit($block->id, 'infoblock', $block_type) ?> <!-- Ссылка на редактирование материала -->
			<?php if($block_type == 'text'):?>
				<?= $block->title ?>
			<?php elseif($block_type == 'html'):?>
				<?= $block->body ?>
			<?php endif; ?>
		</span>
	<?php else: ?>
		<?php if($block_type == 'text'):?>
			<?= $block->title ?>
		<?php elseif($block_type == 'html'):?>
			<?= $block->body ?>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>