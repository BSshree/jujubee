<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Page */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-view">

    <p class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->page_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->page_id], [
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
            //'content',
            'published_on',
            'status',
            [
                'attribute' => 'content',
                'format' => 'raw',
                'type' => 'widget',
                'widgetOptions' => ['class' => TinyMce::classname()],
                'value' => $model->content,
            ],
        ],
    ])
    ?>

</div>
