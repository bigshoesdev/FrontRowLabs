<?php

use yii\db\Migration;

/**
 * Class m191104_212819_alter_startup_stat_id_nullable
 */
class m191104_212819_alter_startup_stat_id_nullable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('fk-startup-state', 'startups');
        $this->alterColumn('startups', 'state_id', $this->integer()->Null());
        $this->addColumn('startups', 'demo_url', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191104_212819_alter_startup_stat_id_nullable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191104_212819_alter_startup_stat_id_nullable cannot be reverted.\n";

        return false;
    }
    */
}