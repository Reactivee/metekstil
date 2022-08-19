<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MaterialsOptions */

$this->title = 'Create Materials Options';
$this->params['breadcrumbs'][] = ['label' => 'Materials Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materials-options-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
