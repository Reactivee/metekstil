<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SubElement */

$this->title = 'Create Sub Element';
$this->params['breadcrumbs'][] = ['label' => 'Sub Elements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-element-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
