<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
/** @var \common\models\Process $process */
$this->title = "О Фабрике";
$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

?>
<section id="about" class="about ">

    <div class="container">
        <!--        <div class="category__banner_breadcrumb d-flex color_black pt-5 mb-4 ">Главная / О Фабрике</div>-->
        <div class="text-center text-md-left mt-4 mt-md-0">
            <!--            <span class="section_label ">Процесс</span>-->

            <h3 class="section_title my-3 color_black text-uppercase">
                <?= Yii::t('main', 'process_factory') ?>
            </h3>

        </div>
        <? if ($process) { ?>

            <div class="row">

                <div class="col-md-4 h-100" data-aos="fade-up" data-aos-duration="1200">

                    <div class="factory_grids position-relative">

                        <div class="f_grids_poster">
                            <a class="demo" href="<?= Url::to(['gallery', 'id' => $process[0]->id], true) ?>">
                                <img class="w-100" src="<?= $process[0]->img ?>">
                            </a>

                        </div>
                        <div class="f_grids_text">
                            <div class="title pb-2">
                                <h5 class="color_white font-weight-bold"><?= $process[0]['title_' . \Yii::$app->language] ?></h5>
                            </div>
                            <div class="content">
                                <p class="color_white"> <?= $process[0]['text_' . \Yii::$app->language] ?> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 ">
                    <div class="row">
                        <? foreach ($process as $key => $item) {
                            if ($key > 0 && $key < 5) { ?>
                                <div class="col-md-6 mb-0 mb-md-4" data-aos="fade-up" data-aos-duration="800">
                                    <div class="factory_grids position-relative">
                                        <div class="f_grids_poster">
                                            <a class="demo"
                                               href="<?= Url::to(['gallery', 'id' => $item->id], true) ?>">
                                                <img class="w-100" src="<?= $item->img ?>" alt="<?= $item->img ?>">
                                            </a>

                                        </div>
                                        <div class="f_grids_text">
                                            <div class="title pb-2">
                                                <h5 class="color_white font-weight-bold"><?= $item['title_' . \Yii::$app->language] ?></h5>
                                            </div>
                                            <div class="content">
                                                <p class="color_white"><?= $item['text_' . \Yii::$app->language] ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?
                            }
                        } ?>
                    </div>

                </div>
            </div>
            <div class="row my-0 my-md-2 my-md-4">

                <? foreach ($process as $key => $item) {
                    if ($key > 4 && $key < 8) { ?>
                        <div class="col-md-4">
                            <div class="factory_grids position-relative">
                                <div class="f_grids_poster">
                                    <a class="demo"
                                       href="<?= Url::to(['gallery', 'id' => $item->id], true) ?>">
                                        <img class="w-100" src="<?= $item->img ?>" alt="<?= $item->img ?>">
                                    </a>

                                </div>
                                <div class="f_grids_text">
                                    <div class="title pb-2">
                                        <h5 class="color_white font-weight-bold"><?= $item['title_' . \Yii::$app->language] ?></h5>
                                    </div>
                                    <div class="content">
                                        <p class="color_white"><?= $item['text_' . \Yii::$app->language] ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?
                    }
                } ?>

            </div>

            <div class="row my-0 my-md-3 mt-md-4">
                <? foreach ($process as $key => $item) {
                    if ($key > 7) { ?>

                        <div class="col-md-6">
                            <div class="factory_grids position-relative">
                                <div class="f_grids_poster">
                                    <a class="demo"
                                       href="<?= Url::to(['gallery', 'id' => $item->id], true) ?>">
                                        <img class="w-100" src="<?= $item->img ?>" alt="<?= $item->img ?>">
                                    </a>

                                </div>
                                <div class="f_grids_text">
                                    <div class="title pb-2">
                                        <h5 class="color_white font-weight-bold"><?= $item['title_' . \Yii::$app->language] ?></h5>
                                    </div>
                                    <div class="content">
                                        <p class="color_white"><?= $item['text_' . \Yii::$app->language] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?
                    }
                } ?>


            </div>
        <? } ?>
    </div>
</section>



