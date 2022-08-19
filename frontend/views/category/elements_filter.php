<?php

use yii\helpers\Html;
use yii\helpers\Url;

$script = <<<JS

      $(document).on('change', '#filter-form input', function() {
      $("#filter-form").submit();
    });

JS;
$this->registerJs($script);

$queryParams = Yii::$app->request->queryParams;

?>

<section id="products" class="category_product">
    <div class="allcategory__banner">
        <div class="container">
            <div class="category__banner_breadcrumb d-flex color_gray pt-5">
                <a class="text-decoration-none color_white mr-2" href="/">Главная</a> / <a
                        class="text-decoration-none color_white mx-2" href="/category/all-category">Каталог / </a>
                <span><?= $category['name_' . Yii::$app->language] ?></span>
            </div>
            <div class="category__banner_content text-center text-md-left">

                <div class="category__banner_title pb-3">
                    <h2 class="color_white"><span
                                class="color_yel"> <?= $category['name_' . Yii::$app->language] ?? 'Все дизайны' ?></h2>
                </div>
                <div class="category__banner_text color_white"><?= $category['desc'] ?></div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="category_content pt-4 ">
            <div class="text-center text-md-left">

                <h3 class="section_title my-3 color_black text-uppercase ">

                </h3>
            </div>
            <div class="products pb-5">
                <div class="products_wrapper">
                    <div class="row column-reverse">
                        <div class="col-md-9">
                            <div class="row">

                                <? foreach ($products->models as $product) { ?>
                                    <div class="col-md-4 col-6 mt-4">
                                        <? echo \frontend\widgets\ElementWidget::widget([
                                            'products' => $product
                                        ]); ?>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="col-md-3 my-4">

                            <?php echo Html::beginForm(Url::to(['element?slug=' . $queryParams['slug']]), 'get', ['data-pjax' => true, 'id' => 'filter-form']) ?>

                            <div class="filter_block bg_color_yel p-4 position-relative">
                                <div class="title d-flex  align-items-center justify-content-between position-relative">
                                    <h5 class="font-weight-bolder">Фильтр</h5>
                                    <a onclick="showFilfer(this)" class=" p-0 m-0 btn_show_filter  stretched-link" >
                                        <img src="/frontend/web/uploads/icons/filter.svg" alt="">
                                    </a>
                                </div>
                                <div class="checkbox_block mt-4">
                                    <? if ($sorts) { ?>
                                        <? foreach ($sorts as $sort) {
                                            $checked = false;
                                            $param = $queryParams['sorts'];
                                            if ($param) {
                                                foreach ($param as $par) {
                                                    if ((int)$par == $sort->id) {
                                                        $checked = true;
                                                    }
                                                }
                                            } ?>


                                            <? $checked = $checked ? 'checked' : null ?>

                                            <label class="checkbox_container"><?= $sort['title_' . Yii::$app->language] ?>
                                                <input name="sorts[]" value="<?= $sort->id ?>"
                                                       type="checkbox" <?= $checked ?>>
                                                <span class="checkmark"></span>
                                            </label>
                                        <? } ?>
                                    <? } ?>
                                </div>
                            </div>
                            <?php echo Html::endForm() ?>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>