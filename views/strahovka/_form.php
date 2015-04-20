<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Strahovka */
/* @var $form yii\widgets\ActiveForm */
$this->registerJsFile(Yii::getAlias('@web/calc.js'), ['depends' => [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset'],
]);
?>

<div class="col-lg-5">

    <?php $form = ActiveForm::begin([
        'id' => 'contact-form']); ?>

    <?= $form->field($model, 'oblast')->dropDownList([
        '4.2' => 'Киев',
        '2.2'=> 'Киевская область',
        '3'=>'Харьков, Одесса',
        '2.3'=> 'Днепропетровск, Донецк, Запорожье, Львов, Кривой Рог',
        '1.7'=> 'Города с населением от 100тыс. до 500тыс человек',
        '1.3'=> 'Города с населением менее 100тыс. человек'
    ]) ?>

    <?= $form->field($model,'dvigatel')->dropDownList([
        '1'=> 'до 1.6',
        '1.14'=> '1.6-2.0',
        '1.18'=> '2.0-3.0',
        '1.82'=> '3.0 и больше'
    ]) ?>

    <?= $form->field($model, 'fran')->dropDownList([
        '1'=> '0 грн',
        '0.85'=> '500 грн',
        '0.8'=> '1000 грн'
    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
