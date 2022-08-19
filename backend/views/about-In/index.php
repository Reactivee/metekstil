<?php

use common\models\AboutIn;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\AboutInSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'About Ins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-in-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create About In', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AboutIn $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],

            'title_sub_en',
            'text_sub_en',
            'text_en:ntext',


        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
