<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CareerForm */

$this->title = 'Update Career Form: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Career Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->careerform_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="career-form-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
