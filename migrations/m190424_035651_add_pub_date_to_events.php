<?php

use yii\db\Migration;

/**
 * Class m190424_035651_add_pub_date_to_events
 */
class m190424_035651_add_pub_date_to_events extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('events', 'pub_date', $this->dateTime()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190424_035651_add_pub_date_to_events cannot be reverted.\n";

        return false;
    }

}
