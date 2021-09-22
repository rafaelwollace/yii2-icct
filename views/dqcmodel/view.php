
<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Dqcmodel */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dqcmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dqcmodel-view">
<p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja Realmente Deletar Este Item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
<?=
DetailView::widget([
    'model' => $model,
    'condensed' => true,
    'hover' => true,
    'mode' => DetailView::MODE_VIEW,
    'panel' => [
        'heading' => 'Detalhes',
        'type' => DetailView::TYPE_PRIMARY,
    ],
    'attributes' => [
        'id',
        'MODEL'
    ],
    'buttons1' => '',
])
?>

</div>
