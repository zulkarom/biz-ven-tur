<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Header */

$this->title = 'Update Header';
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="header-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <br/>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
