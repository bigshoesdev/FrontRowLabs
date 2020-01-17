<?php

use yii\db\Migration;

/**
 * Class m191127_114349_update_startups_table
 */
class m191127_114349_update_startups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        \app\models\Startup::deleteAll();

        $this->dropColumn('startups', 'is_registered');

        $this->dropForeignKey('fk-startup-demo-file', 'startups');
        $this->dropColumn('startups', 'demo_file_id');

        $this->dropForeignKey('fk-startup-country', 'startups');
        $this->dropColumn('startups', 'country_id');

        $this->dropColumn('startups', 'state_id');

        $this->dropForeignKey('fk-startup-status', 'startups');
        $this->renameColumn('startups', 'status_id', 'status');

        $this->dropForeignKey('fk-startup-funding', 'startups');
        $this->renameColumn('startups', 'funding_id', 'funding');

        $this->dropForeignKey('fk-startup-people', 'startups');
        $this->dropColumn('startups', 'people_id');

        $this->dropForeignKey('fk-startup-customer', 'startups');
        $this->dropColumn('startups', 'customer_id');

        $this->dropForeignKey('fk-startup-registration-country', 'startups');
        $this->dropColumn('startups', 'registration_country_id');

        $this->dropForeignKey('fk-startup-registration-state', 'startups');
        $this->dropColumn('startups', 'registration_state_id');

        $this->dropColumn('startups', 'demo_url');

        $this->addColumn('startups', 'address', $this->string());
        $this->addColumn('startups', 'url', $this->string());
        $this->addColumn('startups', 'business_model', $this->text());
        $this->addColumn('startups', 'proofs', $this->text());
        $this->addColumn('startups', 'age', $this->integer());
        $this->addColumn('startups', 'has_launched', $this->boolean()->defaultValue(false));

        $this->dropTable('dictionary_countries');
        $this->dropTable('dictionary_states');
        $this->dropTable('dictionary_fundings');
        $this->dropTable('dictionary_peoples');
        $this->dropTable('dictionary_customers');
        $this->dropTable('dictionary_statuses');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('dictionary_countries', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
        $this->createTable('dictionary_states', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
        $this->createTable('dictionary_fundings', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
        $this->createTable('dictionary_peoples', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
        $this->createTable('dictionary_customers', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
        $this->createTable('dictionary_statuses', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);

        (new m191104_164706_fill_countries())->safeUp();
        (new m191104_165407_fill_us_states())->safeUp();
        (new m191031_105921_fill_dictionaries_mockups())->safeUp();

        $this->truncateTable('startups');

        $this->addColumn('startups', 'country_id', $this->integer()->notNull());
        $this->addForeignKey(
            'fk-startup-country',
            'startups',
            'country_id',
            'dictionary_countries',
            'id',
            'CASCADE'
        );

        $this->addColumn('startups', 'state_id', $this->integer()->notNull());
        $this->addForeignKey(
            'fk-startup-state',
            'startups',
            'state_id',
            'dictionary_states',
            'id',
            'CASCADE'
        );

        $this->renameColumn('startups', 'funding', 'funding_id');
        $this->addForeignKey(
            'fk-startup-funding',
            'startups',
            'funding_id',
            'dictionary_fundings',
            'id',
            'CASCADE'
        );

        $this->addColumn('startups', 'people_id', $this->integer()->notNull());
        $this->addForeignKey(
            'fk-startup-people',
            'startups',
            'people_id',
            'dictionary_peoples',
            'id',
            'CASCADE'
        );

        $this->addColumn('startups', 'people_id', $this->integer());
        $this->addForeignKey(
            'fk-startup-customer',
            'startups',
            'customer_id',
            'dictionary_customers',
            'id',
            'CASCADE'
        );

        $this->addColumn('startups', 'registration_country_id', $this->integer());
        $this->addForeignKey(
            'fk-startup-registration-country',
            'startups',
            'registration_country_id',
            'dictionary_countries',
            'id',
            'CASCADE'
        );

        $this->addColumn('startups', 'registration_state_id', $this->integer());
        $this->addForeignKey(
            'fk-startup-registration-state',
            'startups',
            'registration_state_id',
            'dictionary_states',
            'id',
            'CASCADE'
        );

        $this->addColumn('startups', 'status_id', $this->integer()->notNull());
        $this->addForeignKey(
            'fk-startup-status',
            'startups',
            'status_id',
            'dictionary_statuses',
            'id',
            'CASCADE'
        );

        $this->addColumn('startups', 'demo_url', $this->string());
        $this->dropColumn('startups', 'business_model');
        $this->dropColumn('startups', 'age');
        $this->dropColumn('startups', 'has_launched');
        $this->dropColumn('startups', 'proofs');
        $this->dropColumn('startups', 'address');
        $this->dropColumn('startups', 'url');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191127_114349_update_startups_table cannot be reverted.\n";

        return false;
    }
    */
}
