<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%content}}`.
 */
class m190401_163931_create_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'lang_id' => $this->integer()->notNull()->defaultValue(1),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'text' => $this->text()->null(),
            'is_active' => $this->smallInteger()->defaultValue(0),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ]);

        $this->createIndex('content_lang_id_idx', 'content', 'lang_id');
        $this->createIndex('content_is_active_idx', 'content', 'is_active');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('content');
    }
}
