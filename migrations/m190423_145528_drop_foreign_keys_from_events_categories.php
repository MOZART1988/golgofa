<?php

use yii\db\Migration;

/**
 * Class m190423_145528_drop_foreign_keys_from_events_categories
 */
class m190423_145528_drop_foreign_keys_from_events_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('events_events_categories_fdx', 'events_categories');
        $this->dropForeignKey('categories_events_categories_fdx', 'events_categories');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190423_145528_drop_foreign_keys_from_events_categories cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190423_145528_drop_foreign_keys_from_events_categories cannot be reverted.\n";

        return false;
    }
    */
}
