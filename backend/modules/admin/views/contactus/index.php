<?php

use common\models\ContactusSearch;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $searchModel ContactusSearch */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactus-index">

    
   <p class="pull-right">
        <?php // Html::a('Create Contact us', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'contactus_id',
            'name:ntext',
            'phone:ntext',
            'email:email',
            'message:ntext',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('app', 'View-Profile'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        $url = Url::to(['careers/delete', 'id' => $model->contactus_id]);
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title'        => 'delete',
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method'  => 'post',
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>
</div>
