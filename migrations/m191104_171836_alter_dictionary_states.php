<?php

use yii\db\Migration;

/**
 * Class m191104_171836_alter_dictionary_states
 */
class m191104_171836_alter_dictionary_states extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->delete('dictionary_states');
        $this->addColumn('dictionary_states', 'short_name', $this->string());
        $this->insert('dictionary_states', ['name' => 'Alabama', 'short_name' => 'AL']);
        $this->insert('dictionary_states', ['name' => 'Alaska', 'short_name' => 'AK']);
        $this->insert('dictionary_states', ['name' => 'Arizona', 'short_name' => 'AZ']);
        $this->insert('dictionary_states', ['name' => 'Arkansas', 'short_name' => 'AR']);
        $this->insert('dictionary_states', ['name' => 'California', 'short_name' => 'CA']);
        $this->insert('dictionary_states', ['name' => 'Colorado', 'short_name' => 'CO']);
        $this->insert('dictionary_states', ['name' => 'Connecticut', 'short_name' => 'CT']);
        $this->insert('dictionary_states', ['name' => 'Delaware', 'short_name' => 'DE']);
        $this->insert('dictionary_states', ['name' => 'Florida', 'short_name' => 'FL']);
        $this->insert('dictionary_states', ['name' => 'Georgia', 'short_name' => 'GA']);
        $this->insert('dictionary_states', ['name' => 'Hawaii', 'short_name' => 'HI']);
        $this->insert('dictionary_states', ['name' => 'Idaho', 'short_name' => 'ID']);
        $this->insert('dictionary_states', ['name' => 'Illinois', 'short_name' => 'IL']);
        $this->insert('dictionary_states', ['name' => 'Indiana', 'short_name' => 'IN']);
        $this->insert('dictionary_states', ['name' => 'Iowa', 'short_name' => 'IA']);
        $this->insert('dictionary_states', ['name' => 'Kansas', 'short_name' => 'KS']);
        $this->insert('dictionary_states', ['name' => 'Kentucky', 'short_name' => 'KY']);
        $this->insert('dictionary_states', ['name' => 'Louisiana', 'short_name' => 'LA']);
        $this->insert('dictionary_states', ['name' => 'Maine', 'short_name' => 'ME']);
        $this->insert('dictionary_states', ['name' => 'Maryland', 'short_name' => 'MD']);
        $this->insert('dictionary_states', ['name' => 'Massachusetts', 'short_name' => 'MA']);
        $this->insert('dictionary_states', ['name' => 'Michigan', 'short_name' => 'MI']);
        $this->insert('dictionary_states', ['name' => 'Minnesota', 'short_name' => 'MN']);
        $this->insert('dictionary_states', ['name' => 'Mississippi', 'short_name' => 'MS']);
        $this->insert('dictionary_states', ['name' => 'Missouri', 'short_name' => 'MO']);
        $this->insert('dictionary_states', ['name' => 'Montana', 'short_name' => 'MT']);
        $this->insert('dictionary_states', ['name' => 'Nebraska', 'short_name' => 'NE']);
        $this->insert('dictionary_states', ['name' => 'Nevada', 'short_name' => 'NV']);
        $this->insert('dictionary_states', ['name' => 'New Hampshire', 'short_name' => 'NH']);
        $this->insert('dictionary_states', ['name' => 'New Jersey', 'short_name' => 'NJ']);
        $this->insert('dictionary_states', ['name' => 'New Mexico', 'short_name' => 'NM']);
        $this->insert('dictionary_states', ['name' => 'New York', 'short_name' => 'NY']);
        $this->insert('dictionary_states', ['name' => 'North Carolina', 'short_name' => 'NC']);
        $this->insert('dictionary_states', ['name' => 'North Dakota', 'short_name' => 'ND']);
        $this->insert('dictionary_states', ['name' => 'Ohio', 'short_name' => 'OH']);
        $this->insert('dictionary_states', ['name' => 'Oklahoma', 'short_name' => 'OK']);
        $this->insert('dictionary_states', ['name' => 'Oregon', 'short_name' => 'OR']);
        $this->insert('dictionary_states', ['name' => 'Pennsylvania', 'short_name' => 'PA']);
        $this->insert('dictionary_states', ['name' => 'Rhode Island', 'short_name' => 'RI']);
        $this->insert('dictionary_states', ['name' => 'South Carolina', 'short_name' => 'SC']);
        $this->insert('dictionary_states', ['name' => 'South Dakota', 'short_name' => 'SD']);
        $this->insert('dictionary_states', ['name' => 'Tennessee', 'short_name' => 'TN']);
        $this->insert('dictionary_states', ['name' => 'Texas', 'short_name' => 'TX']);
        $this->insert('dictionary_states', ['name' => 'Utah', 'short_name' => 'UT']);
        $this->insert('dictionary_states', ['name' => 'Vermont', 'short_name' => 'VT']);
        $this->insert('dictionary_states', ['name' => 'Virginia', 'short_name' => 'VA']);
        $this->insert('dictionary_states', ['name' => 'Washington', 'short_name' => 'WA']);
        $this->insert('dictionary_states', ['name' => 'West Virginia', 'short_name' => 'WV']);
        $this->insert('dictionary_states', ['name' => 'Wisconsin', 'short_name' => 'WI']);
        $this->insert('dictionary_states', ['name' => 'Wyoming', 'short_name' => 'WY']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191104_171836_alter_dictionary_states cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191104_171836_alter_dictionary_states cannot be reverted.\n";

        return false;
    }
    */
}