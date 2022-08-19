<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OptionsValue */

$this->title = 'Update Options Value: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Options Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="options-value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
