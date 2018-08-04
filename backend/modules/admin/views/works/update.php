<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Work */

$this->title = 'Update Work: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->work_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="work-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
