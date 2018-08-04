<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Client */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-view">

    <p class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->client_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->client_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'slug',
            'desc',
                [
                'attribute' => 'thumbnail',
                'format' => 'image',
                'value' => function($data) {
                    return Yii::getAlias('@web/uploads') . '/' . $data->thumbnail;
                },
                'format' => ['image', ['width' => '130', 'height' => '120']],
            ],
        ],
    ])
    ?>

</div>
