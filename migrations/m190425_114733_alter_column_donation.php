<?php

use yii\db\Migration;

/**
 * Class m190425_114733_alter_column_donation
 */
class m190425_114733_alter_column_donation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('donation', 'requisites', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190425_114733_alter_column_donation cannot be reverted.\n";

        return false;
    }
}
