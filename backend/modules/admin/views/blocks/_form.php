<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model common\models\Block */
/* @var $form yii\widgets\ActiveForm */
$status = [
    'Enable' => 'Enable',
    'Disable' => 'Disable',
]
?>

<div class="block-form">

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

    <?= $form->field($model, 'block_title')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'block_content')->widget(TinyMce::className(), [
        'options' => ['rows' => 16],
        'language' => 'en_GB',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);
    ?>

    <?= $form->field($model, 'block_status')->dropDownList($status) ?>

    <div class="form-group">
                <div class="col-sm-0 col-sm-offset-2">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
