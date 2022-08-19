<section id="uni" class="category">

    <div class="category__banner">
        <div class="container">
            <div class="category__banner_breadcrumb d-flex color_gray pt-5">
                <a class="text-decoration-none color_white mr-2 " href="/">Главная</a> / <a
                        class="text-decoration-none color_white mx-2" href="/category/all-category">Каталог</a> / Duz
                Boya

            </div>
            <div class="category__banner_content text-center text-md-left">

                <div class="category__banner_title pb-3">
                    <h2 class="color_white"><span class="color_yel"><?= $category['name_' . Yii::$app->language] ?></h2>
                </div>
                <div class="category__banner_text color_white"><?= $category['desc'] ?>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <? use yii\widgets\Pjax;

        Pjax::begin();
        ?>
        <div class="category_content pt-4 text-center text-md-left">
            <!--            <span class="section_label my-5 ">Посмотрите</span>-->
            <h3 class="section_title my-3 color_black text-uppercase ">
                <?= $category['title_' . \Yii::$app->language] ?>
            </h3>

            <div class="text text-center text-md-left ">
                <span>   <?= $category['text_' . \Yii::$app->language] ?> </span>
            </div>

            <div class="gallary  mt-5">
                <div class="flex-container d-flex gallary_wrap ">

                    <? foreach ($catalog as $item) { ?>
                        <div class="gallary_item col-md-4">
                            <a data-lightbox="example-set"
                               class="demo"
                               href="/frontend/web<?= $item->path ?>">
                                <img class="big-products w-100"
                                     src="/frontend/web<?= $item->path ?>"
                                     alt="Big products">
                            </a>
                        </div>
                    <? } ?>


                </div>
            </div>
            <div class="load_btn d-flex justify-content-center">
                <a href="category?limit=<?= $limit + 6 ?>" class="btn bg_color_yel px-5 py-3 font-weight-bolder mb-4 ">Загрузить
                    еще</a>
            </div>


        </div>

        <? Pjax::end(); ?>
    </div>
</section>