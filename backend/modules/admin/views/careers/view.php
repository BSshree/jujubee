<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CareerForm */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Career Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-form-view">

    <p class="pull-right">
        <?php // Html::a('Update', ['update', 'id' => $model->careerform_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->careerform_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'careerform_id',
            'name:ntext',
            'phone:ntext',
            'email:ntext',
            'know_by:ntext',
            'message:ntext',
           // 'resume:ntext',
          [
            'attribute'=>'Resume',
            'format'=>'raw',
            'value'=>Html::a('Download', ['download?id='.$model->careerform_id]),
        ],
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
