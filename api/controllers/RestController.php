<?php

namespace app\api\controllers;

/**
 * Class RestController
 * @package app\api\controllers
 */
class RestController extends \damidevelopment\apiutils\controllers\RestController
{

    /**
     * @var array the configuration for creating authenticator
     */
    public $authenticator = [
        'class' => \yii\filters\auth\HttpHeaderAuth::class,
        'header' => 'Access-Token'
    ];

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = $this->authenticator;
        return $behaviors;
    }

}