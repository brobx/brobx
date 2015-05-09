<?php
namespace app\models;

use Yii;
use yii\base\InvalidParamException;
use yii\base\Model;

class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price';
    }

    public function OrderRules()
    {
        return [
            [['name', 'surname', 'email', 'phone'], 'required'],
            [[ 'name', 'surname', 'email', 'phone'], 'string', 'max' => 255],
            ['email', 'email']
        ];
    }

    public function sendEmail()
    {
        $order = order::findOne($this->id);
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