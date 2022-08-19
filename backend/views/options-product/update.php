<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OptionsProduct */

$this->title = 'Update Options Product: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Options Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="options-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
