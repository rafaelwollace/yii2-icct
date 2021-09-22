<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqcmodel */

$this->title = 'Create Dqcmodel';
$this->params['breadcrumbs'][] = ['label' => 'Dqcmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqcmodel-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
