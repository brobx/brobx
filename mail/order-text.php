<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $order app\models\Price */
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['price/view', 'id' => $order->id]);
?>
 <?= $resetLink ?>