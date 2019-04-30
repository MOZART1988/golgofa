<?php

use yii\db\Migration;

/**
 * Class m190411_041544_add_lang_id_to_pastor
 */
class m190411_041544_add_lang_id_to_pastor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pastor', 'lang_id', $this->integer()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190411_041544_add_lang_id_to_pastor cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190411_041544_add_lang_id_to_pastor cannot be reverted.\n";

        return false;
    }
    */
}
