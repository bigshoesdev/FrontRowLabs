<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%startups}}`.
 */
class m191031_100942_create_startups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%startups}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'status_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'is_registered' => $this->boolean()->notNull(),
            'countrystate_id' => $this->integer(),
            'description' => $this->text(),
            'problem' => $this->text(),
            'has_demo' => $this->boolean()->notNull(),
            'demo_file_id' => $this->integer(),
            'country_id' => $this->integer()->notNull(),
            'state_id' => $this->integer()->notNull(),
            'industry_id' => $this->integer()->notNull(),
            'devstage_id' => $this->integer()->notNull(),
            'funding_id' => $this->integer()->notNull(),
            'people_id' => $this->integer()->notNull(),
            'has_paying' => $this->boolean()->notNull(),
            'customer_id' => $this->integer(),
            'pitchdeck' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-startup-user',
            'startups',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-status',
            'startups',
            'status_id',
            'dictionary_statuses',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-countrystate',
            'startups',
            'countrystate_id',
            'dictionary_countrystates',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-country',
            'startups',
            'country_id',
            'dictionary_countries',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-state',
            'startups',
            'state_id',
            'dictionary_states',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-industry',
            'startups',
            'industry_id',
            'dictionary_industries',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-devstage',
            'startups',
            'devstage_id',
            'dictionary_devstages',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-funding',
            'startups',
            'funding_id',
            'dictionary_fundings',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-people',
            'startups',
            'people_id',
            'dictionary_peoples',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-startup-customer',
            'startups',
            'customer_id',
            'dictionary_customers',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-startup-user', 'startups');
        $this->dropForeignKey('fk-startup-status', 'startups');
        $this->dropForeignKey('fk-startup-countrystate', 'startups');
        $this->dropForeignKey('fk-startup-country', 'startups');
        $this->dropForeignKey('fk-startup-state', 'startups');
        $this->dropForeignKey('fk-startup-industry', 'startups');
        $this->dropForeignKey('fk-startup-devstage', 'startups');
        $this->dropForeignKey('fk-startup-funding', 'startups');
        $this->dropForeignKey('fk-startup-people', 'startups');
        $this->dropForeignKey('fk-startup-customer', 'startups');

        $this->dropTable('{{%startups}}');
    }
}