<?php

namespace app\controllers;
use Yii;
use app\models\Dqcmodel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;



class RelatorioController extends Controller
{


    public function actionIndex()
    {
        $this->layout = 'main-imprimir';
        
        $relatorio = (new \yii\db\Query())
            ->select('dqcmodel.MODEL,
                      dqc84.FAT_PART_NO,
                      dqc84.TOTAL_LOCATION,
                      dqc841.PARTS_NO,
                      dqc841.UNT_USG, 
                      dqc841.DESCRIPTION,
                      dqc841.REF_DESIGNATOR')
            ->from('dqcmodel')
            ->leftJoin('dqc84', 'dqcmodel.id = dqc84.MODEL')
            ->leftJoin('dqc841', 'dqc84.id = dqc841.FAT_PART_NO')
            ->all();

        return $this->render('index', [
            'relatorio' => $relatorio,
        ]);
    }








}