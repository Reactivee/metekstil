<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sorts */

$this->title = 'Create Sorts';
$this->params['breadcrumbs'][] = ['label' => 'Sorts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sorts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
