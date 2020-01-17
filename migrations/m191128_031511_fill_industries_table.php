<?php

use app\models\Dic_Industries;
use yii\db\Migration;

/**
 * Class m191128_031511_fill_industries_table
 */
class m191128_031511_fill_industries_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Dic_Industries::deleteAll();
        (new Dic_Industries(['name' => 'Internet']))->save();
        (new Dic_Industries(['name' => 'Healthcare']))->save();
        (new Dic_Industries(['name' => 'Mobile']))->save();
        (new Dic_Industries(['name' => 'Software']))->save();
        (new Dic_Industries(['name' => 'Business Product/Services']))->save();
        (new Dic_Industries(['name' => 'Hardware']))->save();
        (new Dic_Industries(['name' => 'Consumer Product/Service']))->save();
        (new Dic_Industries(['name' => 'Industrial']))->save();
        (new Dic_Industries(['name' => 'Electronics']))->save();
        (new Dic_Industries(['name' => 'FinTech']))->save();
        (new Dic_Industries(['name' => 'Security']))->save();
        (new Dic_Industries(['name' => 'Other']))->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        Dic_Industries::deleteAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191128_031511_fill_industries_table cannot be reverted.\n";

        return false;
    }
    */
}
