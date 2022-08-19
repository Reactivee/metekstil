<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AboutIn */

$this->title = 'Create About In';
$this->params['breadcrumbs'][] = ['label' => 'About Ins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-in-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
