<?php

use yii\db\Migration;

/**
 * Class m191128_094416_return_some_startups_fields
 */
class m191128_094416_return_some_startups_fields extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('startups', 'people_count', $this->integer());
        $this->addColumn('startups', 'demo_url', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('startups', 'people_count');
        $this->dropColumn('startups', 'demo_url');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191128_094416_return_some_startups_fields cannot be reverted.\n";

        return false;
    }
    */
}
