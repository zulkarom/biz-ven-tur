<?php

namespace frontend\controllers;

use Yii;
use backend\models\WhoWeAre;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WhoWeAreController implements the CRUD actions for WhoWeAre model.
 */
class WhoWeAreController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all WhoWeAre models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new WhoWeAre();

        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
