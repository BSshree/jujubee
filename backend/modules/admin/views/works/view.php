<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Work */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-view">

    <p class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->work_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->work_id], [
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
           // 'work_id',
            'category',
            'title',
            'slug',
            'project_date',
            'project_type',
            'link',
            [
                'attribute' => 'thumbnail',
                'format' => 'image',
                'value' => function($data) {
                    return Yii::getAlias('@web/uploads') . '/' . $data->thumbnail;
                },
                'format' => ['image', ['width' => '130', 'height' => '120']],
            ],
                        
                        [
                'attribute' => 'project_image',
                'format' => 'image',
                'value' => function($data) {
                    return Yii::getAlias('@web/uploads') . '/' . $data->project_image;
                },
                'format' => ['image', ['width' => '130', 'height' => '120']],
            ],
        ],
    ]) ?>

</div>
