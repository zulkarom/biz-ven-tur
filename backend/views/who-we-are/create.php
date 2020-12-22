<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WhoWeAre */

$this->title = 'Create Who We Are';
$this->params['breadcrumbs'][] = ['label' => 'Who We Ares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="who-we-are-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
