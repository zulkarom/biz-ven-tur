<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Header';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="header-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'quote',
            'content:ntext',
            'logo:ntext',
            'menu_1',
            'menu_2',
            'menu_3',
            'menu_4',

            ['class' => 'yii\grid\ActionColumn',
                 'contentOptions' => ['style' => 'width: 12.7%'],
                'template' => '{update}',
                //'visible' => false,
                'buttons'=>[
                    'update'=>function ($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-user"></span> Update', ['update', 'id' => $model->id], ['class' => 'btn btn-warning btn-sm'
                        ]) 
                ;
                    }

                ],
            
            ],
        ],
    ]); ?>


</div>
