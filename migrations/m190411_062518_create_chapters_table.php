<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%chapters}}`.
 */
class m190411_062518_create_chapters_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('chapters', [
            'id' => $this->primaryKey(),
            'lang_id' => $this->integer()->defaultValue(1),
            'is_active' => $this->smallInteger()->defaultValue(1),
            'title' => $this->string()->notNull(),
            'sub_title' => $this->string()->notNull(),
            'text' => $this->text()->null(),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
            'meta_title' => $this->string()->null(),
            'meta_description' => $this->string()->null(),
            'meta_keywords' => $this->string()->null()
        ]);

        $this->createTable('sub_chapters', [
            'id' => $this->primaryKey(),
            'lang_id' => $this->integer()->defaultValue(1),
            'chapter_id' => $this->integer()->notNull(),
            'is_active' => $this->smallInteger()->defaultValue(1),
            'title' => $this->string()->notNull(),
            'sub_title' => $this->string()->notNull(),
            'text' => $this->text()->null(),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
            'meta_title' => $this->string()->null(),
            'meta_description' => $this->string()->null(),
            'meta_keywords' => $this->string()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%chapters}}');
        $this->dropTable('sub_chapters');
    }
}
