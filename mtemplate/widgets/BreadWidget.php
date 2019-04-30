<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 02.04.19
 * Time: 12:13
 */

namespace mtemplate\widgets;


use yii\base\Widget;

class BreadWidget extends Widget
{
    public $breads;

    public function run()
    {
        parent::run();

        return $this->render('breadWidget', ['breads' => $this->breads]);
    }
}