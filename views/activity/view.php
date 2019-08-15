<?php

/** @var \app\models\Event $model */

foreach ($model as $attribute => $value){
    echo $model->getAttributeLabel($attribute).": ".$value. "<br/>";
}