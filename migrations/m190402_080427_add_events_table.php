<?php

use yii\db\Migration;

/**
 * Class m190402_080427_add_events_table
 */
class m190402_080427_add_events_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'lang_id' => $this->integer()->notNull()->defaultValue(1),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'is_active' => $this->smallInteger()->defaultValue(0),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ]);

        $this->createIndex('categories_lang_id_idx', 'categories', 'lang_id');
        $this->createIndex('categories_is_active_idx', 'categories', 'is_active');

        $this->createTable('events', [
            'id' => $this->primaryKey(),
            'lang_id' => $this->integer()->notNull()->defaultValue(1),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'text' => $this->text()->null(),
            'type' => $this->integer()->null()->defaultValue(1),
            'is_active' => $this->smallInteger()->defaultValue(0),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ]);

        $this->createIndex('events_lang_id_idx', 'events', 'lang_id');
        $this->createIndex('events_is_active_idx', 'events', 'is_active');

        $this->createTable('events_categories', [
            'event_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull()
        ]);

        $this->addForeignKey('events_events_categories_fdx', 'events_categories', 'event_id', 'events', 'id');
        $this->addForeignKey('categories_events_categories_fdx', 'events_categories', 'category_id', 'categories', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('events_categories');
        $this->dropTable('events');
        $this->dropTable('categories');


        return false;
    }
}
