<?php

use yii\db\Migration;

/**
 * Class m190414_172801_add_add_to_mainpage_to_pages
 */
class m190414_172801_add_add_to_mainpage_to_pages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pages', 'add_to_mainpage', $this->integer()->null()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190414_172801_add_add_to_mainpage_to_pages cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190414_172801_add_add_to_mainpage_to_pages cannot be reverted.\n";

        return false;
    }
    */
}
