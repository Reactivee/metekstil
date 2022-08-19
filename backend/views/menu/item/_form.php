<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use rmrevin\yii\fontawesome\FA;
use mihaildev\elfinder\InputFile;

/* @var $this yii\web\View */
/* @var $model backend\models\menu\MenuItems */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="menu-items-form box-body">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-4 col-md-8">
            <?php echo $form->field($model, 'parent_id')->widget(Select2::className(), [
                'data' => $model->getMenuItemsArray($model->menu_id, $model->isNewRecord ? 0 : $model->id),
                'theme' => Select2::THEME_DEFAULT,
                'options' => ['placeholder' => ''],
                'pluginOptions' => ['allowClear' => true],
            ]) ?>

            <?php echo $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

            <?php echo $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

            <?php echo $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

            <?php echo $form->field($model, 'icon')->widget(InputFile::className(), [
                'controller' => 'elfinder',
                'path' => '/',
                'filter' => 'image',
                'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                'options' => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-warning'],
                'buttonName' => '<i class="fas fa-camera"></i>',
            ]) ?>

            <?php echo $form->field($model, 'weight')->textInput(['type' => 'number']) ?>

            <?php echo $form->field($model, 'description')->textarea(['rows' => 3]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-sm-4  col-xs-6">
            <?php echo $form->field($model, 'status')->dropDownList($model->getStatusArray()) ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('views', 'Create') : Yii::t('views', 'Update'),
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
