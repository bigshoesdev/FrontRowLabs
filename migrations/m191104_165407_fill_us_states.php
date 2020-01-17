<?php

use yii\db\Migration;

/**
 * Class m191104_165407_fill_us_states
 */
class m191104_165407_fill_us_states extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->delete('dictionary_states');
        $this->insert('dictionary_states', ['name' => 'Alabama']);
        $this->insert('dictionary_states', ['name' => 'Alaska']);
        $this->insert('dictionary_states', ['name' => 'Arizona']);
        $this->insert('dictionary_states', ['name' => 'Arkansas']);
        $this->insert('dictionary_states', ['name' => 'California']);
        $this->insert('dictionary_states', ['name' => 'Colorado']);
        $this->insert('dictionary_states', ['name' => 'Connecticut']);
        $this->insert('dictionary_states', ['name' => 'Delaware']);
        $this->insert('dictionary_states', ['name' => 'Florida']);
        $this->insert('dictionary_states', ['name' => 'Georgia']);
        $this->insert('dictionary_states', ['name' => 'Hawaii']);
        $this->insert('dictionary_states', ['name' => 'Idaho']);
        $this->insert('dictionary_states', ['name' => 'Illinois']);
        $this->insert('dictionary_states', ['name' => 'Indiana']);
        $this->insert('dictionary_states', ['name' => 'Iowa']);
        $this->insert('dictionary_states', ['name' => 'Kansas']);
        $this->insert('dictionary_states', ['name' => 'Kentucky']);
        $this->insert('dictionary_states', ['name' => 'Louisiana']);
        $this->insert('dictionary_states', ['name' => 'Maine']);
        $this->insert('dictionary_states', ['name' => 'Maryland']);
        $this->insert('dictionary_states', ['name' => 'Massachusetts']);
        $this->insert('dictionary_states', ['name' => 'Michigan']);
        $this->insert('dictionary_states', ['name' => 'Minnesota']);
        $this->insert('dictionary_states', ['name' => 'Mississippi']);
        $this->insert('dictionary_states', ['name' => 'Missouri']);
        $this->insert('dictionary_states', ['name' => 'Montana']);
        $this->insert('dictionary_states', ['name' => 'Nebraska']);
        $this->insert('dictionary_states', ['name' => 'Nevada']);
        $this->insert('dictionary_states', ['name' => 'New Hampshire']);
        $this->insert('dictionary_states', ['name' => 'New Jersey']);
        $this->insert('dictionary_states', ['name' => 'New Mexico']);
        $this->insert('dictionary_states', ['name' => 'New York']);
        $this->insert('dictionary_states', ['name' => 'North Carolina']);
        $this->insert('dictionary_states', ['name' => 'North Dakota']);
        $this->insert('dictionary_states', ['name' => 'Ohio']);
        $this->insert('dictionary_states', ['name' => 'Oklahoma']);
        $this->insert('dictionary_states', ['name' => 'Oregon']);
        $this->insert('dictionary_states', ['name' => 'Pennsylvania']);
        $this->insert('dictionary_states', ['name' => 'Rhode Island']);
        $this->insert('dictionary_states', ['name' => 'South Carolina']);
        $this->insert('dictionary_states', ['name' => 'South Dakota']);
        $this->insert('dictionary_states', ['name' => 'Tennessee']);
        $this->insert('dictionary_states', ['name' => 'Texas']);
        $this->insert('dictionary_states', ['name' => 'Utah']);
        $this->insert('dictionary_states', ['name' => 'Vermont']);
        $this->insert('dictionary_states', ['name' => 'Virginia']);
        $this->insert('dictionary_states', ['name' => 'Washington']);
        $this->insert('dictionary_states', ['name' => 'West Virginia']);
        $this->insert('dictionary_states', ['name' => 'Wisconsin']);
        $this->insert('dictionary_states', ['name' => 'Wyoming']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191104_165407_fill_us_states cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191104_165407_fill_us_states cannot be reverted.\n";

        return false;
    }
    */
}