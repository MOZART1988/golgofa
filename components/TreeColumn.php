<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 05.04.19
 * Time: 15:37
 */

namespace app\components;


use yii\grid\DataColumn;

class TreeColumn extends DataColumn
{
    public $attributeLevel;

    /**
     * @inheritdoc
     */
    protected function renderDataCellContent($model, $key, $index)
    {
        $value = parent::renderDataCellContent($model, $key, $index);

        return '<div class="col-md-' . (13 - $model->level) . ' col-md-offset-' . ($model->level - 1) . '">' . $value . '</div>';
    }

}