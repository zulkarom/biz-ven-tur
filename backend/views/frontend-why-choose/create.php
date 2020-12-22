<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WhyChoose */

$this->title = 'Create Why Choose';
$this->params['breadcrumbs'][] = ['label' => 'Why Chooses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="why-choose-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
