<?php

use yii\db\Migration;

/**
 * Class m190405_090539_remove_fields_from_menu_items
 */
class m190405_090539_remove_fields_from_menu_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('menu_items', 'type');
        $this->dropColumn('menu_items', 'params');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190405_090539_remove_fields_from_menu_items cannot be reverted.\n";

        return false;
    }
}
