<?php
/** @var yii\web\View $this */
$this->title = 'My Yii Application';
$this->title = "О Нас";
$this->params['breadcrumbs'][] = Yii::t('main', 'factory');

?>
<section id="about" class="about">
    <div class="container">

        <div class="row pt-4 column-reverse">

            <div class="col-md-6 mt-5 mt-md-0 d-flex" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="300">
                <div class="row overflow-hidden">
                    <div class="col-7 m-0 px-1 ">
                        <img class="w-100 mb-3" src="<?= $about_in_set['img'] ?>" alt="about">
                        <div class="about_mini_card_in bg_color_yel d-flex h-100 overflow-hidden py-3  flex-column">
                            <span><i class="fa-solid fa-bag-shopping"></i>  <?= Yii::t('main', 'about') ?></span>
                            <h2 class=""> <?= $about_in_set['number_1'] ?></h2>
                        </div>
                    </div>
                    <div class="col-5 m-0 px-2 ">
                        <div class="bg_color_yel about_mini_card_in d-flex  align-content-center justify-content-center flex-column ">
                            <span> <i class="fa-solid fa-scissors"></i> <?= Yii::t('main', 'projects') ?> </span>
                            <h2 class=""> <?= $about_in_set['number_2'] ?></h2>
                        </div>
                        <img class="w-100  mt-3" src="<?= $about_in_set['img_2'] ?>" alt="about">

                    </div>
                </div>


            </div>

            <div class="col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-easing="linear">
                <div class="swiper mySwiper about_slider slider_btn_rigth_top h-100">
                    <div class="swiper-wrapper">
                        <? foreach ($about as $item) { ?>
                            <div class="swiper-slide text-center text-md-left">
                                <span class="section_label my-5"><?= Yii::t('main', 'factory') ?></span>
                                <h3 class="section_title my-3">
                                    <?= $item['title_' . \Yii::$app->language] ?>
                                </h3>
                                <p class="section_text pr-0 pr-md-5">
                                    <?= $item['text_' . \Yii::$app->language] ?>
                                </p>

                            </div>
                        <? } ?>
                    </div>
                    <div class="btn_slider d-flex justify-content-end">

                        <div class="swiper-button-prev bg_color_yel "></div>
                        <div class="swiper-button-next bg_color_yel "></div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="video">
    <div class="container">
        <? if ($about_in_set['video']) { ?>
            <div class="video__wrapper mt-5">
                <iframe width="100%" height="515" src=" <?= $about_in_set['video'] ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        <? } ?>
    </div>

</section>
<section>
    <div class="advantages_about mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-9">
                    <div class="advantages__content text-center text-md-left">
                        <h3 class="section_title my-3 color_white">
                            <?= $about_in_set['title_' . \Yii::$app->language] ?>
                        </h3>

                    </div>
                    <div class="advantages__icons mt-5  d-flex justify-content-between" data-aos="fade-right"
                         data-aos-duration="1000">
                        <? foreach ($about_in as $item) {  ?>
                            <div class="icons_wrap mr-3">

                                <div class="advantages__icon text-left pb-4">
                                    <h2 class="advantage_item color_yel font-weight-bold"> <?= $item['title_sub_' . \Yii::$app->language] ?></h2>
                                    <span class="text-center color_white">  <?= $item['text_sub_' . \Yii::$app->language] ?></span>
                                </div>

                                <div class="advantages__icon_text mt-3">
                                    <span class="color_white font-weight-light">  <?= $item['text_' . \Yii::$app->language] ?></span>
                                </div>
                            </div>
                        <? } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class=" py-0  py-md-1" style="background: #F6F6F6;" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <div class="row">
                <div class="col-md-8 py-3 text-center text-md-left">
                    <!--                    <span class="section_label my-5">Посмотрите</span>-->
                    <h3 class="section_title my-3 color_black text-uppercase">
                        <?= Yii::t('main', 'answers') ?>
                    </h3>
                    <p class="section_text pr-0 pr-md-5 color_black">
                        <?= Yii::t('main', 'request_text') ?>
                    </p>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control my-2 bg_input_trans border bg-white"
                                       placeholder="<?= Yii::t('main', 'email') ?>"
                                       type="text">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control my-2 bg_input_trans border bg-white"
                                       placeholder='<?= Yii::t('main', 'phone') ?>'
                                       type="text">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control my-2 bg_input_trans border bg-white"
                                          placeholder='<?= Yii::t('main', 'textarea') ?>'
                                          name="" id="" cols="30" rows="10"></textarea>
                                <button class="w-100 btn bg_color_yel py-2 mt-4 font-weight-bolder">   <?= Yii::t('main', 'send_sms') ?>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 py-3">
                    <div class="contact_info h-100 d-flex flex-column bg-white justify-content-around">

                        <div>
                            <div class="info_title color_black">
                                <span><?= Yii::t('main', 'how_connect') ?></span>
                            </div>
                            <div class="info_text color_black">
                                <!--                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu elit sapien quis urna</span>-->
                            </div>
                        </div>

                        <div class="info_block mt-3">
                            <div class="info_item d-flex align-items-center">
                                <div class="info_icon mr-3 bg_color_yel">
                                    <img src="/frontend/web/uploads/icons/icon_black1.svg" alt="asd">
                                </div>
                                <div class="info_item_content ">
                                    <div class="info_item_text_title color_black mb-2">
                                        <?= Yii::t('main', 'address') ?>
                                    </div>
                                    <div class="info_item_text_text color_black">
                                        <?= $address['address_' . Yii::$app->language] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="info_item d-flex align-items-center mt-4">
                                <div class="info_icon mr-3 bg_color_yel">
                                    <img src="/frontend/web/uploads/icons/icon_black2.svg" alt="asd">
                                </div>
                                <div class="info_item_content ">
                                    <div class="info_item_text_title color_black mb-2">
                                        <?= Yii::t('main', 'fax') ?>
                                    </div>
                                    <div class="info_item_text_text color_black">
                                        <?= $address['fax'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="info_item d-flex align-items-center mt-4">
                                <div class="info_icon mr-3 bg_color_yel">
                                    <img src="/frontend/web/uploads/icons/icon_black3.svg" alt="asd">
                                </div>
                                <div class="info_item_content ">
                                    <div class="info_item_text_title color_black mb-2">
                                        <?= Yii::t('main', 'phone') ?>
                                    </div>
                                    <div class="info_item_text_text ">
                                        <?= $address['phone']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="info_item d-flex align-items-center mt-4">
                                <div class="info_icon mr-3 bg_color_yel">
                                    <img src="/frontend/web/uploads/icons/icon_black4.svg" alt="asd">
                                </div>
                                <div class="info_item_content ">
                                    <div class="info_item_text_title color_black mb-2">
                                        <?= Yii::t('main', 'email') ?>
                                    </div>
                                    <div class="info_item_text_text ">
                                        <?= $address['email']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

