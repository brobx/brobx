<?php

use yii\db\Schema;
use yii\db\Migration;

class m150429_124250_price extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }


        $this->createTable('{{%price}}', [
            'id' => Schema::TYPE_PK,
            'registrationPlace' => Schema::TYPE_STRING . ' NOT NULL',
            'engine' => Schema::TYPE_STRING . ' NOT NULL',
            'franchise' => Schema::TYPE_STRING . ' NOT NULL',
            'price' => Schema::TYPE_STRING . ' NOT NULL',
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'surname' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'phone' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);
    }
    public function down()
    {
        echo "m150429_124250_price cannot be reverted.\n";

        return false;
    }
}
