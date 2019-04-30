<?php

use yii\db\Migration;

/**
 * Class m190407_121016_add_image_to_content
 */
class m190407_121016_add_image_to_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('content', 'image', $this->string()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190407_121016_add_image_to_content cannot be reverted.\n";

        return false;
    }
}
