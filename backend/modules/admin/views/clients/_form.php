<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

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

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'thumbnail')->fileInput() ?>

    <?php if (!$model->isNewRecord) { ?>
        <?php if ($model->thumbnail) { ?>
            <div class="form-group">
                <div class="col-sm-0 col-sm-offset-2">
                    <img src="<?php echo Yii::getAlias('@web/uploads') . '/' . $model->thumbnail; ?>" width="130px" height="100px">
                </div>
            </div>

        <?php }
    }
    ?>

    <div class="form-group">
        <div class="col-sm-0 col-sm-offset-2">
<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

<?php ActiveForm::end(); ?>

    </div>
