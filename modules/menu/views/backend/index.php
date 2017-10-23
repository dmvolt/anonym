<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\helpers\ArrayHelper;

use leandrogehlen\treegrid\TreeGrid;
use app\components\widgets\backend\grid\StatusColumn;
use app\components\widgets\backend\grid\EditColumn;
use app\modules\menu\Module;

use yii\widgets\ActiveForm;
use app\components\helpers\Language;

$this->title = 'Меню';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">
    <h3><?= Html::encode($this->title) ?></h3>

	<hr>
	<?php $form = ActiveForm::begin(['action' => '/admin/' . Module::getInstance()->id . '/create']); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<?= $form->field($newModel, 'lang_id')->dropDownList(ArrayHelper::map2(Language::getLanguages(), null, 'name')) ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<?= $form->field($newModel, 'parent_id')->dropDownList(ArrayHelper::map($parentItems, 'id', 'title'), ['prompt' => '.. нет ..', 'options' => [$newModel->parent_id => ['class' => 'selected']]]) ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<?= $form->field($newModel, 'title')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<?= $form->field($newModel, 'url')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="form-group pd-top-25">
				<?= Html::submitButton('Создать новую запись', ['class' => 'btn btn-success']) ?>
			</div>
		</div>
	</div>
	<?php ActiveForm::end(); ?>
	<hr>

    <p>
		<?//= Html::a('Создать новую запись', ['create'], ['class' => 'btn btn-success btn-xs']) ?>
		<?= Html::button('Сохранить изменения', ['class' => 'btn btn-warning btn-xs right', 'onclick' => 'multiUpdate("update_form")']) ?><br>
    </p>

	<?= Html::beginForm('/admin/' . Module::getInstance()->id . '/multi-action', 'post', ['id' => 'update_form']) ?>
	<?= TreeGrid::widget([
		'dataProvider' => $dataProvider,
		'keyColumnName' => 'id',
		'parentColumnName' => 'parent_id',
		'parentRootValue' => 0, //first parentId value
		'pluginOptions' => [
			'initialState' => 'collapsed',
		],
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			['class' => 'yii\grid\CheckboxColumn'],
			[
				/* 'filter' => Language::getLanguages(), */
				'attribute' => 'lang_id',
				'format' => 'raw',
				'value' => function ($model, $key, $index, $column) {
					return '<p class="text-right"><span class="label label-default">'.Html::encode(Language::getLanguageName($model->lang_id)).'</span>';
				}
			],
			[
				'class' => EditColumn::className(),
				'attribute' => 'title',
				'style' => 'middle center',
			],
			[
				'class' => EditColumn::className(),
				'attribute' => 'url',
				'style' => 'middle center',
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
			]
		]
	]); ?>
	<?= Html::endForm()?>
</div>