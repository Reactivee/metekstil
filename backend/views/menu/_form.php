<?php /** @noinspection PhpUndefinedClassInspection */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\menu\Menus
 * @noinspection PhpUndefinedClassInspection
 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menus-form box-body">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-4 col-md-8">
            <?php echo $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

            <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

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
