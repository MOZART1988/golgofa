<?php

use yii\db\Migration;

/**
 * Class m190402_174100_alter_column_tags
 */
class m190402_174100_alter_column_tags extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('tags', 'title', 'name');
        $this->dropColumn('tags', 'created_at');
        $this->dropColumn('tags', 'updated_at');
        $this->addColumn('tags', 'frequency', $this->integer()->null()->defaultValue(0));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190402_174100_alter_column_tags cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190402_174100_alter_column_tags cannot be reverted.\n";

        return false;
    }
    */
}
