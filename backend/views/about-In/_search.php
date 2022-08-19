<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AboutInSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-in-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?= $form->field($model, 'title_uz') ?>

    <?= $form->field($model, 'title_sub_uz') ?>

    <?php // echo $form->field($model, 'title_sub_ru') ?>

    <?php // echo $form->field($model, 'title_sub_en') ?>

    <?php // echo $form->field($model, 'text_sub_uz') ?>

    <?php // echo $form->field($model, 'text_sub_ru') ?>

    <?php // echo $form->field($model, 'text_sub_en') ?>

    <?php // echo $form->field($model, 'text_uz') ?>

    <?php // echo $form->field($model, 'text_en') ?>

    <?php // echo $form->field($model, 'text_ru') ?>

    <?php // echo $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'img_2') ?>

    <?php // echo $form->field($model, 'number_1') ?>

    <?php // echo $form->field($model, 'number_2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
