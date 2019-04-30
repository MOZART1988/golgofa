<?php

use yii\db\Migration;

/**
 * Class m190408_072437_add_template_type_to_content
 */
class m190408_072437_add_template_type_to_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('content', 'template_type', $this->integer()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190408_072437_add_template_type_to_content cannot be reverted.\n";

        return false;
    }
}
