<?php

use yii\db\Migration;

/**
 * Class m230908_021906_alter_columns_in_project_table
 */
class m230908_021906_alter_columns_in_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230908_021906_alter_columns_in_project_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230908_021906_alter_columns_in_project_table cannot be reverted.\n";

        return false;
    }
    */
}
