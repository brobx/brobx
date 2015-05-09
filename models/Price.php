<?php

namespace app\models;

use Yii;
use yii\base\InvalidParamException;
use yii\base\Model;

class Price extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['registrationPlace', 'engine', 'franchise'], 'required'],
            [['registrationPlace', 'engine', 'franchise', 'price', 'name', 'surname', 'email', 'phone'], 'string', 'max' => 255],
            ['email', 'email']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'registrationPlace' => 'Место регистрации автомобиля',
            'engine' => 'Обьем двигателя',
            'franchise' => 'Франшиза',
            'price' => 'Цена Вашего полиса',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'email' => 'Email',
            'phone' => 'Телефон',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->price = 180 * $this->registrationPlace * $this->engine * $this->franchise * 1.35;
            if ($this->price > 600) {
                $this->price = $this->price * 0.8;
            } else if ($this->price > 400) {
                $this->price = $this->price * 0.85;
            }
            }
        return true;

    }

    public function sendEmail()
    {
        $order = Price::findOne($this->id);
        if ($this->save()) {
            return \Yii::$app->mailer->compose(['html' => 'order-html', 'text' => 'order-text'], ['order'=>$order])
                ->setFrom([\Yii::$app->params['adminEmail'] => \Yii::$app->name . ' robot'])
                ->setTo([\Yii::$app->params['managerEmail']])
                ->setSubject('order')
                ->setTextBody($this->id)
                ->send();
        }
    }

}

