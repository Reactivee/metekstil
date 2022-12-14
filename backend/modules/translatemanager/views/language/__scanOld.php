<?php

use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $oldDataProvider ArrayDataProvider */

?>
<?php if ($oldDataProvider->totalCount > 1) : ?>

    <?php echo Html::button(Yii::t('language', 'Select all'), ['id' => 'select-all', 'class' => 'btn btn-primary']) ?>

    <?php echo Html::button(Yii::t('language', 'Delete selected'), ['id' => 'delete-selected', 'class' => 'btn btn-danger']) ?>

<?php endif ?>

<?php if ($oldDataProvider->totalCount > 0) : ?>

    <?php echo GridView::widget([
        'id' => 'delete-source',
        'dataProvider' => $oldDataProvider,
        'columns' => [
            [
                'format' => 'raw',
                'attribute' => '#',
                'content' => function ($languageSource) {
                    return Html::checkbox('LanguageSource[]', false, ['value' => $languageSource['id'], 'class' => 'language-source-cb']);
                },
            ],
            'id',
            'category',
            'message',
            'languages',
            [
                'format' => 'raw',
                'attribute' => Yii::t('language', 'Action'),
                'content' => function ($languageSource) {
                    return Html::a(Yii::t('language', 'Delete'), Url::toRoute('/translatemanager/language/delete-source'),
                        ['data-id' => $languageSource['id'], 'class' => 'delete-item btn btn-xs btn-danger']);
                },
            ],
        ],
    ]) ?>

<?php endif ?>