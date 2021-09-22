<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
use app\models\Dqc84;
/* @var $this yii\web\View */
/* @var $searchModel app\modelsDqc841Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dqc841s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqc841-index">
    <p>
        <?= Html::a('Cadastrar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div>

  <!-- updated id to class here -->


</div>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
            'attribute'=>'PARTS_NO', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->PARTS_NO;
            },
        ],

        [
            'attribute'=>'DESCRIPTION', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->DESCRIPTION;
            },
        ],

        [
            'attribute'=>'FAT_PART_NO', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->dqc84->FAT_PART_NO;
            },
        ],

        [
            'attribute'=>'UPDATE_DT', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->UPDATE_DT;
            },
        ],

        [
    'class' => 'yii\grid\ActionColumn',
    'template' => '{view} {update} {delete} ',
    'contentOptions' => ['style' => 'width: 150px;']
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
    'heading'=> '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Listagem - DQC841</h3>',
    ],
]);
    ?>

<?php
$script = <<< JS
    $(function() {
        $('#jobPop').click(function () {
            $('#modal').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
        });
    });
JS;

    $this->registerJs($script);
    ?>
<?php Pjax::end(); ?>
</div>
