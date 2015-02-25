<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SignUp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sign-up-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Firstname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Lastname')->textInput(['maxlength' => 255]) ?>



    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
