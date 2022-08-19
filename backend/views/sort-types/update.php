<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SortTypes */

$this->title = 'Update Sort Types: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sort Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sort-types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
