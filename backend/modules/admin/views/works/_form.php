<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Work */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-form">

    <?php
    $form = ActiveForm::begin([
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

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_date')->textInput(['maxlength' => true, 'id' => 'project_date']) ?>

    <?= $form->field($model, 'project_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thumbnail')->fileInput(['maxlength' => true]) ?>


    <?php if (!$model->isNewRecord) { ?>
        <?php if ($model->thumbnail) { ?>
            <div class="form-group">
                <div class="col-sm-0 col-sm-offset-2">
                    <img src="<?php echo Yii::getAlias('@web/uploads') . '/' . $model->thumbnail; ?>" width="130px" height="120px">
                </div>
            </div>

        <?php }
    }
    ?>
    <div class="form-group">
        <div class="col-sm-0 col-sm-offset-2">
<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS
    jQuery(document).ready(function () { 
            $("#project_date").datepicker({          
          format: 'yyyy-mm-dd',
          autoclose: true,
          endDate: new Date(),
        })
    });
JS;
$this->registerJs($script, View::POS_END);
?>
