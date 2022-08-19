<?php

use common\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_uz',
            'name_ru',
            'name_en',
            'slug',
            'image',
            'type',
            'sort',
            'desc',
            'text_en',
            'text_uz',
            'text_ru',
            'title_ru',
            'title_uz',
            'title_en',
            [
                'attribute' => 'options',
                'value' => function ($model) {
                    $opt = '';
                    $opt_Cats = \common\models\OptionsToCategory::find()
                        ->where(['category_id' => $model->id])->all();
                    if ($opt_Cats) {

                        $opt_Cats = \yii\helpers\ArrayHelper::map($opt_Cats, 'option_id', 'option_id');
                        $options = \common\models\Options::find()->where(['id' => $opt_Cats])->all();
                        foreach ($options as $option) {

                            $opt .= $option->name_ru . ",";
                        }
                    }
                    return $opt;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Category $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
