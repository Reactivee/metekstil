<?php

namespace frontend\controllers;

use common\models\AddressSearch;
use common\models\Gallery;
use common\models\GallerySearch;
use common\models\Posts;
use common\models\PostsSearch;
use common\models\VideosSearch;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


/**
 * Site controller
 */
class MediaController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * About page.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModelVideos = new VideosSearch();
        $dataProviderVideos = $searchModelVideos->search($this->request->queryParams);

        $searchModel = new GallerySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $searchModel = new PostsSearch();
        $dataProviderNews = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProviderVideos' => $dataProviderVideos,
            'dataProviderNews' => $dataProviderNews,
        ]);

    }

    public function actionNews($id)
    {
        $news = Posts::findOne($id);
        if (!$news)
            throw new NotFoundHttpException();

        return $this->render('news', [
            'news' => $news,
        ]);
    }


}
