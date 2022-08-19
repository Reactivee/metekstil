<?php

use common\models\MaterialsOptions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MaterialsOptionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materials Options';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materials-options-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Materials Options', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',

            [
                'attribute' => 'materials_id',
                'value' => function ($model) {
                    return $model->material->title_en;
                }
            ],
            'text_uz:ntext',
            'text_ru:ntext',
            'text_en:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MaterialsOptions $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
