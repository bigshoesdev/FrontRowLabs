<?php

use yii\db\Migration;

/**
 * Class m191127_112723_update_users_table
 */
class m191127_112723_update_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('users', 'name', 'first_name');
        $this->addColumn('users', 'last_name', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('users', 'first_name', 'name');
        $this->dropColumn('users', 'last_name');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191127_112723_update_users_table cannot be reverted.\n";

        return false;
    }
    */
}
