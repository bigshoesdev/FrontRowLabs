<?php

use yii\db\Migration;

/**
 * Class m191104_173404_drop_dictionary_countrystate
 */
class m191104_173404_drop_dictionary_countrystate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('dictionary_countrystates');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191104_173404_drop_dictionary_countrystate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191104_173404_drop_dictionary_countrystate cannot be reverted.\n";

        return false;
    }
    */
}