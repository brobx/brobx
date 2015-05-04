<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Price */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'registrationPlace')->dropDownList([
        '4.2' => 'Киев',
        '2.2'=> 'Киевская область',
        '3'=>'Харьков, Одесса',
        '2.3'=> 'Днепропетровск, Донецк, Запорожье, Львов, Кривой Рог',
        '1.7'=> 'Города с населением от 100тыс. до 500тыс человек',
        '1.3'=> 'Города с населением менее 100тыс. человек'
    ]) ?>

    <?= $form->field($model, 'engine')->dropDownList([
        '1'=> 'до 1.6',
        '1.14'=> '1.6-2.0',
        '1.18'=> '2.0-3.0',
        '1.82'=> '3.0 и больше'
    ]) ?>

    <?= $form->field($model, 'franchise')->dropDownList([
        '1'=> '0 грн',
        '0.85'=> '500 грн',
        '0.8'=> '1000 грн'
    ]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Посчитать' : 'Заказать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
