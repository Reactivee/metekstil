<style>
    .text_buz {
        position: absolute;
        font-size: 64px;
        font-weight: 700;
        color: white;
    }
</style>
<section id="uni" class="category">

    <div class="category__banner">
        <div class="container">
            <div class="category__banner_breadcrumb d-flex color_gray pt-5">
                <a class="text-decoration-none color_white mr-2" href="/">Главная</a> / <a
                        class="text-decoration-none color_white mx-2" href="/category/all-category">Каталог</a> / Kumas
                cinsi
            </div>
            <div class="category__banner_content text-center text-md-left">

                <div class="category__banner_title pb-3">
                    <h2 class="color_white"><span
                                class="color_yel"><?= $category['name_' . Yii::$app->language] ?></span></h2>
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
                <?= $category['title_' . Yii::$app->language] ?>
            </h3>

            <div class="text text-center text-md-left ">
                <span>       <?= $category['text_' . Yii::$app->language] ?></span>
            </div>

            <div class="gallary  mt-5">
                <? if ($materials) { ?>
                    <? foreach ($materials as $key => $material) { ?>

                        <? if ($key % 2 == 0) { ?>
                            <div class="flex-container  bg-light mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-md-4">
                                        <div class=" pb-0 d-flex align-items-center justify-content-center">
                                            <a data-lightbox="example-set"
                                               class="demo"
                                               href="<?= $material->image ?>">
                                                <img class="big-products w-100"
                                                     src="<?= $material->image ?>"
                                                     alt="Big products">
                                            </a>
                                            <span class="position-absolute text_buz"><?= $material['title_' . Yii::$app->language] ?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-8 mt-4 font-weight-bold d-flex flex-wrap">
                                        <? foreach ($material->options as $index => $item) { ?>
                                            <? if ($index < 4) { ?>
                                                <div class="col-md-6 ">
                                                    <p class="text_kum_options f-25">  <?= $item['text_' . Yii::$app->language] ?></p>
                                                </div>
                                            <? } ?>

                                        <? } ?>

                                        <div id="collapseThree<?= $key ?>" class="collapse"
                                             aria-labelledby="headingThree">
                                            <div class="row px-3">
                                                <? foreach ($material->options as $index => $item) { ?>
                                                    <? if ($index > 3) { ?>
                                                        <div class="col-md-6 ">
                                                            <p class="text_kum_options f-25 font-weight-bold">  <?= $item['text_' . Yii::$app->language] ?></p>
                                                        </div>
                                                    <? } ?>

                                                <? } ?>
                                            </div>
                                        </div>

                                        <div class="d-flex w-100 align-items-center justify-content-end ">
                                            <button class="btn ibtn_outline_yellow color_black  m-3  collapsed"
                                                    type="button"
                                                    data-toggle="collapse" data-target="#collapseThree<?= $key ?>"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree<?= $key ?>">
                                                <?= Yii::t('main', 'full') ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        <? } ?>

                        <? if ($key % 2 != 0) { ?>
                            <div class="flex-container  mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-md-4">
                                        <div class=" pb-0 d-flex align-items-center justify-content-center">
                                            <a data-lightbox="example-set"
                                               class="demo"
                                               href="<?= $material->image ?>">
                                                <img class="big-products w-100"
                                                     src="<?= $material->image ?>"
                                                     alt="Big products">
                                            </a>
                                            <span class="position-absolute text_buz"><?= $material['title_' . Yii::$app->language] ?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-8  font-weight-bold d-flex flex-wrap">
                                        <? foreach ($material->options as $index => $item) { ?>
                                            <? if ($index < 4) { ?>
                                                <div class="col-md-6 ">
                                                    <p class="text_kum_options f-25">  <?= $item['text_' . Yii::$app->language] ?></p>
                                                </div>
                                            <? } ?>

                                        <? } ?>
                                        <div class="d-flex w-100 align-items-center justify-content-end mt-5">
                                            <button class="btn ibtn_outline_yellow color_black  m-3  collapsed"
                                                    type="button"
                                                    data-toggle="collapse" data-target="#collapseThree<?= $key ?>"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree<?= $key ?>">
                                                <?= Yii::t('main', 'full') ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="k_full_options ">
                                    <div id="collapseThree<?= $key ?>" class="collapse" aria-labelledby="headingThree">
                                        <div class="row px-4">
                                            <? foreach ($material->options as $index => $item) { ?>
                                                <? if ($index > 3) { ?>
                                                    <div class="col-md-4 text-center">
                                                        <p class="text_kum_options f-25 font-weight-bold">  <?= $item['text_' . Yii::$app->language] ?></p>
                                                    </div>
                                                <? } ?>

                                            <? } ?>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        <? } ?>
                    <? } ?>
                <? } ?>


            </div>
            <div class="load_btn d-flex justify-content-center mt-4">
                <a href="kumas?limit=<?= $limit + 6 ?>" class="btn bg_color_yel px-5 py-3 font-weight-bolder mb-4 ">Загрузить
                    еще</a>
            </div>


        </div>

        <? Pjax::end(); ?>
    </div>
</section>