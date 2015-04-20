<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;



class SignUp extends \yii\db\ActiveRecord //implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user3}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash'], 'required'],
            [['username'], 'unique'],
            [['status'], 'integer'],
            [['username', 'Firstname', 'Lastname', 'password_hash'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique'],
            [['birthdate'], 'safe'],
            [['password_hash'], 'string', 'min' => 6],

            [['username', 'password_hash', 'password_reset_token', 'Firstname', 'Lastname', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'created',
            'updated_at' => 'updated_at',
            'username' => 'Username',
            'Firstname' => 'Firstname',
            'Lastname' => 'Lastname',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password',
            'status' => 'Status',
            'email' => 'email',
            'birthdate' => 'Birthdate'
        ];
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert))
        {
           
            {

                $this->auth_key = Yii::$app->security->generateRandomString();
                $this->password_hash = $this->hashPassword($this->password_hash);

            }

            return true;
        }

        return false;
    }

    public function generateAuthKey()
    {
       return $this->auth_key = Yii::$app->security->generateRandomString();
    }
    public function hashPassword($password)
    {
        return $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

}