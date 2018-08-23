<?php

use common\models\CareerForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model CareerForm */
/* @var $form ActiveForm */
?>

<div class="career-form-form">

    <?php
    $form = ActiveForm::begin([
                'id' => 'active-form-careers',
                'enableClientValidation' => true,
                'validateOnSubmit' => true,
                'options' => [
                    'class' => 'form-horizontal',
                ],
                'fieldConfig' => [
                    'template' => "{label}<div class=\"col-sm-5\">{input}<b style='color: #000;'>{hint}</b><div class=\"errorMessage\">{error}</div></div>",
                    'labelOptions' => ['class' => 'col-sm-2 control-label'],
                ],
                    ]
    );
    ?>

    <?= $form->field($model, 'name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'know_by')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <?php $form->field($model, 'resume')->fileInput(['rows' => 6]) ?>

    <?php
    if (!$model->isNewRecord) {
        if ($model->resume) {  ?>
    <div class="col-sm-2 control-label">
        <?= Html::a('Download Resume', ['download?id='.$model->careerform_id], ['class' => 'btn btn-primary']) ?>
    </div>
    
   <?php  }} ?>
    <div class="form-group">
        <div class="col-sm-0 col-sm-offset-2">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
