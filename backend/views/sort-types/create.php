<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SortTypes */

$this->title = 'Create Sort Types';
$this->params['breadcrumbs'][] = ['label' => 'Sort Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sort-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
