<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>


<div class="wrap">
    <div class="container">
        <?= $content ?>
    </div>
</div>

