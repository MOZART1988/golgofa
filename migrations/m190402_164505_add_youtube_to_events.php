<?php

use yii\db\Migration;

/**
 * Class m190402_164505_add_youtube_to_events
 */
class m190402_164505_add_youtube_to_events extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('events', 'youtube', $this->string()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190402_164505_add_youtube_to_events cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190402_164505_add_youtube_to_events cannot be reverted.\n";

        return false;
    }
    */
}
