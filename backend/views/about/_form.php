<?php

use kartik\editors\Summernote;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
$initialPreview = [];

?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
    <?=
        $form->field($model, 'text_en')->widget(Summernote::class, [
            'useKrajeePresets' => true,
            // other widget settings
        ]);
    ?>
    <?=
        $form->field($model, 'text_uz')->widget(Summernote::class, [
            'useKrajeePresets' => true,
            // other widget settings
        ]);
    ?>
    <?=
    $form->field($model, 'text_ru')->widget(Summernote::class, [
        'useKrajeePresets' => true,
        // other widget settings
    ]);
    ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->widget(FileInput::classname(), [
        'model' => $model,
        'attribute' => 'img',
        'options' => ['accept' => 'image/*',],
        'name' => 'img',
        'pluginOptions' => [
            'initialPreview' => ['' . $model->img],
            'initialPreviewAsData' => true,
            'deleteUrl' => Url::to(['delete-image']),
            'maxFileSize' => 4800
        ]

    ]);
    ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
