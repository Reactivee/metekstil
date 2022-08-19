<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdvantagesIcons */

$this->title = 'Create Advantages Icons';
$this->params['breadcrumbs'][] = ['label' => 'Advantages Icons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advantages-icons-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
