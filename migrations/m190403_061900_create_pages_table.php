<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pages}}`.
 */
class m190403_061900_create_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'lang_id' => $this->integer()->notNull()->defaultValue(1),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'text' => $this->text()->null(),
            'image' => $this->string()->null(),
            'is_active' => $this->smallInteger()->defaultValue(0),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pages');
    }
}
