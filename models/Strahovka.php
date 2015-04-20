<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "strahovka".
 *
 * @property integer $id
 * @property string $oblast
 * @property string $dvigatel
 * @property string $fran
 * @property string $name
 * @property string $phone
 * @property string $email
 */
class Strahovka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'strahovka';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['oblast', 'dvigatel', 'fran', 'name', 'phone'], 'required'],
            [['oblast', 'dvigatel', 'fran', 'name', 'phone', 'email'], 'string', 'max' => 255],
            ['email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oblast' => 'Место регистрации автомобиля',
            'dvigatel' => 'Обьем двигателя',
            'fran' => 'Размер франшизы',
            'name' => 'Ваше имя',
            'phone' => 'телефон',
            'email' => 'Email',
            'price' => 'Цена'
        ];
    }

}
