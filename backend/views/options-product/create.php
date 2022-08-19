<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OptionsProduct */

$this->title = 'Create Options Product';
$this->params['breadcrumbs'][] = ['label' => 'Options Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="options-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
