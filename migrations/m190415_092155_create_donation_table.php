<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%donation}}`.
 */
class m190415_092155_create_donation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%donation}}', [
            'id' => $this->primaryKey(),
            'lang_id' => $this->integer()->notNull(),
            'is_active' => $this->smallInteger()->defaultValue(1)->null(),
            'title' => $this->string()->notNull(),
            'text' => $this->string()->null(),
            'requisites' => $this->string()->null(),
            'image' => $this->string()->null(),

            'meta_title' => $this->string()->null(),
            'meta_description' => $this->string()->null(),
            'meta_keywords' => $this->string()->null(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%donation}}');
    }
}
