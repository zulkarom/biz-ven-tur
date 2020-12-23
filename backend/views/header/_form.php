<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Header */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quote')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

     <div class="row">
    <div class="col-md-3">
        <?= $form->field($model, 'menu_1')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 'menu_2')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 'menu_3')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 'menu_4')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">

    <?= $form->field($model, 'logo')->fileInput() ?>

        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
