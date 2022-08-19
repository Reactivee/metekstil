<?php
/** @var yii\web\View $this */
/** @var \common\models\Address $address */
$this->title = "КОНТАКТЫ";
$this->params['breadcrumbs'][] =Yii::t('main', 'contact');
?>


<section>
    <div class="container overflow_hidden">
          <div class="mt-2">
<!--            <span class="section_label my-5">Больше вариантов</span>-->

        </div>
        <!--        <div class="contact__info">-->
        <!--            <div class=" h-100  py-5">-->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-3">-->
        <!--                        <div class="info_block d-flex justify-content-between">-->
        <!--                            <div class="info_item d-flex align-items-center">-->
        <!--                                <div class="info_icon mr-3 ">-->
        <!--                                    <img class="bg_color_yel" src="/frontend/web/uploads/icons/icon_black1.svg"-->
        <!--                                         alt="asd">-->
        <!--                                </div>-->
        <!--                                <div class="info_item_content ">-->
        <!--                                    <div class="info_item_text_title color_black mb-2">-->
        <!--                                        Адрес-->
        <!--                                    </div>-->
        <!--                                    <div class="info_item_text_text color_black">-->
        <!--                                        Алмазарский район, ул. Широк 104 А, 100069-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3">-->
        <!--                        <div class="info_block d-flex justify-content-between">-->
        <!--                            <div class="info_item d-flex align-items-center">-->
        <!--                                <div class="info_icon mr-3 ">-->
        <!--                                    <img class="bg_color_yel" src="/frontend/web/uploads/icons/icon_black2.svg"-->
        <!--                                         alt="asd">-->
        <!--                                </div>-->
        <!--                                <div class="info_item_content ">-->
        <!--                                    <div class="info_item_text_title color_black mb-2">-->
        <!--                                        Адрес-->
        <!--                                    </div>-->
        <!--                                    <div class="info_item_text_text color_black">-->
        <!--                                        Алмазарский район, ул. Широк 104 А, 100069-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3">-->
        <!--                        <div class="info_block d-flex justify-content-between">-->
        <!--                            <div class="info_item d-flex align-items-center">-->
        <!--                                <div class="info_icon mr-3 ">-->
        <!--                                    <img class="bg_color_yel" src="/frontend/web/uploads/icons/icon_black3.svg"-->
        <!--                                         alt="asd">-->
        <!--                                </div>-->
        <!--                                <div class="info_item_content ">-->
        <!--                                    <div class="info_item_text_title color_black mb-2">-->
        <!--                                        Адрес-->
        <!--                                    </div>-->
        <!--                                    <div class="info_item_text_text color_black">-->
        <!--                                        Алмазарский район, ул. Широк 104 А, 100069-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3">-->
        <!--                        <div class="info_block d-flex justify-content-between">-->
        <!--                            <div class="info_item d-flex align-items-center">-->
        <!--                                <div class="info_icon mr-3 ">-->
        <!--                                    <img class="bg_color_yel" src="/frontend/web/uploads/icons/icon_black4.svg"-->
        <!--                                         alt="asd">-->
        <!--                                </div>-->
        <!--                                <div class="info_item_content ">-->
        <!--                                    <div class="info_item_text_title color_black mb-2">-->
        <!--                                        Адрес-->
        <!--                                    </div>-->
        <!--                                    <div class="info_item_text_text color_black">-->
        <!--                                        Алмазарский район, ул. Широк 104 А, 100069-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
    <div class="py-1 py-md-2">
        <div class=" container overflow_hidden">
            <div class="contact_baner">
                <img class="w-100" src="/frontend/web/uploads/contact/map.jpg" alt="map">
            </div>
            <div class="row mt-4 p-0 m-0 overflow_hidden">
                <? foreach ($address as $key => $add) {
                    if ($key % 2 == 0) { ?>
                        <div class="col-md-5 contact_item_wrapper overflow_hidden" data-aos="fade-right">
                            <div class="contact_info h-100 d-flex flex-column justify-content-start">
                                <div class="mb-4 mb-md-0">
                                    <div class="info_title color_white">
                                        <span><?= Yii::t('main', 'how_connect') ?></span>
                                    </div>
                                    <div class="info_text color_white">
<!--                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu elit sapien quis urna</span>-->
                                    </div>
                                </div>
                                <div class="info_block">
                                    <div class="info_item d-flex align-items-center mt-4">
                                        <div class="info_icon mr-3">
                                            <img src="/frontend/web/uploads/icons/con1.svg" alt="asd">
                                        </div>
                                        <div class="info_item_content ">
                                            <div class="info_item_text_title color_gray mb-2">
                                                <?= Yii::t('main', 'address') ?>
                                            </div>
                                            <div class="info_item_text_text color_white">
                                                <?= $add['address_' . \Yii::$app->language] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <? if ($add['fax']) { ?>
                                        <div class="info_item d-flex align-items-center mt-3">
                                            <div class="info_icon mr-3">
                                                <img src="/frontend/web/uploads/icons/cont2.svg" alt="asd">
                                            </div>
                                            <div class="info_item_content ">
                                                <div class="info_item_text_title color_gray mb-2">
                                                    <?= Yii::t('main', 'fax') ?>
                                                </div>
                                                <div class="info_item_text_text color_white">
                                                    <?= $add['fax'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                    <div class="info_item d-flex align-items-center mt-3">
                                        <div class="info_icon mr-3">
                                            <img src="/frontend/web/uploads/icons/cont3.svg" alt="asd">
                                        </div>
                                        <div class="info_item_content ">
                                            <div class="info_item_text_title color_gray mb-2">
                                                <?= Yii::t('main', 'phone') ?>
                                            </div>
                                            <div class="info_item_text_text color_white">
                                                <?= $add['phone'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_item d-flex align-items-center mt-3">
                                        <div class="info_icon mr-3">
                                            <img src="/frontend/web/uploads/icons/cont4.svg" alt="asd">
                                        </div>
                                        <div class="info_item_content ">
                                            <div class="info_item_text_title color_gray mb-2">
                                                <?= Yii::t('main', 'email') ?>
                                            </div>
                                            <div class="info_item_text_text color_white">
                                                <?= $add['email'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 p-0 m-0 overflow_hidden"  data-aos="fade-left">
                            <div class="h-100 contact_item">
                                <img class="w-100 h-100" src="<?= $add['img'] ?>" alt="">
                            </div>
                        </div>
                        <?
                    } else { ?>

                        <div class="col-md-7 p-0 m-0"  data-aos="fade-right">
                            <div class="h-100 contact_item overflow_hidden">
                                <img class="w-100 h-100" src="<?= $add['img'] ?>" alt="">
                            </div>
                        </div>
                        <div data-aos="fade-left" class="col-md-5 contact_item_wrapper overflow_hidden"  >
                            <div class="contact_info h-100 d-flex flex-column justify-content-start overflow_hidden">
                                <div class="mb-4 mb-md-0">
                                    <div class="info_title color_white">
                                        <span><?= Yii::t('main', 'how_connect') ?></span>
                                    </div>
                                    <div class="info_text color_white">
<!--                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu elit sapien quis urna</span>-->
                                    </div>
                                </div>
                                <div class="info_block overflow_hidden">
                                    <div class="info_item d-flex align-items-center mt-4 overflow_hidden">
                                        <div class="info_icon mr-3 overflow_hidden">
                                            <img src="/frontend/web/uploads/icons/con1.svg" alt="asd">
                                        </div>
                                        <div class="info_item_content overflow_hidden">
                                            <div class="info_item_text_title color_gray mb-2">
                                                <?= Yii::t('main', 'address') ?>
                                            </div>
                                            <div class="info_item_text_text color_white">
                                                <?= $add['address_' . \Yii::$app->language] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <? if ($add['fax']) { ?>
                                        <div class="info_item d-flex align-items-center mt-3 overflow_hidden">
                                            <div class="info_icon mr-3">
                                                <img src="/frontend/web/uploads/icons/cont2.svg.svg" alt="asd">
                                            </div>
                                            <div class="info_item_content ">
                                                <div class="info_item_text_title color_gray mb-2">
                                                    <?= Yii::t('main', 'fax') ?>
                                                </div>
                                                <div class="info_item_text_text color_white">
                                                    <?= $add['fax'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                    <div class="info_item d-flex align-items-center mt-3 overflow_hidden">
                                        <div class="info_icon mr-3">
                                            <img src="/frontend/web/uploads/icons/cont3.svg" alt="asd">
                                        </div>
                                        <div class="info_item_content ">
                                            <div class="info_item_text_title color_gray mb-2">
                                                <?= Yii::t('main', 'phone') ?>
                                            </div>
                                            <div class="info_item_text_text color_white">
                                                <?= $add['phone'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <? if ($add['email']) { ?>
                                        <div class="info_item d-flex align-items-center mt-3 overflow_hidden">
                                            <div class="info_icon mr-3">
                                                <img src="/frontend/web/uploads/icons/cont4.svg" alt="asd">
                                            </div>
                                            <div class="info_item_content ">
                                                <div class="info_item_text_title color_gray mb-2">
                                                    <?= Yii::t('main', 'email') ?>
                                                </div>
                                                <div class="info_item_text_text color_white">
                                                    <?= $add['email'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                <? } ?>
            </div>


        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center py-4" data-aos="fade-up"  data-aos-duration="1000">

            <form  id="sendApp" method="post">
                <div class="d-flex flex-column text-center col-12">
                    <h3 class="section_title my-3 color_black">
                        <?= Yii::t('main', 'answers') ?>
                    </h3>
                    <p class="section_text pr-0 pr-md-5  color_black">
                        <?= Yii::t('main', 'request_text') ?>
                    </p>
                </div>

                <div class="row m-0 p-0">
                    <div class="col-md-6">
                        <input class="form-control my-3 bg_input_trans border" placeholder= "<?= Yii::t('main', 'email') ?>"
                               type="email" name="email" >
                    </div>
                    <div class="col-md-6">
                        <input class="form-control my-3 bg_input_trans border" placeholder="<?= Yii::t('main', 'phone') ?>"
                               type="phone" name="phone">
                    </div>
                    <div class="col-md-12">
                                <textarea name="text"  class="form-control  border bg_input_trans"
                                          placeholder='<?= Yii::t('main', 'textarea') ?>'
                                          name="" id="" cols="30" rows="10"></textarea>
                        <button class="w-100 btn bg_color_yel py-2 mt-4 font-weight-bolder">   <?= Yii::t('main', 'send_sms') ?>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>