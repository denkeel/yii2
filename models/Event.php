<?php

namespace app\models;
use yii\base\Model;
class Event extends Model
{
    public $id;
    public $title;
    public $body;
    public $start_date;
    public $end_date;
    public $author_id;
    public $cycle;
    public $main;
    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'title'=>'Название',
            'body'=>'Описание события',
            'start_date'=>'Дата начала',
            'end_date'=>'Дата окончания',
            'author_id'=>'ID автора',
            'cycle'=>'Повторяется',
            'main'=>'Главное',
        ];
    }
}