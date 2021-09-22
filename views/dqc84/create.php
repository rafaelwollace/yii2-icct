<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc84 */

$this->title = 'Create Dqc84';
$this->params['breadcrumbs'][] = ['label' => 'Dqc84s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqc84-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
