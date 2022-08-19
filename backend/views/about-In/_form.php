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
            <?= $form->field($model, 'title_sub_uz')->textarea(); ?>

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'title_sub_ru')->textarea(); ?>

        </div>
        <div class="col-md-4">

            <?= $form->field($model, 'title_sub_en')->textarea(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'text_sub_uz')->textarea(); ?>

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'text_sub_ru')->textarea(); ?>

        </div>
        <div class="col-md-4">

            <?= $form->field($model, 'text_sub_en')->textarea(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?=
            $form->field($model, 'text_uz')->widget(Summernote::class, [
                'useKrajeePresets' => true,
                // other widget settings
            ]);
            ?>

        </div>
        <div class="col-md-6">
            <?=
            $form->field($model, 'text_ru')->widget(Summernote::class, [
                'useKrajeePresets' => true,
                // other widget settings
            ]);

            ?>

        </div>
        <div class="col-md-6">
            <?=
            $form->field($model, 'text_en')->widget(Summernote::class, [
                'useKrajeePresets' => true,
                // other widget settings
            ]);

            ?>


        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
