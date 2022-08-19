<?php

use common\models\AdvantagesIcons;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\AdvantagesIconsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Advantages Icons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advantages-icons-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<!--        --><?//= Html::a('Create Advantages Icons', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_uz',
            'title_ru',
            'title_en',
            [
                'attribute' => 'img',
                'format' => "raw",
                'value' => function ($model) {
                    return Html::img($model->img, ['width' => '100px']);
                }
            ],

            //'link',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AdvantagesIcons $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
