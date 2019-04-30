<?php

use yii\db\Migration;

/**
 * Class m190411_050818_add_meta_data_to_tables
 */
class m190411_050818_add_meta_data_to_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('content', 'meta_title', $this->string()->null());
        $this->addColumn('content', 'meta_description', $this->string()->null());
        $this->addColumn('content', 'meta_keywords', $this->string()->null());

        $this->addColumn('events', 'meta_title', $this->string()->null());
        $this->addColumn('events', 'meta_description', $this->string()->null());
        $this->addColumn('events', 'meta_keywords', $this->string()->null());

        $this->addColumn('pages', 'meta_title', $this->string()->null());
        $this->addColumn('pages', 'meta_description', $this->string()->null());
        $this->addColumn('pages', 'meta_keywords', $this->string()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190411_050818_add_meta_data_to_tables cannot be reverted.\n";

        return false;
    }
}
