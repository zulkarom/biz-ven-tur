<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\homepage\models\WhoWeAreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['breadcrumbs'][] = 'Who We Are';
?>
<div class="who-we-are-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Who We Are', ['create'], ['class' => 'btn-primary btn-sm']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'content:ntext',
            'bttn_content:ntext',

            ['class' => 'yii\grid\ActionColumn',
                 'contentOptions' => ['style' => 'width: 12.7%'],
                'template' => '{update} {delete}',
                //'visible' => false,
                'buttons'=>[
                    'update'=>function ($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-user"></span> Update', ['update', 'id' => $model->id], ['class' => 'btn btn-warning btn-sm'
                        ]) 
                ;
                    },
                    'delete'=>function ($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this course?',
                                'method' => 'post',
                            ],
                        ]) 
                ;
                    }

                ],
            
            ],

           
        ],
    ]); ?>


</div>
