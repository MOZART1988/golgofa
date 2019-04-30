<?php

use yii\db\Migration;

/**
 * Class m190404_091253_rename_title_to_file_in_gallery_images
 */
class m190404_091253_rename_title_to_file_in_gallery_images extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('gallery_images', 'title', 'filename');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190404_091253_rename_title_to_file_in_gallery_images cannot be reverted.\n";

        return false;
    }
}
