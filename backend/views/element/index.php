<?php

use common\models\Element;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ElementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Elements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="element-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create element', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'product_id',
                'value' => function ($model) {
                    return $model->product->title_en;
                }

            ],

            [
                'attribute' => 'fat_element_id',
                'value' => function ($model) {
                    if ($model->fat_element_id) {
                        $elements = \common\models\Element::findOne(['id' => $model->fat_element_id]);
                        return $elements->title_en;
                    }
                    return '';
                }

            ],

            'title_ru',
            'title_uz',
            'title_en',
            'desc_en:ntext',
            'desc_uz:ntext',
            'desc_ru:ntext',
            'img',
            'created_at:datetime',
            'updated_at:datetime',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Element $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
