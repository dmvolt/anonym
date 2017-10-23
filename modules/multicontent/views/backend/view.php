<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\helpers\Img;
use app\modules\multicontent\Module;
/* @var $this yii\web\View */
/* @var $model app\models\Partners */
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Контент', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-view">
    <h3><?= Html::encode($this->title) ?></h3>
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
			
			[
				'label' => 'Тип материала',
				'value' => '<p class="text-success">'.Html::encode($model->getTypeName()).'</p>',
				'format' => 'html',
			],
            'title',
			'alias',
            [
				'label' => 'Картинка',
				'value' => ($model->image AND !empty($model->image))? '<img src="'.Img::_(Module::getInstance()->id, $model->id, 'thumbnail', $model->image).'">':'',
				'format' => 'html',
			],
            'teaser:html',
            'body:html',
            'weight',
            [
				'label' => 'Статус',
				'value' => ($model->status)? '<p class="text-success">Активный</p>':'<p class="text-danger">Неактивный</p>',
				'format' => 'html',
			],
        ],
    ]) ?>
</div>