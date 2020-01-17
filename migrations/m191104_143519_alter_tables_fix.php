<?php

use yii\db\Migration;

/**
 * Class m191104_143519_alter_tables_fix
 */
class m191104_143519_alter_tables_fix extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'country_code', $this->string());
        $this->addColumn('comments', 'comment', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191104_143519_alter_tables_fix cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191104_143519_alter_tables_fix cannot be reverted.\n";

        return false;
    }
    */
}