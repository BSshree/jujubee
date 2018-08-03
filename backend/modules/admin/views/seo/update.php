<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Seo */

$this->title = 'Update' ;
$this->params['breadcrumbs'][] = ['label' => 'Seo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->seo_id, 'url' => ['view', 'id' => $model->seo_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seo-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
