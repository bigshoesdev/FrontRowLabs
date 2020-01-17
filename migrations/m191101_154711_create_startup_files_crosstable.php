<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%startup_files_cross}}`.
 */
class m191101_154711_create_startup_files_crosstable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%startup_files}}', [
            'id' => $this->primaryKey(),
            'startup_id' => $this->integer()->notNull(),
            'file_id' => $this->integer()->notNull()
        ]);

        $this->createIndex(
            'idx-unique-startup-file',
            'startup_files',
            ['startup_id', 'file_id'],
            true
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%startup_files}}');
    }
}