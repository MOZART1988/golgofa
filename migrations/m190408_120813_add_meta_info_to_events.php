<?php

use yii\db\Migration;

/**
 * Class m190408_120813_add_meta_info_to_events
 */
class m190408_120813_add_meta_info_to_events extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('events', 'meta', $this->string()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190408_120813_add_meta_info_to_events cannot be reverted.\n";

        return false;
    }
}
