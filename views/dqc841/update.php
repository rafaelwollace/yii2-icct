<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc841 */

$this->title = 'Update Dqc841: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dqc841s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dqc841-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
