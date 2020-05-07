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
                'class' => \genxoft\swagger\ViewAction::class,
                'apiJsonUrl' => Url::to(['/site/json-schema'], true),
            ],
            'json-schema' => [
                'class' => \genxoft\swagger\JsonAction::class,
                'dirs' => [
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
