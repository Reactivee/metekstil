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
        <?= Html::a('Create About In', ['create-set'], ['class' => 'btn btn-success']) ?>
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
                'template' => '{update-set}',  // the default buttons + your custom button
                'buttons' => [
                    'update-set' => function ($url, $model, $key) {     // render your custom button
                        return Html::a('Update', ['update-set', 'id' => $model->id]);
                    }
                ]
            ],

            'id',
            'title_ru',
            'title_uz',
            'video',
            [
                'attribute' => 'img',
                'format' => "raw",
                'value' => function ($model) {
                    return Html::img($model->img, ['width' => '100px']);
                }
            ],
            [
                'attribute' => 'img_2',
                'format' => "raw",
                'value' => function ($model) {
                    return Html::img($model->img_2, ['width' => '100px']);
                }
            ],
            'number_1',
            'number_2',

        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
