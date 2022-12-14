<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AboutIn */

$this->title = 'Update About In: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'About Ins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-in-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
