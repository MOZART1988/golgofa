<?php

use yii\db\Migration;

/**
 * Class m190416_094018_add_open_new_page_to_projects
 */
class m190416_094018_add_open_new_page_to_projects extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('projects', 'is_new_page', $this->smallInteger()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190416_094018_add_open_new_page_to_projects cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190416_094018_add_open_new_page_to_projects cannot be reverted.\n";

        return false;
    }
    */
}
