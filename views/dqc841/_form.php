<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Dqc84;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc841 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dqc841-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'FAT_PART_NO')->dropDownList(
        ArrayHelper::map(Dqc84::find()->all(),'id','FAT_PART_NO'),
        [
        'prompt'=>'Selecione...',
        'FAT_PART_NO' => 'FAT_PART_NO', 
        'onchange' => 'changeQualification()'
]
    ) ?>

    <?= $form->field($model, 'PARTS_NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UNT_USG')->textInput() ?>


    <?= $form->field($model, 'DESCRIPTION')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'REF_DESIGNATOR')->textarea(['rows' => 6]) ?>



    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
