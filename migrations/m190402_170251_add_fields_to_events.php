<?php

use yii\db\Migration;

/**
 * Class m190402_170251_add_fields_to_events
 */
class m190402_170251_add_fields_to_events extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('events', 'image', $this->string()->null());
        $this->addColumn('events', 'add_to_mainpage', $this->smallInteger()->defaultValue(0));
        $this->addColumn('events', 'short_text', $this->string()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190402_170251_add_fields_to_events cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190402_170251_add_fields_to_events cannot be reverted.\n";

        return false;
    }
    */
}
