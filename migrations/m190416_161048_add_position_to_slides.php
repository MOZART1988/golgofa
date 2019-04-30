<?php

use yii\db\Migration;

/**
 * Class m190416_161048_add_position_to_slides
 */
class m190416_161048_add_position_to_slides extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('slides', 'position', $this->integer()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190416_161048_add_position_to_slides cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190416_161048_add_position_to_slides cannot be reverted.\n";

        return false;
    }
    */
}
