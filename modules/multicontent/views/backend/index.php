<?php

use app\modules\multicontent\models\Multicontent;

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\helpers\ArrayHelper;

use yii\grid\GridView;
use kartik\date\DatePicker;

use yii\widgets\ActiveForm;

use app\components\widgets\backend\grid\StatusColumn;
use app\components\widgets\backend\grid\EditColumn;
use app\modules\multicontent\Module;

use app\components\helpers\Language;

$this->title = 'Групповые блоки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-index">
    <h3><?= Html::encode($this->title) ?></h3>
    
    <hr>
	<?php $form = ActiveForm::begin(['action' => '/admin/' . Module::getInstance()->id . '/create-fast']); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<?= $form->field($newModel, 'lang_id')->dropDownList(ArrayHelper::map2(Language::getLanguages(), null, 'name')) ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<?= $form->field($newModel, 'type_id')->dropDownList(Multicontent::getTypeArray()) ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<?= $form->field($newModel, 'title')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="form-group pd-top-25">
				<?= Html::submitButton('Быстро создать новую запись', ['class' => 'btn btn-success']) ?>
			</div>
		</div>
	</div>
	<?php ActiveForm::end(); ?>
	<hr>

    <p>
        <?= Html::a('Создать новую запись', ['create'], ['class' => 'btn btn-success btn-xs']) ?>
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
					return '<p class="text-right"><span class="label label-default">'.Html::encode(Language::getLanguageName($model->lang_id)).'</span>';
				}
			],
			[
				'filter' => Multicontent::getTypeArray(),
				'attribute' => 'type_id',
				'format' => 'raw',
				'value' => function ($model, $key, $index, $column) {
					return '<p class="text-right"><span class="label label-default">'.Html::encode($model->getTypeName()).'</span>';
				}
			],
			/* [
				'filter' => DatePicker::widget([
					'model' => $searchModel,
					'attribute' => 'date_from',
					'attribute2' => 'date_to',
					'type' => DatePicker::TYPE_RANGE,
					'separator' => '-',
					'pluginOptions' => ['format' => 'yyyy-mm-dd']
				]),
				'attribute' => 'date',
				'format' => 'date',
			], */
			[
				'class' => EditColumn::className(),
				'attribute' => 'title',
			],
			[
				'class' => EditColumn::className(),
				'attribute' => 'alias',
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
			],
		],
	]); ?>
	<?= Html::endForm()?>
</div>