<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;;
//use kartik\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\SignUp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="login">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin([
        'id' => 'sign-up-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"input\">{input}</div>\n<div class=\"input\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ]]); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Firstname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Lastname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'birthdate')->widget(
    DatePicker::className(),[
        'name' => 'birth_date',
        'value' => '12/31/2010',
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd'
        ]
    ]);      ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sign up' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
