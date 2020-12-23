<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HeaderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="header-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'quote') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'logo') ?>

    <?= $form->field($model, 'menu_1') ?>

    <?php // echo $form->field($model, 'menu_2') ?>

    <?php // echo $form->field($model, 'menu_3') ?>

    <?php // echo $form->field($model, 'menu_4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
