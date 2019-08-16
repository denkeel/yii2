<?php
use yii\helpers\Html;

$this->title = 'View activity';
$this->params['breadcrumbs'][] = ['label' => '
Календарь', 'url' => ['/activity/index']];
$this->params['breadcrumbs'][] = $this->title;

/** @var \app\models\Event $model */

foreach ($model as $attribute => $value){
    echo $model->getAttributeLabel($attribute).": ".$value. "<br/>";
}

echo Html::a('Редактировать событиe', ['/activity/update'], ['class'=>'btn btn-primary']);
?>