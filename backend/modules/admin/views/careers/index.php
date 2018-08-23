<?php

use common\models\CareerFormSearch;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $searchModel CareerFormSearch */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Career Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-form-index">


    <p class="pull-right">
        <?php // Html::a('Create Career Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            //'careerform_id',
            'name:ntext',
            'phone:ntext',
            'email:ntext',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('app', 'View-Profile'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        $url = Url::to(['careers/delete', 'id' => $model->careerform_id]);
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title'        => 'delete',
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method'  => 'post',
                        ]);
                    }
                ],
            ],
        ],
    ]);
    ?>
</div>
