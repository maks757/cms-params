<?php

use yii\db\Migration;

class m161206_170058_param_table extends Migration
{
    public function up()
    {
        $this->createTable('cms_params', [
            'id' => $this->primaryKey(),
            'key' => $this->string(100),
            'value' => $this->text()
        ]);
    }

    public function down()
    {
        echo "m161206_170058_param_table cannot be reverted.\n";

        $this->dropTable('cms_params');

        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
