<?php
/** @var yii\web\View $this */
/** @var \common\models\Process $process */
$this->title = "Галерея";
$this->params['breadcrumbs'][] = $this->title;

?>


<section>
    <div class="container">
        <div class="mt-4 text-center text-md-left">
            <h2 class="section_title my-3 color_black">
                <?= $factory['title_' . \Yii::$app->language] ?>

            </h2>
            <h5>  <?= $factory['text_' . \Yii::$app->language] ?></h5>
        </div>


        <div class="tab-content mt-4" id="myTabContent">

            <div class="row">
                <?
                foreach ($process as $item) { ?>
                    <div class="col-md-4 col-6 my-2">
                        <a data-lightbox="example-set"
                           class="demo"
                           href="/frontend/web<?= $item->path ?>">
                            <img class="w-100" src="/frontend/web<?= $item->path ?>" alt="<?= $item->path ?>">
                        </a>
                    </div>
                <? } ?>
            </div>

        </div>

    </div>


</section>