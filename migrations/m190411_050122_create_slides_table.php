<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slides}}`.
 */
class m190411_050122_create_slides_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slides}}', [
            'id' => $this->primaryKey(),
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
