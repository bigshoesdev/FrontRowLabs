<?php

use yii\db\Migration;

/**
 * Class m191101_153733_alter_startup_table
 */
class m191101_153733_alter_startup_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-startup-demo-file',
            'startups',
            'demo_file_id',
            'files',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-startup-demo-file', 'startups');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191101_153733_alter_startup_table cannot be reverted.\n";

        return false;
    }
    */
}