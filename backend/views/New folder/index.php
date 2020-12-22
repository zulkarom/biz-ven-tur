<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\homepage\models\WhoWeAreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Who We Ares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="who-we-are-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Who We Are', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'content:ntext',
            'bttn_content:ntext',

           
        ],
    ]); ?>


</div>
