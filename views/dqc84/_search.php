<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc84Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dqc84-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'MODEL') ?>

    <?= $form->field($model, 'FAT_PART_NO') ?>

    <?= $form->field($model, 'TOTAL_LOCATION') ?>

    <?= $form->field($model, 'CREATE_DT') ?>

    <?php // echo $form->field($model, 'UPDATE_DT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
