<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Page */
/* @var $form yii\widgets\ActiveForm */
$status = [
    "Pending" => "Pending",
    "Published" => "Published",
];
?>

<div class="row">
    <div class="col-md-8">

        <?php
        $form = ActiveForm::begin([
                    'id' => 'active-form',
                    'enableClientValidation' => true,
                    'validateOnSubmit' => true,
                    'options' => [
                        'class' => 'form-horizontal',
                    ],
                    'fieldConfig' => [
                        'template' => "{label}<div class=\"col-sm-10\">{input}<b style='color: #000;'>{hint}</b><div class=\"errorMessage\">{error}</div></div>",
                        'labelOptions' => ['class' => 'col-sm-2 control-label'],
                    ],
                        ]
        );
        ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>


        <?=
        $form->field($model, 'content')->widget(TinyMce::className(), [
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
        <?php if (!empty($model2)) { ?>
            <?= $form->field($model2, 'meta_title')->textInput(['maxlength' => true])->label('Seo title') ?>
            <?= $form->field($model2, 'meta_desc')->textarea(['rows' => 7])->label('Description') ?>
            <?= $form->field($model2, 'meta_keyword')->textarea(['rows' => 7])->label('Keywords') ?>
        <?php } ?>

        <?= $form->field($model, 'published_on')->textInput(['maxlength' => true, 'id' => 'published_date']) ?>

        <?= $form->field($model, 'status')->dropDownList(($status)) ?>

        <div class="form-group">
            <div class="col-sm-0 col-sm-offset-2">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
    <?php if (!$model->isNewRecord) { ?>
        <div class="col-md-4">
            <div class="info-box-content">
                <span class="info-box-text">Preview your changes</span><br>
                <span class="progress-description">
                    <a href="http://jujubee.arkinfotec.in/<?php echo $model->slug ?>"  class='btn btn-warning'>Preview</a>
                </span>
            </div>
        </div>
    <?php } ?>
</div>
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
