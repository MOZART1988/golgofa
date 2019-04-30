<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 14.04.2019
 * Time: 17:13
 */

namespace app\components;

use Yii;
use yii\grid\ActionColumn;

class CustomActionColumn extends ActionColumn
{
    public function initDefaultButtons()
    {
        $this->initDefaultButton('update', 'pencil');
        $this->initDefaultButton('delete', 'trash', [
            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
            'data-method' => 'post',
        ]);
    }
}