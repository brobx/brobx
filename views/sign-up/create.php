<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SignUp */

$this->title = 'Sign Up';
//$this->params['breadcrumbs'][] = ['label' => 'Sign Ups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sign-up-create">

   <!-- <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
