<?php

use yii\db\Migration;

/**
 * Class m190411_092249_add_slug_to_subchapters
 */
class m190411_092249_add_slug_to_subchapters extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('sub_chapters', 'slug', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190411_092249_add_slug_to_subchapters cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190411_092249_add_slug_to_subchapters cannot be reverted.\n";

        return false;
    }
    */
}
