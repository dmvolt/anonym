<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
use app\components\helpers\ArrayHelper;
use yii\grid\GridView;

use yii\widgets\ActiveForm;

use app\components\widgets\backend\grid\StatusColumn;
use app\components\widgets\backend\grid\EditColumn;
use app\modules\infoblock\Module;
use app\components\helpers\Language;

$this->title = 'Инфоблоки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-index">

    <h3><?= Html::encode($this->title) ?></h3>

	<hr>
	<?php $form = ActiveForm::begin(['action' => '/admin/' . Module::getInstance()->id . '/create']); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<?= $form->field($newModel, 'lang_id')->dropDownList(ArrayHelper::map2(Language::getLanguages(), null, 'name')) ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<?= $form->field($newModel, 'title')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="form-group pd-top-25">
				<?= Html::submitButton('Быстро создать новый блок', ['class' => 'btn btn-success']) ?>
			</div>
		</div>
	</div>
	<?php ActiveForm::end(); ?>
	<hr>

	<p>
		<?= Html::a('Создать новый блок', ['create'], ['class' => 'btn btn-success btn-xs']) ?>
		<?= Html::button('Сохранить изменения', ['class' => 'btn btn-warning btn-xs right', 'onclick' => 'multiUpdate("update_form")']) ?>
	</p>

	<?= Html::beginForm('/admin/' . Module::getInstance()->id . '/multi-action', 'post', ['id' => 'update_form']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			['class' => 'yii\grid\CheckboxColumn'],
			[
				'filter' => ArrayHelper::map2(Language::getLanguages(), null, 'name'),
				'attribute' => 'lang_id',
				'format' => 'raw',
				'value' => function ($model, $key, $index, $column) {
					return '<p class="text-right"><span class="label label-default">'.Html::encode(Language::getLanguageName($model->lang_id, 'name')).'</span>';
				}
			],
			[
				'class' => EditColumn::className(),
				'attribute' => 'title',
			],
			[
				'class' => EditColumn::className(),
				'attribute' => 'alias',
			],
			[
				'format' => 'html',
				'attribute' => 'body',
				'value' => function ($model, $key, $index, $column) {
					return StringHelper::truncate($model->{$column->attribute}, 50);
				}
			],
			[
				'class' => EditColumn::className(),
				'attribute' => 'weight',
				'fieldType' => 'number',
				'style' => 'small right',
			],
			[
				'class' => StatusColumn::className(),
				'attribute' => 'status',
			],
            [	
				'class' => 'yii\grid\ActionColumn', 
				'template' => '<p class="text-right">{update}&nbsp;&nbsp;{delete}</p>'
			],
        ],
    ]); ?>
	<?= Html::endForm()?>
</div>
