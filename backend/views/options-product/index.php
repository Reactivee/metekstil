<?php

use common\models\OptionsProduct;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OptionsProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Options Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="options-product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Options Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'product_id',
                'value' => function ($model) {

                    return $model->product->title_ru;
                }
            ],

            [
                'attribute' => 'option_id',
                'value' => function ($model) {

                    return $model->options->name_ru;
                }
            ],
            [
                'attribute' => 'option_value_id',
                'value' => function ($model) {

                    return $model->value->name_ru;
                }
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OptionsProduct $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
