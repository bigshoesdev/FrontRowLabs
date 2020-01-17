<?php

use yii\db\Migration;

/**
 * Class m191111_122128_add_timestamp_to_startup_table
 */
class m191111_122228_make_username_unique extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('users', 'username', $this->string()->unique());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('users', 'username', $this->string());
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
