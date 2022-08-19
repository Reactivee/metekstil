<?php

use kartik\file\FileInput;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProcessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Images';
$this->params['breadcrumbs'][] = $this->title;

$initialPreviewConfig = [];
$initialPreview = [];
$prod_img = \common\models\ProcessImages::find()
    ->where(['process_id' => $model->id])
    ->asArray()
    ->all();

foreach ($prod_img as $image) {
    array_push($initialPreview, '/frontend/web' . $image['path']);
    array_push($initialPreviewConfig, ['key' => $image['path']]);

}


?>
<div class="process-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Process', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'uploaded_images')->hiddenInput(['id' => 'uploaded_images'])->label(false) ?>
    <?php $this->registerJs(
        "  var uploadedImages = {},  deletedFiles = [],
                    uploaded = document.getElementById('uploaded_images') 
                     deleted = document.getElementById('deleted_images')
                    "
    ) ?>
    <?=


    FileInput::widget([
        'name' => 'img',
        'options' => [
            'accept' => 'image/*',
            'multiple' => true
        ],
        'pluginOptions' => [
            'previewFileType' => 'any',
            'uploadUrl' => Url::to(['image-upload']),
            'deleteUrl' => Url::to(['image-delete']),
            'showPreview' => true,
            'showCaption' => true,
            'showRemove' => true,
            'showUpload' => true,
            'overwriteInitial' => true,
            'maxFileSize' => 5000,
            'initialPreviewAsData' => true,
            'initialPreview' => $initialPreview,
            'initialPreviewConfig' => $initialPreviewConfig,

        ],
        'pluginEvents' => [
            'fileuploaded' => new JsExpression('function(event, data, previewId) {
                            uploadedImages[previewId] = data.response;
                            uploaded.value = JSON.stringify(uploadedImages);
                            console.log(uploadedImages)
                        }'),
            'filedeleted' => new JsExpression('function(event, key) {
                            deletedImages.push(key);
                            deleted.value = JSON.stringify(deletedImages);
                        }'),
        ]

    ]);

    ?>

    <!--    --><? //= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
