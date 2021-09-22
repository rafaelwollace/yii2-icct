<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc84 */

$this->title = 'Update Dqc84: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dqc84s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dqc84-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
