<?php

use yii\db\Migration;

/**
 * Class m191230_192822_add_company_to_users_table
 */
class m191230_192822_add_company_to_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'company', $this->string());
        $this->addColumn('users', 'website', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191230_192822_add_company_to_users_table cannot be reverted.\n";

        $this->dropColumn('users', 'company');
        $this->dropColumn('users', 'website');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191230_192822_add_company_to_users_table cannot be reverted.\n";

        return false;
    }
    */
}
