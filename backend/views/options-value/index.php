<?php

use common\models\OptionsValue;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OptionsValueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Options Values';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="options-value-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Options Value', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'options_id',
                'value' => function ($model) {

                    return $model->option->name_ru;
                }
            ],
            'name_uz',
            'name_ru',
            'name_en',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OptionsValue $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

