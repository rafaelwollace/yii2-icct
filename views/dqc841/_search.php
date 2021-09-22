<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modelsDqc841Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dqc841-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'PARTS_NO') ?>

    <?= $form->field($model, 'UNT_USG') ?>

    <?= $form->field($model, 'DESCRIPTION') ?>

    <?= $form->field($model, 'REF_DESIGNATOR') ?>

    <?php // echo $form->field($model, 'UPDATE_DT') ?>

    <?php // echo $form->field($model, 'FAT_PART_NO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
