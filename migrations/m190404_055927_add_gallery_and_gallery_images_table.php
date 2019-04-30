<?php

use yii\db\Migration;

/**
 * Class m190404_055927_add_gallery_and_gallery_images_table
 */
class m190404_055927_add_gallery_and_gallery_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('gallery', [
            'id' => 'pk',
            'title' => $this->string()->notNull(),
            'is_active' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ], $tableOptions);

        $this->createIndex('active_gallery', 'gallery', 'is_active');

        $this->createTable('gallery_images', [
            'id' => 'pk',
            'gallery_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->null(),
            'position' => $this->integer()->defaultValue(0),
            'is_active' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ], $tableOptions);

        $this->createIndex('gallery', 'gallery_images', 'gallery_id');
        $this->createIndex('active_gallery_image', 'gallery_images', 'is_active');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190404_055927_add_gallery_and_gallery_images_table cannot be reverted.\n";

        return false;
    }
}
