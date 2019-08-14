<?php

namespace app\models;
use yii\base\Model;
class Day extends Model
{
    public $id;
    public $work;
    public $event_id;
    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'work' => 'Рабочий день',
            'event_id' => 'ID события',
        ];
    }
}