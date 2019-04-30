<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slides}}`.
 */
class m190414_174419_create_slides_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('slides');

        $this->createTable('{{%slides}}', [
            'id' => $this->primaryKey(),
            'lang_id' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
            'is_active' => $this->smallInteger()->defaultValue(1),
            'title' => $this->string()->notNull(),
            'text' => $this->string()->null(),
            'is_main_event' => $this->smallInteger()->defaultValue(0),
            'link' => $this->string()->notNull(),
            'is_new_page' => $this->smallInteger()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%slides}}');
    }
}
