<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contactus */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Contactuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactus-view">

    <p class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->contactus_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->contactus_id], [
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
//            'contactus_id',
            'name:ntext',
            'phone:ntext',
            'email:email',
            'message:ntext',
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
