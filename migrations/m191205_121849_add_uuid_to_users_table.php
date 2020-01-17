<?php

use yii\db\Migration;

/**
 * Class m191205_121849_add_uuid_tu_users_table
 */
class m191205_121849_add_uuid_to_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'uuid', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('users', 'uuid');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191205_121849_add_uuid_tu_users_table cannot be reverted.\n";

        return false;
    }
    */
}
