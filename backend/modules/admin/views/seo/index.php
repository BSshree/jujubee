<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SeoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SEO';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="pull-right">
        <?= Html::a('Create Seo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            'url_path:url',
                [
                'attribute' => 'meta_title',
                'value' => function($data) {
                    $dat = json_decode($data->meta_values);
                    return $dat->meta_title;
                },
            ],
                [
                'attribute' => 'meta_desc',
                'value' => function($data) {
                    $dat = json_decode($data->meta_values);
                    return $dat->meta_desc;
                },
            ],
                [
                'attribute' => 'meta_keyword',
                'value' => function($data) {
                    $dat = json_decode($data->meta_values);
                    return $dat->meta_keyword;
                },
            ],
                ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
