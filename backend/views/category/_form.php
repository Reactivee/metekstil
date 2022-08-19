<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <!--    --><? //= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->dropDownList($model->getSorType()) ?>
    <?=
    $form->field($model, 'options')->widget(Select2::classname(), [
        'data' => $model->getALlOptions(),

//        'maintainOrder' => true,
        'options' => ['placeholder' => 'Характеристика'],
        'pluginOptions' => [
//            'tags' => true,
            'allowClear' => true,
            'multiple' => true
        ],
    ])->label('Характеристика');
    ?>
    <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_uz')->textarea(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_ru')->textarea(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_en')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn - success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
