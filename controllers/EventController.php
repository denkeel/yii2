<?php

namespace app\controllers;
use app\models\Event;
use yii\web\Controller;
class EventController extends Controller
{
    public function actionView()
    {
        $model = new Event();
        $model->id = 5;
        $model->title = 'Совещание';
        $model->body = 'Обсуждение проблем изменения климата 2019';
        $model->start_date = time();
        $model->end_date = time()+24*60*60;
        $model->author_id = 62;
        $model->cycle = true;
        $model->main = true;

        return $this->render('view', ['model'=>$model]);
    }
}