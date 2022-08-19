<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OptionsProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="options-product-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'product_id')->dropDownList($model->getProducts())->label('Elements') ?>

    <?= $form->field($model, 'option_id')->dropDownList($model->getOptionsAll())->label('Options') ?>

    <?= $form->field($model, 'option_value_id')->dropDownList($model->getOptionsValue())->label('Value') ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
