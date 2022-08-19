<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Address', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'address_uz',
            'address_ru',
            'address_en',
            'fax',
            'phone',
            'email:email',
            'text',
            [
                'attribute' => 'img',
                'format' => "raw",
                'value' => function ($model) {
                    return Html::img($model->img, ['width' => '100px']);
                }
            ],
            [
                'class' => ActionColumn::className(),

            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
