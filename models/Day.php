<?php

namespace app\models;
use yii\base\Model;
class Day extends Model
{
    public $id;
    public $work;
    public $activity_id;
    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'work' => 'Рабочий день',
            'activity_id' => 'ID события',
        ];
    }
}