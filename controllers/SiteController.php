<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
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
            'docs' => [
                'class' => \yii2mod\swagger\SwaggerUIRenderer::class,
                'restUrl' => Url::to(['site/json-schema']),
            ],
            'json-schema' => [
                'class' => \yii2mod\swagger\OpenAPIRenderer::class,
                // Тhe list of directories that contains the swagger annotations.
                'cacheDuration' => 0,
                'scanDir' => [
                    Yii::getAlias('@app/api/definitions'),
                    Yii::getAlias('@app/api/v1/controllers'),
                    Yii::getAlias('@app/api/v1/definitions'),
                    Yii::getAlias('@app/api/v1/resources'),
                    Yii::getAlias('@api-utils/definitions'),
                ],
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
