<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sign Ups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sign-up-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sign Up', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'Firstname',
            'Lastname',

            'password_hash',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
