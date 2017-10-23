<?php

use yii\helpers\Html;
use app\modules\infoblock\components\BlockText;

$this->title = $message;
?>
<div class="container">
	<div class="row m-25">
		<h1><?= Html::encode($message) ?></h1>
		<?= BlockText::_('block_404') ?>
	</div>
</div>