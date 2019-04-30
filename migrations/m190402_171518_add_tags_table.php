<?php

use yii\db\Migration;

/**
 * Class m190402_171518_add_tags_table
 */
class m190402_171518_add_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tags', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ]);

        $this->createTable('events_tags', [
            'tag_id' => $this->integer()->notNull(),
            'event_id' => $this->integer()->notNull()
        ]);

        $this->addPrimaryKey('pk-events_tags', 'events_tags', ['event_id', 'tag_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tags');
    }
}
