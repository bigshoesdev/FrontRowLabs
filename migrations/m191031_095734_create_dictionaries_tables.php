<?php

use yii\db\Migration;

/**
 * Class m191031_095734_create_dictionaries_tables
 * 
 * List of dictionaries
 * 1. dictionary_statuses
 * 2. dictionary_countrystates
 * 3. dictionary_countries
 * 4. dictionary_states
 * 5. dictionary_industries
 * 6. dictionary_devstages
 * 7. dictionary_fundings
 * 8. dictionary_peoples
 * 9. dictionary_customers
 */
class m191031_095734_create_dictionaries_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dictionary_statuses}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()
        ]);

        $this->createTable('{{%dictionary_countrystates}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()
        ]);

        $this->createTable('{{%dictionary_countries}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()
        ]);

        $this->createTable('{{%dictionary_states}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()
        ]);

        $this->createTable('{{%dictionary_industries}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()
        ]);

        $this->createTable('{{%dictionary_devstages}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()
        ]);

        $this->createTable('{{%dictionary_fundings}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()
        ]);

        $this->createTable('{{%dictionary_peoples}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()
        ]);

        $this->createTable('{{%dictionary_customers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dictionary_statuses}}');
        $this->dropTable('{{%dictionary_countrystates}}');
        $this->dropTable('{{%dictionary_countries}}');
        $this->dropTable('{{%dictionary_states}}');
        $this->dropTable('{{%dictionary_industries}}');
        $this->dropTable('{{%dictionary_devstages}}');
        $this->dropTable('{{%dictionary_fundings}}');
        $this->dropTable('{{%dictionary_peoples}}');
        $this->dropTable('{{%dictionary_customers}}');
    }
}