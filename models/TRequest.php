<?php
/**
 * @Author: Martin Štěpánek
 * @Date: 31/03/2019 05:43
 */

namespace app\models;


use yii\web\Request;

trait TRequest
{

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return \Yii::$app->request;
    }

}