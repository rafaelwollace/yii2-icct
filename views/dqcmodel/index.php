<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\DqcmodelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dqcmodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqcmodel-index">


    <p>
        <?= Html::a('Cadastrar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
                'attribute'=>'MODEL', 
                'width'=>'310px',
                'value'=>function ($model, $key, $index, $widget) { 
                    return $model->MODEL;
                },
            ],


            [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} ',
            'contentOptions' => ['style' => 'width: 50px;']
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
                    ['content'=>'Detalhes', 'options'=>['colspan'=>2, 'class'=>'text-center warning']], 
                    ['content'=>'Ações', 'options'=>['colspan'=>1, 'class'=>'text-center warning']], 
                ],
            ]
        ],
        'hover' => true,
        'panel' => [
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=> '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Listagem - DQCMODEL</h3>',
        ],
    ]);

   
        ?>
    <?php Pjax::end(); ?>


</div>
