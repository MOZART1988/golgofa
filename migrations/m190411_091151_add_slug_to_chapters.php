<?php

use yii\db\Migration;

/**
 * Class m190411_091151_add_slug_to_chapters
 */
class m190411_091151_add_slug_to_chapters extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('chapters', 'slug', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190411_091151_add_slug_to_chapters cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190411_091151_add_slug_to_chapters cannot be reverted.\n";

        return false;
    }
    */
}
