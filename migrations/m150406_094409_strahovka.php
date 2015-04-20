<?php

use yii\db\Schema;
use yii\db\Migration;

class m150406_094409_strahovka extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%strahovka}}', [
            'id' => Schema::TYPE_PK,
            'oblast' => Schema::TYPE_STRING . ' NOT NULL',
            'dvigatel' => Schema::TYPE_STRING . ' NOT NULL',
            'fran' => Schema::TYPE_STRING . ' NOT NULL',
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'phone' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'price' => Schema::TYPE_INTEGER . ' NOT NULL'

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%strahovka}}');
    }
}