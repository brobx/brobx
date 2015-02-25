<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SignUp */

$this->title = 'Update Sign Up: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sign Ups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sign-up-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
