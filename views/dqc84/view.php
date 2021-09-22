<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\models\Dqcmodel;
/* @var $this yii\web\View */
/* @var $model app\models\Dqc84 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dqc84s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dqc84-view">

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
            [
                'attribute' => 'MODEL',
                'value' => $model->dqcmodel->MODEL,
            ],
            'FAT_PART_NO',
            'TOTAL_LOCATION',
            'CREATE_DT',
            'UPDATE_DT',
        ],
        'buttons1' => '',
    ])
?>

</div>
