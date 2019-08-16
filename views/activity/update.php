<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */
/* @var $form ActiveForm */



$this->title = 'Update activity';
$this->params['breadcrumbs'][] = ['label' => '
Календарь', 'url' => ['/activity/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Изменение события</h1>
<div class="activity-update">

    <?php $form = ActiveForm::begin();
    $form->action = Url::to(['activity/submit']);
    ?>
    <div class="row">
        <div class="col-lg-5">
            <?= $form->field($model, 'title') ?>
            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'start_date') ?>
            <?= $form->field($model, 'end_date') ?>
            <?= $form->field($model, 'cycle')->checkbox() ?>
            <?= $form->field($model, 'main')->checkbox() ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- activity-update -->