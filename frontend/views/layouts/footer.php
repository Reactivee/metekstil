<?php

use common\models\Address;
use common\models\Settings;
use yii\helpers\Html;

$address = Address::find()->one();
$settings = Settings::find()->one();

?>
<footer class="py-3 ">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 pt-2">

                <div class="row">
                    <div class="col-md-6">
                        <div class="logo_footer text-center text-md-left">
                            <img class="w-100" src="<?= $settings->logo?>" alt="logofooter">
                        </div>

                        <div class="footer_socials d-flex align-items-center justify-content-between mt-3">
                            <a href="<?= $settings->facebook?>" class="socials_item">
                                <img class="w-100" src="/frontend/web/uploads/social/fb.svg" alt="social">
                            </a>
                            <a href="<?= $settings->instagram?>" class="socials_item">
                                <img class="w-100" src="/frontend/web/uploads/social/inst.svg" alt="social">
                            </a>
                            <a href="<?= $settings->telegram?>" class="socials_item">
                                <img class="w-100" src="/frontend/web/uploads/social/tg.svg" alt="social">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="text_footer text-center text-md-left f-14">
                            <?= $settings->meta?>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-4 pt-4">

                <div class="row ml-0 ml-md-2">
                    <div class="col-md-6">
                        <div class="footer_nav">
                            <ul class="list-unstyled text-uppercase">
                                <li><a class="color_black font-weight-bold text-decoration-none" href="#"> <?= Yii::t('main','about') ?></a></li>
                                <li class="my-3">
                                    <a class="color_black font-weight-bold text-decoration-none" href="#"><?= Yii::t('main','process') ?></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer_nav">
                            <ul class="list-unstyled text-uppercase">
                                <li><a class="color_black font-weight-bold text-decoration-none" href="#"><?= Yii::t('main','gallery') ?></a></li>
                                <li class="my-3"><a class="color_black font-weight-bold text-decoration-none" href="#"><?= Yii::t('main','contact') ?></a>


                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-4 pt-2">

                <div class="row">
                    <div class="col-md-6">
                        <div class="footer__contacts">
                            <div class="footer__contact_title font-weight-bold mb-3 text-uppercase">
                                <?= Yii::t('main', 'address') ?>
                            </div>
                            <div class="footer__contact_text">
                                <?= $address['address_' . Yii::$app->language] ?>
                            </div>
                        </div>

                        <div class="footer__contacts">
                            <div class="footer__contact_title font-weight-bold text-uppercase">
                                <?= Yii::t('main', 'fax') ?>
                            </div>
                            <div class="footer__contact_text">
                                <?= $address['fax'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer__contacts">
                            <div class="footer__contact_title font-weight-bold text-uppercase">
                                <?= Yii::t('main', 'phone') ?>
                            </div>
                            <div class="footer__contact_text">
                                <?= $address['phone']; ?>
                            </div>
                        </div>
                        <div class="footer__contacts">
                            <div class="footer__contact_title font-weight-bold text-uppercase">
                                <?= Yii::t('main', 'email') ?>
                            </div>
                            <div class="footer__contact_text">
                                <?= $address['email']; ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</footer>