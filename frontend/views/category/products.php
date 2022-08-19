<?php /** @var \yii\debug\models\timeline\DataProvider $products */

?>
<section id="products" class="category_product">
    <div class="allcategory__banner">
        <div class="container">
            <div class="category__banner_breadcrumb d-flex color_gray pt-5">
                <a class="text-decoration-none color_white mr-2" href="/">Главная</a> / <a
                        class="text-decoration-none color_white mx-2" href="/category/all-category">Каталог</a>
            </div>
            <div class="category__banner_content text-center text-md-left">

                <div class="category__banner_title pb-3">
                    <h2 class="color_white"><span class="color_yel">All Design Category  <br> </span>Category Page</h2>
                </div>
                <div class="category__banner_text color_white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Tincidunt
                    egestas sollicitudin egestas diam et in. Dictum felis senectus est tempus nunc nunc.
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="category_content pt-4">
            <div class="text-center text-md-left">
                <!--                <span class="section_label my-5">All design</span>-->
                <h3 class="section_title my-3 color_black text-uppercase">

                    <?= $category['name_' . Yii::$app->language] ?? 'Все дизайны' ?>
                </h3>
            </div>
            <div class="products pb-5">
                <div class="products_wrapper">
                    <div class="row">
                        <? foreach ($products->models as $product) { ?>
                            <div class="col-md-3 col-6 mt-3">

                                <? echo \frontend\widgets\ProductWidget::widget([
                                    'products' => $product
                                ]); ?>

                            </div>
                        <? } ?>
                    </div>

                    <div class="ipagination">
                        <? echo \yii\widgets\LinkPager::widget([
                            'pagination' => $products->pagination,
                        ]); ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>