<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SignUp */

$this->title = $model->username/*id*/;
//$this->params['breadcrumbs'][] = ['label' => 'Sign Ups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sign-up-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>-->

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'username',
            'Firstname',
            'Lastname',
            //'auth_key',
            //'password_hash',
            //'status',
            'email:email',
            'birthdate',
        ],
    ]) ?>

</div>
