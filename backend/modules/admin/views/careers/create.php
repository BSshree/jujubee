<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CareerForm */

$this->title = 'Create Career Form';
$this->params['breadcrumbs'][] = ['label' => 'Career Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-form-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
