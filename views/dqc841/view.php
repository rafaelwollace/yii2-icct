<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\models\Dqc84;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc841 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dqc841s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dqc841-view">

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
            'PARTS_NO',
            'UNT_USG',
            'DESCRIPTION:ntext',
            'REF_DESIGNATOR:ntext',
            'UPDATE_DT',
            [
                'attribute' => 'FAT_PART_NO',
                'value' => $model->dqc84->FAT_PART_NO,
            ],
        ],
        'buttons1' => '',
    ])
?>
</div>
