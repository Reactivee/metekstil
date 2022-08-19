<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\models\Settings;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;

$settings = Settings::find()->one();
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= $settings->site_name ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="<?= $settings->logo ?>" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
              integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
              crossorigin="anonymous" referrerpolicy="no-referrer">
        <script charset="UTF-8" src="//web.webpushs.com/js/push/55f4ef2ce96446fa515760b820ba2ddb_0.js" async></script>
        <script src="//code.jivo.ru/widget/h8Eam2p9Zv" async></script>

    </head>
    <body class="">
    <?php $this->beginBody() ?>

    <?= $this->render('header') ?>

    <div role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => $this->params['breadcrumbs'],
            ]);
            ?>
        </div>
        <div class="">

            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="/frontend/web/uploads/rarrow.webp"
                                                                          alt="arrow"></button>
    </div>

    <?= $this->render('footer') ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
