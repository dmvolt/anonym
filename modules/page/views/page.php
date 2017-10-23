<?php
use yii\helpers\Html;
use app\components\helpers\Text;

$this->params['breadcrumbs'][] = $page->title;
?>
<?php if ($page->alias == 'contacts'): ?>
	<div class="container-fluid">
		<div class="row">
			<?= $this->params['siteinfo']->map ?>
		</div>
	</div>
<?php endif; ?>

<div class="container">
	<div class="row m-25">
		<?= Text::_edit($page->id, 'page') ?> <!-- Ссылка на редактирование материала -->
		
		<h1><?= Html::encode($page->title) ?></h1>
		<article class="article clearfix">
			<?= $page->body ?>
		</article>
	</div>
</div>