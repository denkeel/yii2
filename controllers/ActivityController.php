<?php

namespace app\controllers;

use yii\helpers\Url;
use app\models\Activity;
use yii\web\Controller;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        $id = \Yii::$app->request->get('id');

        // Получаем объект из базы данных

        $model = new Activity();
        $model->id = 5;
        $model->title = 'Совещание';
        $model->body = 'Обсуждение проблем изменения климата 2019';
        $model->start_date = time();
        $model->end_date = time() + 24 * 60 * 60;
        $model->author_id = 62;
        $model->cycle = true;
        $model->main = true;

        // Выводим

        return $this->render('view', ['model' => $model]);
    }

    public function actionCreate()
    {
        $model = new \app\models\activity();

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionSubmit()
    {
        $model = new \app\models\activity();

        if ($model->load(\Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        header("Location: http://google.com");// . Url::to(['activity/index'])); 
        //здесь не работает редирект       
    }

    public function actionUpdate()
    {
        $model = new \app\models\activity();

        return $this->render('update', [
            'model' => $model,
        ]);
    }
}
