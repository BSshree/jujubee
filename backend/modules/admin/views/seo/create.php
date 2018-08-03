<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Seo */

$this->title = 'Add Meta Content';
$this->params['breadcrumbs'][] = ['label' => 'Seos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
