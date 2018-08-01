<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Page */
/* @var $form yii\widgets\ActiveForm */
$status = [
    "Pending" => "Pending",
    "Published" => "Published",
    
];
?>

<div class="page-form">

 <?php $form = ActiveForm::begin([
                'id' => 'active-form',
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

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 5]) ?>

    <?= $form->field($model, 'published_on')->textInput(['maxlength' => true , 'id' => 'published_date']) ?>
    
    <?= $form->field($model, 'status')->dropDownList(($status)) ?>

  <div class="form-group">
        <div class="col-sm-0 col-sm-offset-2">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS
    jQuery(document).ready(function () { 
            $("#published_date").datepicker({          
          format: 'yyyy-mm-dd',
          autoclose: true,
          endDate: new Date(),
        })
    });
JS;
$this->registerJs($script, View::POS_END);
?>
