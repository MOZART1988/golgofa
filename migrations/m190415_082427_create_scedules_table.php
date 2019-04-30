<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%scedules}}`.
 */
class m190415_082427_create_scedules_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%scedules}}', [
            'id' => $this->primaryKey(),
            'is_active' => $this->smallInteger()->defaultValue(0)->null(),
            'lang_id' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
            'week_day' => $this->smallInteger()->defaultValue(1),
            'title' => $this->string()->notNull(),
            'time' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%scedules}}');
    }
}
