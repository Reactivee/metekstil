<?php
/** @var yii\web\View $this */
/** @var \common\models\Advantages $advantages */
$this->title = 'My Yii Application';

//\Yii::$app->language = 'ru-RU';
?>
    <style>
        .slideshow {
            margin: 0 auto;
            padding-top: 50px;
            height: 439px;
            perspective: 1000px;
        }

        .content {
            margin: auto;
            width: 209px;
            perspective: 1000px;
            position: relative;
            padding-top: 80px;
            transform-style: preserve-3d;
        }

        .slider-content {
            width: 100%;
            position: absolute;
            float: right;
            animation: rotate 20s infinite linear;
            transform-style: preserve-3d;
        }

        .slider-content:hover {
            cursor: pointer;
            animation-play-state: paused;
        }

        .slider-content figure {
            width: 180px;
            height: 120px;
            border: 1px solid #555;
            overflow: hidden;
            position: absolute;
        }

        .slider-content img {
            image-rendering: auto;
            transition: all 300ms;
            width: 100%;
            height: 100%;
        }

        .slider-content img:hover {
            transform: scale(1.2);
            transition: all 300ms;
        }

        .shadow {
            position: absolute;
            box-shadow: 0px 0px 0px #000;
        }

        .slider-content figure:nth-child(1) {
            transform: rotateY(0deg) translateZ(300px);
        }

        .slider-content figure:nth-child(2) {
            transform: rotateY(40deg) translateZ(300px);
        }

        .slider-content figure:nth-child(3) {
            transform: rotateY(80deg) translateZ(300px);
        }

        .slider-content figure:nth-child(4) {
            transform: rotateY(120deg) translateZ(300px);
        }

        .slider-content figure:nth-child(5) {
            transform: rotateY(160deg) translateZ(300px);
        }

        .slider-content figure:nth-child(6) {
            transform: rotateY(200deg) translateZ(300px);
        }

        .slider-content figure:nth-child(7) {
            transform: rotateY(240deg) translateZ(300px);
        }

        .slider-content figure:nth-child(8) {
            transform: rotateY(280deg) translateZ(300px);
        }

        .slider-content figure:nth-child(9) {
            transform: rotateY(320deg) translateZ(300px);
        }

        @keyframes rotate {
            from {
                transform: rotateY(0deg);
            }
            to {
                transform: rotateY(360deg);
            }
        }
    </style>

    <section id="slider" class="main_banner"
             style="background: url('<?= $main_banner->img_path ?>');background-repeat: no-repeat; background-size: contain;  ">
        <div class="container">
            <div class="top__content d-flex flex-column " data-aos="fade-right" data-aos-easing="linear"
                 data-aos-duration="1000">
                <div class="top__content_title animate__animated animate__fadeInLeft">
            <span>
<!--               <span class="color_yel">Текстильная продукция</span>  мирового качества-->
               <span class="color_yel "><?= $main_banner['title_' . \Yii::$app->language] ?>

            </span>
                </div>
                <div class="top__content_text animate__animated animate__flipInX">
            <span>
                <?= $main_banner['text_' . \Yii::$app->language] ?>
