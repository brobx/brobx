<?php

use yii\db\Schema;
use yii\db\Migration;

class m150305_112804_user3 extends Migration
{
public function up()
{
    $tableOptions = null;
    if ($this->db->driverName === 'mysql') {

        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    }

    $this->createTable('{{%user3}}', [
        'id' => Schema::TYPE_PK,
        'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        'username' => Schema::TYPE_STRING . ' NOT NULL',
        'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL',
        'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
        'password_reset_token' => Schema::TYPE_STRING,
        'Firstname' => Schema::TYPE_STRING . ' NOT NULL',
        'Lastname' => Schema::TYPE_STRING . ' NOT NULL',
        'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
        'email' => Schema::TYPE_STRING . ' NOT NULL',
        'birthdate' => Schema::TYPE_DATE . ' NOT NULL',

    ], $tableOptions);
}

    public function down()
{
    $this->dropTable('{{%user3}}');
}
}