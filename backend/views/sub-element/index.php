<?php

use common\models\SubElement;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubElementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Elements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-element-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sub Element', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'element_id',
                'value' => function ($model) {
                    return $model->element->title_en;
                }

            ],
            [
                'attribute' => 'sub_element_id',
                'value' => function ($model) {
                    return $model->subElement->title_en;
                }

            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SubElement $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
