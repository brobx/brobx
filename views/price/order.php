<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Price */

$this->title = 'Order Price: ' . ' ' . $model-> price;
//$this->params['breadcrumbs'][] = ['label' => 'Prices', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Заказать';
?>


    <div class="input">

        <?php $form = ActiveForm::begin(); ?>
        <h1><?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'price']])?></h1>
        <p>Закажите Ваш полис прямо сейчас!<br>
            Просто заполните форму и наш менеджер свяжется с Вами в ближайшее время!</p>
        <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>
        <?= $form->field($model, 'surname')->textInput(['maxlength' => 255]) ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>
        <?= $form->field($model, 'phone')->textInput(['maxlength' => 255]) ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Заказать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
        <?php ActiveForm::end(); ?>
</div>
