<?php

use common\models\Settings;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Html;

$category = \common\models\Category::find()
    ->where(['not', ['type' => 'main']])
    ->all();
$settings = Settings::find()->one();
?>

<!--<header>-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav ml-auto'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
//    ?>
<!--</header>-->
<header class="header_">
    <div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12  position-relative">
                    <nav class="navbar navbar-expand-md navbar-light justify-content-start justify-content-md-between d-flex  align-items-center">

                        <a class="navbar-brand p-0" href="/">
                            <img src="/uploads/logo/logomain.png" alt="logomain">
                        </a>

                        <div class="collapse d-md-flex  navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav   py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link font-weight-bolder"
                                       href="/about"> <?= Yii::t('main', 'about') ?> </a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link font-weight-bolder"
                                       href="/about/factory"><?= Yii::t('main', 'process') ?></a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link color_black dropdown-toggle font-weight-bolder"
                                       data-toggle="dropdown"
                                       href="#" role="button"
                                       aria-haspopup="true" aria-expanded="false"><?= Yii::t('main', 'catalog') ?></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="/category">Duz Boya</a>
                                        <a class="dropdown-item"
                                           href="/category/kumas">Kumas cinsi</a>
                                        <? if ($category) { ?>
                                            <? foreach ($category as $cat) {

                                                ?>
                                                <a class="dropdown-item"
                                                   href="/category/product/<?= $cat->slug ?>"><?= $cat['name_' . Yii::$app->language] ?></a>
                                            <? } ?>
                                        <? } ?>

                                    </div>
                                </li>

                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link font-weight-bolder"
                                       href="/media"><?= Yii::t('main', 'gallery') ?></a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link font-weight-bolder"
                                       href="/contact"><?= Yii::t('main', 'contact') ?></a>
                                </li>

                            </ul>
                            <div class="lang lang_mobile">
                                <div class="dropdown">
                                    <?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                                        'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_DROPDOWN,
                                        'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_SMALL
                                    ]); ?>
                                </div>
                            </div>
                        </div>


                        <div class="lang">
                            <div class="dropdown">
                                <?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                                    'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_DROPDOWN,
                                    'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_SMALL
                                ]); ?>
                            </div>
                        </div>

                    </nav>
                    <div class="navbar-light ">
                        <button class="navbar-toggler btn_burger d-none" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>