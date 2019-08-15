<?php

namespace app\controllers;
use app\models\Day;
use yii\web\Controller;
class DayController extends Controller
{
    public function actionView()
    {
        $model = new Day();
        $model->id = 5;
        $model->activity_id = 9;
        $model->work = true;

        return $this->render('view', ['model'=>$model]);
    }
}