<?php

use yii\db\Migration;

/**
 * Class m190402_110512_add_primary_key_to_events_categories
 */
class m190402_110512_add_primary_key_to_events_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addPrimaryKey('pk-events_categories', 'events_categories', ['event_id', 'category_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190402_110512_add_primary_key_to_events_categories cannot be reverted.\n";

        return false;
    }
}
