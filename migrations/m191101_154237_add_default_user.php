<?php

use yii\db\Migration;

/**
 * Class m191101_154237_add_default_user
 */
class m191101_154237_add_default_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('users', ['name' => 'default_user']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191101_154237_add_default_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191101_154237_add_default_user cannot be reverted.\n";

        return false;
    }
    */
}