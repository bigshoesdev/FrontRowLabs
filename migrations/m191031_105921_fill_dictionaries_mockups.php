<?php

use yii\db\Migration;

/**
 * Class m191031_105921_fill_dictionaries_mockups
 */
class m191031_105921_fill_dictionaries_mockups extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('dictionary_statuses', ['name' => 'New']);
        $this->insert('dictionary_statuses', ['name' => 'Applied']);
        $this->insert('dictionary_statuses', ['name' => 'Screening']);
        $this->insert('dictionary_statuses', ['name' => 'Interviews']);
        $this->insert('dictionary_statuses', ['name' => 'Selected']);
        $this->insert('dictionary_statuses', ['name' => 'Declined']);

        $this->insert('dictionary_countrystates', ['name' => 'US, NJ']);
        $this->insert('dictionary_countrystates', ['name' => 'US, CA']);

        $this->insert('dictionary_countries', ['name' => 'United States']);

        $this->insert('dictionary_states', ['name' => 'New Jersey']);
        $this->insert('dictionary_states', ['name' => 'California']);

        $this->insert('dictionary_industries', ['name' => 'Traveling']);
        $this->insert('dictionary_industries', ['name' => 'Medicine']);
        $this->insert('dictionary_industries', ['name' => 'Transport']);

        $this->insert('dictionary_devstages', ['name' => 'none']);
        $this->insert('dictionary_devstages', ['name' => 'pre-beta']);
        $this->insert('dictionary_devstages', ['name' => 'beta']);
        $this->insert('dictionary_devstages', ['name' => 'released']);

        $this->insert('dictionary_fundings', ['name' => 'none']);
        $this->insert('dictionary_fundings', ['name' => '1k or less']);
        $this->insert('dictionary_fundings', ['name' => '10-20k']);
        $this->insert('dictionary_fundings', ['name' => '20-40k']);
        $this->insert('dictionary_fundings', ['name' => '40-80k']);
        $this->insert('dictionary_fundings', ['name' => '80k+']);

        $this->insert('dictionary_peoples', ['name' => 'none']);
        $this->insert('dictionary_peoples', ['name' => 'just me']);
        $this->insert('dictionary_peoples', ['name' => '2-4']);
        $this->insert('dictionary_peoples', ['name' => '4-10']);
        $this->insert('dictionary_peoples', ['name' => '10+']);

        $this->insert('dictionary_customers', ['name' => '1-10']);
        $this->insert('dictionary_customers', ['name' => '10-50']);
        $this->insert('dictionary_customers', ['name' => '50-100']);
        $this->insert('dictionary_customers', ['name' => '100+']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('dictionary_statuses');
        $this->delete('dictionary_countrystates');
        $this->delete('newdictionary_countries');
        $this->delete('dictionary_states');
        $this->delete('dictionary_industries');
        $this->delete('dictionary_devstages');
        $this->delete('dictionary_fundings');
        $this->delete('dictionary_peoples');
        $this->delete('dictionary_customers');
    }
}