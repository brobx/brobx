<?php

namespace app\models;

use Yii;



/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $Firstname
 * @property string $Lastname
 * @property string $auth_key
 * @property string $password_hash
 * @property integer $status
 */
class SignUp extends \yii\db\ActiveRecord //implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user2}}';
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
            [['auth_key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'Firstname' => 'Firstname',
            'Lastname' => 'Lastname',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password',
            'status' => 'Status',
        ];
    }
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert))
        {
            if($this->isNewRecord)
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