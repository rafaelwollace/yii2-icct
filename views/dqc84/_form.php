<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Dqcmodel;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Dqc84 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dqc84-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MODEL')->dropDownList(
        ArrayHelper::map(Dqcmodel::find()->all(),'id','MODEL'),
        [
        'prompt'=>'Selecione...',
        'MODEL' => 'MODEL', 
        'onchange' => 'changeQualification()'
]
    ) ?>

    <!-- <?= $form->field($model, 'MODEL')->textInput() ?> -->

    <?= $form->field($model, 'FAT_PART_NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TOTAL_LOCATION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
