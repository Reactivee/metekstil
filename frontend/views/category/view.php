<?php
/** @var \common\models\Product $similar_product */

/** @var \common\models\Element $element */

use yii\widgets\Pjax;

$images = $element->images;

?>

    <div class="container">
        <div class="category__banner_breadcrumb d-flex color_gray pt-5">
            <a class="text-decoration-none color_black mr-2" href="/">Главная /</a>
            <a class="text-decoration-none color_black mx-2" href="/category/all-category">Каталог /</a>
            <span class="color_black"><?= $element['title_' . Yii::$app->language] ?></span>

        </div>
        <div class="view_block my-4">

            <div class="row">

                <div class="col-md-6">
                    <div class="view_sliders d-flex  ">
                        <div class="item_gallery_slider mt-4 mt-md-0">
                            <div class="swiper viewSwiper ">
                                <div class="swiper-wrapper d-flex flex-column ">

<!--                                    --><?// foreach ($item_images as $image) {
                                        $sub_element = \common\models\Element::findOne($item_images[0]->element_id)
                                        ?>
                                        <div class="swiper-slide w-auto h-auto ">
                                            <a class="" href="view?slug=<?= $sub_element->slug ?>">
                                                <div class="small_item" onclick="showImg(this)">

                                                    <img class="w-100 small_item_img demo"
                                                         src="/frontend/web<?= $item_images[0]->path ?>"
                                                         alt="slider">

                                                </div>
                                            </a>
                                        </div>
<!--                                    --><?// } ?>

<!--                                    --><?// foreach ($images as $image) {
                                        $sub_element = \common\models\Element::findOne($images[0]->element_id)
                                        ?>
                                        <div class="swiper-slide w-auto h-auto ">
                                            <a class=" " href="view?slug=<?= $sub_element->slug ?>">
                                                <div class="small_item" onclick="showImg(this)">

                                                    <img class="w-100 small_item_img demo"
                                                         src="/frontend/web<?= $images[0]->path ?>"
                                                         alt="slider">

                                                </div>
                                            </a>
                                        </div>
<!--                                    --><?// } ?>

                                </div>

                            </div>
                        </div>
                        <div class="big_img_view viewed">
                            <a data-lightbox="example-set"
                               class="demo demo_big"
                               href="/frontend/web<?= $images[0]->path ?>">
                                <img class="w-100 h-100 big_img_view_img" src="/frontend/web<?= $images[0]->path ?>"
                                     alt="">
                            </a>

                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <?php Pjax::begin(); ?>
                    <div class="product_view">
                        <div class="view_title">
                            <span class="section_label section_label_red my-5"><?= $element->product->category['name_' . Yii::$app->language]; ?></span>
                            <span class="font-weight-bolder pl-4">Дизайн №: <?= $element->id ?></span>
                            <h3 class="section_title my-3 color_black text-uppercase">
                                <?= $element['title_' . Yii::$app->language] ?>
                            </h3>
                        </div>
                        <div class="view_text">
                            <p>   <?= $element['desc_' . Yii::$app->language] ?></p>
                        </div>
                        <div class="options_block mt-5">
                            <? if ($element->option) { ?>
                                <? foreach ($element->option as $item) { ?>
                                    <div class="options_item d-flex align-items-center my-2">
                                        <div class="item_title">
                                            <h4><?= $item->options['name_' . Yii::$app->language] ?> : </h4>
                                        </div>
                                        <div class="item_option ml-1">
                                            <h4><?= $item->value['name_' . Yii::$app->language] ?></h4>
                                        </div>
                                    </div>
                                <? } ?>
                            <? } ?>

                        </div>
                    </div>
                    <?php Pjax::end(); ?>
                </div>

            </div>

        </div>
    </div>
    <div class="similar_products bg_color_gray pt-3 pt-md-5">
        <div class="container">

            <!-- Swiper -->
            <div class="swiper similar_slider about_slider slider_btn_rigth_top ">
                <div class="text-center text-md-left    ">
                    <!--            <span class="section_label my- text-center text-md-left5">Больше вариантов</span>-->
                    <h3 class="section_title my-3 color_black text-uppercase ">
                        Похожие товары
                    </h3>
                </div>
                <div class="swiper-wrapper pb-5">

                    <? foreach ($similar_product as $product) { ?>
                        <div class="swiper-slide">
                            <? echo \frontend\widgets\ElementWidget::widget([
                                'products' => $product
                            ]); ?>

                        </div>
                    <? } ?>

                </div>
                <!--            <div class="swiper-button-next bg_color_yel"></div>-->
                <!--            <div class="swiper-button-prev bg_color_yel"></div>-->

            </div>
        </div>
    </div>
<? echo \frontend\widgets\RequestWidget::widget([
    'address' => $address
]); ?>