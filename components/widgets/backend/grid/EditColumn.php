<?php
/**
 * Created by PhpStorm.
 * User: ÑÒÄ
 * Date: 10.08.2016
 * Time: 17:51
 */

namespace app\components\widgets\backend\grid;

use yii\grid\DataColumn;
use yii\helpers\Html;
use Yii;

class EditColumn extends DataColumn
{
    public $style = '';
    public $fieldType = 'text';

    protected function renderDataCellContent($model, $key, $index)
    {
        $value = $this->getDataCellValue($model, $key, $index);
        $html = Html::activeInput($this->fieldType, $model, $this->attribute, ['name' => 'multiedit['.$key.']['.$this->attribute.']', 'class' => 'form-control grid-input '.$this->style]);
        return $value === null ? $this->grid->emptyCell : $html;
    }
}