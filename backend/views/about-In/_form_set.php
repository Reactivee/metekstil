<?php

use kartik\editors\Summernote;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AboutIn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-in-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'number_1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'number_2')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="row">

        <div class="col-md-6">
            <?= $form->field($model, 'img')->widget(FileInput::classname(), [
                'model' => $model,
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'initialPreview' => [
                        $model->img
                    ],
                    'initialPreviewAsData' => true,
                ]
            ]); ?>
        </div>
<!---->
<!--        <div class="col-md-6">-->
<!--            --><?//= $form->field($model, 'background')->widget(FileInput::classname(), [
//                'model' => $model,
//                'options' => ['accept' => 'image/*'],
//                'pluginOptions' => [
//                    'initialPreview' => [
//                        $model->background
//                    ],
//                    'initialPreviewAsData' => true,
//                ]
//            ]); ?>
<!--        </div>-->
        <div class="col-md-6">
            <?= $form->field($model, 'img_2')->widget(FileInput::classname(), [
                'model' => $model,
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'initialPreview' => [
                        $model->img_2
                    ],
                    'initialPreviewAsData' => true,
                ]
            ]); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
