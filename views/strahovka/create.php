<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Strahovka */

$this->title = 'Create Strahovka';
$this->params['breadcrumbs'][] = ['label' => 'Strahovkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="strahovka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
