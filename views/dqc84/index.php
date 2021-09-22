<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\models\Dqcmodel;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Dqc84Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dqc84s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqc84-index">

    <p>
        <?= Html::a('Cadastrar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php

$gridColumns = [


        [
            'attribute'=>'id', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->id;
            },
        ],


        [
            'attribute'=>'MODEL', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->dqcmodel->MODEL;
            },
        ],

        [
            'attribute'=>'FAT_PART_NO', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->FAT_PART_NO;
            },
        ],

        [
            'attribute'=>'TOTAL_LOCATION', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->TOTAL_LOCATION;
            },
        ],


        [
            'attribute'=>'CREATE_DT', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->CREATE_DT;
            },
        ],

        [
    'class' => 'yii\grid\ActionColumn',
    'template' => '{view} {update} {delete} ',
    'contentOptions' => ['style' => 'width: 120px;']
],
    
        
    ];
?>

<?php Pjax::begin(); ?>

<?php 
    echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
    'columns'=>$gridColumns,
    'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
    'pjax'=>true, // pjax is set to always true for this demo

    'beforeHeader'=>[
        [
            'columns'=>[
                ['content'=>'Detalhes', 'options'=>['colspan'=>5, 'class'=>'text-center warning']], 
                ['content'=>'Ações', 'options'=>['colspan'=>1, 'class'=>'text-center warning']], 
            ],
        ]
    ],
    'hover' => true,
    'panel' => [
    'type'=>GridView::TYPE_PRIMARY,
    'heading'=> '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Listagem - DQC84</h3>',
    ],
]);
    ?>


</div>
