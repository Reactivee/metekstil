<?php
/** @var yii\web\View $this */
/** @var \common\models\GallerySearch $dataProvider */
$this->title = "News";
$this->params['breadcrumbs'][] = $this->title;

?>


<section>
    <div class="container">

        <div class="row py-4">
            <div class="col-md-6" data-aos="fade-down"
                 data-aos-easing="easing"
                 data-aos-duration="700">
                <img class="w-100 rounded" src="<?= $news->img ?>" alt="">
            </div>
            <div class="col-md-6">
                <div class="date">
                    <span class="color_black font-weight-bold"><?= date("d-m-Y / H:i:s",$news->created_at) ?></span>
                </div>
                <div class="news_title mb-4 mt-2 rounded" data-aos="fade-down"
                     data-aos-easing="easing"
                     data-aos-duration="500">
                    <h2><?= $news['title_' . \Yii::$app->language] ?></h2>
                </div>
                <div class="news_context" data-aos="fade-down"
                     data-aos-easing="easing"
                     data-aos-duration="1000">
                    <h4><?= $news['text_' . \Yii::$app->language] ?></h4>
                </div>
            </div>
        </div>


    </div>

</section>