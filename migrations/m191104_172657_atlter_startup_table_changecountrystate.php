<?php

use yii\db\Migration;

/**
 * Class m191104_172657_atlter_startup_table_changecountrystate
 */
class m191104_172657_atlter_startup_table_changecountrystate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('startups', 'registration_country_id', $this->integer());
        $this->addColumn('startups', 'registration_state_id', $this->integer());

        $this->dropForeignKey('fk-startup-countrystate', 'startups');
        $this->dropColumn('startups', 'countrystate_id');

        $this->addForeignKey(
            'fk-startup-registration-country',
            'startups',
            'registration_country_id',
            'dictionary_countries',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-registration-state',
            'startups',
            'registration_state_id',
            'dictionary_states',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191104_172657_atlter_startup_table_changecountrystate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191104_172657_atlter_startup_table_changecountrystate cannot be reverted.\n";

        return false;
    }
    */
}