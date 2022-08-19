<?php
/** @var yii\web\View $this */
/** @var \common\models\GallerySearch $dataProvider */
$this->title = "Галерея";
$this->params['breadcrumbs'][] = Yii::t('main', 'gallery');
?>


<section>
    <div class="container">
        <div class="mt-4 text-center text-md-left">
            <!--            <span class="section_label my-5">Больше вариантов</span>-->
            <h3 class="section_title my-3 color_black">
                ZELAL TEKSTIL
            </h3>
        </div>

        <div class="media_tab_wrapper">

            <ul class="nav d-flex  text-center align-items-center" id="myTab" role="tablist">

                <li class="nav-media media_tab col-md-4  border w-100 h-100 py-2" role="presentation">
                    <a class="active text-decoration-none w-100 stretched-link media_link color_black" id="home-tab" data-toggle="tab"
                       href="#home" role="tab"
                       aria-controls="home" aria-selected="true">
                        Photo
                    </a>
                </li>
                <li class="nav-media media_tab col-md-4  border w-100 py-2" role="presentation">
                    <a class="w-100 text-decoration-none w-100 stretched-link media_link color_black" id="profile-tab"
                       data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="false">Video</a>
                </li>
                <li class="nav-media media_tab col-md-4 color_black  w-100 py-2 border" role="presentation">
                    <a class="w-100 text-decoration-none stretched-link w-100 media_link color_black " id="contact-tab"
                       data-toggle="tab" href="#contact" role="tab"
                       aria-controls="contact" aria-selected="false">Dunyada Biz</a>
                </li>
            </ul>

            <div class="tab-content mt-4" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="row">
                        <? foreach ($dataProvider->models as $item) { ?>
                            <div class="col-md-4 col-6 my-2" data-aos-delay="300" data-aos="fade-up"
                                 data-aos-easing="linear"
                                 data-aos-duration="1000">
                                <a data-lightbox="example-set"
                                   class="demo"
                                   href="/frontend/web<?= $item->img ?>">
                                    <img class="w-100" src="/frontend/web<?= $item->img ?>" alt="<?= $item->img ?>">
                                </a>
                            </div>
                        <? } ?>
                    </div>

                    <div class="ipagination">
                        <? echo \yii\widgets\LinkPager::widget([
                            'pagination' => $dataProvider->pagination,
                            'prevPageLabel' => false,
                            'nextPageLabel' => false
                        ]); ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <?
                        foreach ($dataProviderVideos->models as $item) { ?>
                            <div class="col-md-6 col-12 my-2">
                                <iframe width="100%" height="" src="<?= $item->path ?>"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        <? } ?>
                    </div>

                    <div class="ipagination">
                        <? echo \yii\widgets\LinkPager::widget([
                            'pagination' => $dataProviderVideos->pagination,
                            'prevPageLabel' => false,
                            'nextPageLabel' => false
                        ]); ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                    <div class="row">
                        <? foreach ($dataProviderNews->models as $item) { ?>
                            <? if ($item->img) { ?>
                                <div class="col-md-4 col-12 my-2  rounded " data-aos="fade-down"
                                     data-aos-easing="easing"
                                     data-aos-duration="700">

                                    <a class="demo post_wrap text-decoration-none rounded color_black bg-light  d-flex flex-column align-items-stretch"
                                       href="<?= \yii\helpers\Url::to(['news', 'id' => $item->id]) ?>">
                                        <div class="post_img overflow_hidden">
                                            <img class="w-100 rounded h-100" src="<?= $item->img ?>"
                                                 alt="<?= $item->img ?>">
                                        </div>
                                        <div class="post_title px-3 font-weight-bold">
                                            <h4 class="mt-2"><?= $item['title_' . \Yii::$app->language] ?></h4>
                                        </div>
                                        <div class="post_text px-3">
                                            <p class="mt-2"><?= $item['text_' . \Yii::$app->language] ?></p>
                                        </div>
                                    </a>

                                </div>
                            <? } ?>
                        <? } ?>
                    </div>

                    <div class="ipagination">
                        <? echo \yii\widgets\LinkPager::widget([
                            'pagination' => $dataProviderNews->pagination,
                            'prevPageLabel' => false,
                            'nextPageLabel' => false
                        ]); ?>
                    </div>


                </div>
            </div>

        </div>

    </div>

</section>