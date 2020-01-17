<?php

use yii\db\Migration;

/**
 * Class m191111_122128_add_timestamp_to_startup_table
 */
class m191111_122128_add_timestamp_to_startup_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('startups','created_at', $this->string()->null());
        $this->addColumn('startups','updated_at',$this->string()->null());
        $this->addColumn('comments','startup_id',$this->integer()->notNull());
        $this->addForeignKey(
            'fk-startup-id',
            'comments',
            'startup_id',
            'startups',
            'id',
            'CASCADE'
        );
        $this->alterColumn('comments','created_at',$this->string()->null());
        $this->alterColumn('comments','updated_at',$this->string()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('comments','created_at',$this->dateTime());
        $this->alterColumn('comments','updated_at',$this->dateTime());
        $this->dropForeignKey('fk-startup-id', 'comments');
        $this->dropColumn('comments','startup_id');
        $this->dropColumn('startups','created_at');
        $this->dropColumn('startups','updated_at');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191111_122128_add_timestamp_to_startup_table cannot be reverted.\n";

        return false;
    }
    */
}
