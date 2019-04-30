<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pastor}}`.
 */
class m190411_035234_create_pastor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pastor', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'rang' => $this->string()->null(),
            'text' => $this->text()->null(),
            'image' => $this->string()->null(),
            'is_active' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pastor');
    }
}
