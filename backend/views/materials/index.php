<?php

use common\models\Materials;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MaterialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materials-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Materials', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            [
//                'attribute' => 'image',
//                'format' => "raw",
//                'value' => function ($model) {
//                    return Html::a('Text', ['material-item','id'=>$model->id]);
//                }
//            ],
            'title_uz',
            'title_ru',
            'title_en',
            [
                'attribute' => 'image',
                'format' => "raw",
                'value' => function ($model) {
                    return Html::img($model->image, ['width' => '100px']);
                }
            ],
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Materials $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