<!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt egestas sollicitudin egestas diam et in. Dictum felis senectus est tempus nunc nunc.-->
            </span>
                </div>
                <div class="top__content_buttons">
                    <!--                --><? //= Yii::t('main', 'Loyihalarim') ?>

                    <a href="<?= $main_banner->link ?>"
                       class="top__content_button_bg btn  py-2 color_white px-5 mr-4 ibtn_outline_yellow text-uppercase"><?= Yii::t('main', 'catalog_top') ?> </a>
                    <a href="media"
                       class="top__content_button_trans btn ibtn_outline py-2 px-5 color_white ibtn_outline_yellow text-uppercase"><?= Yii::t('main', 'gallery') ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section_about  position-relative">
        <div class="container">
            <? if ($about[1]) { ?>


                <div class="row column-reverse">
                    <div class="col-md-6 mt-5 mt-md-0 " data-aos="fade-up">
                        <img class="w-100" src=" <?= $about[1]['img'] ?>" alt="about">
                        <div class="about_mini_card bg_color_yel d-flex  justify-content-center flex-column">
                            <span><i class="fa-solid fa-user-group"></i> <?= Yii::t('main', 'client') ?> </span>
                            <h2 class="f_babe"><?= $about[0]['number'] ?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0 mb-4 mb-md-0 text-center text-md-left" data-aos="fade-up">
                        <span class="section_label"><?= Yii::t('main', 'about') ?></span>
                        <h3 class="section_title my-3">
                            <?= $about[1]['title_' . \Yii::$app->language] ?>

                        </h3>
                        <p class="section_text">
                            <?= $about[1]['text_' . \Yii::$app->language] ?>

                        </p>
                        <a href="<?= $about[1]['link'] ?>"
                           class="btn ibtn_outline_yellow btn_about mt-2 font-weight-bold"> <?= Yii::t('main', 'full') ?></a>
                    </div>
                </div>
            <? } ?>
            <div class="row pt-5">
                <? if ($about[1]) { ?>
                    <div class="col-md-6 mb-3 text-center text-md-left" data-aos="fade-up">
                        <span class="section_label my-5"> <?= Yii::t('main', 'factory') ?></span>
                        <h3 class="section_title my-3">
                            <?= $about[0]['title_' . \Yii::$app->language] ?>

                        </h3>
                        <p class="section_text pr-0 pr-md-5">
                            <?= $about[0]['text_' . \Yii::$app->language] ?>
                        </p>
                        <a href="<?= $about[0]['link'] ?>"
                           class="btn ibtn_outline_yellow mt-2 btn_about font-weight-bold"><?= Yii::t('main', 'full') ?></a>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0" data-aos="fade-up">
                        <img class="w-100" src=" <?= $about[0]['img'] ?>" alt="about">
                        <div class="about_mini_card_bottom about_mini_card bg_color_yel d-flex  justify-content-center flex-column">
                            <span><i class="fa-solid fa-user-group"></i> <?= Yii::t('main', 'projects') ?> </span>
                            <h2 class="f_babe"><?= $about[0]['number'] ?></h2>
                        </div>
                    </div>
                <? } ?>
            </div>

        </div>
    </section>
    <section>
        <div class="advantages mt-5">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-9">
                        <div class="advantages__content text-center text-md-left" data-aos="fade-right"
                             data-aos-easing="ease-in-sine"
                             data-aos-duration="1000">
                            <!--                        <span class="section_label my-5">Посмотрите</span>-->
                            <h3 class="section_title my-3 color_white">
                                <?= $advantages['title_' . \Yii::$app->language] ?>
                            </h3>
                            <p class="section_text pr-0 pr-md-5 color_white text-center text-md-left">
                                <?= $advantages['text_' . \Yii::$app->language] ?>
                            </p>
                        </div>
                        <div class="advantages__icons mt-5  d-flex justify-content-between">
                            <? foreach ($ad_icons as $icon) { ?>

                                <div class="icons_wrap" data-aos-delay="300" data-aos="fade-up" data-aos-easing="linear"
                                     data-aos-duration="1000">
                                    <div class="advantages__icon">
                                        <img src="<?= $icon->img ?>" alt="icons">
                                    </div>
                                    <div class="advantages__icon_text mt-3">
                                        <h6 class="color_white"><?= $icon['title_' . \Yii::$app->language] ?></h6>
                                    </div>
                                </div>

                            <? } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="overflow-hidden">
        <div class="gallery_block my-5">
            <div class="container" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500">

                <div class="gallery_swiper">
                    <!-- Swiper -->

                    <!--                    <span class="section_label my-5">Больше вариантов</span>-->
                    <h3 class="section_title my-3 color_black text-uppercase">

                        <?= Yii::t('main', 'ourgal') ?>
                    </h3>
                    <section class="slideshow">
                        <div class="content">
                            <div class="slider-content">
                                <? foreach ($gallery as $item) { ?>
                                    <figure class="shadow">
                                        <a data-lightbox="example-set" class="demo" href="<?= $item->img ?>">
                                            <img class="w-100" src="<?= $item->img ?>"
                                                 alt="">
                                        </a>

                                    </figure>

                                <? } ?>
                            </div>
                        </div>
                    </section>
                    <!--    <div class="swiper-wrapper pb-2">

                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="gallery_item">
                                            <a data-lightbox="example-set" class="demo" href="/frontend/web/uploads/gallery/main1.png">
                                                <img class="w-100 py-2" src="/frontend/web/uploads/gallery/main1.png"
                                                     alt="">
                                            </a>
                                            <a data-lightbox="example-set" class="demo"href="/frontend/web/uploads/gallery/main2.png">
                                                <img class="w-100 py-2" src="/frontend/web/uploads/gallery/main2.png"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="gallery_item h-100">
                                            <a data-lightbox="example-set" class="demo" href="/frontend/web/uploads/gallery/main3.png">
                                                <img class="w-100 py-2 h-100"
                                                     src="/frontend/web/uploads/gallery/main3.png"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="gallery_item h-100">
                                            <a data-lightbox="example-set" class="demo" href="/frontend/web/uploads/gallery/main4.png">
                                                <img class="w-100 py-2" src="/frontend/web/uploads/gallery/main4.png"
                                                     alt="">
                                            </a>
                                            <a data-lightbox="example-set" class="demo" href="/frontend/web/uploads/gallery/main5.png">
                                                <img class="w-100 py-2" src="/frontend/web/uploads/gallery/main5.png"
                                                     alt="">
                                            </a>
                                            <a data-lightbox="example-set" class="demo" href="/frontend/web/uploads/gallery/main6.png">
                                                <img class="w-100 py-2" src="/frontend/web/uploads/gallery/main6.png"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
-->

                    <a href="media"
                       class="btn ibtn_outline_yellow px-4 py-2 font-weight-bold"><?= Yii::t('main', 'full') ?></a>
                </div>
            </div>

        </div>
    </section>

<? echo \frontend\widgets\RequestWidget::widget([
    'address' => $address
]); ?>