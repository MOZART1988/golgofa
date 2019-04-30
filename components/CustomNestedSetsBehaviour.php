<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 25.04.19
 * Time: 13:48
 */

namespace app\components;


use creocoder\nestedsets\NestedSetsBehavior;

class CustomNestedSetsBehaviour extends NestedSetsBehavior
{
    /**
     * Gets the children of the node.
     * @param integer|null $depth the depth
     * @return \yii\db\ActiveQuery
     */
    public function children($depth = null)
    {
        $condition = [
            'and',
            ['>', $this->leftAttribute, $this->owner->getAttribute($this->leftAttribute)],
            ['<', $this->rightAttribute, $this->owner->getAttribute($this->rightAttribute)],
        ];
        if ($depth !== null) {
            $condition[] = ['<=', $this->depthAttribute, $this->owner->getAttribute($this->depthAttribute) + $depth];
        }

        if (isset($this->owner->is_active)) {
            $condition[] = ['is_active' => $this->owner->is_active];
        }

        $this->applyTreeAttributeCondition($condition);
        return $this->owner->find()->andWhere($condition)->addOrderBy([$this->leftAttribute => SORT_ASC]);
    }
}